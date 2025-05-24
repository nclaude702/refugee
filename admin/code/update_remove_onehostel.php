<?php
$camp_id=0;
$camp_name=0;
$camp_hostel=0;
  $a=$con->prepare("SELECT * FROM `setting_camp`");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC))
    {

       $camp_id=$row['camp_id'];
       $camp_name=$row['camp_name'];
       $camp_hostel=$row['camp_hostel'];
       $camp_hostel=$camp_hostel-1;
    }

  $send="UPDATE setting_camp SET camp_hostel='$camp_hostel' WHERE `camp_id`='$camp_id'";
  $a=$con->exec($send);
  /*
if($a==true)
    {echo "<script>window.alert('thank you for update user');window.location='../profile.php'</script>'";
}else{echo "<script>window.alert('fail to update user');window.location='../profile.php'</script>'";}
}catch(PDOException $e){echo "connection problem";}   */
?>