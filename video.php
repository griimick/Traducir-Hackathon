<?php
	//Connection to SQL 
	include_once 'connectSql.php';

	//Essential Functions
	include_once 'functions.php';

	$VideoID = $_GET['id']; 
	$query  = "SELECT * from `videos` WHERE VideoID='".$VideoID."'";
	$result = mysqli_query($connection, $query);
	$temp2 = mysqli_fetch_assoc($result);
  $sql = "SELECT * FROM `audios` WHERE VideoID = '".$VideoID."'";
  $result2 = mysqli_query($connection, $sql);
?>
<html lang="en" class=" js csstransforms3d csstransitions pointerevents"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Traducir</title>
	<?php include_once 'link.php';?>
	<script src="assets/js/modernizr.custom.js"></script>
	<?php include_once 'selectcss.php';?>

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
		
		
        .main{
           	margin-top: 3.5em;
        }
	</style>
  <script>
  $(document).ready(function(){
      $("select#soflow").change(function(){
          var selectedAudio = $("#soflow option:selected").val();
          var upvotes = $("#soflow option:selected").attr("upvotes");
          var downvotes = $("#soflow option:selected").attr("downvotes");
          var reports = $("#soflow option:selected").attr("reports");
          //alert("You have selected the audio - " + selectedAudio);
          document.getElementById("myVideo").src = "assets/audio/"+selectedAudio;
          document.getElementById("tits1").href = "voteAudio.php?audioid="+selectedAudio+"&vote=DisLike";
          document.getElementById("tits2").href = "voteAudio.php?audioid="+selectedAudio+"&vote=Like";
          document.getElementById("tits3").href = "reportAudio.php?audioid="+selectedAudio;  
          document.getElementById("rep").innerHTML = reports;
          document.getElementById("down").innerHTML = downvotes;
          document.getElementById("up").innerHTML = upvotes;                 
          document.getElementById("myVideo").load();
          document.getElementById("progress-bar").val("0");

      });
  });

  </script>
	</head>



<?php
  		echo'
  			<center>
  				<div id="video-placeholder" style="margin-bottom:20px;">
  					<iframe width="600" height="400" src="http://www.youtube.com/embed/'.$temp2['VideoID'].'?autoplay=0&controls=0"></iframe>	
  				</div>
  				<br>
  				<div style="background:#3498db;display:inline-block;height:75px; width:800px" class="player">
  				
  				<i id="play1" onclick="playvid()" class="material-icons" style="color:white;font-size:2.5em;cursor:pointer;">play_arrow</i>
  				<i id="pause1" onclick="pausevid()" class="material-icons" style="color:white;font-size:2.5em;cursor:pointer;">pause</i>
           <a id = "tits3" href="reportAudio.php?audioid=1"><i class="material-icons" id="flag" style="color:red;font-size:2em;cursor:pointer; opacity:0.5; float:right" title="Report">flag</i></a>
           <span id="rep" style="float:right; color:red; opacity:0.5">X</span>
          <a id="tits1" href="voteAudio.php?audioid=1&vote=DisLike"><i class="material-icons" style="color:white;font-size:2em;cursor:pointer; float:right" title="DisLike">thumb_down</i></a>
          <span id="down" style="float:right; color:white">X</span>
          <a id= "tits2" href="voteAudio.php?audioid=1&vote=Like"><i class="material-icons" style="color:white;font-size:2em;cursor:pointer; float:right" title="Like">thumb_up</i></a>
          <span id="up" style="float:right; color:white">X</span>
  				<input width="200px" type="range" style="cursor:pointer" id="progress-bar" value="10">
  				

  				<select id="soflow" style=" height: 40px;width:225px">
  					<option value="" disabled selected>Select Audio</option>';
            while($temp = mysqli_fetch_assoc($result2)){
  					echo '<option upvotes="'.$temp['Upvotes'].'" downvotes="'.$temp['Downvotes'].'" reports="'.$temp['Reports'].'" value="'.$temp['AudioID'].'.mp3">'.$temp['Language']."(".$temp['AudioID'].")".'</option>';
            }
  					echo '
  				</select>
  				</div>

  				<audio id="myVideo">
  				  <source id="ogg_src" src="assets/audio/1.mp3" type="audio/mp3">
  				  Your browser does not support HTML5 video.
  				</audio>
  				<br><br>
  				<h2><b>'.$temp2['VideoTitle'].'</b></h2>
  				<div class="dummy-text comment more">
  				'.$temp2['VideoDesc'].'
  				</div>
  			</center>
  			';  
?>

<script type="text/javascript">
    var vid=document.getElementById("myVideo");
    function playvid(){
        vid.play();
    }
    function pausevid(){
        vid.pause();
    } 
</script>

<script src="assets/js/jquery.shorten.js"></script>
<?php include_once 'customplayer.php';?>
<script language="javascript">
$(document).ready(function() {
        $('thumb').click(function() {
            alert('ho ho ho');
        });
    });
$(document).ready(function() {
	
	$(".comment").shorten({showChars: 250});

 });
</script>