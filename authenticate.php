<?php
session_start();

// ข้อมูลชื่อผู้ใช้และรหัสผ่านที่กำหนดไว้ล่วงหน้า
$username = "admin";
$password = "12345";

// ตรวจสอบว่ามีการส่งข้อมูลมาจากฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    // ตรวจสอบชื่อผู้ใช้และรหัสผ่าน
    if ($inputUsername === $username && $inputPassword === $password) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $inputUsername;
        header("Location: welcome.php"); // เปลี่ยนเส้นทางไปยังหน้าหลักหลังจากเข้าสู่ระบบสำเร็จ
        exit;
    } else {
        $_SESSION["error"] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        header("Location: login.php"); // กลับไปที่หน้า login.php ถ้าข้อมูลไม่ถูกต้อง
        exit;
    }
}
?>
