<?php 


	require 'operations/connect.php';
	require 'operations/constants.php';
	$database = new connect();

		$rqid =  htmlspecialchars($_POST['rqid']);
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
		
		
		$query = "UPDATE requirements SET ";
		$query .="$requireJobid='$jobid',";
		$query .="$requireClient='$client',";
		$query .="$requireHire='$hireType',";
		$query .="$requireSkill='$skill',";
		$query .="$requireNotice='$notice',";
		$query .="$requireBand='$band',";
		$query .="$requireExperience='$exp',";
		$query .="$requireDescription='$jobDesc',";
		$query .="$requireWorkLocation='$workLocation',";
		$query .="$requireInterviewWalkin='$interviewWalkin',";
		
		if($interviewWalkin == 'Interview'){
			$query .="$requireInterviewLocation='$interviewLocation',";
			$query .="$requireInterviewDate='$interviewDate',";
		}else{
			$query .="$requireInterviewLocation='$walkinLocation',";
			$query .="$requireInterviewDate='$walkinDate',";
		}
		
		$query .="$requireAssign='$assign',";
		$query .="$requireTat='$tatDate' WHERE $requireid='$rqid'";
		
		if($database->mysqlQuery($query)){
			header("Location:EditRequirements.php?id=$rqid&msg1=updated successfully");
		}else{
			header("Location:EditRequirements.php?id=$rqid&msg=updated unsuccessfull");
		}
		
		
?>