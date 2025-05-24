<?php
try{
include('../../code/connection.php');
$info=$_POST['msg'];
$add=$_POST['name_add'];
$send="insert into msge set msg='$info', come_from='$add'";

$a=$con->exec($send);
if($a==true) 
    {echo "<script>window.alert('thank you to send message');window.location='../daily_info.php'</script>'";
}else{echo "<script>window.alert('fail to send message');window.location='../daily_info.php'</script>'";}
}catch(PDOException $e){echo "connection problem";}
?>