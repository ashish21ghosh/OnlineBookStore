<?php
session_start();
$table = $_GET["id"];
if(isset($_GET["fid"]))
$fid = $_GET["fid"];
else $fid = $_GET["gid"];
$head = $table ;
switch($head)
{
case "t01" :
$head = "Literature & Fiction";break;
case "t02" :
$head = "Biographies & Autobiographies" ;break;
case "t03" :
$head = "School & College books" ;break;
case "t04" :
$head = "Comics & Graphic Novels" ;break;
case "t05" :
$head = "Science & Technology" ;break;
case "t06" :
$head = "History & Politics" ;break;
case "t07" :
$head = "Health & Fitness" ;break;
case "t08" :
$head = "Family & Relationship" ;break;
case "t09" :
$head = "Phylosophy" ;break;
case "t10" :
$head = "Religion & Spirituality" ;break;
default:
break;
}

$con = mysql_connect("localhost","root","");
if(!$con){die("ERROR : Connection Failed!!!");}
mysql_select_db("books_lib",$con);
$query = mysql_query("SELECT * FROM `$table` WHERE fid = $fid ;",$con);
$d = mysql_fetch_array($query);
$name = $d['name'];
$author = $d['author'];
$publisher = $d['publisher'];
$year = $d['year'];
$pic = $d['pic'];
$price = $d['price'];

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $name; ?></title>
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

<table width="100%" style="margin-top:5px; border-collapse: collapse;" border="0">
<tr>
<td width="333px" rowspan="4" valign="top">
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
<td width="732px">
<table><tr><td><span class="h_font"><a href="books.php?id=<?php echo $table.'" id="a">'.$head.'</a> <font size="6">/</font>
<font size="5"> '.$name;?></font></span><hr width="600px"></td></tr></table>
<table id="buy_tab" border="0">
<tr><td width="230px" rowspan="3">
<img src="images/<?php echo $pic.'" id="buy_block"></td><td valign="top"><span id="h_font">'.$name.'</span><span id="arial">
<hr><hr><b>Author : </b>'.$author.'<br/><b>Publisher : </b>'.$publisher.'<br><b>Released : </b>'.$year.'</span></td></tr>
<tr><td align="center"><hr><span style="font-size:140%;font-weight:bold;font-family:Arial,Helvetica,sans-serif;">Rs. '.$price.'</span>
<hr></td></tr><tr><td align="center"><a href="buy.php?id='.$table.'&gid='.$fid.'"><img src="images/cart.jpg" id="button1"></a></td></tr>';?>
</table>
</td>
<td width="267px" rowspan="4" valign="top">
<div id="r_box">
<?php
if(isset($_GET['gid'])){
echo '<span id="rh"><a href="cart.php" id="a">My cart</a></span>
<hr><table><tr><td valign="top"><span id="font">Name: </span></td><td><span id="font">'.$name.'</tr><tr><td><span id="font">Price: </span></td><td><span id="font">Rs. '.$price.'</td></tr><tr><td><span id="font">Quantity: </span></td><td><form action="add.php?id='.$table.'&fid='.$fid.'" method="post"><select name="qty" style="width: 50px;">
  <option value="1" selected="selected">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select></td></tr></table><hr><input type="submit" value="Add" id="button">';}
else{if(isset($_SESSION['mycart']))
{$count = count($_SESSION['mycart']);
$amount = 0;
for($j=0;$j < $count;$j++){$amount += ($_SESSION['mycart'][$j][1])*($_SESSION['mycart'][$j][2]);}
echo '<span id="rh"><a href="cart.php" id="a">My cart</a></span>
<hr><table padding="5px"><tr><td><img src="images/bk.png" width="50" style="opacity:0.9;"></td><td><h2 style="font-weight: normal;color:rgb(30,41,138);"><i>('.$count.')</i></h2></td>';
echo '<td><img src="images/pay.png" style="opacity:0.9;"></td><td><h2 style="font-weight: normal;color:rgb(30,41,138);"><i>Rs. '.$amount.'</h2></i></td></tr><tr><td colspan="3"><hr><a href="place.php"><img src="images/chck.png" id="button2"></a></td></tr></table>';
}
else echo
'<span id="rh">My cart</span>
<hr><table id="rh" style="font-size:15px; "><tr><td><img src="images/martin.jpg" style="width:50px;float: left;"></td><td width="5px"></td><td rowspan="2"><em>"A reader lives a thous& lives before he dies. The man who never reads lives only one."<br></em></td></tr></table><i><b style="margin-left: 80px;">-George R.R. Martin</b></i><hr><em style="margin: 10px;">You haven\'t added anything yet.</em>';
;}
?>
</div>
<img src="images/ad4.gif" id="r_box2"/>
</div>
</td>
</tr>
</table>

</body>
</html>