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
    <!--link tới css-->
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <!--link tới lib icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--link favicon-->
    <link href="../assets/img/icons8-trainers-16.png" rel="icon">
    <title>Giày nữ | TwoTown</title>
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
                                    <a href="https://goo.gl/maps/nATt9eRev5ryQkf88"  target="_blank">
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
                            <a href="../index.php">
                                <img src="../assets/img/mainlogo.png" alt="logo twotown">
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
                                            <li><a href="../huysession.php">Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                        <a href="../giohang.php">
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
                                        <a href="../formlogin.php">Đăng nhập</a>
                                    </li>
                                    <li>
                                        <a href="../register.php">Đăng kí</a>
                                    </li>
                                    <li>
                                        <a href="../giohang.php">
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
                        <li class="header-navbar-list--item">
                            <a href="../index.php">Trang chủ</a>
                        </li> 
                        <li class="header-navbar-list--item">
                            <a href="../gioithieu/">Giới thiệu</a>
                        </li> 
                        <li class="header-navbar-list--item">
                            <a href="../giaynam/">Giày nam</a>
                        </li> 
                        <li class="header-navbar-list--item header-active">
                            <a href="./index.php">Giày nữ</a>
                        </li> 
                        <li class="header-navbar-list--item">
                            <a href="../lienhe/index.php">Liên hệ</a>
                        </li> 
                    </ul>
                    <?php
                        
                        if(isset($_SESSION["email"]) && isset($_SESSION["password"])) { ?>
                            
                        <div class="header-main-item responsive">
                            <ul class="header-main-item-list responsive">
                                <li>
                                    </p><i class="fa-solid fa-user"></i>
                                    <div class="header-main-user-dropdown">
                                        <ul class="header-main-user-dropdown--list">
                                            <li >Tài khoản</li>
                                            <li><a href="../huysession.php">Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                        <a href="../giohang.php">
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
                                        <a href="../formlogin.php">Đăng nhập</a>
                                    </li>
                                    <li>
                                        <a href="../register.php">Đăng kí</a>
                                    </li>
                                    <li>
                                        <a href="../giohang.php">
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
        <!--End header section-->
        <section id="body">
            <div class="body-gnu  content-width">
                <div class="boyd-lh--link content-width" style="margin: 30px 0px;">
                        <h2 style="color: var(--color-text-black); "><span><a style="color: var(--color-text-black);" href="../index.php">Trang chủ</a></span> / <a style="color: var(--color-text-black);" href="./index.php">Giày Nữ</a></h2>
                </div>
            </div>
            <div class="body-gnam--containbox content-width">
                <div class="body-gnam--filter">
                    <div class="body-gnam--filter-cate">
                        <h3 class="body-gnam--filter-cate_title">Phân loại theo sản phẩm</h3>
                        <a href="./index.php"><button class="body-gnam--filter-cate_btn">Giày Nam</button></a>
                        <a href="../giaynu/"><button class="body-gnam--filter-cate_btn">Giày Nữ</button></a>
                    </div>
                    <a href="../info-product.php?id=22"><div class="body-gnu-banner--ads"></div></a>
                    <a href="../info-product.php?id=06"><div class="body-banner--ads"></div></a>
                </div>
                <div class="body-gnam--productContain">
                    <!-----------------PRODUCT CARD--------------------->

                        <!-----------------PRODUCT-------------------------->
                        <?php
                                require_once "../assets/db/config.php";
                                $sql = "SELECT *, FORMAT (Cost,'#.###.###') AS price FROM brand_info where `Gender-style` = 'Nữ' ";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0 ){
                                while($row = mysqli_fetch_assoc($result)){ ?>
                        <div class="product-card body-gnam--productUnset">
                        <a style="color: var(--color-text); text-decoration: none;" href="../info-product.php?id=<?php echo $row['ID']?>" class="product-card--link">
                                            <div class="product-card--layer">
                                                <div class="product-card--title">
                                                    <div class="product-card--category"><?php echo $row['Brand-name'] ?></div>
                                                    <div class="product-card--name"><?php echo $row['Name-product'] ?></div>
                                                </div>
                                                <div class="product-card--gender"><?php echo $row['Gender-style'] ?></div>
                                                <div class="product-card--image">
                                                    <div class="product-card--img">
                                                        <div class="product-card--image">
                                                            <input type="radio" name="pic<?php echo $row['ID'] ?>" id="<?php echo $row['Name-product'].$row['ID'] ?>" checked checked checked>
                                                            <img src="<?php echo $row['Main-img'] ?>" alt="">            
                                                        </div>
                                                        <div class="product-card--image">
                                                            <input type="radio" name="pic<?php echo $row['ID'] ?>" id="<?php echo $row['Name-product'].$row['ID'].'1' ?>">
                                                            <img src="<?php echo $row['Sub1-img'] ?>"  alt="">             
                                                        </div>
                                                        <div class="pic">
                                                            <label for="<?php echo $row['Name-product'].$row['ID'] ?>">
                                                                <div class="name">Ảnh</div>
                                                                <div class="circle">1</div>
                                                            </label>
                                                            <label for="<?php echo $row['Name-product'].$row['ID'].'1' ?>">
                                                                <div class="name">Ảnh</div>
                                                                <div class="circle">2</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card-cart">
                                                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                                                </div>
                                            </div>
                                            <div class="product-card-info">
                                                <div class="product-card--fav">
                                                    <i class="fa-regular fa-heart"></i>
                                                </div>
                                                <div class="product-card--price">
                                                <?php echo $row['price'].' VND ' ?>
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
        </section>
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
                                <li><a href="../index.php">Trang chủ</a></li>
                                <li><a href="./index.php">Sản phẩm</a></li>
                                <li><a href="./index.php">Giày Nam</a></li>
                                <li><a href="../giaynu/">Giày Nữ</a></li>
                            </ul>
                        </div>
                        <div class="footer-content-col">
                            <h3>Công ty</h3>
                            <ul class="footer-content-col--list">
                                <li><a href="">Thông tin thêm</a></li>
                                <li><a href="https://goo.gl/maps/nATt9eRev5ryQkf88" target="_blank">Vị trí</a></li>
                                <li><a href="../outservice.html">Đối tác</a></li>
                                <li><a href="../outservice.html">Dự án</a></li>
                            </ul>
                        </div>
                        <div class="footer-content-col">
                            <h3>Chính sách</h3>
                            <ul class="footer-content-col--list">
                                <li><a href="../outservice.html">Chính sách bảo mật thông tin</a></li>
                                <li><a href="../outservice.html">Chính sách đổi trả</a></li>
                                <li><a href="../outservice.html">Chính sách bảo hành</a></li>
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
    </div>
    <script src="../script.js"></script>
    <!----------------button to top--------------->
    <script>
        let button_to_top = document.querySelector('.btn-go-to-top');
        button_to_top.addEventListener('click',function(){
            document.documentElement.style.scrollBehavior = "smooth";
            document.documentElement.scrollTop = 0; //for gg chorm
            document.body.scrollTop = 0;            //for safari
            document.documentElement.style.scrollBehavior = "auto";
        })
        button_to_top.addEventListener('click',function(){
        })

    </script>
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