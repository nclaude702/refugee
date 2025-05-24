<?php 
session_start();

if (isset($_POST['plogin'])) 
  {
     include('../../code/con2.php'); 
     $my=$_POST['username'];
     $your=$_POST['password'];
     $sql="SELECT * FROM users WHERE username='$my' and password='$your' and type='user'";

     $result=mysqli_query($con,$sql);
     $fetch=mysqli_fetch_array($result);

     $user=$my;
     $uid=$fetch['uid'];

     $count=mysqli_num_rows($result);
       if($count==1)
          {
	        $_SESSION["uid"]=$uid;
	        $_SESSION["user"]=$user;
	
            header("location:../index.php");
         }
       else
          {
	         echo"<script>window.alert('Incorrect Password,Username!')</script>";
	         header("location:../../login.php");

	      }
   }
?>
