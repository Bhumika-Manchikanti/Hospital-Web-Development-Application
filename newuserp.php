<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
</head>
<body>
<form action="patientlogin.php" method="GET">
fname<input type="varchar" name="fname" value=""/><br><br>
lname<input type="varchar" name="lname" value=""/><br><br>
id<input type="varchar" name="id" value=""/><br><br>
password<input type="password" name="password" value=""/><br><br>
conform password<input type="varchar" name="cpassword"/><br><br>
phone<input type="bigint" name="phone" value=""/><br><br>
problem<input type="varchar" name="problem" value=""/><br><br>
dob<input type="date" name="dob" value=""/><br><br>
<input type="submit" name="submit" value="submit"/>
</form>
<a href="feedback.php" target="jh"><h1 align="right"><font face="verdana" color="sky blue">Next</font></h1></a>
<?php
if($_GET['submit'])
{
$fi=$_GET['fname'];
$la=$_GET['lname'];
$i=$_GET['id'];
$pwd=$_GET['password'];
$ph=$_GET['phone'];
$pr=$_GET['problem'];
$do=$_GET['dob'];
$cp=$_GET['cpassword'];

if($la!="" && $fi!="" && $i!="" && $pwd!="" && $ph!="" && $pr!="" && $do!="" && $cp!="")
{

$query1="INSERT INTO PATIENT2 VALUES('$la','$fi','$i','$pwd','$ph','$pr','$do')";
$data1=mysqli_query($conn, $query1);
if($data1)
{
echo "Registered successfully";
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