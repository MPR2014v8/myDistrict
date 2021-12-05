<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['update_vill'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $id_dis = mysqli_real_escape_string($conn, $_POST['id_dis']);

    $_SESSION['success'] = "แก้ไขข้อมูลตำบลสำเร็จ.";

    $sql = "UPDATE village SET  name = '$name', id_dis = '$id_dis' WHERE id = '$id'";
    $objResult = mysqli_query($conn, $sql);
    header("location: ../show/shw_village.php");
    
}
