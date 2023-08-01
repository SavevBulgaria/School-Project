<?php
require_once("connection.php");
session_start();

class User
{
private $connection;

    function __construct()
    {
        
        $servername = "localhost";
        $username = "Assistant";
        $password = "Assistant1";
        $database = "project mayhem";
        
        try {
          $this->connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
          $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          // echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }

    }


    public function login()
    {
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $stmt = $this->connection->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();
    
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                $_SESSION['admin'] = ($user["isAdmin"] == 1);
                header("location: ../Pages/Main_Pages/Main.php");
                exit;
            } else {
                echo "<b style='color:red;'>Invalid credentials</b><br><br>";
            }
        }
    }
}
?>