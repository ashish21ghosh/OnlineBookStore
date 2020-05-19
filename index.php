<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
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
    <tr><td width="933px" valign="top"><hr></td><td align="center" width="134px"> <?php if(isset($_SESSION['name'])){echo '<span id="home">Hi, <span id="a01">'.$_SESSION['name'].'</span></span></td><td align="center" width="133px"><a href="index.php" id="a01"><span id="home">Home</span></a></td><td align="center"><a href="logout.php" id="a01"><span id="home">Logout</span></a></td>';}else{echo '<a href="index.php"><span id="home">Home</span></a></td><td align="center" width="133px"><a href="login_form.php"><span id="home">Login</span></a></td><td align="center"><a href="reg_form.php"><span id="home">Register</span></a></td>';}?></tr></table>
<table width="100%" style="margin-top:5px; border-collapse: collapse;">
<tr>
<td width="260px" rowspan="4" valign="top">
<ul><h3><div style="font-size:23px;">Categories</h3></strong>
<hr width="215" align="left">
<li><a href="books.php?id=t01" id="a">Literature & Fiction</a></li>
<hr width="215" align="left">
<li><a href="books.php?id=t02" id="a">Biographies & Autobiographies</a></li>
<hr width="215" align="left">
<li><a href="books.php?id=t03" id="a">School & College books</a></li>
<hr width="215" align="left">
<li><a href="books.php?id=t04" id="a">Comics & Graphic Novels</a></li>
<hr width="215" align="left">
<li><a href="books.php?id=t05" id="a">Science & Technology</a></li>
<hr width="215" align="left">
<li><a href="books.php?id=t06" id="a">History & Politics</a></li>
<hr width="215" align="left">
<li><a href="books.php?id=t07" id="a">Health & Fitness</a></li>
<hr width="215" align="left">
<li><a href="books.php?id=t08" id="a">Family & Relationship</a></li>
<hr width="215" align="left">
<li><a href="books.php?id=t09" id="a">Philosophy</a></li>
<hr width="215" align="left">
<li><a href="books.php?id=t10" id="a">Religion & Spirituality</a></li>
<hr width="215" align="left">

</td>
<td align="center">
<img src="images/a01.jpg" id="img01">
</td>
<td width="20%" rowspan="4" valign="top">
<?php
if(isset($_SESSION['mycart']))
{$count = count($_SESSION['mycart']);
$amount = 0;
for($j=0;$j < $count;$j++){$amount += ($_SESSION['mycart'][$j][1])*($_SESSION['mycart'][$j][2]);}
echo '<div id="r_box">
<span id="rh"><a href="cart.php" id="a">My cart</a></span>
<hr><table padding="5px"><tr><td><img src="images/bk.png" width="50" style="opacity:0.9;"></td><td><h2 style="font-weight: normal;color:rgb(30,41,138);"><i>('.$count.')</i></h2></td>';
echo '<td><img src="images/pay.png" style="opacity:0.9;"></td><td><h2 style="font-weight: normal;color:rgb(30,41,138);"><i>Rs. '.$amount.'</h2></i></td></tr><tr><td colspan="3"><hr><a href="place.php"><img src="images/chck.png" id="button2"></a></td></tr></table>';
}
else echo
'<div id="r_box">
<span id="rh">My cart</span>
<hr><table id="rh" style="font-size:15px; "><tr><td><img src="images/martin.jpg" style="width:50px;float: left;"></td><td width="5px"></td><td rowspan="2"><em>"A reader lives a thous& lives before he dies. The man who never reads lives only one."<br></em></td></tr></table><i><b style="margin-left: 80px;">-George R.R. Martin</b></i><hr><em style="margin: 10px;">You haven\'t added anything yet.</em>';
?>
</div>
<img src="images/ad4.gif" id="r_box2"/>
</td>
</tr>
<tr ><td align="center"><hr width="700px"><font size="5">New Arrivals<font><hr width="135px"></td><td colspan="3"></td></tr>
<tr>
<td>
<table class="book_tab">
<tr><td align="center"><a href="buy.php?id=t01&fid=1"><img src="images/b01.jpg" id="book_tab"></a></td><td align="center"><a href="buy.php?id=t01&fid=2"><img src="images/b03.jpg" id="book_tab"></a></td><td align="center"><a href="buy.php?id=t01&fid=3"><img src="images/b02.jpg" id="book_tab"></a></td><td align="center"><a href="buy.php?id=t01&fid=5"><img src="images/b05.jpg" id="book_tab"></a></td><td align="center"><a href="buy.php?id=t01&fid=6"><img src="images/b04.jpg" id="book_tab"></a></td><tr>
</table>
</td>
</tr>
</table>

</body>
</html>