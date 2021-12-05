<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['update_picofpln'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    $id_pln = mysqli_real_escape_string($conn, $_POST['id_pln']);

    $_SESSION['success'] = "แก้ไขข้อมูลรูปภาพสถานที่สำเร็จ.";

    $sql = "UPDATE picofplace SET link = '$link', id_pln = '$id_pln' WHERE id = '$id'";
    $objResult = mysqli_query($conn, $sql);
    header("location: ../manage_pic_page");
    
}
