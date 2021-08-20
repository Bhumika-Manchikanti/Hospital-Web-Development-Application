<?php
//<?php 
  $database = mysqli_connect('localhost', 'root', '', 'webproject');
 // $username = "";
  //$email = "";
  
//include("connection.php");
if (isset($_POST['submit']))
 {
$m=$_POST['mail'];
$n=$_POST['name'];
$p=$_POST['phone'];
$sql = "INSERT INTO feedback (mail,name,password) VALUES ('$m','$n','$p')";
    $from="";
    $to=$_POST['mail'];
    $subject="Hospital management system";
    $message="Thank you for giving feedback";
    if(mail($to,$subject,$message,$from)){
      echo "<h1>We received your Feedback...Thank you for giving Feedback!!</h1>";
    }
    else{
      echo "not sent";
    }
}
?>