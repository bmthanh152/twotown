<?php
    if (empty($_POST)){
        exit('');
    }
    include "./assets/db/config.php";
    $Email = $_POST['txtEmail'];
    $Ho = $_POST['txtHo'];
    $Ten = $_POST['txtTen'];
    $MatKhau = $_POST['pwd'];
    $NgaySinh = $_POST['dateNgaySinh'];
    $SoDienThoai = $_POST['txtSoDienThoai'];
    $GioiTinh = $_POST['txtGioiTinh'];
    
    

    // xử lý định dạng email
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
        $message = "Email này không hợp lệ. Vui lòng nhập email khác.";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='register.php'</script>";
        exit;
    }

    // kiểm tra email có tổn tại trong cơ sở dữ liệu chưa
    $select = "SELECT * FROM users WHERE Email = '$Email'";
    $result = mysqli_query($conn,$select);
    if (mysqli_num_rows($result)>0)
    {
        $message = "Email này đã có người sử dụng. Vui lòng chọn Email khác.";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='register.php'</script>";
        exit;
    }

    // password nhập lớn hơn bằng 6
    $pattern_password = "/^([\w_\.!@#$%^&amp;*()]+){6,31}$/";
    if (!preg_match($pattern_password,$MatKhau))
    {
        $message = "Vui lòng nhập mật khẩu lớn hơn hoặc bằng 6. Vui lòng nhập lại.";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='register.php'</script>";
        exit;
    }

    //Số điện thoại chỉ được nhập số và 10 số
    $pattern_telephone = "/^[0-9]{10}$/";
    if (!preg_match($pattern_telephone,$SoDienThoai))
    {
        $message = "Số điện thoại không hợp lệ. Vui lòng nhập lại.";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='register.php'</script>";
        exit;
    }

    $hashMatKhau=md5($MatKhau); //mã hóa mật khẩu

    $insert = "INSERT INTO users (Email, Ho, Ten, MatKhau, NgaySinh, SoDienThoai, GioiTinh)
                values ('{$Email}','{$Ho}','{$Ten}','{$hashMatKhau}','{$NgaySinh}','{$SoDienThoai}', '{$GioiTinh}')";
    $success=mysqli_query($conn,$insert);
    if ($success)
    {
        $message = "Đăng ký thành công. Vui lòng bạn hãy đăng nhập để sử dụng tài khoản.";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='index.php'</script>";
        //Đăng ký thành công sẽ chuyển về trang giao diện chính
        exit;
    }
?>