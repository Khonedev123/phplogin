<?php
session_start();

// ตรวจสอบว่าเข้าสู่ระบบแล้วหรือไม่
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php"); // ถ้ายังไม่เข้าสู่ระบบ กลับไปที่หน้า login
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
</body>
</html>
