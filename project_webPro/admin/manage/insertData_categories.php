<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['insert_categories'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $sql = "SELECT * FROM categories WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['error'] = "มีชื่อประเภทสถานที่นี้ในระบบแล้ว กรุณาใช้ชื่อใหม่";
        header("location: ../form/insertfrm_categories.php");
    } else {
        $_SESSION['success'] = "เพิ่มประเภทสถานที่เข้าสู่ระบบสำเร็จ.";

        $sql = "INSERT INTO categories(id, name) VALUES(NULL, '$name')";
        $result = mysqli_query($conn, $sql);
        header("location: ../index.php");
    }
}
