<?php
$CompanyID = $_POST['CompanyID'];
$CompanyName = $_POST['CompanyName'];
$ContactNumber = $_POST['ContactNumber'];
$sql = "INSERT INTO COMPANY ('name', 'contact_number') VALUES ('$CompanyID', '$CompanyName', '$ContactNumber')";
if(!mysqli_query($conn, $sql)){
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>