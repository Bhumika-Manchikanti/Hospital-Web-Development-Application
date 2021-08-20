<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
</head>
<body>
<form action="" method="GET">
FNAME:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="varchar" name="fname" value=""/><br><br>
LNAME:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="varchar" name="lname" value=""/><br><br>
ID:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="varchar" name="id" value=""/><br><br>
PASSWORD:&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="password" name="password" value=""/><br><br>
CONFORM PWD:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="varchar" name="cpassword" value=""/><br><br>
PHONE:&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp<input type="bigint" name="phone" value=""/><br><br>
SPECIALIST:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp<input type="varchar" name="specialist" value=""/><br><br>
YOE:&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="int" name="yoe" value=""/><br><br>
<input type="submit" name="submit" value="submit"/>
</form>
<a href="feedback.php" target="jh"><h1 align="right"><font face="verdana" color="sky blue">Next</font></h1></a>
<?php
if($_GET['submit'])
{
$f=$_GET['fname'];
$l=$_GET['lname'];
$i=$_GET['id'];
$pwd=$_GET['password'];
$p=$_GET['phone'];
$s=$_GET['specialist'];
$y=$_GET['yoe'];
$cp=$_GET['cpassword'];

if($l!="" && $f!="" && $i!="" && $pwd!="" && $p!="" && $s!="" && $y!="" && $cp!="")
{

$query="INSERT INTO DOCTOR2 VALUES('$l','$f','$i','$pwd','$p','$s','$y')";
$data=mysqli_query($conn, $query);

if($data)
{
echo "Registered Successfully";
}
}
else
{
echo "All fields are required";
}
}
?>

</body>

</html>