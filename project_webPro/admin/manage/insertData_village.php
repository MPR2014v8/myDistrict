<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['insert_vill'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $sub_dis = mysqli_real_escape_string($conn, $_POST['sub_dis']);
    $id_dis = "1";

    $sql = "SELECT * FROM sub_district WHERE name = '$sub_dis'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $objResult = mysqli_fetch_array($result);
        $id_dis = $objResult['id'];
    } 

    $sql = "SELECT * FROM village WHERE name = '$name' AND id_dis = '$id_dis'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['error'] = "มีชื่อหมู่บ้านในตำบลแล้ว กรุณาใช้ชื่อใหม่";
        header("location: ../form/insertfrm_village.php");
    } else {
        $_SESSION['success'] = "เพิ่มหมู่บ้านเข้าสู่ระบบสำเร็จ.";

        $sql = "INSERT INTO village(id, name, id_dis) VALUES(NULL, '$name', '$id_dis')";
        $result = mysqli_query($conn, $sql);
        header("location: ../index.php");
    }
}
