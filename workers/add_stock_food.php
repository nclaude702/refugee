<?php
session_start();
if (isset($_SESSION['uid'])) {
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
                                <CENTER><h4 class="title">ADD FOOD</h4></CENTER>
                                
                            </div>
                            <div class="content">
                                <form action="code/add_food_code.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>FOOD NAME</label>
                                               
                                                <select name="foodname" class="form-control">
                                                     <?php
     include("../code/con2.php");
     $retrive=mysqli_query($con,"select name_of_food from stock_of_food");
  
     while($row=mysqli_fetch_array($retrive))
       {
         $id=$row['food_id'];
  ?>
                                                    <option><?php echo $row['name_of_food'];?></option> 
                                              
 <?php } ?>                                             <option>other type</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>QUANTITY</label>
                                                <input type="text" name="foodno" class="form-control" placeholder="Enter QUANTITY" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>FOOD PROVIDED BY</label>
                                                <select name="send" class="form-control">
                                                     <?php
     include("../code/con2.php");
     $retrive=mysqli_query($con,"select DISTINCT name_of_campany from aid_campany");
  
     while($row=mysqli_fetch_array($retrive))
       {
         $id=$row['id'];
         $name_of_campany=$row['name_of_campany'];
  ?>
                                                    <option><?php echo $row['name_of_campany'];?></option> 
                                              
 <?php } ?>                                             <option>other type</option>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>FOOD RECEIVED BY</label>
                                                <input type="text" name="receiver" class="form-control" value="<?php echo $name; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">ADD FOOD</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8"> 
                        <div class="card">
                            <div class="header">
                               <CENTER> <h4 class="title">FOOD AVAILABLE</h4></CENTER>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>TOOLS ID</th>
                                        <th>Name Of Tools </th>
                                         <th>Number of Tools</th>
                                        <th>Sender</th>
                                        <th>Receiver</th> </tr> 
                                    </thead>
                                    <tbody>
                                    
                                                                  
            
<?PHP class tools{  
function __construct(){
  try{ 
     include '../code/connection.php'; 
     $a=$con->prepare("SELECT * FROM `stock_of_food`");
     $a->execute();
     while($row=$a->fetch(PDO::FETCH_ASSOC)){ 
       $id=$row['food_id'];
      ?>            

<tr>
                                            <td><?php echo $row['food_id']; ?></td>
                                            <td><?php echo $row['name_of_food']; ?></td>
                                            <td><?php echo $row['no_food']; ?></td>
                                            <td><?php echo $row['sender']; ?></td>
                                            <td><?php echo $row['receiver']; ?></td>
                                            
                                        </tr>
                                         <?php
         } 
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
                                        <i class="fa fa-history"></i> View stock of camp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            <?php include("footer.php"); ?>
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

	 

</html>
<?php
}
else
{
   header('location:../index.php');
}
?>