<?php
try
	{
		$conn= new PDO("mysql:host=localhost;dbname=shopdongho",'root','');
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$conn->query("set names utf8");	
		
	}
	catch(PDOException $e)
	{
		echo$e->getMessage();
	}
?>