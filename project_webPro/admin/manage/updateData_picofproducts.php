<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['update_picofpro'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    $id_pro = mysqli_real_escape_string($conn, $_POST['id_pro']);

    $_SESSION['success'] = "แก้ไขข้อมูลรูปภาพสินค้าสำเร็จ.";

    $sql = "UPDATE picofproducts SET link = '$link', id_pro = '$id_pro' WHERE id = '$id'";
    $objResult = mysqli_query($conn, $sql);
    header("location: ../manage_pic_page");
    
}
