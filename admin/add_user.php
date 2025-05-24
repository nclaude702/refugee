
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
                                                <input type="password" name="password" class="form-control" placeholder="Enter password">
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
                               <CENTER> <h4 class="title">LIST OF USERS</h4></CENTER>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Names </th>
                                         <th>Phone</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>type</th>
                                        <th>Register by</th>
                                     </tr> 
                                    </thead>
                                    <tbody>
                                    
                                                                  
            
<?PHP class tools{  
function __construct(){
try{
  $now=date("Y,d,m");
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
                                            <td><input type="password" value="<?php echo $row['username']; ?>" readonly></td>

                                            <td><?php echo $row['type']; ?></td>
                                            <td><?php echo $row['added_by']; ?></td>
                                            


                                            
                                        </tr>   
                                         <?php
}
  if($a==true){}
     date("Y,d,m");
}catch(PDOException $e){echo"connetion error";}
  }
}
$obj=new tools();

?>
                                  </tbody>
                                </table>

                            </div>
                                <div class="footer">
                                    <div class="legend">
     
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> View leader of refugee
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
            	message: "Welcome to <b>Kigeme refugee Management System</b>."

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