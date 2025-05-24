
<?php
session_start();
if (isset($_SESSION['uid'])) {

 $user4=$_SESSION["admin"];

    ?>
<!doctype html>
<html lang="en">
<head>
	<?php include("head_bootsrap_link.php");?>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<?php

       include("left_panel_menu.php");
        ?>

    <div class="main-panel">
        <?php
         include("up_dashboard.php");
        ?>


        <div class="content">
            <div class="container-fluid">
                <form action="code/admin_set_qty_of_aid.php" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">PROVIDING AID TO REFUGEE</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content">



<?Php

class refugees{
   
  function __construct(){
try{
  $now=date("Y,d,m");
  include '../code/connection.php';

 
  $a=$con->prepare("SELECT * FROM `refugees`");
  $a->execute();
  $noffamily=0;
  $id=0;
  $NNOFF=0;
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
    $id=$row['id'];
    $noffamily=$row['N_of_family_M']+$noffamily;
    $id=$id+$row['id'];
    $NNOFF=$NNOFF+1;

}

?>
                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>NUMBER OF ALL REFUGEE</label>
                                                <input type="text" name="noffamily" value="<?php echo $noffamily; ?>" class="form-control" READONLY>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>NUMBER OF FAMILY</label>
                                                <input type="text" name="" value="<?php echo $NNOFF; ?>" class="form-control" READONLY>
                                            </div>
                                        </div>
                                    </div>
<?php
  if($a==true){}
     date("Y,d,m");
}catch(PDOException $e){echo"connetion error";}
  }
}
$obj=new refugees();



?>

                                  <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <label>TYPE OF AID</label><br>
                                                

                                                <select name="type" class="form-control">
                                                     <?php
  include("../code/con2.php");
  $retrive=mysqli_query($con,"select name_of_food from stock_of_food");

 
  while($row=mysqli_fetch_array($retrive))
  {
  $id=$row['food_id'];
  ?>
                                                    <option><?php echo $row['name_of_food'];?></option> 
                                              
<?php

  }
  ?> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                               <label>QUANTITY</label>
                                                <input type="number" name="quantity" class="form-control" placeholder="Enter quantity" required=>
                                            </div>
                                        </div>
                                    </div>  
                                   
                   </form>
                                <div class="footer">
                                    
                                    <hr>
                                    <div class="stats">
                                         <button type="submit" class="btn btn-info btn-fill pull-right">ENABLE AID</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><CENTER> CHECK IF ALL REFUGEE ARE ON THE LIST</CENTER></h4>
                        
                            </div>
                            <div class="content">
                               <div class="content">
                               

                                    <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                   <thead>
                                        <th><i class="pe-7s-id"></i>ID</th>
                                        <th>Names of head family </th>
                                        <th>National Id</th>
                                        <th>Number of family</th>
                                        <th>Phone</th>
                                        <th>District</th>
                                        <th>maize</th>
                                        <th>rice</th>
                                        <th>oil</th>
                                         <th>beans</th>
                                        <th>other type</th>
                                        
                                    </thead>
                                    <tbody>
                                         <?Php
class retrive_refugees{
   
  function __construct(){

try{
  $now=date("Y,d,m");
  include '../code/connection.php';
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
     if($rows['type_of_aid']=="others")
    {
      $other=$rows['type_of_aid'];
      $other_quantity=$rows['quantity'];
    }


    }
  

 
  $a=$con->prepare("SELECT * FROM `RECEIVE_AID`");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['r_aid_id'];
  ?>
                                        <tr>
                                            <td><?php echo $row['r_aid_id']; ?></td>
                                            <td><?php echo $row['name_of_head_of_family']; ?></td>
                                            <td><?php echo $row['national_id']; ?></td>
                                            <td><?php echo $row['n_of_family']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['district']; ?></td>

                                            <td><?php echo $m=$row['n_of_family']*$mquantity; ?></td>
                                            <td><?php echo $r=$row['n_of_family']*$rquantity; ?></td>
                                            <td><?php echo $o=$row['n_of_family']*$oquantity; ?></td>
                                            <td><?php echo $b=$row['n_of_family']*$bquantity; ?></td>
                                            <td><?php echo $oth=$row['n_of_family']*$other_quantity; ?></td>
                                        </tr>
                                         <?php
}
  if($a==true){}
}catch(PDOException $e){echo"connetion error";}
  }
}
$obj=new retrive_refugees();

?>
                                    </tbody>
                                </table>

                            </div>
                               <form action="code/enable_aid_send_code.php" method="POST">

                                    <button type="submit" class="btn btn-info btn-fill pull-right">SEND TO USER </button>
                                    <div class="clearfix"></div>
                                </form>
                               

                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </form>
            </div>
        <?php
        include("footer.php");
        ?>
     
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="../https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>online refugees System Dashboard</b>."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
     <?php
             include("../notifications.php");

            ?>


</html>
<?php
}
else
{
   header('location:../index.php');
}
?>