
<?php
$wr_id=$_GET['id'];
include("../../code/con2.php");
 $d=date("Y-m-d");

$sql=("UPDATE `wait_final_received` SET `received`='received', date='$d' where wr_id= '$wr_id'");
$a=mysqli_query($con,$sql);
   if ($a==true)
      { 
	   header("location:../provide_aid_to_refugee.php");
      }
      else
      	{echo"pole";}
mysqli_close($con);

?>