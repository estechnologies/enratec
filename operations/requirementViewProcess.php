<?php 
		session_start();
			
		require 'connect.php';
		$database =  new connect();
		
		$username =  $_SESSION['user'][0]['name'];
		
		$requireQuery = "SELECT * FROM requirements WHERE assign='$username'";
		$requireResults = $database->getRowsDatabase($requireQuery);
		
?>