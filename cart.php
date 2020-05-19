<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php if(isset($_GET['id']) && isset($_SESSION['name'])){echo 'Checkout';}else{echo 'My cart';}?></title>
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
<table id="table">
    <tr><td width="933px" valign="top"><hr></td><td align="center" width="134px"> <?php if(isset($_SESSION['name'])){echo '<span id="home">Hi, <span id="a01">'.$_SESSION['name'].'</span></span></td><td align="center" width="133px"><a href="index.php" id="a01"><span id="home">Home</span></a></td><td align="center"><a href="logout.php" id="a01"><span id="home">Logout</span></a></td>';}else{echo '<a href="index.php"><span id="home">Home</span></a></td><td align="center" width="133px"><a href="login_form.php"><span id="home">Login</span></a></td><td align="center"><a href="reg_form.php"><span id="home">Register</span></a></td></tr></table>';}
if(isset($_GET['id']) && isset($_SESSION['name'])){echo
'<table style="margin:auto; padding: 15px;"><form action="thanks.php" method="post" name="register"></td><td><input type="text" name="name" placeholder="Your Full Name" id="input1" required></td></tr>
<tr><td><textarea name="address" cols="27" rows="5" id="input1" placeholder="Complete Address" required></textarea></td></tr>
<tr><td><input type="text" name="pass1" id="input1" placeholder="Contact Number" required></td></tr>
<tr><td><input type="password" name="password" id="input1" placeholder="Password" required></td></tr>
<tr><td><input type="submit" value="Place Order" id="button"></td><td></td></tr>
</table>';}
$count = count($_SESSION['mycart']);
$i = 0;
echo '<table border="2" style="margin:auto;margin-top: 15px; border-collapse:collapse; padding: 15px;width: 600px;">
<tr height="38px"><th><span id="font1">Serial</span></th><th><span id="font1">Name</span></th><th><span id="font1">Quantity</span></th><th><span id="font1">Price</span></th><th><span id="font1">Sub Total</span></th><th width="20px"></th></tr>';
while($i<$count)
{echo '<tr><td align="center"><span id="font1">'.($i+1).'</span></td><td><span id="font1">'.$_SESSION['mycart'][$i][0].'</span></td><td align="center"><span id="font1">'.$_SESSION['mycart'][$i][1].'</span></td><td align="center"><span id="font1">Rs. '.$_SESSION['mycart'][$i][2].'</span></td><td align="center"><span id="font1">Rs. '.($_SESSION['mycart'][$i][1])*($_SESSION['mycart'][$i][2]).'</span></td>';
if(isset($_GET['id']) && isset($_SESSION['name'])){echo '<td><a href="del.php?id=1&d='.$i.'"><img src="images/del.png" id="close"></a></td></tr>';}
else{echo '<td><a href="del.php?d='.$i.'"><img src="images/del.png" id="close"></a></td></tr>';}
$i++;}
$amount = 0;
for($j=0;$j < $count;$j++){$amount += ($_SESSION['mycart'][$j][1])*($_SESSION['mycart'][$j][2]);}
echo '<tr height="30px"><th colspan="3"><span id="font1">Amount Payable </span></th><th colspan="2"><span id="font1">Rs.'.$amount.'</span></th><td></td></tr>
</table>';
if(!isset($_GET['id'])){
echo '<table style="margin-top: 15px; margin-left: 800px;"><td><a href="place.php"><img src="images/chck.png" id="button2"></a></td></table>';}
?>

</body>
</html>