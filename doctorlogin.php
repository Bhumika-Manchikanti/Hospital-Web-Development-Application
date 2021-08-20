<?php
session_start();
include("connection.php");
?>
<html>
<head><title>Doctor login</title>
</head>
<body>
<br>
<br>
<center>
<form method="POST" action="pdetails.php">
<table border="0" height="300" width="500" bgcolor="grey">
<tr>
<td><h1 style="color:red" align="center"><u>Doctor</u></h1></td><br>
</tr>
<tr>
<td><b>Id</b>:&nbsp&nbsp&nbsp<input type="text" size="25" placeholder="emp id" name="id"></td>
</tr>
<tr>
<td><b>Password</b>:<input type="password" size="25" placeholder="password" name="pass"></td><br>
</tr>
<br>
<br>
<tr>
<td align="center"><input type="submit" name="submit" value="LOGIN"></td><br><br>
</tr>
</center>
</form>
</table>
<a href="doctorinfo.php" target="jh"><h1 align="left">
<font face="verdana" color="sky blue">
Back</font></h1></a>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$id = $_POST['id'];
$pwd = $_POST['pass'];
$query = "SELECT * FROM DOCTOR2 WHERE id='$id' && password='$pwd'";
$sam = mysqli_query($conn, $query);
$total= mysqli_num_rows($sam);
if($total=TRUE)
{
header("location:pdetails.php");
}
else{
echo "login failed";
}
}
?>