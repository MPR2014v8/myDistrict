<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['update_piccul'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    $id_cul = mysqli_real_escape_string($conn, $_POST['id_cul']);

    $_SESSION['success'] = "แก้ไขข้อมูลรูปภาพประเพณีสำเร็จ.";

    $sql = "UPDATE picofculture SET link = '$link', id_cul = '$id_cul' WHERE id = '$id'";
    $objResult = mysqli_query($conn, $sql);
    header("location: ../manage_pic_page");
    
}
