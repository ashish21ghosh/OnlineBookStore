<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];


$con = mysql_connect('localhost','root','');
$db = mysql_select_db('books_lib');
$query = "SELECT password, salt
        FROM users
        WHERE username = '$username';";
$result = mysql_query($query,$con);
if(mysql_num_rows($result) < 1)
{
    header('Location:login_form.php');
}
$userData = mysql_fetch_array($result, MYSQL_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
if($hash != $userData['password']) 
{
    header('Location:login_form.php');
}
else{$_SESSION['name']=$username ;header('Location: index.php');}

?>