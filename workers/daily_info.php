
<?php
session_start();
if (isset($_SESSION['uid'])) { 
    $user=$_SESSION["user"];
    $name=$_SESSION['user'];
    $user=$_SESSION["user"]; ?>
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
                                <h4 class="title">WRITE INFORMATION</h4>
                                <p class="category">add news</p>
                            </div>
                            <div class="content">
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
                                                <input type="text" name="add" class="form-control" value="<?php echo $name; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">ADD INFORMATION</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                     <div class="row">
                            <div class="col-md-6">
                                <h5>View Daily Information</h5>


     
                                
                                        <?php 
class daily_info{ 
       function __construct(){ 
         try{ 
           include '../code/connection.php'; 
           $a=$con->prepare("SELECT * FROM `daily_info` order by id DESC limit 7");
           $a->execute();
           while($row=$a->fetch(PDO::FETCH_ASSOC)){ 
              $id=$row['id'];
              $info=$row['information'];
              $from=$row['name_of_add_info'];
            ?>
                               <div class="alert alert-success">
                                   
                                    <span><b> read information - </b> 
                               <?php echo $info," from ",$from; ?></b>

                                    </span>
                                </div>
                             <?php
    } 
   }catch(PDOException $e){echo"connetion error";}
  }
}
$obj=new daily_info();

?>
                              
                            </div>
                            <div class="col-md-6">
                                <h5>DISCATION OR MESSAGE CHAT</h5>
                                <div class="alert alert-danger">
                                    <form action="code/msg_code.php" method="POST">
                                    
                                    <span><b><textarea name="msg" class="form-control"></textarea> </b> 
                                     </b></span>
                                      <font color="violet">
                                     <input type="text" name="name_add" value="<?php echo $name; ?>"  readonly></font>
                                     <button type="submit" class="btn btn-info btn-fill pull-right">SEND</button>

                                     </form>
                                </div>

                           
                                        <?php 

  include '../code/connection.php'; 
    $a=$con->prepare("SELECT * FROM `msge` order by id DESC limit 5");
    $a->execute();
    while($row=$a->fetch(PDO::FETCH_ASSOC)){ 
      $id=$row['id'];
      $info=$row['msg'];
      $from=$row['come_from'];
  ?>
                                <div class="alert alert-danger">
                                    <span><b> read message and reply - </b> </br>
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
    <?php include("footer.php"); ?>
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
            	message: "Welcome to <b>users refugees System Dashboard</b>."
             

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