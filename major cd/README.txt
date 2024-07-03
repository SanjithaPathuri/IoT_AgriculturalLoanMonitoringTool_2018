*This is the Readme file for the project AGRICULTURAL LOAN MONITORING TOOL*

----INTRODUCTION----
In this project, a Loan monitoring tool is developed by applying wireless sensor network (WSN) using Arduino Software,XAMPP,Bootstrap which is useful for both farmers and Banks.

----REQUIREMENTS----
1.Software
    Arduino IDE
    XAMPP
2.Hardware
 	Arduino board
	DHT11 sensor
	Soil moisture sensor
	WIFI module
    	Bread board
	Jumper Wires
	USB cable to supply power to arduino

----INSTALLATION----
First download and install the Arduino for Mac, Linux or Windows from the official website "https://www.arduino.cc/en/Main/Software".Windows users also need to install a driver.
Then install XAMPP  for Windows, Linux, and OS X from the official website "https://www.apachefriends.org/download.html"

----CONFIGURATION----
Step 1: Open the Arduino IDE and go to tools ,From the tools set the board of arduino to Arduino UNO.
Step 2: Now open the tools and set port to COM3 or COM4 so that the arduino UNO gets connencted.
Step 3: Include all the libraries required such as SoftwareSerial,DHT11,ThingSpeak

----CONNECTIONS----
Make the connections (of all the sensors,WIFI module,Arduino)as per the circuit diagram

----THINGSPEAK----
Step 1:Create a ThingSpeak account and log in to the account.
Step 2:Create a channel with 3 fields 

----ARDUINO CODING----
Step 1:Open the sketch File and Copy the arduino source code(Change the thingspeak and Wifi credentials as needed in the code) .
Step 2:Click on Verify which is at the top left corner ,it verifies the code and checks for the errors.Status and errors in the code are shown at the bottom in the text console.
Step 3:Once the verify button is clicked the text console shows the status with progress of compiling.
Step 4:Once the compiling is done without any errors then Done Compiling is shown in the status bar with the number of bytes of dynamic memory used for the global variables.
Step 5:Dump the code into the Arduino UNO through the cable that is connected to the hardware setup so that is acts as the programming instructions to receiving and detecting the signals.

*Once the power is supplied to the circuit the data gets updated in the thingspeak channel and results are updated in the webapp*

----WEB APPLICATION CODING----
Step 6:In Htdocs of XAMPP Folder in C Drive - Copy the folder named onlinebanking
Step 7:In the Mysql database "http://localhost/phpmyadmin/" of XAMPP import the file "onlinebanking.sql"
Step 8:Open your browser and enter the URL "http://localhost/onlinebanking/" to open the WEB APPLICATION

*The complete Agricultural loan monitoring tool is now ready to work*  