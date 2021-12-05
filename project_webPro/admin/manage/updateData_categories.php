<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

if (isset($_POST['update_ctgry'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $_SESSION['success'] = "แก้ไขข้อมูลประเภทสถานที่สำเร็จ.";

    $sql = "UPDATE categories SET  name = '$name' WHERE id = '$id'";
    $objResult = mysqli_query($conn, $sql);
    header("location: ../show/shw_categories.php");
    
}
