<?php
    $server = "localhost";
    $user = "root";
    $pw = "";
    $db_name = "sugarcake";
    $conn = new mysqli($server,$user,$pw,$db_name);

    if($conn->connect_errno){
        printf("ไม่สามารถเชื่อมต่อฐานข้อมูลได้",$conn->connect_error);
        exit();
    }

    mysqli_set_charset($conn, 'utf8');
?>