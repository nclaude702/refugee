<?php
try{
    include('../../code/connection.php');
    $foodname=$_POST['foodname'];
    $foodno=$_POST['foodno'];
    $sender=$_POST['send'];
    $receiver=$_POST['receiver'];
    $insert=0;
    $update=0;

    $retrive_stock=$con->prepare("SELECT * FROM `stock_of_food` WHERE `name_of_food`= '$foodname'");
  	$retrive_stock->execute();
  	$name_of_food=0;
      while($row=$retrive_stock->fetch(PDO::FETCH_ASSOC))
        {
           $food_id=$row['food_id'];
           $name_of_food=$row['name_of_food'];
    
         }
       if($foodname!=$name_of_food)
         {
     	     $send="insert into stock_of_food set name_of_food='$foodname',no_food='$foodno', sender='$sender',receiver='$receiver'";

            $insert=$con->exec($send);
           if($insert==true)
              {
                echo "<script>window.alert('thank you for Add new food');window.location='../add_stock_food.php'</script>'";
              }
           else
              {
                echo "<script>window.alert('fail to Add food');window.location='../add_stock_food.php'</script>'";
              }
          }
       else
           {
              $update=$con->prepare("UPDATE `stock_of_food` SET `no_food` = `no_food`+'$foodno',sender='$sender' WHERE `name_of_food`= '$name_of_food'");
                $update->execute();
                if($update== true)
                    {
    	                echo "<script>window.alert('thank you for Add food');window.location='../add_stock_food.php'</script>'";
                    }
                else
                     {
                      echo "<script>window.alert('fail to Add food');window.location='../add_stock_food.php'</script>'";
                    }
    }
   


}catch(PDOException $e){echo "connection problem";}
?>