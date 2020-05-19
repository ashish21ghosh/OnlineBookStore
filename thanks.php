<?php
session_start();
$username = $_SESSION['name'];
$password = $_POST['password'];


$con = mysql_connect('localhost','root','');
$db = mysql_select_db('books_lib');
$query = "SELECT password, salt
        FROM users
        WHERE username = '$username';";
$result = mysql_query($query,$con);
$userData = mysql_fetch_array($result, MYSQL_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
if($hash != $userData['password']) 
{
    header('Location:cart.php?id=chk');
}
else{echo '<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order placed</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.jpg" type="image/x-icon">
<script src="js/script.js"></script>
</head>
<body>
<table id="head">
<tr>
<td>
<font size="8"><a href="index.php" id="a1">OnlineBooks</a></font>
</td>
<td></td>
</tr>
</table>
<table id="table"><tr><td width="933px" valign="top"><hr></td><td align="center" width="134px"><span id="home">Hi, <span id="a01">'.$_SESSION['name'].'</span></span></td><td align="center" width="133px"><a href="index.php" id="a01"><span id="home">Home</span></a></td><td align="center"><a href="logout.php" id="a01"><span id="home">Logout</span></a></td></tr></table>
<table style="margin-left:auto;margin-right: auto; margin-top: 140px"><tr><th><h1>Thank You !!!</h1></th></tr></table><table style="margin-left:auto;margin-right: auto;margin-top: -1px;font-size: 20px;" id="box"><tr><td>Your order has been placed successfully.<br> Click <a href="index.php">here</a> to go to Home Page.</td></tr></table>

</body></html>
';
unset($_SESSION['mycart']);}
?>



