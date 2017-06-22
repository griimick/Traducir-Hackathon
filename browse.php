<?php
	//Connection to SQL 
	include_once 'connectSql.php';

	//Essential Functions
	include_once 'functions.php';


?>

<?php 
	
  $query2 = "SELECT DISTINCT VideoBy FROM videos";
  $channels = mysqli_query($connection, $query2);
  if(!$channels){
    die("Database Query Failed!");
  } 
?>

<html lang="en" class=" js csstransforms3d csstransitions pointerevents"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Traducir | channels</title>
	<?php include_once 'link.php';?>
	<script src="assets/js/modernizr.custom.js"></script>

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
				<h2 style="color:white">Browse Videos </h2>
			</header>

			<!--Grid Container-->
			<section class="grid3d horizontal" id="grid3d">
				
				<!--Grid Wrapper-->
				<div class="grid-wrap" style="perspective-origin: 50% 284px;">
					<div class="grid">

					<?php
					  while($ctemp = mysqli_fetch_row($channels)){	

					  	echo '<strong class="tits"><a href="channel.php?channel='.$ctemp[0].'"><h1 style="color:white; margin-top:-1em; text-align:left">'.$ctemp[0].'</h1></strong>';

					  	$query = "SELECT * FROM videos WHERE `VideoBy` = '".$ctemp[0]."'";
					  	$query .= " LIMIT 3";
					  	$result = mysqli_query($connection, $query);
					  	if(!$result){
					  	  die("Database Query Failed!");
					  	}

					  	while($result1 = mysqli_fetch_assoc($result)){

					  	    echo'<figure><img src="http://img.youtube.com/vi/'.$result1['VideoID'].'/hqdefault.jpg" alt="img04"></figure>';
					  	}
					  	echo '<a href="channel.php?channel='.$ctemp[0].'"><h4 style="color:white; margin-top:-1em; text-align:right">Show more</h4></a>';
					  }  
					?>
					</div>
				</div>

				<?php
					mysqli_data_seek($channels , 0);
					mysqli_free_result($result);	


				?>
				<div class="content">
				<?php
				  while($ctemp = mysqli_fetch_row($channels)){
				  	$query = "SELECT * FROM videos WHERE `VideoBy` = '".$ctemp[0]."'";
				  	$query .= " WHERE LIMIT 3";
				  	$result3 = mysqli_query($connection, $query);
				  	if(!$result3){
				  	  die("Database Query Failed!");
				  	}
				  	while($temp2 = mysqli_fetch_assoc($result3)){
				  		//echo '<script>console.log("'.$temp2['VideoTitle'].'")</script>';
				  		echo'
				  			<div>
				  				<div class="dummy-img">
				  					<iframe width="600" height="400" src="http://www.youtube.com/embed/'.$temp2['VideoID'].'?autoplay=0"></iframe>	
				  				</div>
				  				<h2><b>'.$temp2['VideoTitle'].'</b></h2>
				  				<div class="dummy-text comment more">
				  				'.$temp2['VideoDesc'].'
				  				</div>
				  			</div>
				  		';  
				  	}
				  }  
				?>
					<span class="loading"></span>
					<span class="icon close-content"></span>
				</div>
			</section>
		</div><!-- /container -->

		<?php include_once 'grid3d.php';?>	

	</body>
</html>