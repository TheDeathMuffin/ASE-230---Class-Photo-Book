<!DOCTYPE HTML>
<html lang="eng" style="zoom: 100%;">
	<?php 
		require('data.php');
		$i = $_GET["Index"];
		$message = 'User successfully deleted!';

	
	
	?>
	<head>
		<title>ASE 230 - User Deletion</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>

<!-- <div class=""></div> -->
	<body style="font-family: Arial, sans-serif; background-color: #9c9c9c;">
		<!--Entire Page Div-->	
				<!--Header Bar Div-->
				<div class="" style="padding: 10px; background-color: #4bcfed; margin-bottom: 5px; height: 60px;"></div>

			<div class="" style="background-color: #353566; margin-bottom; padding-bottom: 15px;">
				<div class="" style="margin-left: 15%; margin-right: 15%;">
					<!--Name Title Bar Div-->
					<div class="" style="padding-left: 10px;"><p style="font-size: 50px; color: #4bcfed; margin-left: -10px; height: 503px;"><?=$message?></p></div>

				</div>
			</div>
			<!--Footer Bar Div-->
			<div class="" style="position: absolute; left: 0; right: 0; bottom: 0; padding: 10px; background-color: #4bcfed; margin-top: 5px; height: 20px;"><h1 style=""></h1></div>
	</body>
</html>