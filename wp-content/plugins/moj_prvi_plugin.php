<?php

/*

Plugin Name: Moj prvi plugin
Plugin URI: http://letnja.org/plugins/prvi
Description: Vezbanje na Wordpressu
Version: 0.1
Author: LevelUp
Author URI: http://levelup.rs

*/

function prikazi()
{
	echo "<form action='' method='POST'>";
		echo "<input type='text' name='broj1' placeholder='Broj 1'/><br>";
		echo "<input type='text' name='broj2' placeholder='Broj 2'/>";
		echo "<input type='submit' name='operation' value='Saberi'/>";
		echo "<input type='submit' name='operation' value='Oduzmi'/>";
		echo "<input type='submit' name='operation' value='Pomnozi'/>";
		echo "<input type='submit' name='operation' value='Podeli'/>";
	echo "</form>";
}

function funkcionalnost()
{
	if( isset( $_POST["operation"] ) )
	{
		$a = $_POST["broj1"];
		$b = $_POST["broj2"];
		
		switch( $_POST["operation"] )
		{
			case "Saberi":
				$rez = $a + $b;
				break;
			case "Oduzmi":
				$rez = $a - $b;
				break;
			case "Pomnozi":
				$rez = $a * $b;
				break;
			case "Podeli":
				$rez = $a / $b;
				break;
			default:
				echo $rez = "greska";
		}
		
		echo "Rezultat operacije je: $rez.<br>";
	}
}

function plugin()
{
	prikazi();
	funkcionalnost();
}

add_shortcode("random_user", "plugin");

?>