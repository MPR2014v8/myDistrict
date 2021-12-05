<?php
require("connectdb.php");

$id = $_GET["cul_id"];

$sql = "
      SELECT c.name as 'cul_name', detail, v.name as 'vill_name', sd.name as 'sd_name', link 
      FROM picofculture as pic 
      INNER JOIN culture as c ON pic.id_cul = c.id
      INNER JOIN village as v ON c.id_vill = v.id 
      INNER JOIN sub_district as sd ON v.id_dis = sd.id
      WHERE c.id = '" . $id . "'
      ;
    ";
$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>เที่ยวบ้านฉัน ตำบลบ้านค้อ</title>
    <link rel="stylesheet" href="style.css" />

    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- import font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&family=Patrick+Hand&display=swap" rel="stylesheet" />

</head>

<body>

    <!-- 
      *** สร้างเมนู ***
     -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">เที่ยวบ้านฉัน ตำบลบ้านค้อ</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar1" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a href="#info" class="nav-link">ตำบลบ้านค้อ</a>
                    </li>
                    <li class="nav-item">
                        <a href="attraction_page.php" class="nav-link">สถานที่ท่องเที่ยว</a>
                    </li>
                    <li class="nav-item">
                        <a href="hotel_page.php" class="nav-link">ที่พัก</a>
                    </li>
                    <li class="nav-item">
                        <a href="product_page.php" class="nav-link">สินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">เกี่ยวกับเรา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal">เข้าสู่ระบบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    $sql1 = "
      SELECT c.name as 'cul_name', detail, v.name as 'vill_name', sd.name as 'sd_name', link 
      FROM picofculture as pic 
      INNER JOIN culture as c ON pic.id_cul = c.id
      INNER JOIN village as v ON c.id_vill = v.id 
      INNER JOIN sub_district as sd ON v.id_dis = sd.id
      WHERE c.id = '" . $id . "'
      ;
    ";
    $objQuery1 = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    $objResult1 = mysqli_fetch_array($objQuery1);
    ?>


    <!-- detail culture -->
    <section id="detail" class="py-5">
        <div class="container">
            <div class="row my-4 justify-content-center">
                <div class="title">
                    <h2><?php echo $objResult1['cul_name']; ?></h2>
                </div>
                <?php while ($objResult = mysqli_fetch_array($objQuery)) {
                    $str =  $objResult['link'];
                ?>
                    <div class="col-sm-4">
                        <img src="<?php echo $objResult['link']; ?>" style="width: 100%;">
                    </div>
                <?php } ?>
                <div class="detail mt-4">
                    <p><?php echo $objResult1['detail']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- *** about *** -->
    <?php
    $sql = "
      SELECT * FROM `homepage`;
    ";
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    $objResult = mysqli_fetch_array($objQuery);
    ?>
    <section id="about" class="p-5">
        <div class="dark-overlay">
            <div class="row">
                <div class="col">
                    <div class="container pt-4">
                        <h1>เกี่ยวกับเรา</h1>
                        <p>
                            <?php echo $objResult['about_web']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- *** Footer *** -->
    <footer class="text-center p-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>No Copyright &copy; Wachira Thonglert 2021</p>
                </div>
            </div>
        </div>
    </footer>

 <!-- Modal Login -->
 <form action="admin/index.php">
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">เข้าสู่ระบบ</h5>
            <button class="btn-close" data-bs-dismiss="modal"></buttonผ>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>ผู้ใช้</label>
              <input type="text" placeholder="ป้อนชื่อผู้ใช้" class="form-control" name="username" require/>
            </div>
            <div class="form-group">
              <label>รหัสผ่าน</label>
              <input type="password" placeholder="ป้อนรหัสผ่าน" class="form-control" name="password" require/>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">
              ยกเลิก
            </button>
            <button class="btn btn-success" name="login_user" type="submit">เข้าสู่ระบบ</button>
          </div>
        </div>
      </div>
    </div>
  </form>

</body>

</html>