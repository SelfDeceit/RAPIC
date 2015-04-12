<?php
	include("static_var.php");
	
	//Get the first game ID in teh file.
	$first_ID = trim(fgets(fopen("ID.txt", 'r')), "");
	//Remove all white spaces
	$first_ID = preg_replace('/\s+/', '', $first_ID);
	
	//Remove the game ID from the file
	$file_lines = file('ID.txt'); 
	
	//If more game IDs are available
	if (sizeof($file_lines) > 0)
	{
		//Remove the first line in the IDs, since it's been used.
		$file_lines[0] = ""; 
		$fp = fopen('ID.txt', 'w'); 
		fwrite($fp, implode($file_lines)); 
		
		$file = "data.txt";
		// Open the file to get existing content
		$current_file_data = file_get_contents($file);
		
		//Add the new data
		$new_data = file_get_contents("https://na.api.pvp.net/api/lol/na/v2.2/match/" . $first_ID . "?api_key=" . $API_KEY);
	echo $new_data;
		$current_file_data .= "\n" . $new_data;
		// Write the contents back to the file
		file_put_contents($file, $current_file_data);
	}
?>