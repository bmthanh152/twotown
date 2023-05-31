<?php 
	include_once "validatelogin.php";
	if(isset($_POST['addcart'])&&($_POST['addcart'])){
		$message = "<p style='color:#B73239; font-weight: 700; font-size: 12pt;'>Vui lòng đăng nhập để đặt hàng</p>";    
        echo "<script>alert('Vui lòng đăng nhập để đặt hàng');</script>";
	}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Đăng nhập</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <!--link favicon-->
  <link href="./assets/img/icons8-trainers-16.png" rel="icon">
  <style>
	#btn-login:hover {
		background-color:  #7283a6 !important;
	}
  </style>
	<link rel="stylesheet" href="./assets/css/stylevalidateform.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>

<div class="box-form">
	<div class="left">
		<div class="overlay">
			<a href="./index.php"><img src="./assets/img/mainlogo.png" alt=""></a>
			<p>Shop bán giày uy tín đến từng sản phẩm. Mong bạn có trải nghiệm tốt với sản phẩm của chúng tôi.TwoTown cam kết đem lại sản phẩm đa dạng và chất lượng: Cửa hàng cung cấp đa dạng các mẫu giày từ những thương hiệu nổi tiếng, 
                        đảm bảo chất lượng, nguyên liệu đa dạng, tính thẩm mỹ và 
                        phù hợp với nhu cầu của đa dạng khách hàng.</p>
			<span>
				<p>Nền tảng của chúng tôi</p>
				<a href="https://www.facebook.com/profile.php?id=100090690530919&mibextid=ZbWKwL" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="www.twotown.online/register.php" target="_blank"><i class="fa fa-user" aria-hidden="true"></i></a>
			</span>
		</div>
	</div>
	
	
	<div class="right">
		<h5>Đăng nhập</h5>
		<p>Bạn chưa có tài khoản? <a href="./register.php">Hãy tạo một cái tài khoản nha!!!</a> để tối ưu hóa trải nghiệm của chính bạn với website của chúng tôi</p>
		<form method="post" name="loginform">
			<div class="inputs">
				<input type="text" name="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>" placeholder="Email" required>
				<br>
				<input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>" placeholder="Mật khẩu" required>
				<div class="remember-me--forget-password">
					<label>
						<input type="checkbox" name="item">
						<span class="text-checkbox">Nhớ tài khoản...</span>
					</label>
				</div>
				<input type="submit" name="login" id="btn-login" style="background-color: #e64b3a; color: white; 
				border-radius: 10px; width: fit-content; padding: 0.5rem 30px; margin: 10px; font-weight: 600;" value="Đăng nhập">
			</div>
		</form>
		<span><?php if (isset($error_message)) { echo $error_message; } ?></span>
	</div>
</div>  
</body>
</html>