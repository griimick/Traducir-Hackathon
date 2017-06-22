<?php
	include("adminSession.php");
    include("helperFunctions.php");
    if(isset($_POST['videourl'])){
    	$videoUrl = $_POST['videourl'];
    }
	if(isset($_GET['url'])){
    	$videoUrl = "https://www.youtube.com/watch?v=".$_GET['url'];
    }

	parse_str( parse_url( $videoUrl, PHP_URL_QUERY ), $my_array_of_vars );
    
    $videoID = $my_array_of_vars['v'];
    
	$videoExist = "select VideoID from Videos where VideoID = {$videoID}";
	$result = mysqli_query($connection, $videoExist);
	$count = mysqli_num_rows($result);
	if ($count != "") {
		$_SESSION['newvideo'] = "This Video already exists";
	} else {
        $videoTitle = get_youtube_title($videoID);
        $videoDesc = mysqli_real_escape_string( get_youtube_desc($videoID));
        $videoBy = get_youtube_channelTitle($videoID);
        
		$addVideoQuery = "insert into videos (`VideoID`, `VideoTitle`, `VideoDesc`, `VideoBy`) values ('".$videoID."', '".$videoTitle."', '".$videoDesc."', '".$videoBy."')";
		if (mysqli_query($connection, $addVideoQuery)) {
			$_SESSION['newvideo'] = "New Video added successfully";
		} else {
			$_SESSION['newvideo'] = "Video cannot be added";
		}
	}
	header("Location:addVideos.php");
?>