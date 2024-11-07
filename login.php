<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    
    <?php
    // แสดงข้อความข้อผิดพลาดถ้ามีการล็อกอินผิดพลาด
    if (isset($_SESSION["error"])) {
        echo "<p style='color:red;'>" . $_SESSION["error"] . "</p>";
        unset($_SESSION["error"]); // ลบข้อความข้อผิดพลาดหลังแสดง
    }
    ?>
    
    <form method="post" action="authenticate.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
