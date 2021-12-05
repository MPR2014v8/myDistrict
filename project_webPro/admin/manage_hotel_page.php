<?php
session_start();
require("../connectdb.php");
include("../allFunction.php");

$sql = "SELECT p.id as 'id', p.name as 'name', lat, lng, v.name as 'village', c.name as 'ctgry', detail FROM `place` as p INNER JOIN village as v ON p.id_vill = v.id INNER JOIN categories as c ON p.id_ctgry = c.id WHERE id_ctgry = 5;";
$result = mysqli_query($conn, $sql);

$i = 0;
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Hotel Page</title>

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
            <h3 class="mt-5 text-center">ข้อมูลที่พัก</h3>
            <form action="manage_hotel_search.php" class="form-group" method="post">
                <label for="">ค้นหาที่พัก</label>
                <input type="text" placeholder="ป้อนคำที่เกี่ยวกับที่พัก" name="search_hotel" class="form-control">
                <input type="submit" value="ค้นหา" class="btn btn-dark my-2 px-5">
            </form>
            <a href="form/insertfrm_hotel.php" class="btn btn-primary my-2">เพิ่มข้อมูล</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">lat</th>
                        <th scope="col">lng</th>
                        <th scope="col">village</th>
                        <th scope="col">ctgry</th>
                        <th scope="col" style="width: 20%;">detail</th>
                        <th scope="col">manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $i + 1; ?></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['lat']; ?></td>
                            <td><?php echo $row['lng']; ?></td>
                            <td><?php echo $row['village']; ?></td>
                            <td><?php echo $row['ctgry']; ?></td>
                            <td><?php echo $row['detail']; ?></td>
                            <td>
                                <a href="form/updatefrm_hotel.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">แก้ไข</a>
                                <a href="manage/deleteData_hotel.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a>
                            </td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- 
    <section class="my-5">
        <a href="index.php" class="btn btn-danger my-5 mx-4">แก้ไขข้อมูลทั้งหมด</a>
    </section> -->

</body>

</html>