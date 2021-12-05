<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลตำบล</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container my-3">

        <?php if (isset($_SESSION['error'])) : ?>
            <?php
            alert($_SESSION['error']);
            unset($_SESSION['error']);
            ?>
        <?php endif ?>

        <h2 class="text-center">แบบฟอร์มบันทึกข้อมูลตำบล</h2>
        <form action="../manage/insertData_sub_district.php" method="post">
            <div class="form-group">
                <label for="name">ชื่อตำบล</label>
                <input type="text" name="name" id="" class="form-control mb-2" required>
            </div>
            <button class="btn btn-success my-2" name="insert_sd" type="submit">เพิ่มข้อมูลตำบล</button>
            <button class="btn btn-danger my-2" name="reset_frm" type="reset">ล้างข้อมูล</button>
            <a href="../index.php" class="btn btn-primary my-2">กลับหน้าแรก</a>
        </form>
    </div>

</body>

</html>