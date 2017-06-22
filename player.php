<?php
	//Connection to SQL 
	include_once 'connectSql.php';

	//Essential Functions
	include_once 'functions.php';

?>

<?php 

	$channel = 'Khan Academy';
  
  	$query = "SELECT * FROM videos WHERE `VideoBy` = '".$channel."'";
	$result = mysqli_query($connection, $query);
 	if(!$result){
  	  die("Database Query Failed!");
  	}

?>

<html lang="en" class=" js csstransforms3d csstransitions pointerevents"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Traducir | <?php echo $channel;?></title>
	<?php include_once 'link.php';?>
	<script src="assets/js/modernizr.custom.js"></script>
	<script src="https://www.youtube.com/iframe_api"></script>

	<style>
		
		a {
		    color: #0254EB
		}
		a:visited {
		    color: #0254EB
		}
		a.morelink {
		    text-decoration:none;
		    outline: none;
		}
		.morecontent span {
		    display: none;
		}
		
		
        .demo-2{
           	margin-top: 3.5em;
        }
	</style>
	</head>

	<body class="main">

		<?php include_once 'navbar.php';?>
	
			<header class="codrops-header">
				<h1 style="color:white">Browse Videos </h1>
			</header>
				<div class="cafs">
				<?php
				  	mysqli_data_seek($result, 3);
				  	while($temp2 = mysqli_fetch_assoc($result)){
				  		echo'
				  			<div>
				  				<div id="video-placeholder">
				  					<iframe width="600" height="400" src="http://www.youtube.com/embed/'.$temp2['VideoID'].'?autoplay=0"></iframe>	
				  				</div>
				  				<div style="background:white;height:75px; width:800px"class="player">
				  				
				  				<i id="play1" onclick="playvid()" class="material-icons" style="font-size:4em;cursor:pointer;">play_arrow</i>
				  				<i id="pause1" onclick="pausevid()" class="material-icons" style="font-size:4em;cursor:pointer;">pause</i>
				  				<input type="range" style="cursor:pointer;" id="progress-bar" value="0">

				  				<select class="styled-select blue semi-square" style="margin-top:-10px; height: 10px;">
				  					<option value="" disabled selected>Select Audio</option>
				  					<option value="email">Hindi</option>
				  					<option value="twitter">French</option>
				  					<option value="linkedin">German</option>
				  				</select>
				  				
				  				</div>
				  				<audio id="myVideo">
				  				  <source id="ogg_src" src="hello.mp3" type="audio/mp3">
				  				  Your browser does not support HTML5 video.
				  				</audio>

				  				<h2><b>'.$temp2['VideoTitle'].'</b></h2>
				  				<div class="dummy-text comment more">
				  				'.$temp2['VideoDesc'].'
				  				</div>
				  			</div>
				  		';  
				  	} 
				?>
					<span class="loading"></span>
					<span class="icon close-content"></span>
				</div>
			</section>
		</div><!-- /container -->

		<?php include_once 'grid3d.php';?>	
		<script type="text/javascript">
		    var vid=document.getElementById("myVideo");
		    function playvid(){
		        vid.play();
		    }
		    function pausevid(){
		        vid.pause();
		    } 
		</script>
		 <script type="text/javascript">
		     //player initialisation
		var player;

		function onYouTubeIframeAPIReady() {
		    player = new YT.Player('video-placeholder', {
		        width: 600,
		        height: 400,
		        videoId: 'ihNZlp7iUHE',
		        playerVars: {
		            color: 'white',
		        },
		        events: {
		            onReady: initialize
		        }
		    });
		}

		function initialize(){

		    // Update the controls on load
		    updateTimerDisplay();
		    updateProgressBar();

		    // Clear any old interval.
		    clearInterval(time_update_interval);

		    // Start interval to update elapsed time display and
		    // the elapsed part of the progress bar every second.
		    time_update_interval = setInterval(function () {
		        updateTimerDisplay();
		        updateProgressBar();
		    }, 1000)

		}

		//Duration

		// This function is called by initialize()
		function updateTimerDisplay(){
		    // Update current time text display.
		    $('#current-time').text(formatTime( player.getCurrentTime() ));
		    $('#duration').text(formatTime( player.getDuration() ));
		}

		function formatTime(time){
		    time = Math.round(time);

		    var minutes = Math.floor(time / 60),
		    seconds = time - minutes * 60;

		    seconds = seconds < 10 ? '0' + seconds : seconds;

		    return minutes + ":" + seconds;
		}

		//progress bar

		$('#progress-bar').on('mouseup touchend', function (e) {

		    // Calculate the new time for the video.
		    // new time in seconds = total duration in seconds * ( value of range input / 100 )
		    var newTime = player.getDuration() * (e.target.value / 100);

		    // Skip video to new time.
		    player.seekTo(newTime);

		});

		// This function is called by initialize()
		function updateProgressBar(){
		    // Update the value of our progress bar accordingly.
		    $('#progress-bar').val((player.getCurrentTime() / player.getDuration()) * 100);
		}


		//play

		$('#play1').on('click', function () {

		    player.playVideo();

		});

		//pause

		$('#pause1').on('click', function () {

		    player.pauseVideo();

		});

		//Mute/unmute

		$('#mute-toggle').on('click', function() {
		    var mute_toggle = $(this);

		    if(player.isMuted()){
		        player.unMute();
		        mute_toggle.text('volume_up');
		    }
		    else{
		        player.mute();
		        mute_toggle.text('volume_off');
		    }
		});






		//Set volume

		$('#volume-input').on('change', function () {
		    player.setVolume($(this).val());
		});

		// To get the current volume of the player use this method:
		// player.getVolume()







		//speed

		$('#speed').on('change', function () {
		    player.setPlaybackRate($(this).val());
		});

		// To get the current playback rate for a video use this method:
		// player.getPlaybackRate()

		// To get all available playback rates for the current video use:
		// player.getAvailablePlaybackRates()






		//Quality

		$('#quality').on('change', function () {
		    player.setPlaybackQuality($(this).val());
		});

		// To get the actual video quality of the running video use this method:
		// player.getPlaybackQuality()

		// To get a list of the available quality formats for a video use:
		// player.getAvailableQualityLevels()



		//playlist Next

		$('#next').on('click', function () {
		    player.nextVideo()
		});




		//Playlist previous

		$('#prev').on('click', function () {
		    player.previousVideo()
		});



		//Dynamically queue video
		$('.thumbnail').on('click', function () {

		    var url = $(this).attr('data-video-id');

		    player.cueVideoById(url);

		});
		  
		 </script>   
	</body>
</html>

