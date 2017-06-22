<?php
	include_once 'connectSql.php';

	$audioid = $_GET["audioid"];
	$vote = $_GET["vote"];

	if ($vote == "Like") {
		$updateUpvotes = "Update audios set `Upvotes` = `Upvotes` + 1 where AudioId = '".$audioid."'";
		mysqli_query($connection, $updateUpvotes);
	}elseif($vote == "DisLike"){
		$updateDownvotes = "Update audios set `Downvotes` = `Downvotes` + 1 where AudioId = '".$audioid."'";
		mysqli_query($connection, $updateDownvotes);
	}
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>