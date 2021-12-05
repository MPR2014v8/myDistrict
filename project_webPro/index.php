<?php
require("connectdb.php");
$sql = "
  SELECT * FROM `homepage`;
  ";
$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
$objResult = mysqli_fetch_array($objQuery);
?>

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

  <!-- 
      *** สร้าง Slider ***
     -->
  <section id="slider">
    <div class="carousel slide " data-bs-ride="carousel" id="mySlider">

      <!-- ปุ่ม slider -->
      <ol class="carousel-indicators">
        <button data-bs-target="#mySlider" data-bs-slide-to="0" class="active"></button>
        <button data-bs-target="#mySlider" data-bs-slide-to="1"></button>
        <button data-bs-target="#mySlider" data-bs-slide-to="2"></button>
      </ol>

      <div class="carousel-inner ">
        <!-- เริ่ม loop สร้าง slider -->
        <!-- img silder -->
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block">
              <!-- title slider -->
              <h1 class="display-3">ประเพณีวันสงกรานต์</h1>
              <!-- detail slider -->
              <p>
                การสรงน้ำพระ คือ การทำความสะอาดพระพุทธรูป หิ้งพระ รูปภาพ
                และสิ่งของต่าง ๆ
                รวมไปถึงที่ประดิษฐานขององค์พระพุทธรูปให้สะอาดบริสุทธิ์
                หรือเรียกอีกอย่างว่า “การถวายเครื่องเถราภิเษก”
                ซึ่งเป็นพิธีกรรมที่มีมาตั้งแต่สมัยพุทธกาลและสืบเนื่องต่อมาจนถึงปัจจุบันและต้องทำเป็นประจำทุกปี
                ถือว่าเป็นการชำระพระวรกายของพระพุทธเจ้าให้ปราศจากมลทิน
                เพื่อให้เกิดมุทิตาจิต เบิกบานใจ สุขใจ
                และเกิดความเป็นสิริมงคลกับผู้ที่ปฏิบัติและทุกคนในบ้าน
                นอกจากนี้ยังเป็นการแสดงถึงความเคารพและเลื่อมใสศรัทธาต่อพระรัตนตรัยทั้ง
                3 ประการอีกด้วย
              </p>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block">
              <h1 class="display-3">ประเพณีบุญเบิกบ้าน</h1>
              <p>
                เป็นการทำบุญเพื่อชำระล้างสิ่งที่เป็นเสนียดจัญไร
                อันจะทำให้เกิดความเดือดร้อนแก่บ้านเมือง
                บ้านเมืองอยู่ไม่เป็นสุข
                ในบางครั้งก็ทำเมื่อฝนแล้งหรือไม่ตกต้องตามฤดูกาล
                โดยเชื่อกันว่าเมื่อทำแล้วจะทำให้ฝนตกและบ้านเมืองอยู่เย็นเป็นสุข
                เพื่อจะได้ทำนาและปลูกพืชพันธ์ธัญญาหารต่างๆ
              </p>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block">
              <h1 class="display-3">ประเพณีบุญข้าวประดับดิน</h1>
              <p>
                “บุญเดือนเก้า ข้าวประดับดิน” หรือ “บุญข้าวประดับดิน”
                เป็นประเพณีหนึ่งในฮีตสิบสอง ของชาวอีสาน
                เพื่ออุทิศบุญกุศลให้กับผู้ล่วงลับไปแล้ว นิยมทำกันในวันแรม 14
                ค่ำ เดือนเก้า หรือที่เรียกว่า บุญเดือนเก้า บุญข้าวประดับดิน
                เป็นบุญที่ทำเพื่ออุทิศส่วนกุศลให้แก่ เปรต
                (ชาวอีสานบางถิ่นเรียก เผต) หรือญาติมิตรที่ตายไปแล้ว
                ข้าวประดับดิน ได้แก่ ข้าวและอาหารคาวหวาน พร้อมหมากพลู
                บุหรี่ที่ห่อด้วยใบตอง กล้วย นำไปวางไว้ตามใต้ต้นไม้
                แขวนไว้ตามกิ่งไม้ ตามบริเวณกำแพงวัดบ้าง
                (คนอีสานโบราณเรียกกำแพงวัดว่า ต้ายวัด) หรือวางไว้ตามพื้นดิน
                เรียกว่า "ห่อข้าวน้อย" พร้อมกับเชิญวิญญาณของญาติมิตร
                นำภัตตาหารไปถวายแด่พระภิกษุ สามเณร แล้วอุทิศส่วนกุศลแก่ผู้ตาย
                โดยหยาดน้ำ (กรวดน้ำ) ไปให้ด้วย
              </p>
            </div>
          </div>
        </div>

      </div>

      <!-- btn prev and next -->
      <button class="carousel-control-prev" data-bs-target="#mySlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" data-bs-target="#mySlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </section>

  <!-- *** ตำบลบ้านค้อ *** -->
  <section id="info" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center mb-4">
          <!-- icon -->
          <i class="fas fa-book fa-3x mb-2"></i>
          <h3>ประวัติความเป็นมา</h3>
          <p>
            <?php echo $objResult['history']; ?>
          </p>
        </div>
        <div class="col-md-4 text-center mb-4">
          <i class="fas fa-book-reader fa-3x mb-2"></i>
          <h3>เกี่ยวกับตำบล</h3>
          <p>
            <?php echo $objResult['about_subDis']; ?>
          </p>
        </div>

        <div class="col-md-4 text-center mb-4">
          <i class="fas fa-users fa-3x mb-2"></i>
          <h3>ศาสนา ประเพณี วัฒนธรรม</h3>
          <p>
            <?php echo $objResult['culture_subDis']; ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- *** ประเพณีในตำบล *** -->
  <section id="festival" class="py-5">
    <?php
    $sql = "
    SELECT c.id as 'cul_id', c.name as 'cul_name', detail, v.name as 'vill_name', sd.name as 'sd_name', link FROM picofculture as pic INNER JOIN culture as c ON pic.id_cul = c.id INNER JOIN village as v ON c.id_vill = v.id INNER JOIN sub_district as sd ON v.id_dis = sd.id GROUP BY c.id;
      ";
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>
    <div class="container">
      <div class="row my-4">
        <?php
        //  output ข้อมูลในตาราง
        while ($objResult = mysqli_fetch_array($objQuery)) {
        ?>
          <div class="col-sm-4 mb-4">
            <div class="card">
              <img src="<?php echo $objResult["link"] ?>" alt="" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title"> <?php echo $objResult["cul_name"] ?> </h5>
                <p>
                  ประเพณีพื้นบ้านของชาวตำบลบ้านค้อ จะจัดทำขึ้นเป็นประจำในทุกๆปี เป็นกิจกรรมที่เหล่าลูกบ้านจะช่วยกันอาสา มาร่วมกันลงแรงทำงานอยู่ตลอด
                </p>
                <a href="culture_detail_page.php?cul_id=<?php echo $objResult['cul_id'] ?>" class="btn btn-primary">ดูเพิ่มเติม</a>
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
  <form action="login_db.php" name="loginform" method="post" onsubmit="return validateForm()" required>
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
              <input type="text" placeholder="ป้อนชื่อผู้ใช้" class="form-control" name="username" />
            </div>
            <div class="form-group">
              <label>รหัสผ่าน</label>
              <input type="password" placeholder="ป้อนรหัสผ่าน" class="form-control" name="password" />
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

  <script src="app.js"></script>

</body>

</html>