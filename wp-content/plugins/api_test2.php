<?php

/*
Plugin Name: widzet2
Plugin URI: http://levelup.rs/widget
Description: Widget-vreme
Version: 0.05
Author: Dusan
Author URI: http://dusan.com
*/

function api_funkcija()
{
	$json_response = file_get_contents("http://samples.openweathermap.org/data/2.5/weather?zip=94040,us&appid=b1b15e88fa797225412429c1c50c122a1");
	
	$plain_response = json_decode($json_response);
	
	echo "Geografska sirina: " . $plain_response->coord->lat;
	echo "<br>";
	echo "Geografska duzina: " . $plain_response->coord->lon;
	echo "<br>";
	echo "Zemlja: " . $plain_response->sys->country;
	echo "<br>";
	echo "Temperatura: " . $plain_response->main->temp;
	echo "<br>";
	echo "Opis: " . $plain_response->weather[0]->description;
	echo "<br>";
}

function treci_plugin()
{
	api_funkcija();
}

add_shortcode("api_test2", "treci_plugin");

?>