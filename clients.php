<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST["name"];
$phone = $_POST["phone"];
$address = $_POST["address"];

$sql = "INSERT INTO clients (name, phone, address)
VALUES ('$name','$phone','$address')";

$conn->query($sql);

echo "<script>alert('تم حفظ العميل بنجاح');</script>";

}
?><!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>إضافة عميل</title>
</head>

<body>

<h2>إضافة عميل</h2>

<form method="post">

<input type="text" name="name" placeholder="اسم العميل" required><br><br>

<input type="text" name="phone" placeholder="رقم الهاتف"><br><br>

<input type="text" name="address" placeholder="العنوان"><br><br>

<button type="submit">حفظ العميل</button>

</form>

</body>
</html>

