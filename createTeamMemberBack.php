<?php
	echo 'hello,world';
		require 'operations/connect.php';
		$database =  new connect();
		
		$name =  htmlspecialchars($_POST['Name']);
		$pass =  htmlspecialchars($_POST['Password']);
		$create =  htmlspecialchars($_POST['Create']);
		$view =  htmlspecialchars($_POST['View']);
		

				$checkQuery =  "SELECT * FROM  team WHERE name='$name'";
				
		if($database->getRowsnums($checkQuery)  <= 0){
				$pass = md5($pass);
				
				$query = "INSERT INTO team(name,password,createRequireAccess,viewRequireAccess)VALUES('$name','$pass','$create','$view')";
			
				if($database->mysqlQuery($query)){
					header("Location:index.php?msg1=create team member success");
				}else{
					header("Location:index.php?msg=create team member Failed");
				}
		}else{
			header("Location:index.php?msg=Username already exists");
		}
?>