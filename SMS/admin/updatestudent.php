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
    <table align="center">
    <form action="updatestudent.php" method="post">
    <tr><th> Enter Standard</th>
        <td><input type="number" name="standard" placeholder="enter standard"></td>
        
    <th> Enter Student Name</th>
    <td> <input type="text" name="name" placeholder="Enter Student Name"></td>
    <td> <input type="submit" name="submit" value="search"></td>
    </tr>
    </form>
    </table>
    <table align="center" width="80%" border="1" style="margin-top:10px;">
    <tr style="background-color:skyblue;"> <th> No</th>
        <th>Image</th>
        <th>Name</th>
        <th> Rollno</th>
        <th> Edit</th>
        </tr>
    <?php
    if(isset($_POST['submit']))
    {
        include('../dbconnection.php');
        $standard=$_POST['standard'];
        $name=$_POST['name'];
        $sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
        $run=mysqli_query($con,$sql);
        if(mysqli_num_rows($run)==0)
        {
            echo "<tr><td colspan='5'>No Records found</td></tr>";
        }
        else
        {
            $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                $count++;
                ?>
              <tr>
            <td><?php echo $count;   ?></td>
            <td><img src="../dataimg/<?php $data['image'];  ?>" style="max-width:100px;"></td>
            <td><?php echo $data['name'];  ?></td>
            <td><?php echo $data['rollno'];  ?></td>
            <td> <a href="updateform.php?sid=<?php echo $data['id'];  ?>" align="center"> edit</a></td>
            </tr>
             <?php
            }
        }
    }
    ?>
    </table>
</body>

</html>