<?php 
	session_start();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message'] = "you are now logged out";
	header("location: index.php"); // redirect to homepage

?>