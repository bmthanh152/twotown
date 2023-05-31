<?php
    session_start();
    include "../assets/db/config.php";
    if(!isset($_SESSION['emailAdmin'])){
        header("Location: ../formlogin.php");
    }
    //đơn hàng
    $sqldonhang = "SELECT *, FORMAT (total,'#.###.###') AS price_total FROM tbl_khachhang";
    $sqlngay1 = "SELECT * FROM tbl_khachhang WHERE `ngay` = '2023-04-12'";
    $sqlngay2 = "SELECT * FROM tbl_khachhang WHERE `ngay` = '2023-04-13'";
    $sqlngay3 = "SELECT * FROM tbl_khachhang WHERE `ngay` = '2023-04-14'";
    $sqlngay4 = "SELECT * FROM tbl_khachhang WHERE `ngay` = '2023-04-15'";
    $result1 = mysqli_query($conn, $sqldonhang);
    $result11 = mysqli_query($conn, $sqlngay1);
    $result12 = mysqli_query($conn, $sqlngay2);
    $result13 = mysqli_query($conn, $sqlngay3);
    $result14 = mysqli_query($conn, $sqlngay4);
    $tongdonhang = 0;
    $tongdoanhthu = 0;
    $tongdoanhthungay1 = 0;
    $tongdoanhthungay2 = 0;
    $tongdoanhthungay3 = 0;
    $tongdoanhthungay4 = 0;
    if(mysqli_num_rows($result1) > 0){
    while($row = mysqli_fetch_assoc($result1)){ 
        $tongdonhang += $row['ID'];
        $tongdoanhthu = ($tongdoanhthu + $row['total']);
    } }else{
        echo "0 result";
    }

    if(mysqli_num_rows($result11) > 0){
    while($row = mysqli_fetch_assoc($result11)){ 
        $tongdoanhthungay1 += $row['total'];
    } }else{
        echo "0 result";
    }

    if(mysqli_num_rows($result12) > 0){
    while($row = mysqli_fetch_assoc($result12)){ 
        $tongdoanhthungay2 += $row['total'];
    } }else{
        echo "0 result";
    }

    if(mysqli_num_rows($result13) > 0){
    while($row = mysqli_fetch_assoc($result13)){ 
        $tongdoanhthungay3 += $row['total'];
    } }else{
        echo "0 result";
    }

    if(mysqli_num_rows($result14) > 0){
        while($row = mysqli_fetch_assoc($result14)){ 
            $tongdoanhthungay4 += $row['total'];
    } }else{
        echo "0 result";
    }
    $tongdoanhthu = ($tongdoanhthu/1000000);
    // Người dùng 
    $sqluser = "SELECT * FROM users";
    $result2 = mysqli_query($conn, $sqluser);
    $tonguser = 0;
    if(mysqli_num_rows($result2) > 0){
    while($row = mysqli_fetch_assoc($result2)){ 
        $tonguser += $row['ID'];
    } }else{
        echo "0 result";
    }

    // sản phẩm 
    $sqlproduct = "SELECT * FROM brand_info";
    $sqlproductNikeM = "SELECT * FROM `brand_info` WHERE `Brand-name` = 'Nike' AND `Gender-style` = 'Nam';";
    $sqlproductNikeFM = "SELECT * FROM `brand_info` WHERE `Brand-name` = 'Nike' AND `Gender-style` = 'Nữ';";
    $sqlproductAdidasM = "SELECT * FROM `brand_info` WHERE `Brand-name` = 'Adidas' AND `Gender-style` = 'Nam';";
    $sqlproductAdidasFM = "SELECT * FROM `brand_info` WHERE `Brand-name` = 'Adidas' AND `Gender-style` = 'Nữ';";
    $result3 = mysqli_query($conn, $sqlproduct);
    $result4 = mysqli_query($conn, $sqlproductNikeM);
    $result5 = mysqli_query($conn, $sqlproductNikeFM);
    $result6 = mysqli_query($conn, $sqlproductAdidasM);
    $result7= mysqli_query($conn, $sqlproductAdidasFM);
    $tongsanpham = 0;
    $tongsanphamNM = 0;
    $tongsanphamNFM = 0;
    $tongsanphamAM = 0;
    $tongsanphamAFM = 0;
    if(mysqli_num_rows($result3) > 0){
    while($row = mysqli_fetch_assoc($result3)){ 
        $tongsanpham += $row['amount'];
    } }else{
        echo "0 result";
    }

    if(mysqli_num_rows($result4) > 0){
        while($row = mysqli_fetch_assoc($result4)){ 
            $tongsanphamNM += $row['amount'];
    } }else{
            echo "0 result";
    }
    
    if(mysqli_num_rows($result5) > 0){
        while($row = mysqli_fetch_assoc($result5)){ 
            $tongsanphamNFM += $row['amount'];
    } }else{
            echo "0 result";
    }

    if(mysqli_num_rows($result6) > 0){
        while($row = mysqli_fetch_assoc($result6)){ 
            $tongsanphamAM += $row['amount'];
    } }else{
            echo "0 result";
    }

    if(mysqli_num_rows($result7) > 0){
        while($row = mysqli_fetch_assoc($result7)){ 
            $tongsanphamAFM += $row['amount'];
    } }else{
            echo "0 result";
    }
    //Chọn ra top 5 khách hàng mua hàng nhiều nhất
    $sqltopkh = "SELECT `name`, SUM(`total`) TongTienMuaHang FROM `tbl_khachhang` GROUP BY `name` ORDER BY `TongTienMuaHang` DESC LIMIT 5;";
    $result8 = mysqli_query($conn, $sqltopkh);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link favicon-->
    <link href="../assets/img/icons8-trainers-16.png" rel="icon">
    <!--link tới css-->
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title> Amin | TwoTown</title>
</head>
<body>
    <div id="admin-app">
        <div class="admin--nav-bar">
            <div class="admin--info">
                <div class="admin--avatar"></div>
                <div class="admin--info-content">
                    <h2>ADMIN</h2>
                    <a href=""><h2>buiminhthanh</h2></a>
                </div>
            </div>
            <ul class="admin--nav-bar-list">
                <li class="active">Thống kê</li>
                <li>Sản phẩm</li>
                <li>Đơn hàng</li>
                <li>Người dùng</li>
            </ul>
        </div>
        <div class="admin--dashboard">
            <div class="admin-header">
                <a href="../index.php"><img src="../assets/img/mainlogo1.png" alt=""></a>
            </div>
            <div class="admin--dashboard-title">
                <h1>THỐNG KÊ</h1>
                <h5>Chào mừng quay lại.</h5>
                <div class="admin--dashboard-content">
                    <div class="admin--dashboard-chart"> 
                        <div id="columnchart_values" style="width: 100%; height: 300px;"></div><br>
                        <div id="barchart_values" style="width: 100%; height: 500px;"></div>
                    </div>
                    <div class="admin-right-dashboard">
                        <div class="admin--dashboard-content-box">
                            <div class="admin--dashboard-statistics">
                                <h3><?php echo $tongdonhang ?></h3>
                                <h2>Số lượng đơn hàng</h2>
                            </div>
                            <div class="admin--dashboard-statistics">
                                <h3><?php echo $tongdoanhthu." TR VND" ?></h3>
                                <h2>Doanh số</h2>
                            </div>
                            <div class="admin--dashboard-statistics">
                                <h3><?php echo $tongsanpham?></h3>
                                <h2>Số lượng sản phẩm<h2>
                            </div>
                            <div class="admin--dashboard-statistics">
                                <h3><?php echo $tonguser ?></h3>
                                <h2>Số lượng thành viên</h2>
                            </div>
                        </div>
                        <div id="piechart" style="width: 100%; height: 500px;"></div>
                    </div>
                    
                </div>
            </div>

            
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        //THỐNG KÊ SỐ LƯỢNG SẢN PHẨM TẠI CỬA HÀNG
        var data = google.visualization.arrayToDataTable([
            ["Element", "Tổng số lượng", { role: "style" } ],
            ["Nike, Nữ", <?php echo $tongsanphamNFM ?>, "#b87333"],
            ["Adidas, Nam", <?php echo $tongsanphamAM ?>, "silver"],
            ["Adidas, Nữ",<?php echo $tongsanphamAFM ?>, "gold"],
            ["Nike, Nam",<?php echo $tongsanphamNFM ?>, "color: #e5e4e2"]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" },
                        2]);

        var options = {
            title: "Tổng số lượng các sản phẩm của cửa hàng",
            width: 600,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
        // THỐNG KÊ DOANH THU THEO NGÀY
        var data = google.visualization.arrayToDataTable([
        ['Ngày', 'VND'],
        ['2023-04-12', <?php echo $tongdoanhthungay1 ?>],
        ['2023-04-13', <?php echo $tongdoanhthungay2 ?>],
        ['2023-04-14', <?php echo $tongdoanhthungay3 ?>],
        ['2023-04-15', <?php echo $tongdoanhthungay4 ?>]
        ]);

        var options = {
        title: 'Doanh thu theo các ngày'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);


        //TOP 5 KHÁCH HÀNG CÓ LƯỢT MUA NHIỀU NHẤT TẠI CỬA HÀNG
            var data = google.visualization.arrayToDataTable([
            ["Tên", "Số tiền", { role: "style" } ],
            <?php if(mysqli_num_rows($result8) > 0){
            while($row = mysqli_fetch_assoc($result8)){ ?>
                ["<?php echo $row['name']?>", <?php echo $row['TongTienMuaHang']?>, "#76A7FA"],
            <?php } }else{
                echo "0 result";
            } ?>
            ["", 0, "color: #e5e4e2"]     
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" },
                        2]);

        var options = {
            title: "Top khách hàng có lượt mua nhiều nhất",
            width: 600,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
        };
        var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
        chart.draw(view, options);
    }
    </script>
</body>
</html>