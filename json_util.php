<?php
#readJSON effectively reads a json file and formats the information into an associative array. 
function readJSON($json){
	$file = json_decode(file_get_contents($json), true);
	return $file;
}
#saveJSON effectively stores the information from an array into a json file. 
function saveJSON($arrayToSave, $json){
	file_put_contents($json,json_encode($arrayToSave, JSON_PRETTY_PRINT));
}
?>