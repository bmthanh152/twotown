<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "twotown";
                // Tạo kết nối
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn , 'UTF8'); 
?>