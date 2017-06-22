

   <?php function query_submit($Fname,$Lname,$email,$password)
   {
       global $connection;
      
       $Fname=mysqli_real_escape_string($connection,$Fname);       
       $Lname=mysqli_real_escape_string($connection,$Lname);
       
       $email=mysqli_real_escape_string($connection,$email);
       
       
       
             $query="Insert Into signup(first_name,last_name,email_id,password) ";
             $query.="VALUES('{$Fname}','{$Lname}','{$email}','{$password}')";
             $result=mysqli_query($connection,$query);
        if(!$result)
          {
            die("database query failed");
            
          }
      }
      ?>


<!--redirect function-->
<?php
function redirect_to($new_location)
{

	header("location:$new_location");
	exit;
}
?>




<!--emailverify-->
<?php
function emailid_check($emailid)
{$emailid = filter_var($emailid, FILTER_SANITIZE_EMAIL);

if (!filter_var($emailid, FILTER_VALIDATE_EMAIL)) 
{

	return false;
}else return true;
}
?>




<!--first,last,username,location verification-->
<?php
function name($name)
{
 if(!preg_match("/^[A-Za-z ]*$/", $name))
 {
return false;
}else return true;
}?>





<?php
function name1($name)
{
 if(!preg_match("/^[A-Za-z0-9]*$/", $name))
 { 
return false;
}else {if(strlen($name)>=6)
      return true;
      else return false;

}
}?>





<?php
function location($loc)
{
 if(!preg_match("/^[A-Za-z0-9 ]*$/", $loc))
 {
return false;
}else return true;

}?>




<!--mobileno verification-->
<?php
function mob($mob)
{

	if(!preg_match("/^[0-9]*$/", $mob))
	{
		return false;
	}else return true;
}
?>





<?php function password_encrypt($d)
{
 $hash_format="$2y$10$";  //blowfish cost of 10 
 $salt="notmorethan22charsmipo";
//$salt=generate_salt($salt_length);
$format_and_salt=$hash_format.$salt;
$hash=crypt($d,$format_and_salt);

return $hash;
}
?>


<?php
function generate_salt($length)
{
$unique_random=md5(uniqid(mt_rand(),true));

$base64_string=base64_encode($unique_random);

$modified_string=str_replace('+', '.', $base64_string);

$salt=substr($modified_string,0,$length);
return $salt;
}
?>

<!--function password_encrypt($d)
//{
$d=password_hash($d,PASSWORD_DEFAULT);

return $d;
}
?>-->


<?php function password_check($password2,$existing_password2)
{

 if($password2===$existing_password2)
 {

 	return true;
 }else false;

}
?>


<!--trim,stripslashes,htmlspecialchars-->
<?php
function type($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

?>




<?php $pass="";
function verify_client($email_check)
{

     global $connection;
   $username1=mysqli_real_escape_string($connection,$email_check);
   
          $query1="select*from signup ";
          $query1.="where email_id='{$email_check}'";
          $result1=mysqli_query($connection,$query1);
     if($result1 && mysqli_num_rows($result1)==1)
   { 
       	 if($result1=mysqli_fetch_assoc($result1))
     {
     return $result1;
     }
  }  
     else return false;
         
}
    ?>


<?php $pass="";
function client_exist($username2)
{

     global $connection;
   $username2=mysqli_real_escape_string($connection,$username2);
   
          $query4="select*from signup ";
          $query4.="where username='{$username2}'";
          $result4=mysqli_query($connection,$query4);
     if($result4 && mysqli_num_rows($result4)==1)
       { 
       	 $result4=mysqli_fetch_assoc($result4);
         return $result4;
       }
     else return null;
         
    }
    ?>


    <!--check number of rows in a table-->
    <?php 
     function check_num_rows($table)
     {
       global $connection;

       $query5="select*from {$table}";
       $result5=mysqli_query($connection,$query5);
       if(!$result5){die("database query5 failed");}
       
       else $num=mysqli_num_rows($result5); 
             
             return $num;
     }

    ?>

    <!--check number of rows in a table for a particula group of id-->
    <?php 
     function check_num_rows_by_id($table,$key,$value)
     {
       global $connection;

       $query14="select*from {$table} where {$key}={$value}";
       $result14=mysqli_query($connection,$query14);
       if(!$result14){die("database query14 field");}
       
       else $num=mysqli_num_rows($result14); 

       	return $num;
     }

    ?>

    <?php 
     function check_num_rows_by_not_id($table,$key)
     {
       global $connection;

       $query22="select DISTINCT business_type_id from `{$table}` where {$key} IS NOT NULL";
       $result22=mysqli_query($connection,$query22);
       if(!$result22){die("database query22 field");}
       	 
       	 else $num=mysqli_num_rows($result22);

       	return $num;
     }

    ?>

    <?php 
     function check_num_rows_by_name($table,$key,$table2,$table2key,$value)
     {
       global $connection;

       $query18="select*from {$table} where {$key}=(select {$key} from {$table2} where {$table2key}='{$value}')";
       $result18=mysqli_query($connection,$query18);
       if(!$result18){die("database query18 field");}
       
       else $num=mysqli_num_rows($result18); 

       	return $num;
     }
?>
      <?php 
       function check_num_rows_by_not_id_loca($table,$key)
       {
         global $connection;

         $query23="select business_type_id from `{$table}` where {$key} IS NOT NULL";
         $result23=mysqli_query($connection,$query23);
         if(!$result23){die("database query23 field");}
         	 
         	 else $num=mysqli_num_rows($result23);

         	return $num;
       }

      ?>

      <?php 
       function loca($table,$key)
       {
         global $connection;

         $query24="select l.location from main as m,locator as l where m.location_id=l.location_id && category_id IS NOT null";
         $result24=mysqli_query($connection,$query24);
         if(!$result24){die("database query24 field");}
         	 
         	 else $num=mysqli_num_rows($result24);

         	return $num;
       }

      ?>

    

    <?php 
     function collect_location($i)
     {
     	global $connection;

     	$query6="select*from locator ";
     	$query6.="where location_id={$i}";
        $result6=mysqli_query($connection,$query6);
        if(!$result6){die("database query6 failed");}

        else $result6=mysqli_fetch_assoc($result6);
        return $result6; 
     }
    ?>

    <?php 
      function take($table,$column,$BT)
     {
     	global $connection;

     	$query13="select*from {$table} ";
     	$query13.="where {$column}={$BT}";
        $result13=mysqli_query($connection,$query13);
        if(!$result13){die("database query13 failed");}

        else $result13=mysqli_fetch_assoc($result13);
        return $result13;   
    }
    ?>

    <?php
     function take2()
     {
     	 global $connection;
      $count2="";
      $count2=check_num_rows_by_not_id('main','category_id');
      
      $query10="select m.company_name ,m.Investers_name, l.location , c.category,b.business_name,m.current_company_value_in_crores, ";
      $query10.="m.date_of_beginning,m.initial_investment,m.further_information ";
      $query10.="from `main` as m,`locator` as l,`business_type` as b,`sectors` as c ";
      $query10.="where m.location_id=l.location_id && m.business_type_id=b.business_type_id && ";
      $query10.="m.category_id=c.category_id && m.category_id IS NOT NULL";

      $result10=mysqli_query($connection,$query10);
      if(!$result10){die("dataquery failed");}
     
      for($i=1;$i<=$count2;$i++)
     { $result10=mysqli_fetch_assoc($result10);
      
      return $result10;}
       }
    ?>