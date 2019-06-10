<?php
  include('../dbconnection.php');
   $id=$_REQUEST['sid'];
   $qry="DELETE FROM `student` WHERE `id`=$id;";
   $run=mysqli_query($con,$qry);
    if($run==true)
    {
        ?>
        <script>
        alert("data deleted  successfully");
        window.open('deletestudent.php?sid=<?php  echo $id;?>','_self');
        </script>
       <?php       
    }
    else
    {
        echo "error in deletion";
    }



?>