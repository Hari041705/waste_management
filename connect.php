<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='loginid';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD);
if($con){
 
    //echo "connection successfull";
   $sql = "CREATE DATABASE " . $DATABASE;
   if (mysqli_query($con, $sql)) {
  echo "Database created successfully";
}
}else{
    die(mysqli_error($con));
}
?>