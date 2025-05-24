<?php
try{
include('../../code/connection.php');
$name_of_tools=$_POST['toolsname'];

$number_of_tools=$_POST['toolsno'];
$sender=$_POST['send'];
$receiver=$_POST['receiver'];

$send="insert into stocjk_of_tools set 	name_of_tools='$name_of_tools',	no_tools='$number_of_tools', sender='$sender',receiver='$receiver'";

$a=$con->exec($send);
if($a==true)
    {echo "<script>window.alert('thank you for Add tools');window.location='../add_stock_tools.php'</script>'";
}else{echo "<script>window.alert('fail to Add tools');window.location='../add_stock_tools.php'</script>'";}
}catch(PDOException $e){echo "connection problem";}
?>