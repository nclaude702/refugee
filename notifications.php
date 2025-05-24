<?php 
class notify{
   
  function __construct(){

try{
  $now=date("Y,d,m");
  include 'code/connection.php';
 
  $a=$con->prepare("SELECT * FROM `daily_info` order by id DESC limit 2");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
    $info=$row['information'];
    $from=$row['name_of_add_info'];
  ?>
                         
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-news-paper',
            	message: "<?php echo"<a href='daily_info.php' style='color: black;'> ", $info,' from ',$from,"</a>"; ?></b>."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
    <?php
    }
  if($a==true){}
     date("Y,d,m");
}catch(PDOException $e){echo"connetion error";}
  }
}
$obj=new notify();

?>