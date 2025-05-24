 <?php 
session_start();

if (isset($_POST['leader'])) 
{
  include('../../code/con2.php');

    $my=$_POST['username'];
    $your=$_POST['password'];
    $sql="SELECT * FROM users_leader WHERE username='$my' and password='$your'";

     $result=mysqli_query($con,$sql);
     $fetch=mysqli_fetch_array($result);

     $leader=$my;
     $uid=$fetch['h_id'];
     $leader_name=$fetch['leader_name'];
     $username=$fetch['username'];
     $region=$fetch['region'];

     $count=mysqli_num_rows($result);
     if($count==1)
         {
	        $_SESSION["h_id"]=$uid;
	        $_SESSION["leader"]=$leader;
	        $_SESSION["lname"]=$leader_name;	
	        $_SESSION["username"]=$username;	
	        $_SESSION["region"]=$region;	
            header("location:../index.php");
         }
     else
         {
	       echo"<script>window.alert('Incorrect Password,Username!')</script>";
	       header("location:../../login_leader_of_refugee.php"); 
	     }
}
?>
