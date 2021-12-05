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
    <title>ข้อมูลสมาชิก</title>

    <!-- import font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&family=Patrick+Hand&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <!-- content  -->
    <div class="container my-3">
        <!-- alert -->
        <?php if (isset($_SESSION['success'])) : ?>
            <?php
            alert($_SESSION['success']);
            unset($_SESSION['success']);
            ?>
        <?php endif ?>

        <?php if (isset($_SESSION['error'])) : ?>
            <?php
            alert($_SESSION['error']);
            unset($_SESSION['error']);
            ?>
        <?php endif ?>
        <!-- เพิ่มข้อมูล -->
        <div class="my-4">
            <div class="card border border-secondary">
                <h3 class="card-header bg-success text-light">เพิ่มข้อมูล</h3>
                <div class="card-body">
                    <h5 class="card-title">เลือกกรอกแบบฟอร์มเพื่อบันทึกข้อมูลลงในระบบ</h5>
                    <div class="row">
                        <div class="col-12">
                            <a href="form/insertfrm_member.php" class="btn btn-primary my-2">เพิ่มข้อมูลสมาชิก</a>
                            <a href="form/insertfrm_sub_district.php" class="btn btn-primary my-2">เพิ่มข้อมูลตำบล</a>
                            <a href="form/insertfrm_village.php" class="btn btn-primary my-2">เพิ่มข้อมูลหมู่บ้าน</a>
                        </div>
                        <div class="col-12">
                            <a href="form/insertfrm_culture.php" class="btn btn-success my-2">เพิ่มข้อมูลประเพณี</a>
                            <a href="form/insertfrm_categories.php" class="btn btn-success my-2">เพิ่มข้อมูลประเภทสถานที่</a>
                            <a href="form/insertfrm_place.php" class="btn btn-success my-2">เพิ่มข้อมูลสถานที่</a>
                            <a href="form/insertfrm_products.php" class="btn btn-success my-2">เพิ่มข้อมูลสินค้า</a>
                        </div>
                        <div class="col-12">
                            <a href="form/insertfrm_picofculture.php" class="btn btn-warning my-2">เพิ่มข้อมูลรูปภาพประเพณี</a>
                            <a href="form/insertfrm_picofplace.php" class="btn btn-warning my-2">เพิ่มข้อมูลรูปภาพสถานที่</a>
                            <a href="form/insertfrm_picofproducts.php" class="btn btn-warning my-2">เพิ่มข้อมูลรูปภาพสินค้า</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ดูข้อมูล -->
        <div class="my-4">
            <div class="card border border-secondary">
                <h3 class="card-header bg-success text-light">ดูข้อมูล</h3>
                <div class="card-body">
                    <h5 class="card-title">เลือกดูข้อมูลในระบบ</h5>
                    <div class="row">
                        <div class="col-12">
                            <a href="show/shw_member.php" class="btn btn-primary my-2">ดูข้อมูลสมาชิก</a>
                            <a href="show/shw_sub_district.php" class="btn btn-primary my-2">ดูข้อมูลตำบล</a>
                            <a href="show/shw_village.php" class="btn btn-primary my-2">ดูข้อมูลหมู่บ้าน</a>
                        </div>
                        <div class="col-12">
                            <a href="show/shw_culture.php" class="btn btn-success my-2">ดูข้อมูลประเพณี</a>
                            <a href="show/shw_categories.php" class="btn btn-success my-2">ดูข้อมูลประเภทสถานที่</a>
                            <a href="show/shw_place.php" class="btn btn-success my-2">ดูข้อมูลสถานที่</a>
                            <a href="show/shw_products.php" class="btn btn-success my-2">ดูข้อมูลสินค้า</a>
                        </div>
                        <div class="col-12">
                            <a href="show/shw_picofculture.php" class="btn btn-warning my-2">ดูข้อมูลรูปภาพประเพณี</a>
                            <a href="show/shw_picofplace.php" class="btn btn-warning my-2">ดูข้อมูลรูปภาพสถานที่</a>
                            <a href="show/shw_picofproducts.php" class="btn btn-warning my-2">ดูข้อมูลรูปภาพสินค้า</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- แก้ไขข้อมูล -->
        <div class="my-4">
            <div class="card border border-secondary">
                <h3 class="card-header bg-danger text-light">แก้ไขข้อมูล</h3>
                <div class="card-body">
                    <h5 class="card-title">เลือกกรอกแบบฟอร์มเพื่อแก้ไขข้อมูลในระบบ</h5>
                    <div class="row">
                        <div class="col-12">
                            <a href="form/updatefrm_member.php" class="btn btn-primary my-2">แก้ไขข้อมูลสมาชิก</a>
                            <a href="form/updatefrm_sub_district.php" class="btn btn-primary my-2">แก้ไขข้อมูลตำบล</a>
                            <a href="form/updatefrm_village.php" class="btn btn-primary my-2">แก้ไขข้อมูลหมู่บ้าน</a>
                        </div>
                        <div class="col-12">
                            <a href="form/updatefrm_culture.php" class="btn btn-success my-2">แก้ไขข้อมูลประเพณี</a>
                            <a href="form/updatefrm_categories.php" class="btn btn-success my-2">แก้ไขข้อมูลประเภทสถานที่</a>
                            <a href="form/updatefrm_place.php" class="btn btn-success my-2">แก้ไขข้อมูลสถานที่</a>
                            <a href="form/updatefrm_products.php" class="btn btn-success my-2">แก้ไขข้อมูลสินค้า</a>
                        </div>
                        <div class="col-12">
                            <a href="form/updatefrm_picofculture.php" class="btn btn-warning my-2">แก้ไขข้อมูลรูปภาพประเพณี</a>
                            <a href="form/updatefrm_picofplace.php" class="btn btn-warning my-2">เแก้ไขข้อมูลรูปภาพสถานที่</a>
                            <a href="form/updatefrm_picofproducts.php" class="btn btn-warning my-2">แก้ไขข้อมูลรูปภาพสินค้า</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ลบข้อมูล -->
        <div class="my-4">
            <div class="card border border-secondary">
                <h3 class="card-header bg-danger text-light">ลบข้อมูล</h3>
                <div class="card-body">
                    <h5 class="card-title">เลือกลบข้อมูลในระบบ</h5>
                    <div class="row">
                        <div class="col-12">
                            <a href="form/insertfrm_member.php" class="btn btn-primary my-2">ลบข้อมูลสมาชิก</a>
                            <a href="form/insertfrm_sub_district.php" class="btn btn-primary my-2">ลบข้อมูลตำบล</a>
                            <a href="form/insertfrm_village.php" class="btn btn-primary my-2">ลบข้อมูลหมู่บ้าน</a>
                        </div>
                        <div class="col-12">
                            <a href="form/insertfrm_culture.php" class="btn btn-success my-2">ลบข้อมูลประเพณี</a>
                            <a href="form/insertfrm_categories.php" class="btn btn-success my-2">ลบข้อมูลประเภทสถานที่</a>
                            <a href="form/insertfrm_place.php" class="btn btn-success my-2">ลบข้อมูลสถานที่</a>
                            <a href="form/insertfrm_products.php" class="btn btn-success my-2">ลบข้อมูลสินค้า</a>
                        </div>
                        <div class="col-12">
                            <a href="form/insertfrm_picofculture.php" class="btn btn-warning my-2">ลบข้อมูลรูปภาพประเพณี</a>
                            <a href="form/insertfrm_picofplace.php" class="btn btn-warning my-2">ลบข้อมูลรูปภาพสถานที่</a>
                            <a href="form/insertfrm_picofproducts.php" class="btn btn-warning my-2">ลบข้อมูลรูปภาพสินค้า</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4">
                <div class="col-12">
                    <a href="../index.php" class="btn btn-primary my-2">กลับหน้าแรกผู้ใช้</a>
                    <a href="admin_page.php" class="btn btn-danger my-2">กลับหน้าแรกผู้ดูแล</a>
                </div>
            </div>
        </div>

    </div>

</body>

</html>