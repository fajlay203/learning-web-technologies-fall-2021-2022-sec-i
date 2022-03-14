<?php 

	require_once('../model/contactRequest.php');

	$username = $_REQUEST['username'];
	$number = $_REQUEST['number'];
	$email = $_REQUEST['email'];
	$subject = $_REQUEST['subject'];
	$meassage = $_REQUEST['meassage'];
	//$id = $_REQUEST['id'];

	$user = ['username'=> $username, 'number'=>$number, 'email'=>$email, 'subject'=>$subject, 'meassage'=>$meassage];
	$status = addUser($user);

	if($status){
		echo "submited..!";
		//header('location: ../views/userlist.php');
	}else{
		header('location: ../views/contact_us.php?id={$id}');
	}
?>