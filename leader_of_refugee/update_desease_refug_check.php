<?php
session_start();
if (isset($_SESSION['h_id'])) 
  {
    $uid=$_SESSION['h_id'];$leader_name=$_SESSION['lname'];$username=$_SESSION['username'];$region=$_SESSION['region'];?>
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


        <div class="content" style="background-image: url(../assets/img/2.png);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><center>UPDATE REFUGEE ABOUT DEASESE AND BACK HOME</center></h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <form action="code/update_desease_and_status_refug_code.php" method="POST">

    <?php
        $id=$_GET['id'];
        try{
         $now=date("Y,d,m");
         include '../code/connection.php';
 
         $a=$con->prepare("SELECT * FROM `refugees` where id='$id'");
         $a->execute();
         while($row=$a->fetch(PDO::FETCH_ASSOC)){

        $id=$row['id'];
       
  ?>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>NAME OF HEAD OF FAMLLY</label>
                                                <input type="text" name="name" class="form-control"  value="<?php echo $row['Names']; ?>" READONLY>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>NATIONAL IDENTIFICATION</label>
                                                <input type="text" name="nid" class="form-control" value="<?php echo $row['N_id']; ?>" READONLY >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>NUMBER OF FAMILY MEMBERS</label>
                                                <input type="number" name="noff" class="form-control" value="<?php echo $row['N_of_family_M']; ?>" READONLY>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PHONE </label>
                                                <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" READONLY> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label>ID</label><br>
                                                <input type="text" name="id" class="form-control" value="<?php echo $row['id']; ?>" READONLY>   
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>COUNTRY</label><br>
                                                <input type="text" name="phone" class="form-control" value="<?php echo $row['country']; ?>" READONLY>   
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>REGION</label>
                                                <input type="text" name="district" class="form-control" value="<?php echo $row['district']; ?>" READONLY>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ILLNESS</label>
                                                <select name="refug_status" value="<?php echo $row['refug_status']; ?>" class="form-control">
                                                   <option>NORMAL</option> 
                                                   <option>DEASESE</option> 
                                                  
                                                     
                                                </select>
                                            </div>
                                        </div>  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>BACK HOME</label>
                                                <select name="back_home" value="<?php echo $row['skip_camp']; ?>" class="form-control">
                                                   <option>NO</option> 
                                                   <option>YES</option> 
                                                  
                                                     
                                                </select>
                                            </div>
                                        </div>                                   
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>WRITE ALL FAMILY MEMBER NAMES</label>
                                                <textarea name="amoff" rows="5" class="form-control" readonly="TRUE"><?php echo $row['all_member_of_family']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">UPDATE</button>
                                    <div class="clearfix"></div>
<?php
  }
}catch(PDOException $e){echo"connetion error";}
 

?>
        
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