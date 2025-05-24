<?php
session_start();
if (isset($_SESSION['h_id'])) {


$uid=$_SESSION['h_id'];
$leader_name=$_SESSION['lname'];
$username=$_SESSION['username'];
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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                 <h4 class="title"><center>LIST OF SYSTEM USERS</center></h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Name Of user </th>
                                         <th>phone number</th>
                                        <th>username</th>
                                        <th>type</th>  
                                    </thead>
                                    <tbody>
 <?Php
   class users{
       function __construct(){

        try{
           include '../code/connection.php';
           $a=$con->prepare("SELECT * FROM `users`");
           $a->execute();
          while($row=$a->fetch(PDO::FETCH_ASSOC)){

           $id=$row['uid'];
 ?>
                                        <tr>
                                            <td><?php echo $row['uid']; ?></td>
                                            <td><?php echo $row['names']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['type']; ?></td>
                                            
                                        </tr>
  <?php
             }
  
          }catch(PDOException $e){echo"connetion error";}
  }
}
$obj=new users();

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

</html>
<?php
}
else
{
   header('location:../index.php');
}
?>