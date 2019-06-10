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
<?php
include('../dbconnection.php');
$id=$_GET['sid'];
$sql="SELECT * FROM `student` WHERE `id`=$id;";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<?php include('header.php'); ?>
<?php include('titlehead.php'); ?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
<table align="center">
<tr>
 <th align="left"> Roll No</th>
 <td > <input type="number" name="rollno" value=<?php echo $data['rollno']; ?>> </td>
</tr>    
<tr>
<th align="left"> Full Name</th>
<td > <input type="text" name="name" value=<?php echo $data['name']; ?>></td>
</tr>    
<tr>
<th align="left"> City</th>
<td> <input type="text" name="city" value=<?php echo $data['city']; ?>></td>
</tr>
<tr>
<th align="left"> Parents Contact Number</th>
<td> <input type="text" name="pcont" value=<?php echo $data['pcon']; ?>></td>
</tr>    
<tr>
<th align="left"> Standard</th>
<td> <input type="number" name="standard" value=<?php echo $data['standard']; ?> ></input></td>
</tr>
<tr>
<th align="left">Image</th>
<td> <input type="file" name="simg" ></td>
</tr>
<tr>
<td colspan="2" align="center">
    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" >
    <input type="submit" name="submit"> </td>    
</tr>
</table>
</form>
