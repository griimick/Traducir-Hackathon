<?php
	include("userSession.php");
    include("helperFunctions.php");

	$videoUrl = $_POST['videoUrl'];

	parse_str( parse_url( $videoUrl, PHP_URL_QUERY ), $my_array_of_vars );
    
    $videoID = $my_array_of_vars['v'];
    
	$videoExist = "select VideoID from Videos where VideoID = {$videoID}";
	$result = mysqli_query($connection, $videoExist);
	$count = mysqli_num_rows($result);
	if ($count != "") {
		$_SESSION['requestvideo'] = "This Video has already been added";
	} else {
        $query = "select VideoID from requests where VideoID = {$videoID}";
        $fetch = mysqli_query($connection, $query);
        $no = mysqli_num_rows($no);
        
        if ($count != "") {
            $incrementFrequency = "Update requests set `Frequency` = `Frequency` + 1 where `VideoID` = {$videoID}";
            $_SESSION['newvideo'] = "Request is being processed by admin";
        } else {
            $videoTitle = get_youtube_title($videoID);
            $videoDesc = get_youtube_desc($videoID);
            $videoBy = get_youtube_channelTitle($videoID);
            
            $addVideoQuery = "insert into requests (`VideoID`, `VideoTitle`, `VideoDesc`, `VideoBy`, `Frequency`) values ('{$videoID}', '{$videoTitle}', '{$videoDesc}', '{$videoBy}', 1)";
            if (mysqli_query($connection, $addVideoQuery)) {
                $_SESSION['newvideo'] = "New Video added successfully";
            } else {
                $_SESSION['newvideo'] = "Error: New Video not added";
            }
        }
	}
	header("Location:requestVideos.php");
?>