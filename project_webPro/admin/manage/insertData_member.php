<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['insert_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = md5($password);

    $sql = "SELECT * FROM member WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['error'] = "มีชื่อผู้ใช้ในระบบแล้ว กรุณาใช้ชื่อใหม่";
        header("location: ../form/insertfrm_member.php");
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "เพิ่มผู้ใช้เข้าสู่ระบบสำเร็จ.";

        $sql = "INSERT INTO member(username, password, name) VALUES('$username', '$password', '$name')";
        $objResult = mysqli_query($conn, $sql);
        header("location: ../index.php");
    }
}
?>