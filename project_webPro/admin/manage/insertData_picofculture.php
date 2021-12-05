<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['insert_picofcul'])) {

    $typeIMG =  $_FILES['link']['type'];

    if ($_FILES['link']['error'] === 0) {

        if ($typeIMG == "image/jpg" || $typeIMG == "image/jpeg" || $typeIMG == "image/png" || $typeIMG == "image/gif") {

            $dir = "../../data/pic/festival_re-size/";
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

    $dir = "data/pic/festival_re-size/";
    $link = $dir . basename($_FILES["link"]["name"]);
    $culture = mysqli_real_escape_string($conn, $_POST['culture']);
    $id_cul = "1";

    $sql = "SELECT * FROM picofculture WHERE link = '$link'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['error'] = "มีภาพนี้ในระบบแล้ว กรุณาอัพโหลดใหม่";
        header("location: ../manage_pic_page.php");
        return;
    }

    $sql = "SELECT * FROM culture WHERE name = '$culture'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $objResult = mysqli_fetch_array($result);
        $id_cul = $objResult['id'];
    }

    $_SESSION['success'] = "เพิ่มรูปภาพสู่ระบบสำเร็จ.";
    $sql = "INSERT INTO picofculture(id, link, id_cul) VALUES(NULL, '$link', '$id_cul')";
    $result = mysqli_query($conn, $sql);
    header("location: ../manage_pic_page.php");
}
