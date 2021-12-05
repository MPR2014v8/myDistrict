<?php
session_start();
require("../../connectdb.php");
include("../../allFunction.php");

$sql = "SELECT v.id as 'id', v.name as 'name', sd.name as 'sub_dis' FROM village AS v INNER JOIN sub_district AS sd ON v.id_dis = sd.id ";
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
        <h3>ข้อมูลหมู่บ้าน</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">sub_district</th>
                    <th scope="col">manage</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $i + 1; ?></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['sub_dis']; ?></td>
                        <td>
                            <a href="../form/updatefrm_village.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">แก้ไข</a>
                            <a href="../manage/deleteData_village.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a>
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