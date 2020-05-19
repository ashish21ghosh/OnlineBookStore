<?php
session_start();
$i = $_GET['d'];
unset($_SESSION['mycart'][$i]);
$_SESSION['mycart'] = array_values($_SESSION['mycart']);
if(count($_SESSION['mycart']) == 0){unset($_SESSION['mycart']);header("Location:index.php");}
else{
    if(isset($_GET['id'])){header("Location:cart.php?id=chk");}
     else{header("Location:cart.php");}
     }
?>