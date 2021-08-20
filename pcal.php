<html>
<head>
<script type="text/javascript">
function fun()
{
var price1=document.getElementById('1').value;
var quantity1=document.getElementById('2').value;
var price2=document.getElementById('6').value;
var quantity2=document.getElementById('7').value;
var x=parseInt(price1);
var y=parseInt(quantity1);
var a=parseInt(price2);
var b=parseInt(quantity2);
totalprice=((x*y)+(a*b));
document.getElementById('3').value=totalprice;
var a=/^[a-z]{1}\w+([._]?\w+)*@\w+([._]?\w+)*(\.\w{2,5})+$/;
if(document.getElementById('4').value.match(a))
{
}
else
{
alert("you entered invalid mail");
}
}
</script>
</head>
<body>
<form>
Email:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="4" name="email" required> <br><br>
Phone:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="int" id="5" name="phone"><br><br>
Price1:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="int" id="1" name="price1"><br><br>
Quantity1:&nbsp&nbsp<input type="int" id="2" name="quantity1"><br><br>
Price2:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="int" id="6" name="price2"><br><br>
Quantity2:&nbsp&nbsp<input type="int" id="7" name="quantity2"><br><br>
Totalprice:&nbsp<input type="number" id="3"  name="totalprice"><br><br>
<input type="button" name="submit" value="submit" onclick="fun()">
<a href="feedback.php" target="jh"><h1 align="right"><font face="verdana" color="sky blue">Next</font></h1></a>
</form>
</body>
</html>