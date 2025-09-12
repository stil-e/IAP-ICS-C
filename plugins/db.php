<?php
$host = "localhost";     // or "127.0.0.1"
$user = "root";          // your DB username
$pass = "";              // your DB password (empty if you didn’t set one)
$db   = "task_app";      // the database you created in MariaDB

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
