<?php   
session_start();
if(isset($_SESSION['uid']))
{
    header('location: admin/admindash.php');
}
?>


<html>
<head>
<title> Admin Login</title>    
</head>
<body>
<h1 align="center"> Admin Login</h1>
<form action="login.php" method="post">
<div style="align:center;">
<table align="center">
<tr> 
<td> Username</td>
<td> <input type="text" name="username"></td>
</tr>    
<tr>
<td> Password</td>
<td> <input type="password" name="password"></td>
</tr>
    <tr> <td colspan="2" align="center"> <input type="submit" name="login" value="Login"></td></tr>       
    
</table>    
    </div>
    
    
    
    
    
</form>    
    
    
</body>
</html>
<?php
include('dbconnection.php');
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $passwd=$_POST['password'];
    $query="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$passwd'";
    $run=mysqli_query($con,$query);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
     alert('username or password incorrect...');
        window.open('login.php','_self');    

     </script>
       <?php
    }
    else
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        header('location: admin/admindash.php');
    }
}




?>