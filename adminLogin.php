<?php
	include ('db.php');
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Traducir | ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/adminStyle.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">

	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<h1>TRADUCIR ADMIN PANEL</h1>
				</div>
			</div><!--/row -->
		</div><!--/container -->
	</div><!--/headerwrap -->

	<section id="login" name="login"></section>
	<div id="loginwrap">
		<div class="container">
			<div class="row">
				<form role="form" action="checkAdminLogin.php" method="post">
					<?php
				  		if (isset($_SESSION['login_error'])) {
				  		?>
				  		<div class="alert alert-dismissible alert-warning">
				  			
				        <p>
				  		<?php
				  			echo $_SESSION['login_error'];
				  			unset($_SESSION['login_error']);
				  			echo "</p></div>";
				  		}
			  		?>
					<div class="form-group">
						<div class="col-md-1">
						<label for="loginUsername">Username</label>
						</div>
						<div class="col-md-4">
						<input type="text" name="username" class="form-control" id="loginUsername" placeholder="Enter Username">
						</div>
						<div class="col-md-1 col-md-offset-1">
						<label for="loginPassword">Password</label>
						</div>
						<div class="col-md-4">
						<input type="password" name="password" class="form-control" id="loginPassword" placeholder="Enter Password">
						</div>
					</div>
					<div class="col-md-1">
					<button type="submit" class="btn btn-default">Log In</button>
					</div>
				</form>
			</div><!--/row -->
		</div><!--/container -->
	</div><!--/loginwrap -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="assets/js/classie.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.js"></script>    
	<script src="assets/js/main.js"></script>
		<script>
		$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
		});
		</script>
		
		<script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });
	   </script>

  </body>
</html>
