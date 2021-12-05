<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['update_pln']) || isset($_POST['update_hotel'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $lat = mysqli_real_escape_string($conn, $_POST['lat']);
    $lng = mysqli_real_escape_string($conn, $_POST['lng']);
    $id_vill = mysqli_real_escape_string($conn, $_POST['id_vill']);
    $id_ctgry = mysqli_real_escape_string($conn, $_POST['id_ctgry']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);

    $_SESSION['success'] = "แก้ไขข้อมูลสถานที่สำเร็จ.";

    $sql = "UPDATE place SET  name = '$name', lat = '$lat', lng = '$lng', id_vill = '$id_vill', id_ctgry = '$id_ctgry', detail = '$detail' WHERE id = '$id'";
    $objResult = mysqli_query($conn, $sql);

    if (isset($_POST['update_pln'])) {
        header("location: ../manage_place_page.php");
    }
    if (isset($_POST['update_hotel'])) {
        header("location: ../manage_hotel_page.php");
    }

    
}
