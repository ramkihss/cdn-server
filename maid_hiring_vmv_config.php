
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "maid_service_hiring";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
