<?php
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
session_start();
session_unset($_SESSION['username']);
header("location:index.php");
 ?>