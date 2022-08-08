<?php
require ("db.php");
if(empty($_POST['']))
$CompanyName = $_POST['CompanyName'];
$Designation = $_POST['Designation'];
$Location = $POST['Location'];
$Salary = $_POST['Salary'];
$Description = $_POST('Description');

$sql = "INSERT INTO job_post VALUES ('$jobID', '$companyName', '$Salary', '$Designation', '$Location')";
if(!mysqli_query($conn, $sql)){
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>