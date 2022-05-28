<?php
  include 'dbconfig.php';
    if(isset($_GET['deleteid']))
    {
      $id=$_GET['deleteid'];

      $sql="DELETE FROM consult WHERE idConsult=$id";
      $result=mysqli_query($con,$sql);
      if($result)
      {
        echo "Deleted successfull";
        header('Location:profilClient');
      }else
      {
        die(mysqli_error($con));
      }
      
    }
?>