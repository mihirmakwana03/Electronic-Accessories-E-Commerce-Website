<?php 
 
 session_start();
 
 if (isset($_POST['cart'])) {
 include "Log In_Cart.php";
 } else {
 include "order.php";
 
 }




 ?>