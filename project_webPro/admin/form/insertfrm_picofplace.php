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
    <title>บันทึกข้อมูลรูปภาพสถานที่</title>

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

        <h2 class="text-center">แบบฟอร์มบันทึกข้อมูลรูปภาพสถานที่</h2>

        <form action="../manage/insertData_picofplace.php" method="post" 
            enctype="multipart/form-data">

            <div class="form-group">
                <label for="link">รูปภาพสถานที่</label>
                <input type="file" name="link" id="" class="form-control mb-2" required>
            </div>

            <div class="col-sm-3">
            <label for="name">สถานที่</label>
                <?php
                $sql = "SELECT name FROM place ORDER BY id asc;";
                $result = mysqli_query($conn, $sql);
                ?>
                <select name="place" class="form-control" required>
                    <option value="ร้านนายเมธี">เลือกสถานที่</option>
                    <?php foreach ($result as $results) { ?>
                        <option value="<?php echo $results["name"]; ?>">
                            <?php echo $results["name"]; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <button class="btn btn-success my-2" name="insert_picofplc" type="submit">เพิ่มข้อมูลรูปภาพสถานที่</button>
            <button class="btn btn-danger my-2" name="reset_frm" type="reset">ล้างข้อมูล</button>
            <a href="../manage_pic_page.php" class="btn btn-primary my-2">กลับหน้าจัดการรูปภาพ</a>
            <!-- <a href="../index.php" class="btn btn-primary my-2">กลับหน้าแรก</a> -->
        </form>
        
    </div>

</body>

</html>