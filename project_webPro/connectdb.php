<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '123456';
    $dbname = 'my_sub_district';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("***Connection : Failed (เชื่อมต่อฐานข้อมูลไม่สำเร็จ)***" . mysqli_connect_error());
    } else {
        // echo "***Conection : Success (เชื่อมต่อฐานข้อมูลสำเร็จ)***";
    }
?>