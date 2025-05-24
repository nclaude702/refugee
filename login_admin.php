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
                                <h4 class="title"><center>Admin Manager Log in</center></h4>
                            </div>
                            <div class="content">
                                <form action="admin/code/login_admin_code.php" method="POST">
                                    <div class="row">
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <center><label>Username</label></center>
                                                <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                    
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                
                                                <input type="submit" name="plogin" class="form-control"value="Login"style="background-color: violet;">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> 
                                        <i class="fa fa-circle text-danger"></i> 
                                        <i class="fa fa-circle text-warning"></i> 
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> 
                                        Log In As Manager Of Camp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card" b>
                            <div class="header">
                                <h4 class="title"></h4>
                            </div>
                            <div class="content">
                                
                                <div class="footer">
                                    <img src="assets/img/4.png" height="60%" width="100%">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> 
                                    </div>
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
	

</html>
