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
                                <CENTER><h4 class="title">REGISTER AID CAMPANY</h4></CENTER>
                                
                            </div>
                            <div class="content">
                                <form action="code/add_aid_company_code.php" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>COMPANY NAME</label>
                                                <input type="text" name="c_name" class="form-control" placeholder="Enter name of aid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>TYPE OF COMPANY</label>
                                               
                                                <select name="type_c" class="form-control">
                                                     <option>PUBLIC</option>
                                                     <option>PRIVATE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>TYPE OF AID</label>
                                               
                                                <select name="type_aid" class="form-control">
                                                     <option>FOOD</option>
                                                     <option>TOOL</option>
                                                     <option>MEDICAL</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>NAME OF AID</label>
                                               
                                                <select name="name_aid" class="form-control">
                                                     <?php
  include("../code/con2.php");
  $retrive=mysqli_query($con,"select name_of_food from stock_of_food");

 
  while($row=mysqli_fetch_array($retrive))
  {
  $id=$row['food_id'];
  ?>
                                                    <option><?php echo $row['name_of_food'];?></option> 
                                              
<?php

  }
  ?>                                             <option>other type</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>QUANTITY</label>
                                                <input type="text" name="Quantity" class="form-control" placeholder="Enter QUANTITY" value="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>REGISTERED BY</label>
                                                <input type="text" name="receiver" class="form-control" value="<?php echo $name; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">ADD CAMPANY</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8"> 
                        <div class="card">
                            <div class="header">
                               <CENTER> <h4 class="title">VIEW AID CAMPANY</h4></CENTER>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Company Name</th>
                                         <th>type of Company</th>
                                        <th>Type Of Aid</th>
                                        <th>Name of Aid</th>
                                        <th>Quantity</th>
                                        <th>Aggree</th>
                                         </tr> 
                                    </thead>
                                    <tbody>
                                    
                                                                  
            
<?PHP class Aid_Campany{  
function __construct(){
try{
  $now=date("Y,d,m");
  include '../code/connection.php';
 
  $a=$con->prepare("SELECT * FROM `aid_campany`");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
  ?>            

<tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name_of_campany']; ?></td>
                                            <td><?php echo $row['type_campany']; ?></td>
                                            <td><?php echo $row['typeaid']; ?></td>
                                            <td><?php echo $row['name_aid']; ?></td>
                                            <td><?php echo $row['quntity']; ?></td>
                                            <td><?php echo $row['admin_aggree']; ?></td>
                                            
                                        </tr>
                                         <?php
}
  if($a==true){}
     date("Y,d,m");
}catch(PDOException $e){echo"connetion error";}
  }
}
$obj=new aid_campany();

?>
                                  </tbody>
                                </table>

                            </div>
                                <div class="footer">
                                    <div class="legend">
     
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> View Aid Campany
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