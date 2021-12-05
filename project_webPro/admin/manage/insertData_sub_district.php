<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['insert_sd'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = md5($password);

    $sql = "SELECT * FROM sub_district WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['error'] = "มีชื่อตำบลนี้ในระบบแล้ว กรุณาใช้ชื่อใหม่";
        header("location: ../form/insertfrm_sub_district.php");
    } else {
        $_SESSION['success'] = "เพิ่มตำบลเข้าสู่ระบบสำเร็จ.";

        $sql = "INSERT INTO sub_district(id, name) VALUES(NULL, '$name')";
        $result = mysqli_query($conn, $sql);
        header("location: ../index.php");
    }
}
?>