
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title"><center>SIMPLE REPORT</center></h4>
                            </div>
                            <div class="content">
                                
<?Php
try{
class refugees{
   
  function __construct(){
  include '../code/connection.php';
      $a=$con->prepare("SELECT * FROM `refugees` where r_country='RWANDA'");
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
                                                <label>NUMBER OF FAMILY AND ALL REFUGEE</label>
                                                <input type="text" name="noffamily" value="<?php echo $NNOFF,'  FAMILY',' OF ',$noffamily,' REFUGEES'; ?>" class="form-control" READONLY>
                                            </div>
                                        </div>
                                    </div>
<?php
        }

    public function hostel(){
          include '../code/connection.php';
            $a=$con->prepare("SELECT * FROM `setting_camp`");
            $a->execute();
 
                while($row=$a->fetch(PDO::FETCH_ASSOC)){
                    $camp_id=$row['camp_id'];
                    $camp_hostel=$row['camp_hostel'];
                    $max_family=$row['max_family'];
                  
                 }

?>
                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>AVAILABLE HOSTEL</label>
                                                <input type="text" value="<?php echo 'HOSTEL NUMBER ',$max_family,'  AVAIBLE IS ',$camp_hostel; ?>" class="form-control" READONLY>
                                            </div>
                                        </div>
                                    </div>
<?php
        }
        public function stock(){
          include '../code/connection.php';
            $a=$con->prepare("SELECT * FROM `stock_of_food`");
            $a->execute();
             $rice=0;$maize=0;$beans=0;$oil=0;$others=0;$patato=0;
             $qpatato=0;$qothers=0;$qoil=0;$qbeans=0;$qmaize=0;$qrice=0;
                while($row=$a->fetch(PDO::FETCH_ASSOC)){
                    $food_id=$row['food_id'];
                    $name_of_food=$row['name_of_food'];
                    $no_food=$row['no_food'];
                    if($name_of_food=="rice"){$rice=$name_of_food;$qrice="$no_food";}
                    if($name_of_food=="maize"){$maize=$name_of_food;$qmaize="$no_food";}
                    if($name_of_food=="beans"){$beans=$name_of_food;$qbeans="$no_food";}
                    if($name_of_food=="oil"){$oil=$name_of_food;$qoil="$no_food";}
                    if($name_of_food=="others"){$others=$name_of_food;$qothers="$no_food";}
                    if($name_of_food=="flour"){$flour=$name_of_food;$qflour="$no_food";}
                  
                 }

?>
                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>STOCK AVAILABLE RICE ,MAIZE AND BEANS</label>
                                                <input type="text" value="<?php  echo $rice,'  = ',$qrice,' ',$maize,'  = ', $qmaize,' ',$beans,'  = ',$qbeans; ?>" class="form-control" READONLY>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> STOCK AVAILABLE OIL,FLOUR AND OTHERS</label>
                                                <input type="text" value="<?php echo $oil,'  = ',$qoil,' ',$flour,'  = ', $qflour,' ',$others,'  = ',$qothers; ?>" class="form-control" READONLY>
                                            </div>
                                        </div>
                                    </div>
<?php
        }

    public function receive_aid(){
          include '../code/connection.php';
            $a=$con->prepare("SELECT * FROM `wait_final_received`where received='received'");
            $a->execute();
            $camp_r=0;
 
                while($row=$a->fetch(PDO::FETCH_ASSOC)){
                    $wr_id=$row['wr_id'];
                    $camp_r=$camp_r+1;
                  
                 }
            $b=$con->prepare("SELECT * FROM `wait_final_received`where received='not done'");
            $b->execute();
            $camp_not_r=0;
 
                while($row=$b->fetch(PDO::FETCH_ASSOC)){
                    $wr_id=$row['wr_id'];
                    $camp_not_r=$camp_not_r+1;
                  
                 }

?>
                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>RECEIVED AND NOT RECEIVED AID</label>
                                                <input type="text" value="<?php echo 'RECEIVED ',$camp_r,'  NOT RECEVE AID IS ',$camp_not_r; ?>" class="form-control" READONLY>
                                            </div>
                                        </div>
                                    </div>
<?php
        }

}
$obj=new refugees();
$obj->hostel();
$obj->stock();
$obj->receive_aid();
}catch(PDOException $e){echo"connetion error";}

?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <img src="../assets/img/k2.jpg" height="480px" width="700px">
                    </div>
                </div>



               

                    
            </div>
        </div>


        <?php
        include("footer.php");
        ?>

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