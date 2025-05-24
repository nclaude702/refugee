
<?Php
class retrive_refugees{
   
  function __construct(){

try{
  $now=date("Y,d,m");
  include '../../code/connection.php';
  $rice=0;
  $maize=0;
  $oil=0;
  $mquantity=0;
  $oquantity=0;
  $rquantity=0;
  $other=0;
  $other_quantity=0;
  $retry=$con->prepare("SELECT number_of_refugee,type_of_aid, quantity FROM `admin_set_qty_of_aid`");
  $retry->execute();
  while($rows=$retry->fetch(PDO::FETCH_ASSOC)){
    if($rows['type_of_aid']=="rice")
    {
      $rice=$rows['type_of_aid'];
      $rquantity=$rows['quantity'];
    }
    if($rows['type_of_aid']=="maize")
    {
      $maize=$rows['type_of_aid'];
      $mquantity=$rows['quantity'];
    }
    if($rows['type_of_aid']=="beans")
    {
      $beans=$rows['type_of_aid'];
      $bquantity=$rows['quantity'];
    }
    if($rows['type_of_aid']=="oil")
    {
      //$oil=$rows['oil'];
      $oquantity=$rows['quantity'];
    }
    else
    {
      $other=$rows['type_of_aid'];
      $other_quantity=$rows['quantity'];
    }


    }
  

 
  $a=$con->prepare("SELECT * FROM `RECEIVE_AID` where skip_camp='NO'");
  $a->execute();
      while($row=$a->fetch(PDO::FETCH_ASSOC))
     {

       $id=$row['r_aid_id'];
  ?>
                                           <?php  $r_id=$row['r_aid_id']; ?>
                                            <?php  $hof_name=$row['name_of_head_of_family']; ?>
                                            <?php  $nid=$row['national_id']; ?><?php  $nof_f=$row['n_of_family']; ?>
                                            <?php  $phone=$row['phone']; ?>
                                            <?php $district=$row['district']; ?>
                                            <?php  $refug_status=$row['refug_status']; ?>
                                            <?php $skip_camp=$row['skip_camp']; ?>

                                           <?php  $maize=$row['n_of_family']*$mquantity; ?>
                                            <?php  $rice=$row['n_of_family']*$rquantity; ?>
                                            <?php  $oil=$row['n_of_family']*$oquantity; ?>
                                            <?php  $beans=$row['n_of_family']*$bquantity; ?>
                                            <?php $oth=$row['n_of_family']*$other_quantity; ?>
                                         <?php
       $insert=$con->prepare("insert into wait_final_received set names='$hof_name',nida='$nid',r_id='$r_id', number_fmly='$nof_f',phone='$phone',district='$district',maize='$maize',rice='$rice',oil='$oil',beans='$beans',other='$oth',received='not done',refug_status='$refug_status',skip_camp='$skip_camp'");

        $test=$insert->execute();
        if($test==true)
            {
            	//echo "<script>window.alert('now refugees can start to get aid');window.location='../enable_aid_to_refugee.php'</script>'";
            }
        else
        	{
        		echo "<script>window.alert('fail to start getting aid');window.location='../enable_aid_to_refugee.php'</script>'";
        	}
    
       }// while

   }//try close
    catch(PDOException $e){echo"connetion error";}
  }//construct
}//class
$obj=new retrive_refugees();

?>
                                    