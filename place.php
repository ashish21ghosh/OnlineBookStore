<?php
session_start();
if(!isset($_SESSION['name'])){header('Location: login_form.php?id=chk');}
else{header('Location: cart.php?id=chk');}
?>