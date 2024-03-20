

<!DOCTYPE html>

<html>

<head>

    <title>student list</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Student list</h2>
        <a  href="template_add.php"class="btn btn-danger">Add student</a>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th> Name</th>

        <th>Email</th>

        <th>Phone</th>

        <th>College name</th>

       
           <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($list_students->num_rows > 0) {

                while ($row = $list_students->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['tid']; ?></td>

                    <td><?php echo $row['Name']; ?></td>

                    <td><?php echo $row['Email']; ?></td>

                    <td><?php echo $row['Phone']; ?></td>

                    <td><?php echo $row['Collage_Name']; ?></td>
                   

                    <td><a class="btn btn-info" href="template_list.php?id=<?php echo $row['tid'] ?>">view</a>&nbsp;
                      <a href="download.php?id=<?php echo $row['tid']?>" class="btn btn-danger">Download PDF Now</a> 
                  </td>
                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>

