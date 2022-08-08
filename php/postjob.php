<?php
require ("db.php");
if(empty($_POST['']))

$companyId = $_POST["comp_id"];
$jobId = $_POST["job_id"];
$designation = $_POST["designation"];
$location = $_POST["location"];
$salary = $_POST["salary"];
$description = $_POST["description"];

$sql = "INSERT INTO `job_post`(`jobid`, `companyid`, `salary`, `designation`, `description`, `location`) VALUES ('$jobId','$companyId','$salary','[value-4]','[value-5]','[value-6]')";
if(!mysqli_query($conn, $sql)){
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>