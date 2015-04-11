<?php
	include("static_var.php");
	//Formats all champion information into a multidimensional array
	$CHAMPION_INFO = json_decode(file_get_contents('https://na.api.pvp.net/api/lol/static-data/na/v1.2/champion?champData=&api_key=' . $API_KEY), true);
	
	$CHAMPION_API_KEY_NAMES = array();
	//Adds each champion to the array
	foreach ($CHAMPION_INFO['data'] as $key => $val)
	{
		array_push($CHAMPION_API_KEY_NAMES, $key); 
	}
	sort($CHAMPION_API_KEY_NAMES); //Sort the array alphabetically
?>

