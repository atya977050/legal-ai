<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "legal_ai";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>

