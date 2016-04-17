<?php
		session_start();

	require 'operations/connect.php';
	$database = new connect();

	$name =  htmlspecialchars($_POST['username']);
	$pass = htmlspecialchars($_POST['password']);
	
	
	if(empty($name) && empty($pass)){
		header("Location:index.php?msg=please enter username and password");
	}else if(empty($name)){
		header("Location:index.php?msg=please enter username");
	}else if(empty($pass)){
		header("Location:index.php?msg=please enter password&name=$name");
	}else{
		
		$pass =  md5($pass);
		
		$query = "SELECT * FROM team WHERE name='$name' AND password='$pass'";
		if($database->getRowsnums($query) > 0){
			$row = $database->getRowsDatabase($query);
			$_SESSION['user'] =  $row;
			header("Location:home.php");
		}else{
			header("Location:index.php?name=$name&msg=invalid login");
		}
	}	
	
?>
	