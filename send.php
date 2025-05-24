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
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title"><center>WRITE INFORMATION</center></h4>
                               
                            </div>
                            
                                <form action="code/add_info_code.php" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label></label></br>
                                                <textarea name="info" style="height: 200px; width:300px;"></textarea>
                                            </div>
                                        </div>
                                     </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ADDED BY</label>
                                                <input type="text" name="add" class="form-control" value=""placeholder="Enter your name">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">SEND INFORMATION</button>
                                    <div class="clearfix"></div>
                                </form>
                          
                        </div>
                    </div>

                    <div class="col-md-8">
                      <div class="content"  style="background-image: url(assets/img/.png);">
                       <div class="row">
                         <center><h4>View Daily Information</h4></center>
                           
                            

                           
 <?php 
  include 'code/connection.php';
  $a=$con->prepare("SELECT * FROM `daily_info` order by id DESC limit 10");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
    $info=$row['information'];
    $from=$row['name_of_add_info'];
  ?>
                                <div class="alert alert-info">
                                    
                                    <span>
                                     <?php echo $info," from ",$from; ?></b></span>
                                </div>
 <?php
    }
  ?>
                                
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
 
        <?php
             include("notifications.php");
        ?>
</html>
