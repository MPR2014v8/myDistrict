<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['insert_picofplc'])) {
    
    $typeIMG =  $_FILES['link']['type'];

    $place = mysqli_real_escape_string($conn, $_POST['place']);
    $id_pln = "1";
    $id_ctgry = "3";

    $sql = "SELECT * FROM place WHERE name = '$place'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $objResult = mysqli_fetch_array($result);
        $id_pln = $objResult['id'];
        $id_ctgry = $objResult['id_ctgry'];
    }

    $dir = "";
    if ($id_ctgry == 1 || $id_ctgry == 4) {
        $dir = "data/pic/store_re-size/";
    } else if ($id_ctgry == 5) {
        $dir = "data/pic/Hotel_re-size/";
    } else {
        $dir = "data/pic/temple_re-size/";
    }


    if ($_FILES['link']['error'] === 0) {

        if ($typeIMG == "image/jpg" || $typeIMG == "image/jpeg" || $typeIMG == "image/png" || $typeIMG == "image/gif") {

            $dir_upload = "../../" . $dir;
            $fileImage = $dir_upload . basename($_FILES["link"]["name"]); // basename() func ที่จะตัด path เอาแค่ img.type

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

    $link = $dir . basename($_FILES["link"]["name"]);

    $sql = "SELECT * FROM picofplace WHERE link = '$link'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['error'] = "มีภาพนี้ในระบบแล้ว กรุณาอัพโหลดใหม่";
        header("location: ../manage_pic_page.php");
        return;
    }


    $_SESSION['success'] = "เพิ่มรูปภาพสู่ระบบสำเร็จ.";
    $sql = "INSERT INTO picofplace(id, link, id_pln) VALUES(NULL, '$link', '$id_pln')";
    $result = mysqli_query($conn, $sql);
    header("location: ../manage_pic_page.php");
}
