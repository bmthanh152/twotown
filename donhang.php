<?php 
    ob_start();
    session_start(); 
    include 'function.php';
    if(isset($_POST['acceptOrder']) && ($_POST['acceptOrder'])){
        //lấy thông tin từ khách hàng để tạo giỏ hàng
        $name = $_POST['contact-name'];
        $phone = $_POST['contact-tel'];
        $address = $_POST['contact-address'];
        $email = $_POST['contact-email'];
        $note = $_POST['contact-note'];
        $purchase = $_POST['payUrl'];
        $total = tongdonhang();
        $ngay = date('Y/m/d');
        //validate form
        // xử lý định dạng email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $message = "<p style='color:#B73239; font-weight: 700; font-size: 12pt;'>Sai email. Vui lòng nhập lại!</p>";    
        echo "<script type='text/javascript'>alert('Sai email. Vui lòng nhập lại!');
        window.location.href='giohang.php'</script>";
        exit;
    }
    if ($email == '')
    {
        $message = "<p style='color:#B73239; font-weight: 700; font-size: 12pt;'>Sai email. Vui lòng nhập lại!</p>";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='giohang.php'</script>";
        exit;
    }
    //Số điện thoại chỉ được nhập số và 10 số
    $pattern_telephone = "/^[0-9]{10}$/";
    if (!preg_match($pattern_telephone,$phone))
    {
        $message = "<p style='color:#B73239; font-weight: 700; font-size: 12pt;'>Sai định  dạng số điện thoại. Vui lòng nhập lại!</p>";
        echo "<script type='text/javascript'>alert('Sai định  dạng số điện thoại. Vui lòng nhập lại!');
        window.location.href='giohang.php'</script>";
        exit;
    }
    if ($phone == '')
    {
        $message = "<p style='color:#B73239; font-weight: 700; font-size: 12pt;'>Vui lòng không để điện thoại trống</p>";
        echo "<script type='text/javascript'>alert('Vui lòng không để điện thoại trống');
        window.location.href='giohang.php'</script>";
        exit;
    }
        //lấy thông tin giỏ hàng từ session + id đơn hàng vừa tạo
        //insert vào bảng giỏ hàng
        $idbill = insertOrder($name, $phone, $address, $note, $total, $email, $purchase, $ngay);
        if(!isset($_SESSION['giohang'])){
            $message = 'Đơn hàng của bạn đang được giao! Tiếp tục quay lại mua hàng nhé';
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='index.php'</script>";
        }
        
        for($i = 0; $i < sizeof($_SESSION['giohang']); $i++){
            $tensp = $_SESSION['giohang'][$i][1];
            $hinhsp = $_SESSION['giohang'][$i][0];
            $dongia = $_SESSION['giohang'][$i][2];
            $soluong = $_SESSION['giohang'][$i][3];
            $thanhtien = $dongia * $soluong;
            insertCart($tensp, $hinhsp, $soluong, $dongia, $thanhtien, $idbill);
        }

        //show confirm đơn hàng
        

        //unset giỏ hàng session

      //  echo "Bạn đã đặt hàng thành công. Đơn hàng của bạn là!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link tới css-->
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <!--link tới lib icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--link favicon-->
    <link href="./assets/img/icons8-trainers-16.png" rel="icon">
     <!-- css internal -->
     <style>
        .header-main-user-dropdown{
            display: none;
        }
        .header-main-user-dropdown--list li:hover{
             background-color: #ccc;
        }

        .header-main-item-list li i:hover~.header-main-user-dropdown{
            display: block;
        }

        .header-main-user-dropdown:hover{
            display: block;
        }   
    </style>
    <title>Đơn hàng | TwoTown</title>
</head>
<body>
    <div id="app">
        <!--Start header section-->
        <section id="header">
            <div class="header-content">
                <!-- Start header infomation-->
                <div class="header-info_container">
                    <div class="header-info  content-width">
                        <div class="header-info--shop">
                            <ul class="header-info--shop-list">
                                <li class="header-info--shop-item"><i class="fa-solid fa-shop"></i>TwoTown</li>
                                <li class="header-info--shop-item"><i class="fa-solid fa-location-dot"></i>
                                    <a href="https://goo.gl/maps/nATt9eRev5ryQkf88" target="_blank">
                                        1E Hoàng Diệu 2, Thủ Đức, TP Hồ Chí Minh 
                                   </a> 
                                </li>
                                <li class="header-info--shop-item"><i class="fa-solid fa-phone"></i>
                                    <a href="tel:0345462407">0345462407</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-info--media">
                            <ul class="header-info--media-list">
                                <li class="header-info--media-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="1.5vw" height="6vh"
                                    viewBox="0 0 48 48">
                                    <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient><path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path><path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                                    </svg>    
                                </li>
                                <li class="header-info--media-item"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="1.5vw" height="6vh"
                                    viewBox="0 0 48 48">
                                    <path fill="#f4511e" d="M36.683,43H11.317c-2.136,0-3.896-1.679-3.996-3.813l-1.272-27.14C6.022,11.477,6.477,11,7.048,11 h33.904c0.571,0,1.026,0.477,0.999,1.047l-1.272,27.14C40.579,41.321,38.819,43,36.683,43z"></path><path fill="#f4511e" d="M32.5,11.5h-2C30.5,7.364,27.584,4,24,4s-6.5,3.364-6.5,7.5h-2C15.5,6.262,19.313,2,24,2 S32.5,6.262,32.5,11.5z"></path><path fill="#fafafa" d="M24.248,25.688c-2.741-1.002-4.405-1.743-4.405-3.577c0-1.851,1.776-3.195,4.224-3.195 c1.685,0,3.159,0.66,3.888,1.052c0.124,0.067,0.474,0.277,0.672,0.41l0.13,0.087l0.958-1.558l-0.157-0.103 c-0.772-0.521-2.854-1.733-5.49-1.733c-3.459,0-6.067,2.166-6.067,5.039c0,3.257,2.983,4.347,5.615,5.309 c3.07,1.122,4.934,1.975,4.934,4.349c0,1.828-2.067,3.314-4.609,3.314c-2.864,0-5.326-2.105-5.349-2.125l-0.128-0.118l-1.046,1.542 l0.106,0.087c0.712,0.577,3.276,2.458,6.416,2.458c3.619,0,6.454-2.266,6.454-5.158C30.393,27.933,27.128,26.741,24.248,25.688z"></path>
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End header infomation-->
                <!-- Start main header-->
                <div class="header-main">
                    <div class="header-main-content content-width">
                        <div class="header-main-item">
                            <a href="index.php">
                                <img src="./assets/img/mainlogo.png" alt="logo twotown">
                            </a>
                        </div>
                        <div class="header-main-item">
                            <div class="header-main-item--searchbar">
                                <input type="text" name="searchbar" id="seachbar" placeholder="Tìm kiếm...">
                                <button>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>   
                            </div>
                        </div>
                        <?php
                        
                        if(isset($_SESSION["email"]) && isset($_SESSION["password"])) { ?>
                            
                        <div class="header-main-item">
                            <ul class="header-main-item-list">
                                <li>
                                    <i class="fa-solid fa-user"></i>
                                    <div class="header-main-user-dropdown">
                                        <ul class="header-main-user-dropdown--list">
                                            <li >Tài khoản</li>
                                            <li><a href="./huysession.php">Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                        <a href="./giohang.php">
                                        <strong>
                                            <?php 
                                                if(isset($_SESSION['quantity'])){
                                                    echo $_SESSION['quantity'];
                                                }else echo '0';
                                            ?>
                                        </strong>
                                        </a>
                                </li>
                            </ul>
                            <div class="toggleMenu" onclick="document.querySelector('.header-navbar').classList.toggle('active')">
                                    <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                       <?php }else { ?>
                            <div class="header-main-item">
                                <ul class="header-main-item-list">
                                    <li>
                                        <a href="./formlogin.php">Đăng nhập</a>
                                    </li>
                                    <li>
                                        <a href="./register.php">Đăng kí</a>
                                    </li>
                                    <li>
                                        <a href="./giohang.php">
                                            <strong>0</strong>
                                        </a>
                                    </li>
                                </ul>
                                <div class="toggleMenu" onclick="document.querySelector('.header-navbar').classList.toggle('active')">
                                    <i class="fa-solid fa-bars"></i>
                                </div>
                            </div>
                      <?php  }?>
                    </div>
                </div>
                <!-- End main header-->
            </div>
        </section>
        <!--End header section-->

        <!--Start body section--->
        <section id="body">
                <center><b><h1 style="color: var(--logo-color)">ĐƠN HÀNG CỦA BẠN ĐÃ ĐƯỢC ĐẶT THÀNH CÔNG</h1></b></center>
            <div class="body-cart content-width">
                <!----------------------------------------Thông tin khách hàng----------------------------------->
                <div class="body-gh-form box-form-dh">
                            <h3>Cảm ơn <?php echo $name ?> đã mua hàng tại TwoTown</h3>
                             <ul class="body-gh-form-dh-list">
                                <li>Mã đơn hàng: <b><?php echo $idbill ?></b></li>
                                <li>Ngày: <b><?php echo date('d/m/Y'); ?></b></li>
                                <li>Phí giao hàng: 0 VND </li>
                                <li>Tổng cộng: <b><?php echo $total.' VND'?></b></li>
                                <li>Phương thức thanh toán: <b><?php echo $purchase ?></b></li>
                             </ul>

                            <div class="body-dh-form_purchase--method">
                                <?php
                                    //Thanh toán momo
                                    if($purchase == 'Thanh toán momo') {
                                        function execPostRequest($url, $data)
                                            {
                                                $ch = curl_init($url);
                                                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                                                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                                        'Content-Type: application/json',
                                                        'Content-Length: ' . strlen($data))
                                                );
                                                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                                                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                                                //execute post
                                                $result = curl_exec($ch);
                                                //close connection
                                                curl_close($ch);
                                                return $result;
                                            }
                                        if(isset($_POST['payUrl'])&&($_POST['payUrl']='Thanh toán momo')){
                                            $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";


                                            $partnerCode = "MOMOBKUN20180529";
                                            $accessKey = "klm05TvNBzhg7h7j";
                                            $secretKey = "at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa";
                                            $orderInfo = "Thanh toán qua MoMo";
                                            $amount = $total;
                                            $orderId = time() ."";
                                            $returnUrl = "./thanks.php";
                                            $notifyurl = "./thanks.php";
                                            // Lưu ý: link notifyUrl không phải là dạng localhost
                                            $bankCode = "SML";
                                            if (!empty($_POST)) {
                                                $partnerCode =  $partnerCode;
                                                $accessKey = $accessKey;
                                                $serectkey = $secretKey;
                                                $orderid = time()."";
                                                $orderInfo =$orderInfo;
                                                $amount = $amount;
                                                $bankCode = $bankCode;
                                                $returnUrl = $returnUrl;
                                                $requestId = time()."";
                                                $requestType = "payWithMoMoATM";
                                                $extraData = "";
                                                    //before sign HMAC SHA256 signature
                                                    $rawHashArr =  array(
                                                                    'partnerCode' => $partnerCode,
                                                                    'accessKey' => $accessKey,
                                                                    'requestId' => $requestId,
                                                                    'amount' => $amount,
                                                                    'orderId' => $orderid,
                                                                    'orderInfo' => $orderInfo,
                                                                    'bankCode' => $bankCode,
                                                                    'returnUrl' => $returnUrl,
                                                                    'notifyUrl' => $notifyurl,
                                                                    'extraData' => $extraData,
                                                                    'requestType' => $requestType
                                                                    );
                                                    // echo $serectkey;die;
                                                    $rawHash = "partnerCode=".$partnerCode."&accessKey=".$accessKey."&requestId="
                                                    .$requestId."&bankCode=".$bankCode."&amount=".$amount."&orderId=".$orderid."&orderInfo="
                                                    .$orderInfo."&returnUrl=".$returnUrl."&notifyUrl=".$notifyurl."&extraData=".$extraData."&requestType=".$requestType;
                                                    $signature = hash_hmac("sha256", $rawHash, $serectkey);

                                                    $data =  array('partnerCode' => $partnerCode,
                                                                    'accessKey' => $accessKey,
                                                                    'requestId' => $requestId,
                                                                    'amount' => $amount,
                                                                    'orderId' => $orderid,
                                                                    'orderInfo' => $orderInfo,
                                                                    'returnUrl' => $returnUrl,
                                                                    'bankCode' => $bankCode,
                                                                    'notifyUrl' => $notifyurl,
                                                                    'extraData' => $extraData,
                                                                    'requestType' => $requestType,
                                                                    'signature' => $signature);
                                                    $result = execPostRequest($endpoint, json_encode($data));
                                                    $jsonResult = json_decode($result,true);  // decode json
                                                    if(!($jsonResult == false)) {
                                                        header('Location: '.$jsonResult['payUrl']);
                                                    }else{
                                                        echo `<h3 style="color: #000;">Dịch vụ hỗ trợ thanh toán bằng ATM của momo 
                                                        hiện tại ko có sẵn quý khách vui lòng sử dụng mã QR bên dưới để thanh toán đơn hàng</h3><br>
                                                        <div class="body-dh-form_purchase-momo">
                                                        <h3 style="color: var(--color-text-black);">Vui lòng quét mã thanh toán để chuyển khoản 
                                                        cho cửa hàng. Sau khi xác nhận thanh toán đơn hàng sẽ được vận chuyển đến ngay cho quý khách</h3>
                                                        <img src="./assets/img/momo.jpg" style="width: 100%;">
                                                        </div>`;
                                                    }
                                        } } } ?>
                                   <?php    
                                    //Thanh toán VNPAY
                                   if($purchase == 'Thanh toán vnpay') {
                                        if(isset($_POST['payUrl'])&&($_POST['payUrl']=='Thanh toán vnpay')){
                                            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
                                            date_default_timezone_set('Asia/Ho_Chi_Minh');

                                            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                                            $vnp_Returnurl = "http://localhost/twotown/thanks.php"; //  $vnp_Returnurl = "twotown.online/thanks.php";
                                            $vnp_TmnCode = "27HQLUVF";//Mã website tại VNPAY 
                                            $vnp_HashSecret = "JRNUZSQWCEOSTRTFQWRPNPIBYESDMWVK"; //Chuỗi bí mật

                                            $vnp_TxnRef = rand(00,9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                                            $vnp_OrderInfo = 'Noi dung thanh toan';
                                            $vnp_OrderType = 'billpayment';
                                            $vnp_Amount = $total * 100;
                                            $vnp_Locale ='vn';
                                            $vnp_BankCode = 'NCB';
                                            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                                            $inputData = array(
                                                "vnp_Version" => "2.1.0",
                                                "vnp_TmnCode" => $vnp_TmnCode,
                                                "vnp_Amount" => $vnp_Amount,
                                                "vnp_Command" => "pay",
                                                "vnp_CreateDate" => date('YmdHis'),
                                                "vnp_CurrCode" => "VND",
                                                "vnp_IpAddr" => $vnp_IpAddr,
                                                "vnp_Locale" => $vnp_Locale,
                                                "vnp_OrderInfo" => $vnp_OrderInfo,
                                                "vnp_OrderType" => $vnp_OrderType,
                                                "vnp_ReturnUrl" => $vnp_Returnurl,
                                                "vnp_TxnRef" => $vnp_TxnRef
                                            );

                                            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                                                $inputData['vnp_BankCode'] = $vnp_BankCode;
                                            }
                                            ksort($inputData);
                                            $query = "";
                                            $i = 0;
                                            $hashdata = "";
                                            foreach ($inputData as $key => $value) {
                                                if ($i == 1) {
                                                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                                                } else {
                                                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                                                    $i = 1;
                                                }
                                                $query .= urlencode($key) . "=" . urlencode($value) . '&';
                                            }

                                            $vnp_Url = $vnp_Url . "?" . $query;
                                            if (isset($vnp_HashSecret)) {
                                                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                                                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                                            }
                                            $returnData = array('code' => '00'
                                                , 'message' => 'success'
                                                , 'data' => $vnp_Url);
                                                if (isset($_POST['payUrl'])) {
                                                    header('Location: ' . $vnp_Url);
                                                    die();
                                                } else {
                                                    echo json_encode($returnData);
                                                }
                                        }
                                        
                                    }
                                ?>
                            </div>
                </div>
                <!----------------------------------------Kết thúc thông tin khách hàng----------------------------------->
                

                <!----------------------------------------Thông tin đơn hàng----------------------------------->
                <div class="body-cart--info">
                                <h1>ĐƠN HÀNG CỦA BẠN</h1>
                                <div class="body-cart--product-contain">
                                    <div class="body-cart--product">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td colspan="2">SẢN PHẨM</td>
                                                    <td>GIÁ</td>
                                                    <td>SỐ LƯỢNG</td>
                                                    <td>TỔNG</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
                                                    $lastquantity = 0;
                                                    $total = 0;
                                                    for($i = 0; $i < sizeof($_SESSION['giohang']); $i++) { 
                                                        $tt = ($_SESSION['giohang'][$i][2])*($_SESSION['giohang'][$i][3]); ?>
                                                    <tr>
                                                        <td></span><?php echo $_SESSION['giohang'][$i][1]?></td>
                                                        <td><img src="<?php echo $_SESSION['giohang'][$i][0]?>" alt="" style="height: 15rem; width: 70%;"></td>
                                                        <td><?php echo $_SESSION['giohang'][$i][2]?></td>
                                                        <td><?php echo $_SESSION['giohang'][$i][3]?></td>
                                                        <td><?php echo $tt ?></td>
                                                    </tr>
                                                        <?php   
                                                            $lastquantity += ($_SESSION['giohang'][$i][3]); 
                                                            $total += $tt;
                                                        }     ?>
                                            </tbody>
                                        </table>
                                    </div>
                                            <div class="body-cart--final">
                                                <h2><span>Tổng số lượng: </span><?php echo $lastquantity ?></h2>
                                                <h2><span>Tổng đơn giá: </span><?php echo $total ?> VND</h2>
                                                <?php $_SESSION['quantity'] = $lastquantity; ?>
                                            </div>
                                            <?php } ?>
                                </div>
                </div>  
                <!----------------------------------------Kết thúc Thông tin đơn hàng----------------------------------->
                
                <!----------------------------------------GỬI EMAIL CHO KHÁCH HÀNG-------------------------------->
                <form id="mail-form" method="POST" target="_blank" action="https://script.google.com/macros/s/AKfycbzAKnMPTLr6RLlBfBotB5TNdbkYafUHqtHEBgzNWm6hw-YbQa5Aqs-UxcH-yLKdWD8H8Q/exec">
                <input type="hidden" name="Email" value="<?php echo $email ?>">
                <input type="hidden" name="Name" value="<?php echo $name ?>">
                <input type="hidden" name="Address" value="<?php echo $address ?>">
                <input type="hidden" name="phone" value="<?php echo $phone ?>">
                <input type="hidden" name="note" value="<?php echo $note ?>">
                <?php
                if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
                            $lastquantity = 0;
                            $total = 0;
                            for($i = 0; $i < sizeof($_SESSION['giohang']); $i++) { 
                                $tt = ($_SESSION['giohang'][$i][2])*($_SESSION['giohang'][$i][3]);
                                
                                ?>
                <input type="hidden" name="img-gg<?php echo $i ?>" value="<?php echo $_SESSION['giohang'][$i][0]?>">
                <input type="hidden" name="namepd-gg<?php echo $i ?>" value="<?php echo $_SESSION['giohang'][$i][1]?>">
                <input type="hidden" name="cost-gg<?php echo $i ?>" value="<?php echo $_SESSION['giohang'][$i][2]?>">
                <input type="hidden" name="quantity-gg<?php echo $i ?>" value="<?php echo $_SESSION['giohang'][$i][3]?>">
                <input type="hidden" name="brand-gg<?php echo $i ?>" value="<?php echo $_SESSION['giohang'][$i][4]?>">
                <input type="hidden" name="total-gg<?php echo $i ?>" value="<?php echo ($_SESSION['giohang'][$i][2]) * ($_SESSION['giohang'][$i][3])?>">
 <?php
        }
   }
        ?>
                <div class="body-dh--buttonHome">
                    <button type="submit" id="submit-form">Xuất hóa đơn</button>
                    </form>
                </div>
                <!----------------------------------------GỬI EMAIL CHO KHÁCH HÀNG-------------------------------->
        </section>
        <!--End body section--->

        
                <!------------------------- FOOTER MAIN PAGE SECTION----------------------------->
        <section id="footer">
            <div class="footer-container">
                 <div class="footer-website">
                    <a href=""><h1 class="footer-website-title">TwoTown.online</h1></a>
                 </div>               
                 <div class="footer-contact content-width">
                    <div class="footer-contact--element">
                        <i class="fa-solid fa-phone"><a href="tel:0345462407">0345462407</a></i>
                    </div>
                    <div class="footer-contact--element">
                        <i class="fa-solid fa-envelope"><a href="mail.google.com">twotown.online@gmail.com</a></i>
                    </div>
                    <div class="footer-contact--element">
                        <i class="fa-solid fa-location-dot"><a href="https://goo.gl/maps/nATt9eRev5ryQkf88" target="_blank">Hoàng Diệu 2, Thủ Đức, TP.Hồ Chí Minh</a></i>
                    </div>
                 </div>               
                 <div class="footer-content content-width">
                     <div class="footer-content--info">
                        <div class="footer-content-col">
                            <h3>Giới thiệu</h3>
                            <ul class="footer-content-col--list">
                                <li><a href="">Trang chủ</a></li>
                                <li><a href="">Sản phẩm</a></li>
                                <li><a href="">Giày Nam</a></li>
                                <li><a href="">Giày Nữ</a></li>
                            </ul>
                        </div>
                        <div class="footer-content-col">
                            <h3>Công ty</h3>
                            <ul class="footer-content-col--list">
                                <li><a href="">Thông tin thêm</a></li>
                                <li><a href="">Vị trí</a></li>
                                <li><a href="">Địa chỉ</a></li>
                                <li><a href="">Đối tác</a></li>
                                <li><a href="">Dự án</a></li>
                            </ul>
                        </div>
                        <div class="footer-content-col">
                            <h3>Nguồn lực</h3>
                            <ul class="footer-content-col--list">
                                <li><a href="">Nhân sự</a></li>
                                <li><a href="">Kế toán</a></li>
                                <li><a href="">Kinh doanh</a></li>
                                <li><a href="">Chi Nhánh</a></li>
                            </ul>
                        </div>
                     </div>
                    <div class="footer-content--form">
                        <label for="footer-form">Nhận thêm thông tin</label><br>
                        <div class="footer-form--contain">
                            <input type="text" id="footer-form" name="footer-mail" placeholder="Nhập email...">
                            <button class="footer-form-btn">Gửi đi</button>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d313.0424698042649!2d106.7632833684072!3d10.857395032367746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527cfe0d0b7b3%3A0x70ce0edc5e2070d4!2sTwoTown!5e0!3m2!1svi!2s!4v1681847528722!5m2!1svi!2s" width="100%" height="200" style="border:0;margin-top: 5%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                 </div>               
                 <div class="footer-copyright">
                    <h5 class="footer-twotownright">Copyright 2023 All right reserved. | This website is made by<a target="_blank" href="https://www.facebook.com/profile.php?id=100037067107456"> Bui Minh Thanh. </a></h5>
                 </div>               
            </div>
        </section>
        <!-------------------------END FOOTER MAIN PAGE SECTION----------------------------->
    </div>
    <?php
    //unset giỏ hàng session
    if($purchase == 'Thanh toán tiền mặt'){
        unset($_SESSION['giohang']);
    }

    ?>
    <script>
    var $form = $('form#mail-form'),
            url = 'https://script.google.com/macros/s/AKfycbzAKnMPTLr6RLlBfBotB5TNdbkYafUHqtHEBgzNWm6hw-YbQa5Aqs-UxcH-yLKdWD8H8Q/exec'
       
            $('button#submit-form').on('click', function(e) {
                console.log($form);
              e.preventDefault();
            var jqxhr = $.ajax({
                url: url,
                method: "POST",
                dataType: "json"
            }).success(
                  alert("Gửi form thành công")
            )
        }) 
    </script>
</body>
</html>