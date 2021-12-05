<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

$sql = "SELECT c.id as 'id', c.name as 'name', detail, v.name as 'village' FROM culture as c INNER JOIN village as v ON c.id_vill = v.id";
$result = mysqli_query($conn, $sql);

$i = 0;
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ดูข้อมูลตารางสมาชิก</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

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

    <div class="container my-3 text-center">
        <h3>ข้อมูลสมาชิก</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col" style="width: 45%">detail</th>
                    <th scope="col">village</th>
                    <th scope="col">manage</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $i + 1; ?></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['detail']; ?></td>
                        <td><?php echo $row['village']; ?></td>
                        <td>
                            <a href="../form/updatefrm_culture.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">แก้ไข</a>
                            <a href="../manage/deleteData_culture.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a>
                        </td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>

        <div class="row mt-4">
            <a href="../index.php" class="btn btn-primary my-2">กลับหน้าแรกผู้ใช้</a>
        </div>
    </div>

</body>

</html>