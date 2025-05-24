<?php
try{
include('connection.php');
$c_name=$_POST['c_name'];
$type_c=$_POST['type_c'];
$type_aid=$_POST['type_aid'];
$name_aid=$_POST['name_aid'];
$Quantity=$_POST['Quantity'];
$receiver="online send";
$agree="disagree";
$send="insert into aid_campany set name_of_campany='$c_name', type_campany='$type_c', typeaid='$type_aid', name_aid='$name_aid', quntity='$Quantity', admin_aggree='$agree', added_by='$receiver'";

$a=$con->exec($send);
if($a==true) 
    {echo "<script>window.alert('thank you for Sending your helper');window.location='../aid_company.php'</script>'";
}else{echo "<script>window.alert('fail to to send');window.location='../aid_company.php'</script>'";}
}catch(PDOException $e){echo "connection problem";}
?>