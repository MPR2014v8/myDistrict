<?php

use function PHPSTORM_META\type;

session_start();
require("../../connectdb.php");
include("../../allFunction.php");

$typeIMG =  $_FILES['link']['type'];

if (isset($_POST['insert_picofpro'])) {

    if ($_FILES['link']['error'] === 0) {

        if ($typeIMG == "image/jpg" || $typeIMG == "image/jpeg" || $typeIMG == "image/png" || $typeIMG == "image/gif") {
            
            $dir = "../../data/pic/product_re-size/";
            $fileImage = $dir . basename($_FILES["link"]["name"]); // basename() func ที่จะตัด path เอาแค่ img.type

            if (move_uploaded_file($_FILES["link"]["tmp_name"], $fileImage)) {
                alert("ไฟล์ภาพชื่อ " . basename($_FILES["link"]["name"]) . "อัพโหลดเสร็จแล้ว");
            } else {
                alert("เกิดข้อผิดพลาดในการอับโหลด");
                $_SESSION['error'] = "เกิดข้อผิดพลาดในการอับโหลด กรุณาอัพโหลดใหม่";
                header("location: ../manage_pic_page.php");
                return;
            }

        } else {
            $_SESSION['error'] = "ไฟล์ที่อับโหลดไม่ถูกต้อง กรุณาอัพโหลดใหม่";
            header("location: ../manage_pic_page.php");
            return;
        }

    } else {
        $_SESSION['error'] = "เกิดข้อผิดพลาดในการอับโหลด กรุณาอัพโหลดใหม่";
        header("location: ../manage_pic_page.php");
        return;
    }

    $dir = "data/pic/product_re-size/";
    $link = $dir . basename($_FILES["link"]["name"]);
    $products = mysqli_real_escape_string($conn, $_POST['products']);
    $id_pro = "1";

    $sql = "SELECT * FROM picofproducts WHERE link = '$link'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['error'] = "มีภาพนี้ในระบบแล้ว กรุณาอัพโหลดใหม่";
        header("location: ../manage_pic_page.php");
        return;
    }

    $sql = "SELECT * FROM products WHERE name = '$products'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $objResult = mysqli_fetch_array($result);
        $id_pro = $objResult['id'];
    }

    $_SESSION['success'] = "เพิ่มรูปภาพสู่ระบบสำเร็จ.";
    $sql = "INSERT INTO picofproducts(id, link, id_pro) VALUES(NULL, '$link', '$id_pro')";
    $result = mysqli_query($conn, $sql);
    header("location: ../manage_pic_page.php");
}
