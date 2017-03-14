<!DOCTYPE html> 
<html> 
	<head> 
	<title><?php echo formatTitle($title)?></title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 

	<link rel="stylesheet" href="assets/css/toursim.css" />
	<link rel="stylesheet" href="assets/css/jquery.mobile.icons.min.css" />
	<link rel='stylesheet' href='assets/css/jquery.mobile.structure-1.4.5.css' />
	<link rel='stylesheet' href='assets/css/datetimepicker.css' />
	<link rel='stylesheet' href='assets/css/swipebox.min.css' />
	<link rel="stylesheet" href="https://rawgithub.com/arschmitz/jquery-mobile-datepicker-wrapper/master/jquery.mobile.datepicker.css" />
	<link rel="stylesheet" href="assets/css/styles.css" />
	<script src='assets/js/jquery.min.js'></script>
	<script src='assets/js/jquery.mobile-1.4.5.min.js'></script>

	<!-- <script src='assets/js/jquery.datetimepicker.full.min.js'></script> -->
	<script src='assets/js/jquery.swipebox.min.js'></script>
	<script src='assets/js/scripts.js'></script>
	<script src="https://rawgithub.com/jquery/jquery-ui/1-10-stable/ui/jquery.ui.datepicker.js"></script>
	<script src="https://rawgithub.com/arschmitz/jquery-mobile-datepicker-wrapper/master/jquery.mobile.datepicker.js"></script>
</head> 
<body> 

<div id='main' data-role='page' data-theme='a'>

	<div data-role="header" data-theme="a">	   
	<a href="./" data-icon="home" data-iconpos="notext" data-transition="fade">Home</a>
		<h1><?php echo $title?></h1>
	</div>

	<div data-role="content">