<?php
try{
include('../../code/connection.php');
$id=$_POST['id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];

$send="UPDATE users SET names='$name',phone='$phone',
username='$username',password='$password',type='$type' WHERE `uid`='$id'";


$a=$con->exec($send);
if($a==true)
    {echo "<script>window.alert('thank you for update user');window.location='../profile.php'</script>'";
}else{echo "<script>window.alert('fail to update user');window.location='../profile.php'</script>'";}
}catch(PDOException $e){echo "connection problem";}
?>