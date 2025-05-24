<?php
try{
        $id=$_GET['id'];
         $accept="thank you";
        include '../../code/connection.php';
          $send="UPDATE aid_campany SET admin_aggree='$accept' WHERE `id`='$id'"; 
        $a=$con->exec($send);
      if($a==true)
        {
        	echo "<script>window.alert('AID COMPANY ACCEPTED');window.location='../aid_company.php'</script>'";
        }
       else 
       	 {
       	 	echo "<script>window.alert('fail to accept');window.location='../aid_company.php'</script>'";
       	 }
}catch(PDOException $e){echo "connection problem";}
?>