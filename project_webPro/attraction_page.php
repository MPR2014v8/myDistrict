<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>เที่ยวบ้านฉัน ตำบลบ้านค้อ</title>
  <link rel="stylesheet" href="style.css" />

  <!-- import bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- import fontawesome (icon) -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- import font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&family=Patrick+Hand&display=swap" rel="stylesheet" />

</head>

<body>
  <!-- *** สร้างเมนู *** -->
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
            <a href="index.php#info" class="nav-link">ตำบลบ้านค้อ</a>
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
  <!-- GROUP BY -->

  <!-- *** load data from db *** -->
  <section id="festival" class="py-5">
    <?php
    require("connectdb.php");
    $sql = "
    SELECT p.id as 'p_id', p.name as 'name_place', lat, lng, v.name as 'name_village', sd.name as 'name_sub_dis', link FROM picofplace as picp INNER JOIN place as p on picp.id_pln = p.id INNER JOIN village as v on p.id_vill = v.id INNER JOIN sub_district as sd on v.id_dis = sd.id WHERE p.id_ctgry = 2 OR p.id_ctgry = 3 GROUP BY p.id;
    ";

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>

    <div class="container">
      <!-- *** search *** -->
      <div class="row justify-content-center">
        <div class="col-sm-4 col-md-6">
          <form action="search.php" method="get" class="form-control mt-5 p-4">
            <input type="search" name="search" class="form-control rounded mb-2" placeholder="ป้อนคำที่ต้องการหา" aria-label="Search" aria-describedby="search-addon" />
            <select name="select" class="form-select rounded mb-2" aria-label="select">
              <option selected value="3">สถานที่ท่องเที่ยว</option>
              <option value="1">ร้านค้า</option>
              <option value="0">สินค้า</option>
              <option value="5">ที่พัก</option>
              <option value="2">วัด</option>
            </select>
            <input type="submit" class="btn btn-outline-primary">
          </form>
        </div>
      </div>

      <!-- card สถานที่ท่องเที่ยว -->
      <div class="row my-4">
        <?php
        //  output ข้อมูลในตาราง
        while ($objResult = mysqli_fetch_array($objQuery)) {
        ?>
          <div class="col-sm-4 mb-4">
            <div class="card">
              <img src="<?php echo $objResult["link"] ?>" alt="" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title"> <?php echo $objResult["name_place"] ?> </h5>
                <p>
                  ละติจูด : <?php echo $objResult["lat"]; ?> <br>
                  ลองจิจูด : <?php echo $objResult["lng"]; ?> <br>
                  <?php echo $objResult["name_village"]; ?>
                  ตำบล<?php echo $objResult["name_sub_dis"]; ?>
                  อำเภอบ้านผือ
                  จังหวัดอุดธานี

                  <?php
                  // ดึง plus code from plus code api
                  $lat = $objResult["lat"];
                  $lng = $objResult["lng"];
                  $str = file_get_contents("https://plus.codes/api?address=$lat,$lng&ekey=AIzaSyBOtQTtAbg0Rfl7RQ1WPjEjPw6Pg5pu9TA&email=domezaza48@gmail.com");
                  $json = json_decode($str, true);
                  $post_code = strval($json["plus_code"]["global_code"]);
                  // แปลง + เป็น %2B 
                  $myArray = explode('+', $post_code);
                  $str = $myArray[0] . "%2B" . $myArray[1];
                  $str = trim($str); // ลบช่องว่าง
                  ?>
                  <iframe class="mt-4" width="100%" height="300px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBOtQTtAbg0Rfl7RQ1WPjEjPw6Pg5pu9TA&q=<?php echo $str; ?>&center=<?php echo $objResult["lat"]; ?> ,<?php echo $objResult["lng"]; ?>" allowfullscreen>
                  </iframe>
                </p>
                <a href="place_detail_page.php?p_id=<?php echo $objResult['p_id'] ?>" class="btn btn-primary">ดูเพิ่มเติม</a>
              </div>

            </div>
          </div>
        <?php
        }
        ?>
      </div>

    </div>
  </section>

  <!-- *** about *** -->
  <section id="about" class="p-5">
    <?php
    $sql = "
        SELECT * FROM `homepage`;
      ";
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    $objResult = mysqli_fetch_array($objQuery);
    ?>
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

  <?php mysqli_close($conn); ?>
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
              <input type="text" placeholder="ป้อนชื่อผู้ใช้" class="form-control" name="username" require />
            </div>
            <div class="form-group">
              <label>รหัสผ่าน</label>
              <input type="password" placeholder="ป้อนรหัสผ่าน" class="form-control" name="password" require />
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