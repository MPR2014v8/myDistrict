<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['insert_pro'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $pln = mysqli_real_escape_string($conn, $_POST['pln']);
    $id_pln = "3";

    $sql = "SELECT * FROM place WHERE name = '$pln'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $objResult = mysqli_fetch_array($result);
        $id_pln = $objResult['id'];
    } 

    $sql = "SELECT * FROM products WHERE name = '$name' AND id_pln = '$id_pln'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['error'] = "มีสินค้านี้ในสถานที่นี้แล้ว กรุณาใช้ชือใหม่";
        header("location: ../manage_products_page.php");
    } else {
        
        $_SESSION['success'] = "เพิ่มสินค้าเข้าสู่ระบบสำเร็จ.";
        $sql = "INSERT INTO products(id, name, detail, id_pln) VALUES(NULL, '$name', '$detail', '$id_pln')";
        $result = mysqli_query($conn, $sql);
        header("location: ../manage_products_page.php");
    }
}
