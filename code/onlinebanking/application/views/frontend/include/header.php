<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>ALMT</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url('template'); ?>/images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url('template'); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="<?php echo base_url('template'); ?>/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="<?php echo base_url('template'); ?>/css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="<?php echo base_url('template'); ?>/css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="<?php echo base_url('template'); ?>/css/custom.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<style>
		.header{
		    background-color: rgb(13, 0, 26);
		}
		
		
		.main-navigation .navbar-default .navbar-nav > li > a{
			padding-top: 8px !important;
			font-size: 15px;
			font-weight: 400;
		}
		
		.site-name {
			    font-size: 15px;
		}
		.fixed-header-on .site-name {
			font-size: 15px;
		}
		</style>
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<!-- <a href="#banner"><img id="logo" src="<?php echo base_url('template'); ?>/images/logo.png" alt="Worthy"></a> -->
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="<?php echo base_url(); ?>">ALMT</a></div>
								<div class="site-slogan"></div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
											<?php if($this->session->userdata('UserId') == "" && $this->session->userdata('MemberId') == ""){ ?>
												<li class=""><a href="<?php echo base_url(); ?>">Home</a></li>
												<li><a href="<?php echo base_url('Welcome/About'); ?>">About</a></li>
												<li><a href="<?php echo base_url('Welcome/Services'); ?>">Services</a></li>
												<li><a href="<?php echo base_url('Welcome/Login'); ?>">Farmer Login</a></li>
												<li><a href="<?php echo base_url('Welcome/Bank_login'); ?>">Bank Login</a></li>
												<li><a href="<?php echo base_url('Welcome/Contact'); ?>">Contact Us</a></li>
											<?php } else if($this->session->userdata('UserId') != ''){ ?>


												<li class=""><a href="<?php echo base_url(); ?>">Home</a></li>
												<li><a href="<?php echo base_url('Welcome/About'); ?>">About</a></li>
												<li><a href="<?php echo base_url('Welcome/Services'); ?>">Services</a></li>
												<li><a href="<?php echo base_url('Welcome/users_account'); ?>">My Account</a></li>
												<li><a href="<?php echo base_url('Welcome/LogOut'); ?>">Log Out</a></li>
												<li><a href="<?php echo base_url('Welcome/Contact'); ?>">Contact Us</a></li>


											<?php } else if($this->session->userdata('MemberId') != ''){ ?>
											
												<li class=""><a href="<?php echo base_url(); ?>">Home</a></li>
												<li><a href="<?php echo base_url('Welcome/About'); ?>">About</a></li>
												<li><a href="<?php echo base_url('Welcome/Services'); ?>">Services</a></li>
												<li><a href="<?php echo base_url('Welcome/bank_account'); ?>">My Account</a></li>
												<li><a href="<?php echo base_url('Welcome/LogOut'); ?>">Log Out</a></li>
												<li><a href="<?php echo base_url('Welcome/Contact'); ?>">Contact Us</a></li>
											
											<?php }else{ ?> 
												<li class=""><a href="<?php echo base_url(); ?>">Home</a></li>
												<li><a href="<?php echo base_url('Welcome/About'); ?>">About</a></li>
												<li><a href="<?php echo base_url('Welcome/Services'); ?>">Services</a></li>
												<li><a href="<?php echo base_url('Welcome/Login'); ?>">Farmer Login</a></li>
												<li><a href="<?php echo base_url('Welcome/Bank_login'); ?>">Bank Login</a></li>
												<li><a href="<?php echo base_url('Welcome/Contact'); ?>">Contact Us</a></li>
											
											<?php } ?> 
											
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->