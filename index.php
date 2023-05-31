<?php 
    ob_start();
    session_start(); 
    // $user = (isset($_SESSION['user']) ? $_SESSION['user'] : [])
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link tới lib icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--link favicon-->
    <link href="./assets/img/icons8-trainers-16.png" rel="icon">
    <!--link css library slick slider-->
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
        />

        <!--link tới css-->
        <link rel="stylesheet" href="./assets/css/base.css">
        <link rel="stylesheet" href="./assets/css/main.css">
    <!--title website-->
    <meta name="google-site-verification" content="kasUIFv9ELsaDP8uJ14AE0iwiMDOPI-AOgtIYvbaY5Y" />
    <meta name="description" content="Bán giày Sneaker Nam/ Nữ Adidas, Nike chính hãng tại khu vực Thủ Đức HCM - TWOTOWN 100% Authentic nhập US, UK ✓15 Ngày Đổi Hàng ✓Bảo Hành Hàng Chính Hãng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng.">
    <meta name="keywords" content="twotown, cửa hàng giày twotown, cửa hàng giày dép, giày sneaker nam chính hãng tphcm, bán giày sneaker nữ tphcm, giày sneaker nam trắng, giày sneaker nữ adidas, giày sneaker nam nike,tiệm giày thủ đức, tiệm giày tpHCM, tiệm giày TwoTown,">
    <meta itemprop="name" content="Cửa Hàng Giày Sneaker Chính Hãng Tại TpHcm - Cửa hàng giày TwoTown">
    <meta itemprop="description" content="Bán giày Sneaker Nam/ Nữ Adidas, Nike chính hãng tại khu vuwcHCM - TWOTOWN 100% Authentic nhập US, UK ✓15 Ngày Đổi Hàng ✓Bảo Hành Hàng Chính Hãng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng."">
    
    <title>Trang chủ | TwoTown - Bán giày Sneaker Nam/ Nữ Adidas, Nike chính hãng tại khu vực Thủ Đức HCM - TWOTOWN 100%</title>
</head>
<body>
    <div id="app">
        <!-------------------------START HEADER MAIN PAGE SECTION----------------------------->
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
                                    <a href="https://www.facebook.com/profile.php?id=100090690530919"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="1.5vw" height="6vh"
                                    viewBox="0 0 48 48">
                                    <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient><path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path><path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                                    </svg></a>
                                </li>
                                <li class="header-info--media-item">
                                <a href="https://www.facebook.com/profile.php?id=100090690530919"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="1.5vw" height="6vh"
                                    viewBox="0 0 48 48">
                                    <path fill="#f4511e" d="M36.683,43H11.317c-2.136,0-3.896-1.679-3.996-3.813l-1.272-27.14C6.022,11.477,6.477,11,7.048,11 h33.904c0.571,0,1.026,0.477,0.999,1.047l-1.272,27.14C40.579,41.321,38.819,43,36.683,43z"></path><path fill="#f4511e" d="M32.5,11.5h-2C30.5,7.364,27.584,4,24,4s-6.5,3.364-6.5,7.5h-2C15.5,6.262,19.313,2,24,2 S32.5,6.262,32.5,11.5z"></path><path fill="#fafafa" d="M24.248,25.688c-2.741-1.002-4.405-1.743-4.405-3.577c0-1.851,1.776-3.195,4.224-3.195 c1.685,0,3.159,0.66,3.888,1.052c0.124,0.067,0.474,0.277,0.672,0.41l0.13,0.087l0.958-1.558l-0.157-0.103 c-0.772-0.521-2.854-1.733-5.49-1.733c-3.459,0-6.067,2.166-6.067,5.039c0,3.257,2.983,4.347,5.615,5.309 c3.07,1.122,4.934,1.975,4.934,4.349c0,1.828-2.067,3.314-4.609,3.314c-2.864,0-5.326-2.105-5.349-2.125l-0.128-0.118l-1.046,1.542 l0.106,0.087c0.712,0.577,3.276,2.458,6.416,2.458c3.619,0,6.454-2.266,6.454-5.158C30.393,27.933,27.128,26.741,24.248,25.688z"></path>
                                    </svg></a>
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

                <!-- Start header navbar-->
                <div class="header-navbar">
                    <ul class="header-navbar-list">
                        <li class="header-navbar-list--item header-active">
                            <a href="index.php">Trang chủ</a>
                        </li> 
                        <li class="header-navbar-list--item">
                            <a href="./gioithieu/">Giới thiệu</a>
                        </li> 
                        <li class="header-navbar-list--item">
                            <a href="./giaynam/">Giày nam</a>
                        </li> 
                        <li class="header-navbar-list--item">
                            <a href="./giaynu/">Giày nữ</a>
                        </li> 
                        <li class="header-navbar-list--item">
                            <a href="./lienhe/">Liên hệ</a>
                        </li> 
                    </ul>
                    <?php
                        
                        if(isset($_SESSION["email"]) && isset($_SESSION["password"])) { ?>
                            
                        <div class="header-main-item responsive">
                            <ul class="header-main-item-list responsive">
                                <li>
                                    <p>Xin chào <?php echo $_SESSION['email'] ?></p><i class="fa-solid fa-user"></i>
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
                        </div>
                       <?php }else { ?>
                            <div class="header-main-item responsive">
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
                                <?php  }?>
                            </div>
                </div>
                <!-- End header navbar-->
            </div>
        </section>
        <!-------------------------END HEADER MAIN PAGE SECTION----------------------------->

        <!-------------------------START BODY MAIN PAGE SECTION----------------------------->
        <section id="body">
                <!-----Start section banner-->
                    <div class="body-mp-banner--cover">
                        <!---------------------PRODUCT 01 -------------------->
                        <div class="body-mp-banner--item">
                                <div class="body-mp-banner--background">
                                    <img src="./assets/img/banner/background.jpg" alt="background sản phẩm">
                                </div>
                                <div class="body-mp-banner-content--contain">
                                    <div class="body-mp-banner--text">
                                        <h5>TwoTown</h5>
                                        <h3>Tên sản phẩm: SN1997 X MARIMEKKO</h3>
                                        <p>SN1997 X MARIMEKKO với gam màu hồng sen kẽ với nhiều màu sắc tôn lên vẻ đẹp của chiếc giày. Giá thành đặc biệt có phẩn rẻ hơn so với thị trường là điểm lợi khi bạn mua sắm tại TwoTown </p>
                                        <a href="info-product.php?id=40"><button class="body-mp-banner--button">Thông tin thêm</button></a>
                                    </div>
                                    <div class="body-mp-banner--imageOfProduct">
                                        <div class="body-mp-banner--backgroundLayer">
                                        </div>
                                        <img src="./assets/img/banner/Picture4.png" alt="">
                                    </div>
                                </div>
                        </div>
                        <!----END PRODUCT 01 ------>

                        <!---------------------PRODUCT 02 -------------------->
                        <div class="body-mp-banner--item">
                            <div class="body-mp-banner--background">
                                <img src="./assets/img/banner/background.jpg" alt="background sản phẩm">
                            </div>
                            <div class="body-mp-banner-content--contain">
                                <div class="body-mp-banner--text">
                                    <h5>TwoTown</h5>
                                    <h3>Tên sản phẩm: Adidas Adista</h3>
                                    <p>Adidas Adista là một sản phẩm với kết cấu tinh tế 2023. Giúp cho người mang dễ chịu và phù hợp với mọi outfit.Mặt hàng đang bán chạy trên thị trường giày Việt Nam hiện nay</p>
                                    <a href="info-product.php?id=34"><button class="body-mp-banner--button">Thông tin thêm</button></a>

                                </div>
                                <div class="body-mp-banner--imageOfProduct">
                                    <div class="body-mp-banner--backgroundLayer">
                                    </div>
                                    <img src="./assets/img/banner/Picture1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!----END PRODUCT 02 ------>

                        <!----------------------PRODUCT 03 ------------------>
                        <div class="body-mp-banner--item">
                            <div class="body-mp-banner--background">
                                <img src="./assets/img/banner/background.jpg" alt="background sản phẩm">
                            </div>
                            <div class="body-mp-banner-content--contain">
                                <div class="body-mp-banner--text">
                                    <h5>TwoTown</h5>
                                    <h3>Tên sản phẩm: AIR FORCE 1 07</h3>
                                    <p>AIR FORCE 1 07 hot hit 2023 với những thiết kế tinh tế và giản đơn. Một sản phẩm được ưa chuộng bởi giá thành rẻ mà chất lượng cũng tuyệt vời.Hãy đến TwoTown và sở hữu nó ngay nhé.</p>
                                    <a href="info-product.php?id=16"><button class="body-mp-banner--button">Thông tin thêm</button></a>
                                </div>
                                <div class="body-mp-banner--imageOfProduct">
                                    <div class="body-mp-banner--backgroundLayer">
                                    </div>
                                    <img src="./assets/img/banner/Picture2.png" alt="">
                                </div>
                            </div>
                       </div>
                        <!----END PRODUCT 03 ------>

                        <!----------------------PRODUCT 04 -------------------->
                        <div class="body-mp-banner--item">
                            <div class="body-mp-banner--background">
                                <img src="./assets/img/banner/background.jpg" alt="background sản phẩm">
                            </div>
                            <div class="body-mp-banner-content--contain">
                                <div class="body-mp-banner--text">
                                    <h5>TwoTown</h5>
                                    <h3>Tên sản phẩm: ADIDAS ULTRABOOST 5.0 DNA</h3>
                                    <p>ADIDAS ULTRABOOST 5.0 DNA một sản phẩm mới của brand Adidas hiện đang trở nên phổ biến hơn bởi thiết kế bắt mắt. Hãy đến TwoTown và sở hữu nó ngay nhé.</p>
                                    <a href="info-product.php?id=36"><button class="body-mp-banner--button">Thông tin thêm</button></a>
                                </div>
                                <div class="body-mp-banner--imageOfProduct">
                                    <div class="body-mp-banner--backgroundLayer">
                                    </div>
                                    <img src="./assets/img/banner/Picture3.png" alt="">
                                </div>
                            </div>
                    </div>
                        <!----END PRODUCT 04 ------>
                    </div>

                <!-----End section banner-->

                <!-----Start section product Catetogory-->
                <div class="body-mp-productCategory">
                    <div class="body-mp-productCategory--content">
                        <b>SẢN PHẨM CỦA CHÚNG TÔI</b>
                    </div>
                    <div class="body-mp-productCategory--item content-width">
                        <a href="./giaynam/">
                            <div class="body-mp-productCategory--item_gender">
                                <div class="body-mp-productCategory--background-male">
                                    <img src="./assets/img/category/giaymale.png" alt="">
                                </div>
                            </div>
                        </a>
                        <a href="./giaynu/">
                            <div class="body-mp-productCategory--item_gender">
                                <div class="body-mp-productCategory--background-female">
                                    <img src="./assets/img/category/giayfemale.png" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-----End section product Catetogory-->
                
                <!-----Start section product Special-->
                <div class="body-mp-productSpecial">
                    <h2 class="body-mp-productSpecial--title body-mp-productCategory--content">
                        HÀNG HOT THÁNG 4 
                    </h2>

                    <div class="body-mp-productSpecial--container">
                        <!-----------------PRODUCT CARD--------------------->

                        <!-----------------PRODUCT-------------------------->
                            <?php
                                require_once "./assets/db/config.php";
                                $sql = "SELECT *, FORMAT (Cost,'#.###.###') AS price FROM brand_info  WHERE `Special-product` = 'popular' ";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){ ?>
                        <div class="product-card">
                        <a style="color: var(--color-text); text-decoration: none;" href="./info-product.php?id=<?php echo $row['ID']?>" class="product-card--link">
                                            <div class="product-card--layer">
                                                <div class="product-card--title">
                                                    <div class="product-card--category"><?php echo $row['Brand-name'] ?></div>
                                                    <div class="product-card--name"><?php echo $row['Name-product'] ?></div>
                                                </div>
                                                <div class="product-card--image">
                                                            <img src="<?php echo $row['Main-img'] ?>" alt="">           
                                                </div>
                                            </div>
                                            <div class="product-card-info">
                                                <div class="product-card--fav">
                                                    <i class="fa-regular fa-heart"></i>
                                                </div>
                                                <div class="product-card--price">
                                                <?php echo $row['price'].' VND'?>
                                                </div>
                                            </div>
                            </a>

                        </div>
                            <?php }  }else{
                                echo "0 result";
                                } ?>
                            
                        <!-----------------END PRODUCT-------------------------->
                        <!-----------------END PRODUCT CARD--------------------->
                    </div>
                </div>
                <!-----End section product Special-->
                <div class="body-mp-ads">
                    <h3>Lễ hội siêu sale: <br><span id="timeExpire"></span></h3>
                </div>
                <!-----Start section product Special-->
                <div class="body-mp-productSpecial">
                    <h2 class="body-mp-productSpecial--title body-mp-productCategory--content">
                        BRAND - ADIDAS
                    </h2>

                    <div class="body-mp-productSpecial--container">
                        <!-----------------PRODUCT CARD--------------------->

                        <!-----------------PRODUCT-------------------------->
                            <?php
                                require_once "./assets/db/config.php";
                                $sql = "SELECT *, FORMAT (Cost,'#.###.###') AS price FROM brand_info  WHERE `Brand-name` = 'Adidas' ";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){ ?>
                        <div class="product-card">
                        <a style="color: var(--color-text); text-decoration: none;" href="./info-product.php?id=<?php echo $row['ID']?>" class="product-card--link">
                                            <div class="product-card--layer product-card--layer-cut">
                                                <div class="product-card--title">
                                                    <div class="product-card--category"><?php echo $row['Brand-name'] ?></div>
                                                    <div class="product-card--name"><?php echo $row['Name-product'] ?></div>
                                                </div>
                                                <div class="product-card--gender"><?php echo $row['Brand-name'] ?></div>
                                                <div class="product-card--image">
                                                            <img src="<?php echo $row['Main-img'] ?>" alt="">           
                                                </div>
                                            </div>
                                            <div class="product-card-info">
                                                <div class="product-card--fav">
                                                    <i class="fa-regular fa-heart"></i>
                                                </div>
                                                <div class="product-card--price">
                                                <?php echo $row['price'].' VND'?>
                                                </div>
                                            </div>
                            </a>

                        </div>
                            <?php }  }else{
                                echo "0 result";
                                } ?>
                            
                        <!-----------------END PRODUCT-------------------------->
                        <!-----------------END PRODUCT CARD--------------------->
                    </div>
                </div>
                <!-----End section product Special-->


                <!-----Start section product Special-->
                <div class="body-mp-productSpecial">
                    <h2 class="body-mp-productSpecial--title body-mp-productCategory--content">
                        BRAND - NIKE
                    </h2>

                    <div class="body-mp-productSpecial--container">
                        <!-----------------PRODUCT CARD--------------------->

                        <!-----------------PRODUCT-------------------------->
                            <?php
                                require_once "./assets/db/config.php";
                                $sql = "SELECT *, FORMAT (Cost,'#.###.###') AS price FROM brand_info  WHERE `Brand-name` = 'Nike' ";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){ ?>
                        <div class="product-card">
                        <a style="color: var(--color-text); text-decoration: none;" href="./info-product.php?id=<?php echo $row['ID']?>" class="product-card--link">
                                            <div class="product-card--layer">
                                                <div class="product-card--title">
                                                    <div class="product-card--category"><?php echo $row['Brand-name'] ?></div>
                                                    <div class="product-card--name"><?php echo $row['Name-product'] ?></div>
                                                </div>
                                                <div class="product-card--gender"><?php echo $row['Brand-name'] ?></div>
                                                <div class="product-card--image">
                                                            <img src="<?php echo $row['Main-img'] ?>" alt="">           
                                                </div>
                                            </div>
                                            <div class="product-card-info">
                                                <div class="product-card--fav">
                                                    <i class="fa-regular fa-heart"></i>
                                                </div>
                                                <div class="product-card--price">
                                                <?php echo $row['price'].' VND'?>
                                                </div>
                                            </div>
                            </a>

                        </div>
                            <?php }  }else{
                                echo "0 result";
                                } ?>
                            
                        <!-----------------END PRODUCT-------------------------->
                        <!-----------------END PRODUCT CARD--------------------->
                    </div>
                </div>
                <!-----End section product Special-->



                <!-----Start section product BLogs-->
                <div class="body-mp-productBLogs"></div>
                <!-----End section product BLogs-->
        </section>
        <!-------------------------END BODY MAIN PAGE SECTION----------------------------->


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
                                <li><a href="./index.php">Trang chủ</a></li>
                                <li><a href="./giaynam/">Sản phẩm</a></li>
                                <li><a href="./giaynam/">Giày Nam</a></li>
                                <li><a href="./giaynu/">Giày Nữ</a></li>
                            </ul>
                        </div>
                        <div class="footer-content-col">
                            <h3>Công ty</h3>
                            <ul class="footer-content-col--list">
                                <li><a href="">Thông tin thêm</a></li>
                                <li><a href="https://goo.gl/maps/nATt9eRev5ryQkf88" target="_blank">Vị trí</a></li>
                                <li><a href="./outservice.html">Đối tác</a></li>
                                <li><a href="./outservice.html">Dự án</a></li>
                            </ul>
                        </div>
                        <div class="footer-content-col">
                            <h3>Chính sách</h3>
                            <ul class="footer-content-col--list">
                                <li><a href="./outservice.html">Chính sách bảo mật thông tin</a></li>
                                <li><a href="./outservice.html">Chính sách đổi trả</a></li>
                                <li><a href="./outservice.html">Chính sách bảo hành</a></li>
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
        
        <!-------------------------- Start button go to top-------------------->
        <div class="btn-go-to-top">
            <button><i class="fa-solid fa-angle-up"></i></button>
        </div>
        <!-------------------------- End button go to top----------------------->     
        
        
        <!----------------------LOADER---------------------->
        <div id="load">
            <div class="loader">
            </div><br>
                <img src="./assets/img/mainlogo.png" alt="" class="loader-logo">
                </img>
        </div>
        <!----------------------END LOADER---------------------->

        
    </div>
    <!--------------- javascript slick slider website--------------->
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <!---------------main file javascript website--------------->
    <script src="./script.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "105372555837728");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>