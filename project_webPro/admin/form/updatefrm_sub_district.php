<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

$id = $_GET["id"];

$sql = "SELECT * FROM sub_district WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$objResult = mysqli_fetch_array($result);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลตำบล</title>

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

        <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูลตำบล</h2>
        <form action="../manage/updateData_sub_district.php" method="post">
            <div class="form-group">
                <label for="id">id</label>
                <input type="text" name="id" id="" class="form-control mb-2" value="<?php echo $objResult["id"]; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" name="name" id="" class="form-control mb-2" value="<?php echo $objResult["name"]; ?>" required>
            </div>
            <button class="btn btn-success my-2" name="update_sd" type="submit">แก้ไขข้อมูลตำบล</button>
            <a href="../index.php" class="btn btn-primary my-2">กลับหน้าแรก</a>
        </form>
    </div>

</body>

</html>