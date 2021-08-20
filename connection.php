<?php
$servername="localhost";
$username="root";
$password="";
$database="webproject";


$conn=mysqli_connect($servername,$username,$password,$database);

if($conn)
{
echo "";
}
else
{
die("connection failed because".mysqli_connect_error());
}

?>


