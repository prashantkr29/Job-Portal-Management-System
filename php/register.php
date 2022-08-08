<?php
require_once ('db.php');

$username= $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO `user`(`username`, `password`, `email`) VALUES ('$username','$password','$email')";
if ($conn->query($sql) === TRUE) {
    
    #TO handle Checkbox with if else statement
    if(isset($_POST['check_recruit']) && 
    $_POST['check_recruit'] == 'A') 
  {
      
      $script = "<script>
       window.location.href='../recruiter.html';</script>";
          echo $script;
  }
  else if(isset($_POST['user']) && 
  $_POST['user'] == 'B')
  {
      $script = "<script>
      window.location.href='../dashboard.html';</script>";
         echo $script;
  }

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>