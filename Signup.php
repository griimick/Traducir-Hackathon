<?php
  include("connectSql.php");
  include("functionsp.php");
?>

<?php
$emailid_err=$firstnameerr=$lastnameerr=$usernameerr=$locationerr=$moberr=$passworderr=$repassworderr=$not_confirm="";
$emailid_check=$firstname=$username=$location=$mob=$password="";$valueerr=1;
if(isset($_POST['submit']))
{
    

//firstname//
  if(isset($_POST['name_first']))
{   
    $Fname=type($_POST["name_first"]);
    
   if(empty($Fname))
      {          
           $valueerr=0;
      }

      else
      {
        $firstname=name($Fname);
        if($firstname==false)
      {
        $valueerr=0;
      }
   }  
}


//lastname//
   
       $Lname=type($_POST["name_last"]);
    
      if(empty($Lname))
      {
            $valueerr=0;
         } 
          else
        {  
          $lastname=name($Lname);
         if($lastname==false)
       {
            $valueerr=0;
       }
     }




//emailid//
  $email=type($_POST["email_id"]);
   
      if(empty($email))
    {

        $valueerr=0;
    }
  else
    {
        $emailid_check=emailid_check($email);
        if($emailid_check===false)
      {
       $valueerr=0;
      }
    }


/* //username// 
   
      $s=type($_POST["username"]);
       if(empty($s))
    {
       $valueerr=0;
    }
    else
  {
       $username=name1($s);
       if($username==false)
     {
       $valueerr=0;
     }

     else{ $username=client_exist($s);

         if($s===$username['username'])
         { 
          $valueerr=0;
         }

  }
}
*/


//hashed password//

    $pass=$_POST["password"];
    if(empty($pass))
  {
     $valueerr=0;
  } 
    else
    $pass=password_encrypt($pass);
   
//retype_password
     $repass=$_POST["retype_password"];
    if(empty($repass))
  {
     $valueerr=0;
  } 
    else
    $repass=password_encrypt($repass);

$check=password_check($pass,$repass);
if(!$check && !empty($repass))
{   
  $valueerr=0;
}


     if($valueerr!=0)
   {    query_submit($Fname,$Lname,$email,$pass);
        redirect_to("index.php");
   }
 }
?>

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
	background-color: #f0ad4e;
	/*background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);*/
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
	opacity: 1;
}

.close:hover { background: #00d9ff; opacity: 1;}



form{
	margin-top: 25px;
} 

</style>	
</head>
<body>
<a href="#openModal">Open Modal</a>

<div id="openModal" class="modalDialog">
	<div>
	    <h2>Sign up</h2>
		<a href="#close" title="Close" class="close">X</a>
		<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
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
</body>
</html>
<?php
//echo close("$connection"); 
?>


