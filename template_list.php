<?php 

include "controller.php";


$students=fetch_student();

?>                    

<!DOCTYPE html>

<html>

<head>

    <title>student </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Student </h2>
       

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th> Name</th>

        <th>Email</th>

        <th>Phone</th>

        <th>College name</th>

        <th>Total</th>
         <th>Percentage</th>
          <th>Grade</th>
          

    </tr>

    </thead>

    <tbody> 

        <?php
         
$total_marks = [];
            if ($students->num_rows > 0) {
                
        while ($row = $students->fetch_assoc()) {
                    
                     $total_marks[]= $row['marks'];

                


}}

//print_r($total_marks);
$sum=(array_sum($total_marks));
$students=fetch_student();
$row1=$students->fetch_assoc();
//print_r($row1);
//echo $sum;exit;
 
 $sql = "UPDATE `tasks` SET Total='$sum' where tasks.tid='".$row1['tid']."'";
 
 //echo $sql;exit;

    $result = $conn->query($sql);
    //$row1=$result->fetch_assoc();
    //print_r($row1);exit;


        ?>

                    <tr>
               <td><?php echo $row1['id']; ?></td>

                    <td><?php echo $row1['Name']; ?></td>

                    <td><?php echo $row1['Email']; ?></td>

                    <td><?php echo $row1['Phone']; ?></td>

                    <td><?php echo $row1['Collage_Name']; ?></td>
                    <td><?php echo $sum?></td>
                     <td><?php 

                        $portion = 50;
echo $percentage = ($portion / $row1['Total']) * 100; 

                     ?></td>

                    <td><?php if($row1['Total']>400)
{
    echo "A++";
}
elseif($row1<=300)
{
echo "B+";
}

else {
    echo "C";
}?></td>


   </tr>                       

                     

    </tbody>

</table>

    </div> 

</body>

</html>

