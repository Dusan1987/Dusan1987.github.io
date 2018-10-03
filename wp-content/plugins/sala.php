	




<?php

/*
Plugin Name: sala
Plugin URI: http://levelup.rs/widget
Description: Jokes
Version: 0.05
Author: Dusan
Author URI: http://dusan.com
*/

function api_funkcijaa()
{
	$json_response = file_get_contents("http://api.icndb.com/jokes/random");
	
	$plain_response = json_decode($json_response);
	
	echo "Uspesnost: " . $plain_response->type;
	echo "<br>";
	echo "Id vica: " . $plain_response->value->id;
	echo "<br>";
	echo "Vic: " . $plain_response->value->joke;
	
	
}

function cetvrti_plugin()
{
	api_funkcijaa();
}

add_shortcode("api_test5", "cetvrti_plugin");

?>