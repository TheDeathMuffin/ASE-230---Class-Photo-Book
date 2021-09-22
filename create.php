<!DOCTYPE html>
<?php
require("json_util.php");
function createPerson($index){
	$file = readJSON("class.json");
	if($index <= count($file) && $index >= 0){
		$file[] = $file[$index];
		saveJSON($file, "class.json");
		return "Person at specified index has been duplicated";
	} else {
		return "Please enter a valid index";
	}
}
?>
	<head>
	</head>
	<body>
		<h1><?php echo createPerson(0);?></h1>
	</body>
</html>