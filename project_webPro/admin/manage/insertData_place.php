<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['insert_place']) || isset($_POST['insert_hotel']) || isset($_POST['insert_place_at'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $lat = mysqli_real_escape_string($conn, $_POST['lat']);
    $lng = mysqli_real_escape_string($conn, $_POST['lng']);
    $vill = mysqli_real_escape_string($conn, $_POST['vill']);
    $id_vill = "1";
    $ctgry = mysqli_real_escape_string($conn, $_POST['ctgry']);
    $id_ctgry = "3";
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);

    $sql = "SELECT * FROM village WHERE name = '$vill'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $objResult = mysqli_fetch_array($result);
        $id_vill = $objResult['id'];
    } 

    $sql = "SELECT * FROM categories WHERE name = '$ctgry'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $objResult = mysqli_fetch_array($result);
        $id_ctgry = $objResult['id'];
    } 

    $sql = "SELECT * FROM place WHERE name = '$name' AND id_vill = '$id_vill' AND id_ctgry = '$id_ctgry' AND lat = '$lat' AND lng = '$lng'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['error'] = "มีชื่อสถานที่นี้ในระบบแล้ว กรุณาใช้ชื่อใหม่";
        header("location: ../form/insertfrm_place.php");
        return;
    } else {
        $_SESSION['success'] = "เพิ่มสถานที่นี้เข้าสู่ระบบสำเร็จ.";

        $sql = "INSERT INTO place(id, name, lat, lng, id_vill, id_ctgry, detail) VALUES(NULL, '$name', '$lat', '$lng', '$id_vill', '$id_ctgry', '$detail')";
        $result = mysqli_query($conn, $sql);

        if(isset($_POST['insert_place'])) {
            header("location: ../index.php");
        }
        if(isset($_POST['insert_hotel'])){
            header("location: ../manage_hotel_page.php");
        }
        if(isset($_POST['insert_place_at'])){
            header("location: ../manage_place_page.php");
        }
        
    }
}
