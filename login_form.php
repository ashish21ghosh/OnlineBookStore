<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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
<table id="table">
    <tr><td width="933px" valign="top"><hr></td><td align="center" width="134px"> <a href="index.php"><span id="home">Home</span></a></td><td align="center" width="133px"><a href="login_form.php"><span id="home">Login</span></a></td><td align="center"><a href="reg_form.php"><span id="home">Register</span></a></td></tr></table>

<table id="box">
<tr><form action="login.php" method="post" name="login"><td><span id="font">Username : </span></td><td><input type="text" name="username" id="input" placeholder="Username"></td></tr>
<tr><td><span id="font">Password : </span></td><td><input type="password" name="password" id="input" placeholder="Password"></td></tr>
<tr><td><input type="submit" value="Login" id="button"></td><td><a id="a01" href="reg_form.php"><font size="4">Register Here</font><a></td></tr>
</table>

</body>
</html>