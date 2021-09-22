<!DOCTYPE HTML>
<html lang="eng">
	<?php
		require("json_util.php");
		function modifyPerson(){
			$file = readJSON("class.json");
			$index = $_GET['index'];
			if($index <= count($file) && $index >= 0){
				$file[$index]["name"] = $_GET['name'];
				saveJSON($file, "class.json");
				return "The name of the User at index ".$_GET['index']." has been changed to ".$_GET['name'].".";
			} 
			else { return "ERROR: Please modify a valid user!"; }
		}
	?>
	<head>
		<title>ASE 230 - User Deletion</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="b" style="font-family: Arial, sans-serif; height: 100%;">
		
		<!--Header Bar Div-->
		<div class="" style="padding: 10px; background-color: #4bcfed; margin-bottom: 5px; height: 60px;"></div>

		<!--Name Title Bar Div-->
		<div class="" style="background-color: #353566; margin-bottom; padding-bottom: 15px;">
			<div class="textlb" style="margin-left: 15%; margin-right: 15%; padding-left: 10px;"><p style="font-size: 50px; margin-left: -10px; height: 503px;"><?php echo modifyPerson();?></p></div>
		</div>
		
		<!--Footer Bar Div-->
		<div class="" style="position: absolute; left: 0; right: 0; bottom: 0; padding: 10px; background-color: #4bcfed; margin-top: 5px; height: 20px;"><h1 style=""></h1></div>
	</body>
</html>