<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

$username = $_GET["username"];

$sql = "SELECT * FROM member WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$objResult = mysqli_fetch_array($result);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลสมาชิก</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script>
        function onChange() {
            const password = document.querySelector('input[name=password]');
            const confirm = document.querySelector('input[name=confirm]');
            if (confirm.value === password.value) {
                confirm.setCustomValidity('');
            } else {
                confirm.setCustomValidity('Passwords do not match');
            }
        }
    </script>
</head>

<body>

    <div class="container my-3">

        <?php if (isset($_SESSION['success'])) : ?>
            <?php
            alert($_SESSION['success']);
            unset($_SESSION['success']);
            ?>
        <?php endif ?>

        <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูลสมาชิก</h2>
        <form action="../manage/updateData_member.php" method="post">
            <div class="form-group">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" name="username" id="" class="form-control mb-2" value="<?php echo $objResult["username"]; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="password">รหัสผ่านใหม่</label>
                <input type="password" name="password" id="" class="form-control mb-2" onChange="onChange()" required>
            </div>
            <div class="form-group">
                <label for="password">ยืนยันรหัสผ่าน</label>
                <input type="password" name="confirm" id="" class="form-control mb-2" onChange="onChange()" required>
            </div>
            <div class="form-group">
                <label for="name">ชื่อ-นามสกุล</label>
                <input type="text" name="name" id="" class="form-control mb-2" value="<?php echo $objResult["name"]; ?>" required>
            </div>
            <button class="btn btn-success my-2" name="update_user" type="submit">แก้ไขข้อมูลสมาชิก</button>
            <a href="../index.php" class="btn btn-primary my-2">กลับหน้าแรก</a>
        </form>
    </div>

</body>

</html>