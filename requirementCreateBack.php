<?php


		require 'operations/connect.php';
		$database = new connect();
		
		
		
		$jobid =  htmlspecialchars($_POST['JobId']);
		$client =  htmlspecialchars($_POST['client']);
		$hireType =  htmlspecialchars($_POST['HireType']);
		$skill = htmlspecialchars($_POST['Skill']);
		$notice =  htmlspecialchars($_POST['Notice']);
		$band =  htmlspecialchars($_POST['Band']);
		$exp =  htmlspecialchars($_POST['Experience']);
		$jobDesc = htmlspecialchars($_POST['JobDescription']);
		$workLocation =  htmlspecialchars($_POST['WorkingLocation']);
		$interviewWalkin =  htmlspecialchars($_POST['InterviewWalkin']);
		$interviewLocation =  htmlspecialchars($_POST['InterviewLocation']); // 1
		$walkinLocation =  htmlspecialchars($_POST['WalkinLocation']); // or 2
		$interviewDate =  htmlspecialchars($_POST['InterviewDate']); // if 1 !empty this should load
		$walkinDate  =  htmlspecialchars($_POST['WalkinDate']);// if 2 is empty this should load
		$assign =  htmlspecialchars($_POST['assign']);
		$tatDate =  htmlspecialchars($_POST['TATDate']);
		
		
		if($interviewWalkin == 'Interview'){
			
			$query = "INSERT INTO requirements(jobid,client,hiretype,skill,notice,band,experience,description,";
			$query .="workingLocation,interviewWalkin,interviewLocation,interviewDate,assign,tat)VALUES(";
			$query .="'$jobid','$client','$hireType','$skill','$notice','$band','$exp','$jobDesc','$workLocation','$interviewWalkin',";
			$query .="'$interviewLocation','$interviewDate',";
			$query .="'$assign','$tatDate')";
			
		}else{
			$query = "INSERT INTO requirements(jobid,client,hiretype,skill,notice,band,experience,description,";
			$query .="workingLocation,interviewWalkin,interviewLocation,interviewDate,assign,tat)VALUES(";
			$query .="'$jobid','$client','$hireType','$skill','$notice','$band','$exp','$jobDesc','$workLocation','$interviewWalkin',";
			$query .="'$walkinLocation','$walkinDate',";
			$query .="'$assign','$tatDate')";
		}
		
		if($database->mysqlQuery($query)){
			header("Location:CreateRequirements.php?msg1=requirement created successfull");	
		}else{
			header("Location:CreateRequirements.php?msg=requirement created unsuccessfull");
		}
		

?>