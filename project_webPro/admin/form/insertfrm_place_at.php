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
    <title>บันทึกข้อมูลสถานที่</title>

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

        <h2 class="text-center">แบบฟอร์มบันทึกข้อมูลสถานที่</h2>
        <form action="../manage/insertData_place.php" method="post">
            <div class="form-group">
                <label for="name">ชื่อสถานที่</label>
                <input type="text" name="name" id="" class="form-control mb-2" required>
            </div>
            <div class="form-group">
                <label for="lat">ละติจูด</label>
                <input type="text" name="lat" id="" class="form-control mb-2" required>
            </div>
            <div class="form-group">
                <label for="name">ลองติจูด</label>
                <input type="text" name="lng" id="" class="form-control mb-2" required>
            </div>
            <div class="col-sm-3">
            <label for="village">หมู่บ้าน</label>
                <?php
                $sql = "SELECT name FROM village ORDER BY id asc;";
                $result = mysqli_query($conn, $sql);
                ?>
                <select name="vill" class="form-control" required>
                    <option value="บ้านค้อ">เลือกหมู่บ้าน</option>
                    <?php foreach ($result as $results) { ?>
                        <option value="<?php echo $results["name"]; ?>">
                            <?php echo $results["name"]; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm-3">
            <label for="ctgry">ประเภทสถานที่</label>
                <?php
                $sql = "SELECT name FROM categories WHERE id = 2 OR id = 3;";
                $result = mysqli_query($conn, $sql);
                ?>
                <select name="ctgry" class="form-control" required>
                    <option value="สถานที่ท่องเที่ยว">เลือกประเภท</option>
                    <?php foreach ($result as $results) { ?>
                        <option value="<?php echo $results["name"]; ?>">
                            <?php echo $results["name"]; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">รายละเอียด</label>
                <textarea name="detail" id="" class="form-control mb-2" rows="5" required></textarea>
            </div>
            <button class="btn btn-success my-2" name="insert_place_at" type="submit">เพิ่มข้อมูลสถานที่</button>
            <button class="btn btn-danger my-2" name="reset_frm" type="reset">ล้างข้อมูล</button>
            <a href="../index.php" class="btn btn-primary my-2">กลับหน้าแรก</a>
        </form>
    </div>

</body>

</html>