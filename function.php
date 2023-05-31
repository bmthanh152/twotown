<?php
    function tongdonhang(){
        $tong=0;
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
                for ($i = 0; $i< sizeof($_SESSION['giohang']); $i++) {
                    $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong += $tt;
                }
            }
        }
        return $tong;
    }

    function insertOrder($name, $phone, $address, $note, $total, $email, $purchase, $ngay){
        include './assets/db/config.php';
        $sql = "INSERT INTO tbl_khachhang (name, phone, address, note, total, email, purchase, ngay)
        VALUES ('$name', '$phone', '$address', '$note', '$total', '$email', '$purchase', '$ngay')";
        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
          } else {
            echo "Lỗi:" . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
          return $last_id;
    }
    
    function insertCart($tensp, $hinhsp, $soluong, $dongia, $thanhtien, $idbill){
        include './assets/db/config.php';
        $sql = "INSERT INTO tbl_donhang (tensp, hinhsp, soluong, dongia, thanhtien, idbill)
        VALUES ('$tensp', '$hinhsp', '$soluong', '$dongia', '$thanhtien', '$idbill')";
        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
          } else {
            echo "Lỗi:" . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    }

?>