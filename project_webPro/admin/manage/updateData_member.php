<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['update_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = md5($password);

    $_SESSION['success'] = "แก้ไขข้อมูลผู้ใช้สำเร็จ.";

    $sql = "UPDATE member SET password = '$password', name = '$name' WHERE username = '$username'";
    $objResult = mysqli_query($conn, $sql);
    header("location: ../show/shw_member.php");
    
}
