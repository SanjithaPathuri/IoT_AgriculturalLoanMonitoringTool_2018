/*   Arduino IOT - Temperature (oC), Humidity (%) and Soil moisture on the web
  *Using the DHT-11 sensor to read temperature and humidity values
  *Send these values to www.thingSpeak.com with the ESP8266 serial Wifi module
*/

//Libraires
#include <SoftwareSerial.h>
#include <DHT.h>

/*------------------------DHT SENSOR------------------------*/
#define DHTPIN 2        // DHT data pin connected to Arduino pin 2
#define DHTTYPE DHT11     // DHT 11
DHT dht(DHTPIN, DHTTYPE); // Initialize the DHT sensor
/*----------------------------------------------------------*/


/*------------------------SOIL MOISTURE SENSOR------------------------*/
int soilmois_pin = A1;
/*----------------------------------------------------------*/

/*-----------------ESP8266 Serial WiFi Module---------------*/
#define SSID "Le2"     // "SSID-WiFiname" 
#define PASS "sanjitha@6297"       // "password"
#define IP "184.106.153.149"// thingspeak.com ip
String msg = "GET /update?key=AB5A8PSZ07MJOIQ1"; //change it with your key...
/*-----------------------------------------------------------*/

//Variables
float temp;
int hum;
String tempC;
int sm;
int error;
void setup()
{
  Serial.begin(115200); //or use default 115200.
  Serial.println("AT+RST");
 // Serial.println("AT");
  delay(6000);
  if(Serial.find("OK")){
    Serial.println("-----Trying to connect WIFI-----");
    connectWiFi();
  }
  else
   Serial.println("-----Not connecting to WIFI-----");
}

void loop(){
  //Read temperature and humidity values from DHT sensor:
  start: //label 
  error=0;
  temp = dht.readTemperature();
  hum = dht.readHumidity();
  char buffer[10];
  // there is a useful c function called dtostrf() which will convert a float to a char array 
  //so it can then be printed easily.  The format is: dtostrf(floatvar, StringLengthIncDecimalPoint, numVarsAfterDecimal, charbuf);
  tempC = dtostrf(temp, 4, 1, buffer); 
  
  //Read soil moisture value from SOIL MOISTURE sensor:
   sm = analogRead(soilmois_pin);
   // Check if any reads failed and exit early (to try again).
   if (isnan(sm)){
    Serial.println("----Failed to read from Soil moisture sensor!----");
   }
   //sm = map(sm,550,0,0,100);

  //Update Sensor data to THINGSPEAK
  //Serial.println("----Sending data to Thingspeak----");
  updateTemp();
  //Resend if transmission is not completed 
  if (error==1){
    goto start; //go to label "start"
  }
  delay(60000); //Update every 1 minute
}

void updateTemp(){
  String cmd = "AT+CIPSTART=\"TCP\",\"";
  cmd += IP;
  cmd += "\",80";
  Serial.println(cmd);
  delay(2000);
  if(Serial.find("Error")){
    Serial.println("Error");
    return;
  }
  cmd = msg ;
  cmd += "&field1=";    //field 1 for temperature
  cmd += tempC;
  cmd += "&field2=";  //field 2 for humidity
  cmd += String(hum);
  cmd += "&field3=";  //field 3 for soil moisture
  cmd += String(sm);
  cmd += "\r\n";
  Serial.print("AT+CIPSEND=");
  Serial.println(cmd.length());
  if(Serial.find(">")){
    Serial.println(cmd);
    Serial.println();
  }
  else{
    Serial.println("AT+CIPCLOSE");
    Serial.println();
    //Resend...
    error=1;
  }
}

boolean connectWiFi(){
  Serial.println("AT+CWMODE=1");
  delay(2000);
  String cmd="AT+CWJAP=\"";
  cmd+=SSID;
  cmd+="\",\"";
  cmd+=PASS;
  cmd+="\"";
  Serial.println(cmd);
  Serial.println("--------WIFI connected--------");
  Serial.println();
  Serial.println("----Sending data to Thingspeak----");
  delay(5000);
  if(Serial.find("OK")){
    return true;
  }else{
    return false;
  }
}
