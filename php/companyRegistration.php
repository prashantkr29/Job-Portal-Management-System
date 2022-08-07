<?php
require_once ('db.php');

$CompanyID = $_POST['comp_id'];
$CompanyName = $_POST['comp_name'];
$ContactNumber = $_POST['cont_num'];

$sql = "INSERT INTO `company`(`companyid`, `name`, `contact_number`) VALUES ('$CompanyID','$CompanyName','$ContactNumber')";
if ($conn->query($sql) === TRUE) {
    $script = "<script>
    window.location.href='../dashboard.html';</script>";
    echo $script;
    echo "Company registered sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>