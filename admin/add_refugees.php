
<?php
session_start();
if (isset($_SESSION['uid'])) {

 $user4=$_SESSION["admin"];
$id=$_SESSION['uid'];

  $name=$_SESSION['admin'];
 $user=$_SESSION["admin"];

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
                                <CENTER><h4 class="title">ADD USER</h4></CENTER>
                                
                            </div>
                            <div class="content">
                                <form action="code/add_user_code.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>NAME OF USER</label>
                                                <input type="text" name="names" class="form-control" placeholder="Enter name of user" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>PHONE NUMBER</label>
                                                <input type="text" name="phone" class="form-control" placeholder="Enter phone number" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>USERNAME</label>
                                                <input type="text" name="username" class="form-control" placeholder="Enter username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>PASSWORD</label>
                                                <input type="text" name="password" class="form-control" placeholder="Enter password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>TYPE OF USER</label>
                                                <SELECT type="option" name="type" class="form-control">
                                                <option>user</option>
                                                <option>admin</option>

                                            </SELECT>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ADDED BY</label>
                                                <input type="text" name="added_by" class="form-control" value="<?php echo $name; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">ADD USER</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Registering Refugees</h4>
                                <p class="category">  </p>
                            </div>
                            <div class="content">
                                <form action="code/add_refugees_code.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>NAME OF HEAD OF FAMLLY</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter name of head of family" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>NATIONAL IDENTIFICATION</label>
                                                <input type="text" name="nid" class="form-control" placeholder="Enter national identification number" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>NUMBER OF FAMILY MEMBERS</label>
                                                <input type="number" name="noff" class="form-control" placeholder="Enter Number of family member">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PHONE </label>
                                                <input type="text" name="phone" class="form-control" placeholder="phone number" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>COUNTRY</label><br>
                                                <select name="country" class="form-control">
                                                    <option>RDC</option> 
                                                    <option>RWANDA</option> 
                                                   <option>BURUNDI</option> 
                                                   <option>UGANDA</option>
                                                   <option>KENYA</option>
                                                   <option>SUDAN</option> 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PROVINCE</label>
                                                <input type="text" name="province" class="form-control" placeholder="Enter province">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>REGION</label>
                                                <input type="text" name="district" class="form-control" placeholder="Enter Region" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>RECEIVED COUNTRY</label>
                                                <select name="rcountry" class="form-control">
                                                   <option>RWANDA</option> 
                                                    
                                                </select>
                                            </div>
                                        </div>                                     
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>WRITE ALL FAMILY MEMBER NAMES</label>
                                                <textarea rows="5" name="amoff" class="form-control" placeholder="Here can write your family members name" ></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">REGISTER</button>
                                    <div class="clearfix"></div>
                                </form>
                               

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