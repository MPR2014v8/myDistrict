<?php
    session_start();
    require("../../connectdb.php");

    $id = $_GET["id"];
    $sql = "SELECT link FROM picofplace WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $objResult = mysqli_fetch_array($result);
    $path = "../../" . $objResult['link'];
    unlink($path);

    $sql = "DELETE FROM picofplace WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        $_SESSION['error'] = "ลบข้อมูลไม่สำเร็จ";
        header("location: ../manage_pic_page.php");
        return;
    }

    $_SESSION['success'] = "ลบข้อมูลสำเร็จ";
    header("location: ../manage_pic_page.php");
?>