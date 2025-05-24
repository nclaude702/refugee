<?php
try{
include('../../code/connection.php');
$addhostel=$_POST['addhostel'];

$camp_id=0;
$camp_name=0;
$camp_hostel=0;
$max_hostel=0;
  $a=$con->prepare("SELECT * FROM `setting_camp`");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC))
    {

       $camp_id=$row['camp_id'];
       $camp_name=$row['camp_name'];
       $camp_hostel=$row['camp_hostel'];
       $max_hostel=$row['max_family'];
       $camp_hostel=$camp_hostel+$addhostel;
       $max_hostel=$max_hostel+$addhostel;
    }

$send="UPDATE setting_camp SET camp_hostel='$camp_hostel',
max_family='$max_hostel' WHERE `camp_id`='$camp_id'";


$a=$con->exec($send);
if($a==true)
    {echo "<script>window.alert('thank you for setting camp');window.location='../set_camp.php'</script>'";
}else{echo "<script>window.alert('fail to set camp');window.location='../set_camp.php'</script>'";}
}catch(PDOException $e){echo "connection problem";}
/*
$cname=$_POST['cname'];
$chostel=$_POST['chostel'];
$max_family=$_POST['max_family'];
$btool=$_POST['btool'];
$c_id=$_POST['c_id'];

$send="UPDATE setting_camp SET camp_name='$cname',camp_hostel='$chostel',
max_family='$max_family',home_basic_='$btool' WHERE `camp_id`='$c_id'";



*/
?>