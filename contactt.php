<?php
if (isset($_POST['name'])) {
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "contact";
  $con = mysqli_connect($server, $username, $password, $database);

  if (!$con) {
    die("connection not made" . mysqli_connect_error());
  }

  $name=$_POST['name'];
  $email= $_POST['email'];
  $subject= $_POST['subject'];
  $message= $_POST['message'];
  
  
  $sql="INSERT INTO `contact_form` (`name`, `email`, `subject`, `message`, `dt`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp());";
  
  mysqli_query($con, $sql);

  $message = "Submitted successfully.";

  // Close the database connection
  mysqli_close($con);

  // Redirect to index.html
  header("Location: index.html");
  exit();
}
?>
