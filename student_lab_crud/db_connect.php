// student_lab_crud/db_connect.php
<?php
$host = "localhost";
$user = "root";   // default for XAMPP/WAMP
$pass = "";      // default is empty for XAMPP/WAMP
$db   = "student_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
