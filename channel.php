<?php
	//Connection to SQL 
	include_once 'connectSql.php';

	//Essential Functions
	include_once 'functions.php';

?>

<?php 

	$channel = $_GET["channel"];
  
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
	</head>

	<body class="main">

		<?php include_once 'navbar.php';?>
	
			<header class="codrops-header">
				<h1 style="color:white">Browse Videos </h1>
			</header>

			<!--Grid Container-->
			<section class="grid3d horizontal" id="grid3d">
				
				<!--Grid Wrapper-->
				<div class="grid-wrap" style="perspective-origin: 50% 284px;">
					<div class="grid">

					<?php
					  

					  	echo '<strong class="tits"><h1 style="color:white">'.$channel.'</h1></strong>';

					  	
					  	while($result1 = mysqli_fetch_assoc($result)){

					  	    echo'<figure><img src="http://img.youtube.com/vi/'.$result1['VideoID'].'/hqdefault.jpg" alt="img04"></figure>';
					  	}
					   
					?>
					<p style="color:white;align-content: center"><a href="browse.php">Go back</a></p>
					</div>
				</div>

				<?php
					mysqli_data_seek($result , 0);
					


				?>
				<div class="content">


				<?php

				
				  
				  	while($temp2 = mysqli_fetch_assoc($result)){
				  		//echo '<script>console.log("'.$temp2['VideoTitle'].'")</script>';
				  		echo'
				  			<div class="main">
				  				
				  				<iframe align="center" width="100%" height="100%" src="video.php?id='.$temp2['VideoID'].'" frameborder="yes" scrolling="yes" name="myIframe" id="myIframe"> </iframe>
				  			</div>';  
				  	} 
				?>
					<span class="loading"></span>
					<span class="icon close-content"></span>
				</div>
			</section>
		</div><!-- /container -->
		<script type="text/javascript">
		    var vid=document.getElementById("myVideo");
		    function playvid(){
		        vid.play();
		    }
		    function pausevid(){
		        vid.pause();
		    } 
		</script>

		<?php include_once 'grid3d.php';?>	

	</body>
</html>