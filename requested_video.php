<!DOCTYPE html>
<html>
<head>
	<title></title>
    <!-- Bootstrap core CSS -->
    <link href="flatty/theme/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="flatty/theme/assets/css/main.css" rel="stylesheet">	
<style type="text/css">
	  .modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}

   .modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 400px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
}
 .close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }



form{
	margin-top: 25px;
} 

</style>	
</head>
<body>

<a href="#openModal">open</a>

<div id="openModal" class="modalDialog">
	<div id="backar">
	    <h2>Upload URL</h2>
	
	<a href="#close" title="Close" class="close">X</a>
		
 <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
     <div class="form-group">
      <label for="inputname" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="upload_url" placeholder="Upload YouTube URL" id="Url">
      </div>
    </div>


  <br>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="submit" name="submit" class="btn btn-primary" value="Requested Video-URL">
        <input type="reset" name="reset" class="btn btn-default">
      </div>
    </div>
</form>
	</div>
</div>
</body>
</html>



