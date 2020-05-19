<?php
session_start();
$username = $_POST['user'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
if($pass1 != $pass2)
    header('Location: reg_form.php');
if(strlen($username) > 30)
    header('Location: reg_form.php');
if($username=='' || $email=='' || $pass1==''){header('Location: reg_form.php');}
else{
$hash = hash('sha256',$pass1);
function createSalt()
{
    $string = md5(uniqid(rand(), true));
    return substr($string, 0, 3);
}
$salt = createSalt();
$hash = hash('sha256', $salt . $hash);


$con = mysql_connect('localhost','root','');
if(!$con){die("Failed to connect to server: ".mysql_error());}
$db = mysql_select_db("books_lib");
$tab = "INSERT INTO users(username,email,password,salt) VALUES ('$username','$email','$hash','$salt')";
$query = mysql_query($tab,$con);
if(!$query){echo 'failed';header('Location: reg_form.php');}
else{$_SESSION['name']=$username;header('Location: index.php');}}
?>
