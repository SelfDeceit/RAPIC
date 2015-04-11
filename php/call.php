<?php
	$API_KEY = '761c2a7a-48f3-49f7-8d5f-00de8e03f72e';

	//This converts the time properly because my machine time is messed up
	//Also to correct 5 minute intervals :D
	$time = round ((time() - 25500) / 300) * 300;

	$game_ids = file_get_contents('https://na.api.pvp.net/api/lol/na/v4.1/game/ids?beginDate=' . $time . '&api_key=' . $API_KEY);
	
	$game_ids_arr = json_decode($game_ids);

	foreach ($game_ids_arr as $game_id)
	{
		$file = 'game_ids.txt';
		
		// Open the file to get existing content
		$current = file_get_contents($file);
		
		// Append a new person to the file
		$current .= "\n" . $game_id;
		
		// Write the contents back to the file
		file_put_contents($file, $current);
	}
?>