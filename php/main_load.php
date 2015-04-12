<?php  
	include("champion_data.php");
	
	$DATA = $CHAMPION_INFO['data'];
	$MAIN_CODE = "";
	foreach ($CHAMPION_API_KEY_NAMES as $champion)
	{
		$MAIN_CODE = $MAIN_CODE . "<a href=\"#\"><img src=\"http://ddragon.leagueoflegends.com/cdn/5.6.1/img/champion/" .
			$DATA[$champion]['key'] .
			".png\" width=\"60\" height=\"60\"></a>";
	}
	echo $MAIN_CODE;
?>