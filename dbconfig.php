<?php 

$con=new mysqli('localhost','root','','projetweb');

if(!$con){
  echo"erreur";
  die(mysqli_error($con));
}

?>

