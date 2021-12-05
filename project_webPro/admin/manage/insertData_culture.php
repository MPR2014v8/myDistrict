<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['insert_vill'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $vill = mysqli_real_escape_string($conn, $_POST['vill']);
    $id_vill = "1";

    $sql = "SELECT * FROM village WHERE name = '$vill'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $objResult = mysqli_fetch_array($result);
        $id_vill = $objResult['id'];
    } 

    $sql = "SELECT * FROM culture WHERE name = '$name' AND id_vill = '$id_vill'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        $_SESSION['error'] = "มีประเพณีนี้ในหมู่บ้านแล้ว กรุณาใช้ชื่อใหม่";
        header("location: ../form/insertfrm_culture.php");
    } else {

        $_SESSION['success'] = "เพิ่มประเพณีเข้าสู่ระบบสำเร็จ.";
        $sql = "INSERT INTO culture(id, name, detail, id_vill) VALUES(NULL, '$name', '$detail', '$id_vill')";
        $result = mysqli_query($conn, $sql);
        header("location: ../index.php");
    }
}
