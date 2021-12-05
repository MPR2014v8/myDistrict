<?php
session_start();
require("../connectdb.php");
include("../allFunction.php");
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Place Page</title>

    <!-- import font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&family=Patrick+Hand&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>

    <?php if (isset($_SESSION['success'])) : ?>
        <?php
        alert($_SESSION['success']);
        unset($_SESSION['success']);
        ?>
    <?php endif ?>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">จัดการข้อมูล "เที่ยวบ้านฉัน ตำบลบ้านค้อ"</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar1" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="manage_place_page.php" class="nav-link">จัดการข้อมูลสถานที่</a>
                    </li>
                    <li class="nav-item">
                        <a href="manage_products_page.php" class="nav-link">จัดการข้อมูลสินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a href="manage_hotel_page.php" class="nav-link">จัดการข้อมูลที่พัก</a>
                    </li>
                    <li class="nav-item">
                        <a href="manage_pic_page.php" class="nav-link">จัดการข้อมูลรูปภาพ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    
    <section class="manage-hotel my-5">
        <div class="container my-5">
            <h3 class="mt-5 text-center">จัดการข้อมูลรูปภาพ</h3>
            <div class="my-4">
                <div class="card border border-secondary">
                    <h3 class="card-header bg-primary text-light">เพิ่มข้อมูล</h3>
                    <div class="card-body">
                        <h5 class="card-title">เลือกกรอกแบบฟอร์มเพื่อบันทึกข้อมูลลงในระบบ</h5>
                        <div class="row">
                            <div class="col-12">
                                <a href="form/insertfrm_picofculture.php" class="btn btn-warning my-2">เพิ่มข้อมูลรูปภาพประเพณี</a>
                                <a href="form/insertfrm_picofplace.php" class="btn btn-warning my-2">เพิ่มข้อมูลรูปภาพสถานที่</a>
                                <a href="form/insertfrm_picofproducts.php" class="btn btn-warning my-2">เพิ่มข้อมูลรูปภาพสินค้า</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-4">
                <div class="card border border-secondary">
                    <h3 class="card-header bg-success text-light">ดูข้อมูล</h3>
                    <div class="card-body">
                        <h5 class="card-title">เลือกดูข้อมูลในระบบ</h5>
                        <div class="row">
                            <div class="col-12">
                                <a href="show/shw_picofculture.php" class="btn btn-warning my-2">ดูข้อมูลรูปภาพประเพณี</a>
                                <a href="show/shw_picofplace.php" class="btn btn-warning my-2">ดูข้อมูลรูปภาพสถานที่</a>
                                <a href="show/shw_picofproducts.php" class="btn btn-warning my-2">ดูข้อมูลรูปภาพสินค้า</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- 
    <section class="my-5">
        <a href="index.php" class="btn btn-danger my-5 mx-4">แก้ไขข้อมูลทั้งหมด</a>
    </section> -->

</body>

</html>