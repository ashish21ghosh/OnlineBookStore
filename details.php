<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index</title>
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
</tr>
</table>
<table id="table"><tr><td width="933px"><hr></td><td align="center" width="134px"> <?php if(isset($_SESSION['name'])){echo 'Hi, <a href="account.php" id="a01">'.$_SESSION['name'].'</a></td><td align="center" width="133px"><a href="index.php" id="a01">Home</a></td><td align="center"><a href="logout.php" id="a01">Logout</a></td>';}else{echo '<a href="index.php">Home</a></td><td align="center" width="133px"><a href="login_form.php">Login</a></td><td align="center"><a href="reg_form.php">Register</a></td>';}?></tr></table>

<table><form action="place.php" method="post" name="register"></td><td><input type="text" name="name" placeholder="Your Full Name" id="input1" required></td></tr>
<tr><td><textarea name="address" cols="27" rows="5" id="input1" placeholder="Complete Address" required></textarea></td></tr>
<tr><td><input type="text" name="pass1" id="input1" placeholder="Contact Number" required></td></tr>
<tr><td><input type="password" name="pass" id="input1" placeholder="Password" required></td></tr>
<tr><td><input type="submit" value="Place Order" id="button"></td><td></td></tr>
</table>
</div>
</body>
</html>