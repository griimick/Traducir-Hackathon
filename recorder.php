<?php
  //Connection to SQL 
  include_once 'connectSql.php';

  //Essential Functions
  include_once 'functions.php';


?>
<!doctype html>
<html>
<head>
	<html lang="en" class=" js csstransforms3d csstransitions pointerevents"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Traducir | Live Record</title>
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
<body>
	<?php include_once 'navbar.php';?>
	<div class="main">
	<iframe align="center" width="100%" height="100%" src="recorder\index.php" frameborder="yes" scrolling="no" name="myIframe" id="myIframe"> </iframe>
	</div>
	
</body>
</html>