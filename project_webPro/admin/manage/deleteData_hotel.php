<?php
    session_start();
    require("../../connectdb.php");

    $id = $_GET["id"];
    $sql = "DELETE FROM place WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        $_SESSION['error'] = "ลบข้อมูลไม่สำเร็จ";
        header("location: ../manage_hotel_page.php");
        return;
    }

    $_SESSION['success'] = "ลบข้อมูลสำเร็จ";
    header("location: ../manage_hotel_page.php");
?>