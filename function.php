<?php
function showdetails($standard,$rollno)
{
    include('dbconnection.php');
    $qry="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`=$standard;";
    $run=mysqli_query($con,$qry);
    if(mysqli_num_rows($run)>0)
    {
        $data=mysqli_fetch_assoc($run);
        ?>
       <table border="1" style="width:50%; align:center; margin-top:50px; background-color: skyblue;" align="center">
       <tr>
           <th colspan="3"> Student Details </th>
        </tr>
        <tr>
          <td rowspan="5"> <img src="dataimg/<?php echo $data['image']; ?>"</td>
            <th> Roll No</th>
        <td> <?php  echo $data['rollno']; ?></td>  
        </tr>
         <tr>
          <th> Name</th>
        <td> <?php echo $data['name'];  ?></td>   
        </tr>
           <tr>
          <th> Parents contact</th>
        <td> <?php echo $data['pcon'];  ?></td>   
        </tr>
           <tr>
          <th> Standard</th>
        <td> <?php  echo $data['standard'];  ?></td>   
        </tr>
           <tr>
          <th> city</th>
        <td> <?php echo $data['city'];  ?></td>   
        </tr>
      </table>

      <?php
    }
    else
    {
        echo "echo no result found";
    }
}

?>