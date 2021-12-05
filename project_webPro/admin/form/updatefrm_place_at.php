<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

$id = $_GET["id"];

$sql = "SELECT p.id as 'id', p.name as 'name', lat, lng, id_vill, id_ctgry, v.name as 'village', c.name as 'categories', detail FROM `place` as p INNER JOIN village as v ON p.id_vill = v.id INNER JOIN categories c ON p.id_ctgry = c.id WHERE p.id = '$id'";
$result = mysqli_query($conn, $sql);
$objResult = mysqli_fetch_array($result);
$id_vill = $objResult["id_vill"];
$id_ctgry = $objResult["id_ctgry"];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลสถานที่</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container my-3">

        <?php if (isset($_SESSION['success'])) : ?>
            <?php
            alert($_SESSION['success']);
            unset($_SESSION['success']);
            ?>
        <?php endif ?>

        <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูลสถานที่</h2>
        <form action="../manage/updateData_place.php" method="post">
            <div class="form-group">
                <label for="id">id</label>
                <input type="text" name="id" id="" class="form-control mb-2" value="<?php echo $objResult["id"]; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" name="name" id="" class="form-control mb-2" value="<?php echo $objResult["name"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="lat">lat</label>
                <input type="text" name="lat" id="" class="form-control mb-2" value="<?php echo $objResult["lat"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="lng">lng</label>
                <input type="text" name="lng" id="" class="form-control mb-2" value="<?php echo $objResult["lng"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="name">รายละเอียด</label>
                <textarea name="detail" id="" class="form-control mb-2" rows="5" required><?php echo $objResult["detail"]; ?></textarea>
            </div>
            <div class="form-group">
            <label for="name">หมู่บ้าน</label>
                <?php
                $sql = "SELECT id, name FROM village ORDER BY id asc;";
                $result = mysqli_query($conn, $sql);
                ?>
                <select name="id_vill" class="form-control" required>
                    <option value="<?php echo $id_vill; ?>">เลือกหมู่บ้าน</option>
                    <?php foreach ($result as $results) { ?>
                        <option value="<?php echo $results["id"]; ?>">
                            <?php echo $results["name"]; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
            <label for="name">ประเภทสถานที่</label>
                <?php
                $sql = "SELECT id, name FROM categories WHERE id = 2 OR id = 3;";
                $result = mysqli_query($conn, $sql);
                ?>
                <select name="id_ctgry" class="form-control" required>
                    <option value="<?php echo $id_ctgry; ?>">เลือกประเภท</option>
                    <?php foreach ($result as $results) { ?>
                        <option value="<?php echo $results["id"]; ?>">
                            <?php echo $results["name"]; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <button class="btn btn-success my-2" name="update_pln" type="submit">แก้ไขข้อมูลสถานที่</button>
            <a href="../index.php" class="btn btn-primary my-2">กลับหน้าแรก</a>
        </form>
    </div>

</body>

</html>