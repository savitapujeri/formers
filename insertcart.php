<?php

include "connect.php";
?>
<?php
session_start();
$name =$_POST['product_name'];
 $price= $_POST['product_price'];
  $Quantity=$_POST['product_quantity'];
   $discount=$_POST['discount'];

$res = array($name,$price,$Quantity,$discount);

print_r($res);
$_SESSION[$name] =$res;
header('location:blog.php');

?>

