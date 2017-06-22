<script type="text/javascript">
		     //player initialisation
		var player;

		function onYouTubeIframeAPIReady() {
		    player = new YT.Player('video-placeholder', {
		        width: 600,
		        height: 400,
		        videoId: <?php echo "'".$temp2["VideoID"]."'";?>,
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
			player.mute();
		    player.playVideo();

		});

		//pause

		$('#pause1').on('click', function () {
			player.unMute();
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