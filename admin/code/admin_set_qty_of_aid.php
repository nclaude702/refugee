<?php
try{
include('../../code/connection.php');
$noffamily=$_POST['noffamily'];
$type=$_POST['type'];
$quantity=$_POST['quantity'];
$nfamily=0;
$total_number_of_aid=0;
$quant=0;
include("../../code/con2.php");
  $retrive=mysqli_query($con,"SELECT * FROM `refugees`");
  while($row=mysqli_fetch_array($retrive))
  {
    $id=$row['id'];
    $nfamily=$row['N_of_family_M']+$nfamily;
    //$id=$id+$row['id'];
    $total_number_of_aid=$nfamily*$quantity;
  }
  $retrive_stock=mysqli_query($con,"SELECT * FROM `stock_of_food` WHERE name_of_food='$type'");
  $name_of_food=0;
  while($row=mysqli_fetch_array($retrive_stock))
  {
    $food_id=$row['food_id'];
    $name_of_food=$row['name_of_food'];
    $no_food=$row['no_food'];
    if($type=$name_of_food)
    {
        $quant=$no_food;
    }
  }
 if($total_number_of_aid<=$quant){
    $update=$con->prepare("UPDATE `stock_of_food` SET `no_food` = `no_food`-'$total_number_of_aid' WHERE `name_of_food`= '$name_of_food'");
   $update->execute();

    $send=$con->prepare("insert into admin_set_qty_of_aid set number_of_refugee='$noffamily',		type_of_aid='$type', quantity='$quantity'");

    $a=$send->execute();
      if($a==true)
            {
            	echo "<script>window.alert('thank you to set quantity ');window.location='../enable_aid_to_refugee.php'</script>'";
            }
      else{echo "<script>window.alert('fail to Add tools');window.location='../enable_aid_to_refugee.php'</script>'";}
   } 
   else
   {
   	echo "<script>window.alert('our stock is less please decrease quantity and try again');window.location='../enable_aid_to_refugee.php'</script>'";
   }
}catch(PDOException $e){echo "connection problem";}
?>