
<?php
session_start();
if (isset($_SESSION['uid'])) {
  $id=$_SESSION['user'];
  $name=$_SESSION['user'];
  $user=$_SESSION["user"];
    ?>
<!doctype html>
<html lang="en">
<head>
	<?php include("head_bootsrap_link.php");?>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">
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
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title"><center>ADD LEADER OF REFUGEE</center></h4>
                                <p class="category"></p>
                            </div>
                            <div class="content">
                                <form action="code/refugees_leader_code.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>leader name</label>
                                                <input type="text" name="names" class="form-control" placeholder="Enter name of tools" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>region</label>
                                                <input type="text" name="district" class="form-control" placeholder="Enter district or region or province" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="Enter phone" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>username</label>
                                                <input type="text" name="username" class="form-control" placeholder="Enter username" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>password</label>
                                                <input type="text" name="password" class="form-control" placeholder="Enter your password" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>TOOLS RECEIVED BY</label>
                                                <input type="text" name="register" class="form-control" value="<?php echo $name; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">ADD LEADER</button>
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
                                                <input type="text" name="name" class="form-control" placeholder="Enter name of head of family" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>NATIONAL IDENTIFICATION</label>
                                                <input type="text" name="nid" class="form-control" placeholder="Enter national identification number" required >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>NUMBER OF FAMILY MEMBERS</label>
                                                <input type="number" name="noff" class="form-control" placeholder="Enter Number of family member" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PHONE </label>
                                                <input type="text" name="phone" class="form-control" placeholder="phone number" 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>COUNTRY</label><br>
                                                <select name="country" class="form-control">
                                                    <option>RDC</option>  
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
                                                <input type="text" name="district" class="form-control" placeholder="Enter Region" value="" required>
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
                                                <textarea name="amoff" rows="5" class="form-control" placeholder="Here can write your family members name"></textarea>
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


v
               

                    
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

	 
</html>
<?php
}
else
{
   header('location:../index.php');
}
?>