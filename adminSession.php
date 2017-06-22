<?php
	//include('db.php');
include_once 'connectSql.php';
	session_start();
	$check = $_SESSION['admin_username'];
	$session = mysqli_query($connection, "select username from admin where username='{$check}'");
	$row = mysqli_fetch_assoc($session);
	$login_session = $row['username'];
	if(!isset($login_session)) {
		header("Location:adminLogin.php");
	}
?>