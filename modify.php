<!DOCTYPE html>
<?php
require("json_util.php");
function modifyPerson(){
	$file = readJSON("class.json");
	$index = $_GET['index'];
	if($index <= count($file) && $index >= 0){
		$file[$index]["name"] = $_GET['name'];
		saveJSON($file, "class.json");
		return "User's name has been changed to ".$_GET['name'];
	} else {
		return "Please modify a valid user";
	}
}
?>
	<head>
	</head>
	<body>
		<h1><?php echo modifyPerson();?></h1>
	</body>
</html>