<?php
session_start();
$q = $_GET["q"];

$username = "admin";
$password = "admin";

if($q == "login"){
	$data = array();
	$error = array();
	if(empty($_POST['username']) || empty($_POST['password'])){
		$error[] = 'Please enter the username';
	}else{
		if(empty($error)){
			if($_POST['username'] == $username && $_POST['password'] == $password){
				$_SESSION['username'] = $username;
				$status = [
					'status' => 200,
					'message' => 'Login Successfully',
					'location' => 'Welcome.php'
				];
			}else{
				$error = 'Invalid username/password';
			}
		}
	}
	header('Content-type: application/json');
	if(!empty($error)){
		echo json_encode(array(
			'errors' => $error
		));
	}else{
		echo json_encode($status);
	}
	exit();
}