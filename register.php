<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./assets/css/stylevalidateform.css">
    <!--link favicon-->
    <link href="./assets/img/icons8-trainers-16.png" rel="icon">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<?php
    ob_start();
    session_start();
    if(isset($_SESSION["email"])) {
        header("Location: index.php");
    }
?>
<body>
    <div class="box-form">
	<div class="left">
		<div class="overlay">
            <a href="./index.php"><img src="./assets/img/mainlogo.png" alt=""></a>
		</div>
	</div>
	
	
	<div class="right right-register">
		<h5>Đăng kí</h5>
		<form method='post' action='validateregister.php'>
                <div class="user-detail">
                    <div class="input-detail">
                        <label class="detail">Email:</label>
                        <input type="text" name="txtEmail" placeholder="Nhập Email" class="margin-unset" required>
                    </div>
                    <div class="input-detail">
                        <label class="detail">Họ:</label>
                        <input type="text" name="txtHo" placeholder="Nhập họ" class="margin-unset" required>
                    </div>
                    <div class="input-detail">
                        <label class="detail">Tên:</label>
                        <input type="text" name="txtTen" placeholder="Nhập tên" class="margin-unset" required>
                    </div>
                    <div class="input-detail">
                        <label class="detail">Mật khẩu:</label>
                        <input type="password" name="pwd" placeholder="Nhập mật khẩu" class="margin-unset" required>
                    </div>
                    <div class="input-detail">
                        <label class="detail">Ngày sinh:</label>
                        <input type="date" name="dateNgaySinh" class="margin-unset" required>
                    </div>
                    <div class="input-detail">
                        <label class="detail">Số điện thoại:</label>
                        <input type="text" name="txtSoDienThoai" placeholder="Nhập số điện thoại" class="margin-unset"  required>
                    </div>
                </div>
                <div class="gender-detail">
                    <label class="gender-title">Giới tính:</label>
                    <div class="category">
                        <div class="category-male">
                            <label for="male">Nam</label>
                            <input type="radio" name="txtGioiTinh" id="male" value="Nam" checked="checked">
                        </div>
                        <div class="category-female">
                            <label for="male">Nữ</label>
                            <input type="radio" name="txtGioiTinh" id="female" value="Nữ">  
                        </div>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Đăng ký" class="submit">
                    <input type="reset" value="Nhập lại" class="reset">
                </div>             
            </form>
		<span><?php if (isset($error_message)) { echo $error_message; } ?></span>
	</div>
</div>  


</body>
</html>