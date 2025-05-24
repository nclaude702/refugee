<?php
try{
include('../../code/connection.php');
     $h_id=$_POST['id'];
     $name=$_POST['name'];
     $phone=$_POST['phone'];
     $username=$_POST['username'];
     $password=$_POST['password'];
     $region=$_POST['region']; 
     $send="UPDATE users_leader SET leader_name='$name',phone='$phone',username='$username',password='$password',region='$region' WHERE `h_id`='$h_id'"; 
   $a=$con->exec($send);
      if($a==true)
        {
        	echo "<script>window.alert('thank you for update user');window.location='../profile.php'</script>'";
        }
       else 
       	 {
       	 	echo "<script>window.alert('fail to update user');window.location='../profile.php'</script>'";
       	 }
}catch(PDOException $e){echo "connection problem";}
?>