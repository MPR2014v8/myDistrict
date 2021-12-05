<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['update_cul'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $id_vill = mysqli_real_escape_string($conn, $_POST['id_vill']);

    $_SESSION['success'] = "แก้ไขข้อมูลประเพณีสำเร็จ.";

    $sql = "UPDATE culture SET  name = '$name', detail = '$detail', id_vill = '$id_vill' WHERE id = '$id'";
    $objResult = mysqli_query($conn, $sql);
    header("location: ../show/shw_culture.php");
    
}
