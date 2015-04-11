<?php  
	include("champion_data.php");
	
	$DATA = $CHAMPION_INFO['data'];
	
	foreach ($CHAMPION_API_KEY_NAMES as $champion)
	{
	//Bard doesn't work so gotta find an image for him later. Zed for now.
		if ($champion == "Bard")
		{
			$champion = "Zed";
		}
		echo "<a href=\"#\"><img src=\"http://ddragon.leagueoflegends.com/cdn/5.2.1/img/champion/" .
			$DATA[$champion]['key'] .
			".png\" class=\"img-thumbnail\"
			width=\"65\" height=\"65\"></a>";
	}
?>