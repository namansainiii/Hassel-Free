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

  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $issue = $_POST['issue'];
  $service = $_POST['service'];

  $sql = "INSERT INTO `book_form` (`name`, `email`, `number`, `issue`, `service`, `dt`)
          VALUES ('$name', '$email', '$number', '$issue', '$service', current_timestamp());";

  mysqli_query($con, $sql);

  $message = "Submitted successfully.";

  // Close the database connection
  mysqli_close($con);

  // Redirect to index.html
  header("Location: index.html");
  exit();
}
?>
