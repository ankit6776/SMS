<html>
<head> <title> Student Management System</title></head>


<body>
<h5 align="right"> <a href="login.php"> admin login</a></h5>
<h1 align="center"> Welcome to Student Management System</h1>
    <form action="index.php" method="post">
<table style="width:30%;" align="center" border="1px">
 <tr>
<td colspan="2">Student Information </td>    
</tr>   
<tr>
<td align="left"> Choose Standard</td> 
<td> 
<select name="std">
<option value="1"> 1st</option>
    <option value="2"> 2nd</option>
    <option value="3"> 3rd</option>
    <option value="4"> 4th</option>
    <option value="5"> 5th</option>
    <option value="6"> 6th</option>
    <option value="7"> 7th</option>
    <option value="8"> 8th</option>
    <option value="9"> 9th</option>
</select>    
</td>
</tr>
<tr>
<td align="left"> Enter Roll No: </td> 
<td>
<input type="number" name="rollno" required="required">   
</td>
</tr>
<tr>
    <td align="center" colspan="2"> <input type="submit" name="submit" value="Show Info"> </td>
</tr>
</table> 
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $std=$_POST['std'];
    $rollno=$_POST['rollno'];
    include('dbconnection.php');
    include('function.php');
    showdetails($std,$rollno);
}


?>