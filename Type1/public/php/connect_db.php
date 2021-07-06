<?php

# Connects to phpMyAdmin with the developer login details
	$link = mysqli_connect('localhost','root','','type1.');

	if (!$link)
	{
		die('Could not connect to MySQL: ');
	}
?>
