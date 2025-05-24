<?php
session_start();
if (isset($_SESSION['uid'])) {

  $id=($_SESSION['uid']);
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
                                <center><h4 class="title"><i class="pe-7s-users"></i>USER PROFILE</h4></center>
                      </div>

<?php 
try{
  $now=date("Y,d,m");
  include '../code/connection.php';
 
  $a=$con->prepare("SELECT * FROM `users` where uid='$id'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    //$id=$row['uid'];
    $name=$row['names'];
    $phone=$row['phone'];
    $username=$row['username'];
    $pass=$row['password'];
    $type=$row['type'];
  ?>
                            <div class="content">
                                 <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>my user Id</label>
                                                
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label><input type="text" name="pass"value="<?php echo $id; ?>" readonly></label>
                                                
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>my name</label>
                                                
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label><input type="text" name="pass"value="<?php echo $name; ?>" readonly></label>
                                                
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>my phone number:</label>
                                                
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label><input type="text" name="pass"value="<?php echo $phone; ?>" readonly></label>
                                                
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>my username</label>
                                                
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label><input type="text" name="pass"value="<?php echo $username; ?>" readonly></label>
                                                
                                            </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>my password</label>
                                                
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label><input type="password" name="pass"value="<?php echo $pass; ?>" readonly></label>
                                                
                                            </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>user type</label>
                                                
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label><input type="text" name="pass"value="<?php echo $type; ?>" readonly></label>
                                                
                                            </div>
                                    </div>
                                </div>


                                



                                <div class="footer">
                                    
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> view our profile
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <center><h4 class="title"><i class="pe-7s-users"></i>USER PROFILE EDITING</h4></center>
                            </div>
                            <div class="content">
                                <form action="code/update_profile_code.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>USER ID</label>
                                                <input type="text" name="id" class="form-control" value="<?php echo $id; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>MY NAME</label>
                                                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>PHONE</label>
                                                <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>USERNAME </label>
                                                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>PASSWORD</label>
                                                <input type="text" name="password" class="form-control" placeholder="Enter password" value="<?php echo $pass; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>TYPE</label>
                                                <input type="text" name="type" class="form-control" value="<?php echo $type; ?>" readonly>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">UPDATE</button>
                                    <div class="clearfix"></div>
                                </form>
<?php
}
  if($a==true){}
     date("Y,d,m");
}catch(PDOException $e){echo"connetion error";}

?>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> if you
                                        <i class="fa fa-circle text-danger"></i> want to
                                        <i class="fa fa-circle text-warning"></i> update your account
                                    </div>
                                    <hr>
                                    
                                </div>
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