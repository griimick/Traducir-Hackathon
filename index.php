<?php
  //Connection to SQL 
  include_once 'connectSql.php';

  //Essential Functions
  include_once 'functions.php';


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Traducir - Learn in your own language</title>

    <?php include_once 'link.php' ?>
    <?php include_once 'styleIndex.php';?>

  </head>

  <body>

    <!-- Fixed navbar -->
    <?php include_once 'navbar.php';?>

	<div class = "demo2" id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1 style="font-family: 'Roboto', sans-serif;">Language is no more a boundation<br/>
					to learn.</h1>
					<button onclick="location.href = 'browse.php';" type="submit" class="btn btn-warning btn-lg">Browse</button>				
				</div><!-- /col-lg-6 -->
				<div class="col-lg-6">
					<img class="img-responsive" src="assets/img/ipad-hand.png" alt="">
				</div><!-- /col-lg-6 -->
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">
				<h1><b>Features</b></h1>
			</div>
		</div><!-- /row -->
		
		<div class="row mt centered">
			<div class="col-lg-4">
				<img src="assets/img/ser01.png" width="180" height="150" alt="">
				<h4>1 - Learn in your own language</h4>
				<p>Here you will find videos in most of the popular languages. So language is no more a boundation to learn online. Here you will find videos from some of the best educational institutions.</p>
			</div><!--/col-lg-4 -->

			<div class="col-lg-4">
				<img src="assets/img/ser02.png" width="180" height="150" alt="">
				<h4>2 - See what you want</h4>
				<p>Along with the video you are provided with options to upvote, downvote and to report. If you find that any content of the video is inappropriate then you can report that video. Also because of the upvote and downvote options your browsing will get better and you will see the best content first.  </p>

			</div><!--/col-lg-4 -->

			<div class="col-lg-4">
				<img src="assets/img/ser03.png" width="180" height="150" alt="">
				<h4>3 - Contribute and help others</h4>
				<p>You can benefit from us as well as you can help others. You can upload videos with audio of your language.</p>

			</div><!--/col-lg-4 -->
		</div><!-- /row -->
	</div><!-- /container -->
	


    <section id="about" style="background-color: #FFFFFF">
        <div class="container" >
        <div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">
				<h1><b>How to contribute?</b></h1>
			</div>
		</div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/img/2.png" height="800" width="800" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h1 class="subheading">Sign Up on our website</h1>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/img/1.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h1 class="subheading">Select the video for which you want to contribute the audio.</h1>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/img/3.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h1 class="subheading">Upload the audio on our website.</h1>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<!--Modal-->

	
	<div id="openModal" class="modalDialog">
	<div id="backar">
	    <h2>Login</h2>
		<a href="#close" title="Close" class="close">X</a>
		<form class="form-horizontal" method="post" action="login.php">
    <div class="form-group">
      <label for="inputname" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="Email-Id" placeholder="Email-Id" id="Email">
      </div>
    </div>


<div class="form-group">
    <label for="inputname" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password12" placeholder="Password" id="passWord">
      </div>
</div>

  <br>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="submit" name="submit" class="btn btn-primary" value="Login">
        <input type="reset" name="reset" class="btn btn-default">
      </div>
    </div>
</form>
	</div>
</div>



<div id="openModal2" class="modalDialog">
	<div id="backar">
	    <h2>Sign up</h2>
		<a href="#close" title="Close" class="close">X</a>
		<form class="form-horizontal" method="post" action="Signup.php">
    <div class="form-group">
      <label for="inputname" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="name_first" placeholder="First name" id="FN">
      </div>
    </div>


<div class="form-group">
    <label for="inputname" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="name_last" placeholder="Last name" id="LN">
      </div>
</div>


    
    



    <div class="form-group">
      <label for="inputEmailid" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="email_id" placeholder="Email-id" id="EI">
      </div>
    </div>


    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" placeholder="Password" id="indicator1" onkeyup="showHint(this.value)" >
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="retype_password" id="inputPassword" placeholder="Confirm Password">
      </div>
    </div>

  <br>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="submit" name="submit" class="btn btn-primary">
        <input type="reset" name="reset" class="btn btn-default">
      </div>
    </div>
</form>
	</div>
</div>

	
	<div class="container">
		<hr>
		<div class="row centered">
			<div class="col-lg-6 col-lg-offset-3">
				<form class="form-inline" role="form">
				  <div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
				  </div>
				  <button type="submit" class="btn btn-warning btn-lg">Subscribe</button>
				</form>					
			</div>
			<div class="col-lg-3"></div>
		</div><!-- /row -->
		<hr>
		<p class="centered">Created by Dallas with <i class="fa fa-heart" aria-hidden="true"></i>&nbsp;&nbsp;2016</p>
	</div><!-- /container -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
