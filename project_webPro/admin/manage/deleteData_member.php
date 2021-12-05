<?php
    session_start();
    require("../../connectdb.php");

    $username = $_GET["username"];
    $sql = "DELETE FROM member WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        $_SESSION['error'] = "ลบข้อมูลไม่สำเร็จ";
        header("location: ../show/shw_member.php");
        return;
    }

    $_SESSION['success'] = "ลบข้อมูลสำเร็จ";
    header("location: ../show/shw_member.php");
?>