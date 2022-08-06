<?php
require_once ('db.php');

$username= $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO `user`(`username`, `password`, `email`) VALUES ('$username','$password','$email')";
if ($conn->query($sql) === TRUE) {
    $script = "<script>
    window.location.href='../dashboard.html';</script>";
    echo $script;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>