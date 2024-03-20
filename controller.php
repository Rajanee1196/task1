<?php

$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "Rajanee_test"; 

 $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}
else
{
	function list_students() {
$sql = "SELECT * FROM tasks";
global $conn;
return $result = $conn->query($sql);

//print_r($result);exit;

}
function fetch_student() {
	$id = $_GET['id'];
	//echo $id;exit;
	$sql="SELECT *
FROM `tasks`  
INNER JOIN `stu_subject`  
ON `tasks`.`tid` = `stu_subject`.`stu_id`  where `tasks`.`tid`='$id'";
//print_r($sql);exit;
//$sql = "SELECT * FROM tasks";
global $conn;
return $result = $conn->query($sql);


//print_r($result);exit;

}

}

?>