<?php
	include_once 'connectSql.php';

	$audioid = $_GET["audioid"];

	$updateReports = "Update audios set `Reports` = `Reports` + 1 where AudioId = '".$audioid."'";
	mysqli_query($connection, $updateReports);
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>