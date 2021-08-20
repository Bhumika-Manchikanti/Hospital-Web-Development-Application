<?php
include("connection.php");
?>
<html>
<h3>Enter patient ID:</h3>
</html>
<form action="" method="GET"> 
id:<input type="number" name="did" /><br><br>
<input type="submit" name="submit" value="submit"/>
</form>
<a href="feedback.php" target="jh"><h1 align="right"><font face="verdana" color="sky blue">Next</font></h1></a>
<?php
if($_GET['submit'])
{
$ddid=$_GET['did'];
$query="SELECT * FROM PATIENT2 where id='".$ddid."'";
$data=mysqli_query($conn, $query);
$result=mysqli_fetch_assoc($data);
echo "FNAME:".$result["fname"]."<br>";
echo "LNAME:".$result["lname"]."<br>";
echo "DOB:".$result["dob"]."<br>";
echo "PROBLEM:".$result["problem"]."<br>";
echo "PHONE:".$result["phone"]."<br>";
}
?>
