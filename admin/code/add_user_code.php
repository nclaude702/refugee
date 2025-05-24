<?php
try{
include('../../code/connection.php');
$names=$_POST['names'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];
$added_by=$_POST['added_by'];

$send="insert into users set 	names='$names',phone='$phone', username='$username',password='$password', type='$type',added_by='$added_by'";

$a=$con->exec($send);
if($a==true)
    {echo "<script>window.alert('thank you for Add user');window.location='../add_refugees.php'</script>'";
}else{echo "<script>window.alert('fail to Add figurees');window.location='../add_refugees.php'</script>'";}
}catch(PDOException $e){echo "connection problem";}
?>