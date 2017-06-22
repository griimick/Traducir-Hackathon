
<?php
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD","pranjul");
define("DB_NAME","traducirdb");

$connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

//test if connection occured
if(mysqli_errno($connection))
{ die("connection failed" . mysqli_error() ."(". mysqli_errno().")");
} 
 ?>
  

