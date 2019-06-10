<?php
session_start();
if(isset($_SESSION['uid']))
{
}
else
{
    header('location: ../login.php');
}
?>
<?php include('header.php'); ?>
<?php include('titlehead.php'); ?>
<html>
<head> <title> Admin Dashoboard</title></head>
<body>
<div class="dashboard">
<table border="1" style="width:40%; font-size: 20px;" align="center">
<tr><td>1. <a href="addstudent.php"> Insert Student Details</a></td></tr>
<tr> <td> 2. <a href="updatestudent.php"> Update Student Details</a></td></tr>
<tr> <td>3. <a href="deletestudent.php"> Delete Student Details</a></td></tr>
    
</table>        
</div>
    
    
    
    
</body>
</html>
