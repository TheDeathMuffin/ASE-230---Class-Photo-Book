<!DOCTYPE HTML>
<html lang="eng">
	<?php
		require("json_util.php");
		function createPerson($index){
			//function is used to read the class.json file and save the information into an associative array. 
			$file = readJSON("class.json");
			//Basic if conditional used to check if the index provided is a valid index. 
			if($index <= count($file) && $index >= 0){
				//Duplicates information from the specified index and adds that duplicate info to the end of the array.
				$file[] = $file[$index];
				//function is used to save the edited array information to class.json
				saveJSON($file, "class.json");
				return "User at index 0 has been duplicated."; } 
			else { return "ERROR: Please enter a valid index!"; }
		}
	?>
	<head>
		<title>ASE 230 - User Creation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="b" style="font-family: Arial, sans-serif; height: 100%;">
		
		<!--Header Bar Div-->
		<div class="" style="padding: 10px; background-color: #4bcfed; margin-bottom: 5px; height: 60px;"></div>

		<!--Name Title Bar Div-->
		<div class="" style="background-color: #353566; margin-bottom; padding-bottom: 15px;">
			<div class="textlb" style="margin-left: 15%; margin-right: 15%; padding-left: 10px;"><p style="font-size: 50px; margin-left: -10px; height: 503px;"><?php echo createPerson(0);?></p></div>
		</div>
		
		<div class="rounded dg" style="text-align: center; margin-left: 40%; margin-right: 40%; padding: 10px; width: 160px;">
			<a href="index.php" class="textlb" style="font-size: 130%;">Back to Home</a>
		</div>
		<!--Footer Bar Div-->
		<div class="" style="position: absolute; left: 0; right: 0; bottom: 0; padding: 10px; background-color: #4bcfed; margin-top: 5px; height: 20px;"><h1 style=""></h1></div>
	</body>
</html>