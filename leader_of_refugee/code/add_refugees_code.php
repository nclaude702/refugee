<?php
try{
include('../../code/connection.php');
    $name=$_POST['name']; 
    $nidn=$_POST['nid'];
    $noffamily=$_POST['noff'];
    $phone=$_POST['phone'];
    $county=$_POST['country'];
    $rcounty=$_POST['rcountry'];
    $province=$_POST['province'];

    $district=$_POST['district'];
    $allmoffamly=$_POST['amoff'];

    $send="insert into refugees set names='$name',N_id='$nidn', N_of_family_M='$noffamily',phone='$phone',country='$county',province='$province',district='$district',all_member_of_family='$allmoffamly', r_country='$rcounty'";
    $send_to_receive_aid="insert into receive_aid set name_of_head_of_family='$name', national_id='$nidn', n_of_family='$noffamily', phone='$phone', district='$district'";
    $b=$con->exec($send_to_receive_aid);
    $a=$con->exec($send);
    if($b==true)
       {
       	  echo "<script>window.alert('thank you for registering refugees');window.location='../add_refugees.php'</script>'";
        }
    else 
    	{
    		echo "<script>window.alert('fail to register refugees');window.location='../add_refugees.php'</script>'";
    	}
}catch(PDOException $e){echo "connection problem";}
?>