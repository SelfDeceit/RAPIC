<?php
	include("static_var.php");
	
	$CHAMPION_INFO = json_decode(file_get_contents('https://na.api.pvp.net/api/lol/static-data/na/v1.2/champion?champData=&api_key=' . $API_KEY), true);
	
	foreach ($CHAMPION_INFO['data'] as $champion)
	{
		echo $champion['id'] . "</br>";
	}
	
?>

