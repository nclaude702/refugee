<?php
try{
   include('connection.php');
   $info=$_POST['info'];
   $add=$_POST['add'];
   $send="insert into daily_info set name_of_add_info='$add', information='$info'";

    $a=$con->exec($send);
    if($a==true) 
      {
      	echo "<script>window.alert('thank you for Add info');window.location='../send.php'</script>'";
      }
    else
    	{
    		echo "<script>window.alert('fail to Add food');window.location='../send.php'</script>'";
    	}
}catch(PDOException $e){echo "connection problem";}
?>