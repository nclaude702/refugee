<?php
try{
     include('../../code/connection.php');
     $name=$_POST['name'];

     $id=$_POST['id'];
     $nidn=$_POST['nid'];
     $noffamily=$_POST['noff'];
     $phone=$_POST['phone'];
     //$county=$_POST['country'];
     //$province=$_POST['province'];
     $district=$_POST['district'];
     $allmoffamly=$_POST['amoff']; 
     $district=$_POST['district']; 
     $refug_status=$_POST['refug_status']; 
     $back_home=$_POST['back_home'];
        $send="update refugees set refug_status='$refug_status', skip_camp='$back_home'where id='$id'";
        $send_to_receive_aid="update receive_aid set refug_status='$refug_status', skip_camp='$back_home' where  r_aid_id='$id'";
           $b=$con->exec($send_to_receive_aid);
           $a=$con->exec($send);
            if($a==true)
                {
                    include('../../admin/code/update_remove_onehostel.php');
                	echo "<script>window.alert('thank you for UDTATING REFUGEE STATUS');window.location='../deasese_refuge_check.php'</script>'";
                }
            else
                {
                	echo "<script>window.alert('fail to register refugees');window.location='../deasese_refuge_check.php'</script>'";
                }
}catch(PDOException $e){echo "connection problem";}
?>