<?php
  include('../dbconnection.php');
   $rollno=$_POST['rollno'];
    $id=$_POST['sid'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcon=$_POST['pcont'];
    $std=$_POST['standard'];
    $imgname=$_FILES['simg']['name'];
    $tmpname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tmpname,'../dataimg/$imgname');
    $qry="UPDATE `student` SET `name`='$name',`city`='$city',`standard`='$std',`pcon`='$pcon',`rollno`='$rollno',`image`='$imgname' WHERE `id`=$id;";
    $run=mysqli_query($con,$qry);
    if($run==true)
    {
        ?>
        <script>
        alert("data updated  successfully");
        window.open('updateform.php?sid=<?php  echo $id;?>','_self');
        </script>
       <?php       
    }
    else
    {
        echo "error in insertion";
    }



?>