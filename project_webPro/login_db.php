<?php
    session_start();
    require("connectdb.php");

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $password = md5($password);
        $query = "SELECT * FROM member WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "เข้าสู่ระบบสำเร็จ";
            header("location: admin/admin_page.php");
        } else {
            $_SESSION['error'] = "ชื่อผู้ใช้ หรือรหัสผ่านไม่ถูกต้อง โปรดลองใหม่อีกครั้ง";
            header("location: login.php");
        }
    }
?>
