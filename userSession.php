<?php
	//include('db.php');
	include_once 'connectSql.php';
	session_start();
	$check = $_SESSION['email'];
	$session = mysqli_query($connection, "select email_id from signup where email_id='{$check}'");
	$row = mysqli_fetch_assoc($session);
	$login_session = $row['email_id'];
	if(!isset($login_session)) {
		header("Location:{$row['email_id']}");
	}
?>