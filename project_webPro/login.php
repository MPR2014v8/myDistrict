<?php

session_start();
require("connectdb.php");
include("allFunction.php");

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                </ul>
            </div>
        </div>
    </nav>

    <!-- form login -->
    <div class="container mb-5">
        <br><br>
        <div class="row  justify-content-center">
            <div class="col-md-6 mt-5 pl-3 bg-light rounded shadow-lg border border-dark">
                <h1 class="mt-2 pt-5 text-center">ลงชื่อเข้าใช้</h1>

                <?php if (isset($_SESSION['error'])) : ?>
                    <?php
                    alert($_SESSION['error']);
                    unset($_SESSION['error']);
                    ?>
                <?php endif ?>

                <form action="login_db.php" name="loginform" onsubmit="return validateForm()" method="post" required>
                    <div class="input-group mt-5 mb-5 shadow-sm">
                        <span class="input-group-text fa fa-user"></span>
                        <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="username">
                    </div>
                    <div class="input-group mt-5 mb-5 shadow-sm">
                        <span class="input-group-text fa fa-lock"></span>
                        <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password">
                    </div>

                    <button class="btn btn-secondary mb-5" data-bs-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-success mb-5" name="login_user" type="submit">เข้าสู่ระบบ</button>
                </form>

            </div>
        </div>
    </div>


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

    <script src="app.js"></script>
</body>

</html>