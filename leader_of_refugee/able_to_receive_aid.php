<?php
session_start();
if (isset($_SESSION['h_id'])) { 
    $uid=$_SESSION['h_id'];
    $leader_name=$_SESSION['lname'];
    $username=$_SESSION['username'];
    $region=$_SESSION['region'];?>
<!doctype html>
<html lang="en">
<head>
	<?php include("head_bootsrap_link.php");?>
</head>
<body>


<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

      <?php include("left_panel_menu.php"); ?>

    <div class="main-panel">
        <?php include("up_dashboard.php"); ?> 
        <div class="content">
          
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                               
                               <h4 class="title"><center>CONFORM AID TO REFUGEE</center></h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                              <form action="code/check_recv_code.php" method="POST">
                                <table class="table table-hover table-striped">
                                   <thead>
                                        <th><i class="pe-7s-id"></i>RID</th>
                                        
                                        <th>Names </th>
                                        <th>National Id</th>
                                        <th>N of family</th>
                                        <th>phone</th>
                                        <th>district</th>
                                        <th>maize</th>
                                        <th>rice</th>
                                        <th>oil</th>
                                        <th>beans</th>
                                        <th>other</th>
                                        <th></th>
                                        <th>date</th>
                                        
                                    </thead>
                                    <tbody>
                                         <?Php


try{
  $now=date("Y,d,m");
  include '../code/connection.php';
 
  $a=$con->prepare("SELECT * FROM `wait_final_received` WHERE received='not done' and district='$region'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $wr_id=$row['wr_id'];
    $nida=$row['nida'];
  ?>
                                        <tr>
                                            <td><?php echo $row['r_id']; ?></td>
                                            <td><?php echo $row['names']; ?></td>
                                            <td><?php echo $row['nida']; ?></td>
                                            <td><?php echo $row['number_fmly']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['district']; ?></td>
                                            <td><?php echo $row['maize']; ?></td>
                                            <td><?php echo $row['rice']; ?></td>
                                            <td><?php echo $row['oil']; ?></td>
                                            <td><?php echo $row['beans']; ?></td>
                                            <td><?php echo $row['other']; ?></td>
                                            <td><?php echo $row['received']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            
                                            
                                            
                                        </tr>
  <?php
 } 
}catch(PDOException $e){echo"connetion error";} 
?>
                                    </tbody>
                                </table>
                                </form>

                            </div>
                        </div>
                    </div>

                   
                     </div>
                  

                </div>
            </div>
        </div>



        <?php include("footer.php"); ?>

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