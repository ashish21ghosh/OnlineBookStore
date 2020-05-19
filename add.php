<?php
session_start();
$table = $_GET['id'];
$fid = $_GET['fid'];
$con = mysql_connect("localhost","root","");
if(!$con){die("ERROR : Connection Failed!!!");}
mysql_select_db("books_lib",$con);
$query = mysql_query("SELECT * FROM `$table` WHERE fid = $fid ;",$con);
$d = mysql_fetch_array($query);
$name = $d['name'];
$price = $d['price'];
if(isset($_SESSION['mycart']))
{
$count = count($_SESSION['mycart']);
$i = 0;
while($i<$count && $_SESSION['mycart'][$i][0]!=$name){$i++;}
if($i<$count){
$_SESSION['mycart'][$i][1] = $_POST['qty'];
header("Location:books.php?id=$table");
}
else{
$_SESSION['mycart'][$i][0] = $name;
$_SESSION['mycart'][$i][1] = $_POST['qty'];
$_SESSION['mycart'][$i][2] = $price;
header("Location:books.php?id=$table");
}
}
else
{
$_SESSION['mycart'] = array(array());
$_SESSION['mycart'][0][0] = $name;
$_SESSION['mycart'][0][1] = $_POST['qty'];
$_SESSION['mycart'][0][2] = $price;
header("Location:books.php?id=$table");
}
?>