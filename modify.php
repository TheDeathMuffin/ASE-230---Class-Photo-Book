<!DOCTYPE HTML>
<html lang="eng">
	<?php
		require("json_util.php");
		function modifyPerson(){
			//stores JSON file information into an associative array. 
			$file = readJSON("class.json");
			//grabs the index of the $masterArray from the query string in the URL so that
			//the function knows which element of the array is being edited. 
			$index = $_GET['index'];
			//conditional is used to check if the provided index is valid.
			if($index <= count($file) && $index >= 0){
				//changes the name of the specified person to the name provided in the URL's query string
				$file[$index]["name"] = $_GET['name'];
				//Function is used to save the new array information to the class.json file
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
		
		<div class="rounded dg" style="text-align: center; margin-left: 40%; margin-right: 40%; padding: 10px; width: 160px;">
			<a href="index.php" class="textlb" style="font-size: 130%;">Back to Home</a>
		</div>
		<!--Footer Bar Div-->
		<div class="" style="position: absolute; left: 0; right: 0; bottom: 0; padding: 10px; background-color: #4bcfed; margin-top: 5px; height: 20px;"><h1 style=""></h1></div>
	</body>
</html>