<?php

/*
Plugin Name: Moj drugi plugin
Plugin URI: http://letnja.org/plugins/drugi
Description: Vezbanje na Random User API-u
Version: 0.1
Author: LevelUp
Author URI: http://levelup.rs
*/

function api_funkc()
{
	$json_response = file_get_contents("https://randomuser.me/api/");
	
	$plain_response = json_decode($json_response);
	
	echo "Gender: " . $plain_response->results[0]->gender;
	echo "<br>";
	echo "Title: " . $plain_response->results[0]->name->title;
	echo "<br>";
	echo "First name: " . $plain_response->results[0]->name->first;
	echo "<br>";
	echo "Last name: " . $plain_response->results[0]->name->last;
	echo "<br>";
	echo "City: " . $plain_response->results[0]->location->city;
	echo "<br>";
}

function drugi_plugin()
{
	api_funkc();
}

add_shortcode("api_test", "drugi_plugin");

?>