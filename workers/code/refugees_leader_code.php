<?php
try{
    include('../../code/connection.php');
    $names=$_POST['names'];
    $district=$_POST['district'];
    $phone=$_POST['phone'];
    $username=$_POST['username'];
    $password=$_POST['password']; 
    $register=$_POST['register']; 
   $send="insert into users_leader set leader_name='$names',phone='$phone', region='$district',username='$username', password='$password',added_by='$register'";

    $a=$con->exec($send);
      if($a==true) 
         { 
         	echo "<script>window.alert('thank you for Adding leader of refugees info');window.location='../add_refugees.php'</script>'";
         }
         else
         	{
         		echo "<script>window.alert('fail to leader of refugees');window.location='../add_refugees.php'</script>'";
         	}
   }catch(PDOException $e){echo "connection problem";}
?>