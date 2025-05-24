<?php
session_start();
if (isset($_SESSION['h_id'])) 
  {
    $uid=$_SESSION['h_id'];$leader_name=$_SESSION['lname'];$username=$_SESSION['username'];$region=$_SESSION['region'];?>
?>
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

    	<?php

       include("left_panel_menu.php");
        ?>

    <div class="main-panel">
        <?php
         include("up_dashboard.php");
        ?>


        <div class="content" style="background-image: url(../assets/img/2.png);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><center>LIST OF REFUGEE AFFECTED BY DEASESE</center></h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                   <thead>
                                        <th><i class="pe-7s-id"></i>ID</th>
                                        <th>Names </th>
                                        <th>N Id</th>
                                        <th>N of family</th>
                                        <th>Country</th>
                                        <th>province</th>
                                        <th>REGION</th>
                                        <th>illness</th>
                                        <th>BACK HOME</th>
                                        
                                    </thead>
                                    <tbody>
                                         <?Php


try{
  $now=date("Y,d,m");
  include '../code/connection.php';
 
  $a=$con->prepare("SELECT * FROM `refugees` where district='$region' and refug_status='DEASESE'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
  ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['Names']; ?></td>
                                            <td><?php echo $row['N_id']; ?></td>
                                            <td><?php echo $row['N_of_family_M']; ?></td>
                                            <td><?php echo $row['country']; ?></td>
                                            <td><?php echo $row['province']; ?></td>
                                            <td><?php echo $row['district']; ?></td>
                                            <td><?php echo $row['refug_status']; ?></td>
                                            <td><?php echo $row['skip_camp']; ?></td>
                                            <td><a href="update_desease_refug_check.php?id=<?php  echo $id ?>"><button type="submit" class="btn btn-info btn-fill pull-right">UPDATE</button></a></td>
                                            
                                        </tr>


                                         <?php
}
  if($a==true){}
     date("Y,d,m");
}catch(PDOException $e){echo"connetion error";}
 

?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                     </div>


                </div>
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
            	message: "Welcome to <b>Kigeme refugees Management System </b>."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
<?php
}
else
{
   header('location:../index.php');
}
?>