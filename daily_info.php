<!doctype html>
<html lang="en">
<head>
	<?php
    include("head_bootstap.php");
    ?>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
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
                               <h4 class="title"><center>VIEW INFORMATION ABOUT KIGEME REFUGEE MANAGEMENT SYSTEM</center></h4>
                                <p class="category"></p>
                            </div>
                         <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                   <thead>
                                        
                                        <th>INFORMATION </th>
                                        <th>SENDER</th>
                                        
                                    </thead>
                                    <tbody>
                                         <?Php
class refugees{
   
  function __construct(){

try{
  $now=date("Y,d,m");
  include 'code/connection.php';
 
  $a=$con->prepare("SELECT * FROM `daily_info` order by id DESC limit 20");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
  ?>
                                        <tr>
                                            
                                            <td  class="alert alert-warning"><?php echo $row['information']; ?></td>
                                            <td class="alert alert-success"><?php echo"from ", $row['name_of_add_info']; ?></td>

                                        </tr>
                                         <?php
    }

   }catch(PDOException $e){echo"connetion error";}
  }
}
$obj=new refugees();

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
</body>
    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
<?php
include("notifications.php");
?>
</html>
