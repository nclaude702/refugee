
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
                        <?php 
try{
  $now=date("Y,d,m");
  include '../code/connection.php';
 $camp_id=0;
 $camp_name=0;
  $camp_hostel=0;
  $max_family=0;
  $camp_basic=0;

  $a=$con->prepare("SELECT * FROM `setting_camp`");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $camp_id=$row['camp_id'];
    $camp_name=$row['camp_name'];
    $camp_hostel=$row['camp_hostel'];
    $max_family=$row['max_family'];
    $home_basic=$row['home_basic_'];

}
  if($a==true){}
     date("Y,d,m");
}catch(PDOException $e){echo"connetion error";}

?>
    

                           <div class="header">
                                <CENTER><h4 class="title"><?phP echo $camp_name;?></h4></CENTER>
                                
                            </div>
                            <div class="content">
                                <form action="code/set_camp_code.php" method="POST">
                                    
                                        
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>CAMP HOSTEL AVAILABLE AND USED</label>
                                                <input type="text" name="chostel" class="form-control" value="<?phP echo $camp_hostel,'  HOSTEL AVAILABLE ',$max_family-$camp_hostel,' HOSTEL USED';?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ALL HOSTEL</label>
                                                <input type="text" name="max_family" class="form-control" value="<?phP echo $max_family;?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ADD HOSTEL</label>
                                                <input type="text" name="addhostel" class="form-control" placeholder="Enter number of Hostel you Add">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>BASIC TOOL</label>
                                                <input type="text" name="btool" class="form-control"value="<?phP echo $home_basic;?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">UPDATE</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <img src="../assets/img/k1.jpg" height="480px" width="700px">
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
            	message: "Welcome to <b>Kigeme refugee Management System</b>."

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