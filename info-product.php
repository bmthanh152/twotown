<?php
    ob_start();
    session_start(); 
    require_once "./assets/db/config.php";
    $id = $_GET['id'];
    $sql = "SELECT *, FORMAT (Cost,'#.###.###') AS price FROM brand_info Where ID = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link css library slick slider-->
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
        />

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
    <title><?php echo $row['Name-product'] ?> | TwoTown</title>
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
                            <a href="./index.php">
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
                <!-- End main header-->
        <!--Start body section--->
        <section id="body">
            <div class="body-prd-container content-width">
                <div class="body-prd-image">
                    <div>
                        <img class="body-prd-img" src="<?php echo $row['Main-img'] ?>" alt=""></img>
                    </div>
                    <div>
                        <img class="body-prd-img" src="<?php echo $row['Sub1-img'] ?>" alt=""></img>
                    </div>
                    <div>
                        <img class="body-prd-img" src="<?php echo $row['Sub2-img'] ?>" alt=""></img>
                    </div>
                </div>
                <div class="body-prd-info">
                        <h1 class=body-prd-info--name>Tên sản phẩm: <span><?php echo $row['Name-product'] ?></span></h1>
                        <h2 class=body-prd-info--price><b><?php echo $row['price'].' VND ' ?></b></h2>
                        <p class=body-prd-info--des>
                        Sở hữu ngay chiếc <?php echo $row['Name-product'] ?> với giá cực kì ưu đãi, đơn giản nhưng lại vô cùng tinh tế, mix đồ tuyệt đẹp. Với chất lượng từ thiết kế tới tính năng, chúng đã làm chao đảo các tín đồ thời trang. 
                        </p>

                        <ul class="body-prd-info-list">
                            <li class="body-prd-info--sku"><b>SKU:</b><span><?php echo $row['Product-code'] ?></span> </li>
                            <li class="body-prd-info--cate"><b>Phân loại:</b><span><?php echo $row['Brand-name'] ?></span></li>
                            <li class="body-prd-info--pku"><b>Tag:</b><span><?php echo $row['Gender-style'] ?></span> </li>
                        </ul>
                        <div class="body-prd-info-btn">
                            <form method="post" action="
                            <?php
                                if(isset($_SESSION['email'])){
                                    echo './giohang.php';
                                }else{
                                    echo './formlogin.php';
                                }
                            ?>
                            ">
                                <input type="submit" name="addcart" value="Mua ngay" class="body-prd-info-btn--buynow">
                                <input type="submit" name="addcart" value="Thêm vào giỏ hàng" class="body-prd-info-btn--addcart">
                            
                                <input type="hidden" name="id-product" value="<?php echo $row['ID'] ?>">
                                <input type="hidden" name="hinh" value="<?php echo $row['Main-img'] ?>">
                                <input type="hidden" name="tensp" value="<?php echo $row['Name-product'] ?>">
                                <input type="hidden" name="brand" value="<?php echo $row['Brand-name'] ?>">
                                <input type="hidden" name="cost" value="<?php echo $row['Cost'] ?>">
                                <input type="number" name="quantity" value="1" min="0" max="20" class="input-quantity">
                            </form>
                        </div>

                </div>

            </div>
            <div class="body-prd--content content-width">
                <h3><?php echo $row['Description-product'] ?></h3>
            </div>
            <div class="body-prd-banner">
                <div class="body-prd-introduce--contain">
                    <div class="body-prd-introduce-background">
                    </div>
                </div>
            </div>
            
            <div class="tab-container content-width">
                <h2>Chi tiết về sản phẩm</h2>
                <p>Chọn vào các lựa chọn bên dưới để xem nội dung chi tiết</p>
                <div class="tab">
                    <button class="tablinks active" onclick="openTabs(event, 'ThongTin')">Thông tin</button>
                    <button class="tablinks" onclick="openTabs(event, 'HuongDan')">Hướng dẫn sử dụng</button>
                    <button class="tablinks" onclick="openTabs(event, 'DanhGia')">Đánh giá</button>
                </div>
                <div id="ThongTin" class="tabcontent" style="display: block;">
                    <div class="ThongTin-content">
                        <h2>Giới thiệu về <?php echo $row['Name-product'] ?></h2>
                        <p><?php echo $row['Name-product'] ?> đã bộc lộ rõ nó là gì rồi đúng không nào? 
                            Đây là những đôi giày được sử dụng trong các hoạt động thể dục thể thao,
                            hay trong những hoạt động tập luyện tăng cường sức khoẻ. Tuy nhiên, ngày nay <?php echo $row['Name-product'] ?> còn được coi như một item không thể thiếu 
                            khi đi chơi, đi làm bởi tính tiện dụng mà vẫn thời trang của nó.</p>
                        <img src="<?php echo $row['Main-img'] ?>" alt="" style="width: 100%;">
                        <p>Bên cạnh công nghệ và những tính năng tuyệt vời, các thế hệ giày thể thao ngày nay 
                            ra đời ngày càng chú trọng hơn về thiết kế, dáng vẻ, màu sắc. Chính vì thế, giày 
                            thể thao không những được sử dụng khi tập luyện mà còn được sử dụng trong hoạt động 
                            thường ngày, thậm chí là cho mục đích thời trang. Thêm vào đó, ngày nay, xu hướng 
                            thời trang được ưa chuộng hơn cả là xu hướng năng động, vậy nên giày thể thao ngày
                            càng có nhiều đất diễn. Không ngoa khi nói rằng, trên thế giới này, người người 
                            nhà nhà ai cũng sở hữu ít nhất một đôi giày thể thao.</p>
                        <h2>Xu hướng sử dụng và tiếp cận của hãng <?php echo $row['Brand-name'] ?> của sản phẩm <?php echo $row['Name-product'] ?></h2>
                        <?php 
                            $testbrand =  $row['Brand-name'];
                            if( $testbrand == 'Nike'){ 
                        ?>
                            <div>
                                <img style="width: 100%;" alt="" src="<?php echo $row['Sub1-img'] ?>">
                                <p>Nike là tập đoàn của Mỹ, tập trung vào lĩnh vực thiết kế, sản xuất các mặt hàng quần áo, giày dép, phụ kiện thời trang và dụng cụ thể thao. Trong đó, mảng giày thể thao luôn nổi bật và thu hút hơn cả khi rất nhiều cầu thủ nổi tiếng làm đại diện cũng như ưa chuộng sản phẩm của họ. 
                                    Công ty được thành lập từ năm 1964 với tên gọi ban đầu là Blue Ribbon Sports. Đến năm 1971, cái tên Nike với logo chiếc cánh của tượng nữ thần Hy Lạp chính thức xuất hiện. Giày chạy bộ là sản phẩm thể thao đầu tiên mà đơn vị này cho ra mắt thị trường và nhanh chóng trở nên nổi tiếng. 
                                </p>
                                <img style="width: 100%;" alt="" src="https://btsneaker.vn/wp-content/uploads/2021/09/so-sanh-giay-chay-bo-nike-va-adidas-nen-su-dung-giay-nao-768x512.jpg">
                                <p>
                                    Về sau, đơn vị đầu tư mạnh mẽ hơn vào những dụng cụ phục vụ cho các môn thể thao, như: quần áo, dụng cụ cho đa dạng các môn thể thao. Từ quần vợt, bóng đá, bóng chày cho đến các môn thể thao dưới nước. 
                                    Cho đến hiện nay, trải qua bao thăng trầm, khó khăn và thất bại trong chiến lược phát triển và đầu tư, 
                                    Nike vẫn luôn mạnh mẽ trụ vững và khẳng định được vị trí. Trở thành nhà cung cấp giày và trang phục, dụng cụ thể thao hàng đầu thế giới, Nike là ngôi nhà của hàng trăm ngàn nhân viên. 
                                </p>
                            </div>
                        <?php } else{ ?>
                            <div>
                                <img style="width: 100%;" alt="" src="<?php echo $row['Sub1-img'] ?>">
                                <p>Hoạt động cùng lĩnh vực, Adidas cũng là một đơn vị  vững mạnh trong mảng giày dép và thời trang thể thao. 
                                    Adidas hiện là tập đoàn đa quốc gia có tầm ảnh hưởng lớn, trụ sở đặt tại đức. Adidas hiện nay có mặt trên 160 quốc gia với hàng trăm triệu sản phẩm được tung ra thị trường mỗi năm.<br><br>
                                    Đơn vị được thành lập vào năm 1924 bởi hai anh em nhà Dassler. 
                                    Qua bao sóng gió cùng sự kiện lịch sử và những mâu thuẫn trong
                                    quá trình duy trì hoạt động, hai anh em tách ra hoạt động riêng. Dẫn đến sự xuất hiện của Puma và
                                    Adidas cho đến ngày nay.</p>
                                <img style="width: 100%;" src="https://btsneaker.vn/wp-content/uploads/2021/09/so-sanh-giay-chay-bo-nike-va-adidas-nen-su-dung-giay-nao-2-768x896.jpg" alt="">
                                <p>
                                    Adidas có lĩnh vực hoạt động khá rộng rãi. Họ sản xuất mọi mặt hàng thiết yếu trong khuôn khổ thể thao như: giày, trang phục, túi xách, mũ, tất… 
                                    Và nổi bật hơn cả là loạt set trang phục cho trẻ em được yêu thích hiện nay. Với
                                    chất lượng hàng đầu, độ bền đẹp toát ra từ thiết kế độc quyền, sản phẩm từ Adidas 
                                    luôn có sức hấp dẫn mạnh mẽ. 
                                </p>
                            </div>
                    <?php } ?>
                        
                        
                        

                    </div>
                </div>
                <div id="HuongDan" class="tabcontent">
                    <div class="HuongDan-content">
                        <h2>Những nguyên nhân khiến giày của bạn nhanh hỏng</h2>
                        <p>Những thói quen hằng ngày tưởng chừng như đơn giản nhưng nếu
                        lặp lại với tần suất nhiều lần sẽ khiến đôi giày bạn giảm đi chất lượng đáng kể. 
                        Có rất nhiều nguyên nhân khiến đôi Sneaker bạn nhanh hư hỏng:</p>
                        <table>
                            <thead>
                                <tr>
                                    <td>Nguyên nhân</td>
                                    <td>Chi tiết</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Giày tiếp xúc với nước nhiều lần</td>
                                    <td> – Thói quen hằng ngày tưởng chừng như vô hại thế nhưng sẽ khiến đôi giày bạn bị giảm đi chất lượng trông thấy.<br>
                                        – Đôi Sneaker bị vấy bẩn nước nhiều lần, đặc biệt là chất liệu bằng da sẽ khiến chúng nhanh bị bong tróc, nhão form mất đi kiểu dáng ban đầu và làm hư các chất keo dính cố định trên thân giày.
                                    </td>
                                </tr>
                                <tr>
                                    <td>Giày bị ướt nhưng không được làm khô ngay</td>
                                    <td>– Chính vì những tác hại đã được đề cập ở trên, khi giày bị ướt, quý khách cần tiến hành làm khô ngay lập tức, tránh trường hợp để lâu trong thời gian dài.<br>
                                        – Do đó, cách vệ sinh giày Nike Air Force 1 đúng cách đó là dùng khăn vải khô hay giấy báo mềm để hút ẩm. Đồng thời đem đi phơi khô ở nhiệt độ thích hợp, tránh sử dụng máy sấy vì chúng sẽ làm mất đi form dáng ban đầu.
                                    </td>
                                </tr>
                                <tr>
                                    <td>Không được bảo quản trong môi trường thích hợp</td>
                                    <td>– Sau khi sử dụng, quý khách nên cất chúng vào những chiếc hộp giấy hoặc trong túi mềm để không nhiễm ẩm từ không khí và tránh bụi bẩn bám vào. <br>
                                        – Đồng thời, luôn để giày trên giá hoặc tủ giày, không để giày trực tiếp trên nền đất để tránh tình trạng ẩm mốc.<br>
                                        – Sau khi vệ sinh giày, bạn nên phơi giày ở nơi khô ráo và thoáng khí. Cần tránh những nơi tiếp xúc trực tiếp với ánh nắng mặt trời để không bị bạc màu và làm hỏng chất liệu vải.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>Gợi ý 3 cách bảo quản giày đơn giản, cực tiết kiệm</h2>
                        <p>Để bảo quản giày Nike Air Force 1 đúng cách, giúp ngữ nguyên chất lượng và kiểu dáng ban đầu của sản phẩm, bạn cần bỏ túi một vài phương pháp sau đây.</p>
                        <h3>Đặt Sneaker trên kệ hoặc tủ để giày</h3>
                        <p>Sau khi mang giày, mọi người thường có thói quen xếp Sneaker vào một góc ở dưới nền đất. Thói quen này tưởng chừng như bình thường nhưng lại là nguyên nhân khiến đôi giày bạn dễ bị ẩm mốc và nhũn ra.</p>
                        <img style="width: 100%;" src="https://btsneaker.vn/wp-content/uploads/2021/10/cach-bao-quan-giay-nike-air-force-1-1.jpg" alt="">
                        <h3>Bảo quản trong hộp đựng giày</h3>
                        <p>Sau khi mua, đừng tưởng rằng hộp giày không có ích lợi gì mà vứt bỏ đi. Bởi chúng sẽ là địa điểm trú ngụ cực kỳ lý tưởng cho những đôi Sneaker. </p>
                        <img style="width: 100%" alt="" src="https://btsneaker.vn/wp-content/uploads/2021/10/cach-bao-quan-giay-nike-air-force-1-2-768x576.jpg">
                        <h3>Sử dụng túi treo giày dép chuyên dụng</h3>
                        <p>Nếu bạn đang sống trong căn nhà có diện tích nhỏ, không đủ nhu cầu để có thể đặt kệ giày thì các loại túi treo Sneaker sẽ là một gợi ý nhỏ dành cho bạn.</p>
                        <img alt="" style="width: 100%;" src="https://btsneaker.vn/wp-content/uploads/2021/10/cach-bao-quan-giay-nike-air-force-1-3.jpg">
                    </div>
                </div>
                <div id="DanhGia" class="tabcontent">
                        <div class="body-lh-formContact content-width">
                            <form target="_blank" action="https://script.google.com/macros/s/AKfycbzKzd6jkyP2BI-VR5bCLewYFlrPUlmiXDXiDzuJa5KGdOLygHEdBhVnFoWwC7PuJyWblA/exec" method="POST">
                                <fieldset>
                                    <legend>
                                        Để lại đánh giá
                                    </legend>
                                    <div class="body-lh-formContact-contain">
                                            <input type="text" name="contact-name" placeholder="Họ và tên" id="contact-name">
                                            <input type="email" name="contact-email" placeholder="Email" id="contact-email">     
                                            <input type="tel" name="contact-tel" placeholder="Số điện thoại" id="contact-name">
                                            <input type="text" name="contact-text" placeholder="Địa chỉ" id="contact-name">
                                    </div>
                                    <textarea name="textarea-noidung" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form_lien_he" id="textarea-noidung" aria-required="true" aria-invalid="false" placeholder="Lời nhắn" style="width: 100%; height: 137px; margin: 1% 0%;padding: 1%;
                                    font-size: 1.5rem;"></textarea><br>
                                    <button type="submit">GỬI ĐI</button>
                                </fieldset>
                            </form>
                        </div>
                </div>
            </div>

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
        <!----------------------LOADER---------------------->
        <div id="load">
            <div class="loader">
            </div><br>
                <img src="./assets/img/mainlogo.png" alt="" class="loader-logo">
                </img>
        </div>
        <!----------------------END LOADER---------------------->
        <!-------------------------- Start button go to top-------------------->
        <div class="btn-go-to-top">
            <button><i class="fa-solid fa-angle-up"></i></button>
        </div>
        <!-------------------------- End button go to top----------------------->  
    </div>
    <!---------------- SCIRPT INTERNAL ------------------------>
    <script>
        // open tab
        function openTabs(evt, elementName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(elementName).style.display = "block";
        evt.currentTarget.className += " active";
            }
        /// button go to top
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
    <script src="./assets/js/product.js"></script>
</body>
</html>