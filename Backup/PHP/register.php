<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // check if passwords match
  if ($password !== $confirm_password) {
    echo "<script>alert('Passwords do not match.')</script>";
    $password = '';
    $confirm_password = '';
} else {
    // prepare statement to insert user data into database
    $stmt = $connection->prepare("INSERT INTO users (UserName, email, password) VALUES (:username, :email, :password)");
    
    // bind parameters
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT)); // hash password for security

    // execute the statement
    if ($stmt->execute()) {
      echo '<script>alert("You have succesfully created your account")</script>';
      header("location: ../Pages/Main_Pages/loginForm.php");
      
    } else {
      echo "<p>Error: " . $stmt->errorInfo()[2] . "</p>"; // display error message
    }

    // close the statement and connection
    $stmt = null;
    $connection = null;
  }
}
?>
