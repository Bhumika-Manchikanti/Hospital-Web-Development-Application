<html>
<head>
<title>form</title>
<center>
<h1><font face="vernada" color="light blue">FEEDBACK FORM</font></h1>
</center>
<form action="mail.php" method="POST">
<br>
<label>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="varchar" size="40" name="name" required></label><br>
<p>Mail id:&nbsp;&nbsp;&nbsp;<input type="email" name="mail" required="required"<br>
<br>
<br>
Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" pattern="[0-9]{10}" name="phone" required="required"></p>
<p>Diagnosis:&nbsp;&nbsp;
<select><option>Diagnosis type</option>
<option>Cardiology</option>
<option>Diabetis</option>
<option>Gynecology</option>
<option>Opthalmology</option>
<option>Neurology</option>
<option>ENT</option>required="required">
</select><br></p>
<br>
<p>The Hospital ward Facilities are:
<select><option>select option</option>
<option>Good</option>
<option>Average</option>
<option>Bad</option>required="required">
</select><br></p>
<p>The service of attending doctors:
<select><option>select option</option>
<option>Good</option>
<option>Average</option>
<option>Bad</option>required="required">
</select><br></p>
<p>The Food is:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select><option>select option</option>
<option>Good</option>
<option>Average</option>
<option>Bad</option>required="required">
</select><br></p>
<p>The Billing Process is:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select><option>select option</option>
<option>Good</option>
<option>Average</option>
<option>Bad</option>required="required">
</select><br></p>
<p>The Overall i rate about hospital as:
<select><option>select option</option>
<option>Good</option>
<option>Average</option>
<option>Bad</option>required="required">
</select><br></p>
<center>
<br>
<input type="submit" value="submit" name="submit">
</center>
<a href="hospitalpage.php" target="jh"><h1 align="right"><font face="verdana" color="sky blue">Next</font></h1></a>
</form>
</head>
</html>