<?php 
$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "Rajanee_test"; 

 $conn = new mysqli($servername, $username, $password, $dbname);

  if (isset($_POST['submit1'])) {
  //  echo "fdh";exit;

    $name = $_POST['name'];

    $Email = $_POST['Email'];

    $Phone = $_POST['Phone'];

    $Collage_Name = $_POST['Collage_Name'];

    
    $marks1 = $_POST['marks1'];
     $marks2 = $_POST['marks2'];
      $marks3 = $_POST['marks3'];
     $marks4 = $_POST['marks4'];
    



    $sql = "INSERT INTO `tasks`(`name`, `Email`, `Phone`, `Collage_Name`) VALUES ('$name','$Email','$Phone','$Collage_Name')";

    $result = $conn->query($sql);
      $stu_id = $conn->insert_id;
    //print_r($result);exit;
    $sql1 = "INSERT INTO `stu_subject`(`stu_id`,`subjects`, `marks`) VALUES ('$stu_id','eng','$marks1')";
// 
    $result1 = $conn->query($sql1);
    $sql2= "INSERT INTO `stu_subject`(`stu_id`,`subjects`, `marks`) VALUES ('$stu_id','hindi','$marks2')";
//
    $result2 = $conn->query($sql2);
    $sql3 = "INSERT INTO `stu_subject`(`stu_id`,`subjects`, `marks`) VALUES ('$stu_id','ss','$marks3')";
//
    $result3 = $conn->query($sql3);
    $sql4 = "INSERT INTO `stu_subject`(`stu_id`,`subjects`, `marks`) VALUES ('$stu_id','guj','$marks4')";
// 
    $result4 = $conn->query($sql4);
   

    if ($result == TRUE) {

      echo "New record created successfully.";
      header("Location: admin.php", true, 301);  

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>
  <div class="container">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                <div class="page-header">
                    <h2>Registration Form in PHP with Validation</h2>
                </div>
                <p>Please fill all fields in the form</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group ">
                        <label>Email</label>
                        <input type="email" name="Email" class="form-control" value="" maxlength="30" required="">
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="Phone" class="form-control" value="" maxlength="12" required="">
                        <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label>Collage_Name</label>
                      <input type="text" name="Collage_Name" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>  

                    <div class="form-group">
                        <label>subject</label>
                      <label>englis</label>
                       <input type="text" name="marks1" class="form-control" value="" maxlength="50" required="">
                       <label>hindi</label>

                        <input type="text" name="marks2" class="form-control" value="" maxlength="50" required="">
                         <label>science</label>

                        <input type="text" name="marks3" class="form-control" value="" maxlength="50" required="">
                         <label>ss</label>

                        <input type="text" name="marks4" class="form-control" value="" maxlength="50" required="">

                    </div>

                    <input type="submit" class="btn btn-primary" name="submit1" value="submit">
             
                </form>
            </div>
        </div>    
    </div>

</body>

</html>