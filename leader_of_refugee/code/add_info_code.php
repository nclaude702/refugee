<?php
try{
   include('../../code/connection.php');
   $info=$_POST['info'];
   $add=$_POST['add'];
   $send="insert into daily_info set name_of_add_info='$add', information='$info'";

    $a=$con->exec($send);
    if($a==true) 
      {
      	echo "<script>window.alert('thank you for Add info');window.location='../daily_info.php'</script>'";
      }
    else
    	{
    		echo "<script>window.alert('fail to Add food');window.location='../daily_info.php'</script>'";
    	}
}catch(PDOException $e){echo "connection problem";}
?>