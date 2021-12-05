<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['update_sd'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $_SESSION['success'] = "แก้ไขข้อมูลตำบลสำเร็จ.";

    $sql = "UPDATE sub_district SET  name = '$name' WHERE id = '$id'";
    $objResult = mysqli_query($conn, $sql);
    header("location: ../show/shw_sub_district.php");
    
}
