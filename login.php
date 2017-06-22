<?php
  include("connectSql.php");
  include("functionsp.php");
  session_start();
?>

<?php
$emailid_err=$firstnameerr=$lastnameerr=$usernameerr=$locationerr=$moberr=$passworderr="";
$emailid_check=$firstname=$username=$location=$mob=$password=$password_compare=$query=$existing_password=$passd="";$valueerr=1;
//if($_SERVER["REQUEST_METHOD"]=="post")
print_r($_POST);
if(isset($_POST["submit"]))
{

 $Email=type($_POST["Email-Id"]);
    if(empty($Email))
   {
      $valueerr=0;
   }
   else
 {
   	  $Email_verify=emailid_check($Email);
      if($Email_verify==false)
   {
     $valueerr=0;
   }
 }


//hashed password//
    $passd=$_POST["password12"];
    if(empty($passd))
    {
    	 $valueerr=0;
    }
    else
    $passd=password_encrypt($passd);
   
if($valueerr!=0)
{
	$query=verify_client($Email); ///////////////////////////////////////////////////////////////////////////////////////////////////
	


if($query==false)
{
	echo "Username/Password does'nt match";
	
}

else {
	$existing_password=$query["password"];   ////////////////////////////////////////////////////////////////////////////////
$password_compare=password_check($passd,$existing_password);///////////////////////////////////////////////////////////////////
    echo $passd.'<br>';
    echo $existing_password;


    

	if(!$password_compare){
		echo "login failed";
			}else{
		$_SESSION['email'] = $Email;
		redirect_to("userDashboard.php");
	}
	} 
}

}
?>





