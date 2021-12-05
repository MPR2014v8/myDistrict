<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['update_pro'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $id_pln = mysqli_real_escape_string($conn, $_POST['id_pln']);

    $_SESSION['success'] = "แก้ไขข้อมูลสินค้าสำเร็จ.";

    $sql = "UPDATE products SET  name = '$name', detail = '$detail', id_pln = '$id_pln' WHERE id = '$id'";
    $objResult = mysqli_query($conn, $sql);
    header("location: ../show/shw_products.php");
    
}
