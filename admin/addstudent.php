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
<body>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
<table align="center">
<tr>
 <th align="left"> Roll No</th>
 <td > <input type="number" name="rollno" placeholder="enter roll no"> </td>
</tr>    
<tr>
<th align="left"> Full Name</th>
<td > <input type="text" name="name" placeholder="enter Full Name"></td>
</tr>    
<tr>
<th align="left"> City</th>
<td> <input type="text" name="city" placeholder="enter valid City"></td>
</tr>
<tr>
<th align="left"> Parents Contact Number</th>
<td> <input type="text" name="pcont" placeholder="Tel"></td>
</tr>    
<tr>
<th align="left"> Standard</th>
<td> <input type="number" name="standard" placeholder="enter Standard"></td>
</tr>
<tr>
<th align="left">Image</th>
<td> <input type="file" name="simg" ></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit"> </td>    
</tr>
</table>
</form>
    </body>
</html>
<?php
include('../dbconnection.php');
if(isset($_POST['submit']))
{
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcon=$_POST['pcont'];
    $std=$_POST['standard'];
    $imgname=$_FILES['simg']['name'];
    $tmpname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tmpname,'../dataimg/$imgname');
    $qry="INSERT INTO `student`(`name`, `city`, `standard`, `pcon`, `rollno`,`image`) VALUES ('$name','$city',$std,'$pcon',$rollno,'$imgname')";
    $run=mysqli_query($con,$qry);
    if($run==true)
    {
        ?>
        <script>
        alert("data inserted successfully");
        </script>
       <?php       
    }
    else
    {
        echo "error in insertion";
    }
    
}
?>