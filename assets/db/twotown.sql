-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2023 at 04:59 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twotown`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_info`
--

DROP TABLE IF EXISTS `brand_info`;
CREATE TABLE IF NOT EXISTS `brand_info` (
  `ID` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Name-product` char(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `Main-img` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `Sub1-img` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `Sub2-img` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `Cost` decimal(65,0) NOT NULL,
  `Product-code` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Description-product` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `Brand-name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `Gender-style` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `Special-product` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `Discount-product` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `amount` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`),
  KEY `Cost` (`Cost`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_info`
--

INSERT INTO `brand_info` (`ID`, `Name-product`, `Main-img`, `Sub1-img`, `Sub2-img`, `Cost`, `Product-code`, `Description-product`, `Brand-name`, `Gender-style`, `Special-product`, `Discount-product`, `amount`) VALUES
('01', 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-17-logo-1551924204-.jpg', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-13.jpg', '3300000', '202301001', 'Nike Air Force 1 Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.\r\nThiết kế mẫu giày Nike Air Force 1 được xem là đôi giày mang tính cách mạng trong thế giới sneaker, khi mà các nhà thiết kế kết hợp với các nhà khoa học cho ra mẫu giày có công nghệ ‘Air’ – một túi khí ở gót chân để đệm hỗ trợ.\r\n Cái tên ‘Air Force One’ được lấy ý tưởng từ chiếc chuyên cơ cùng tên chuyên dùng chở tổng thống Mỹ. AF1 có 3 hình thức chính: low (thấp) – mid (trung) – top (cao). Với các style Mid – Top, chúng ta dễ dàng nhận thấy một cọng dây đeo có khoá hoặc dán tạo vẻ chắc chắn cho đôi giày và có thể dịch chuyển theo tuỳ phiên bản. Đây là một sự đặc biệt của đôi giày Nike Air Force 1 so với các đôi giày khác cùng thời. Một điểm nhận dạng khác của các Nike Air Force 1 là một huy hiệu nhỏ ở giữa dây giày được làm bằng thiếc (có phiên bản được làm bằng nhựa hoặc bạc) có khắc dòng chữ ‘AF1’.\r\n ', 'Nike', 'Nam', 'popular', '10%', 1),
('02', 'NIKECOURT AIR ZOOM GP TURBO', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.png', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-10-1646283187.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-4.png', '4200000', '202301002', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nam', 'sp-rare', '15%', 1),
('03', 'NIKE REVOLUTION 6 NEXT NATURE', 'https://kingshoes.vn/data/upload/media/dc3728-001-giay-nike-revolution-6-next-nature-road-running-chinh-hang-gia-tot-den-king-shoes-5.png', 'https://kingshoes.vn/data/upload/media/dc3728-001-giay-nike-revolution-6-next-nature-road-running-chinh-hang-gia-tot-den-king-shoes-12.jpeg', 'https://kingshoes.vn/data/upload/media/dc3728-001-giay-nike-revolution-6-next-nature-road-running-chinh-hang-gia-tot-den-king-shoes-3.png', '1900000', '202301003', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nam', 'best-seller', '30%', 1),
('04', 'PUMA SLIPSTREAM', 'https://kingshoes.vn/data/upload/media/388549-04-giay-puma-slipstream-chinh-hang-gia-tot-den-king-shoes-24.jpg', 'https://kingshoes.vn/data/upload/media/388549-04-giay-puma-slipstream-chinh-hang-gia-tot-den-king-shoes-25.jpg', 'https://kingshoes.vn/data/upload/media/388549-04-giay-puma-slipstream-chinh-hang-gia-tot-den-king-shoes-28.jpg', '2900000', '202301004', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nam', 'popular', '10%', 1),
('05', 'NIKECOURT VAPOR LITE HC', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-tennis-nikecourt-vapor-lite-hc-dc3432-125-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-tennis-nikecourt-vapor-lite-hc-dc3432-125-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-9-1646281527.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-tennis-nikecourt-vapor-lite-hc-dc3432-125-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-2.jpeg', '2800000', '202301005', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nam', 'rare', '5%', 1),
('06', 'NIKE DOWNSHIFTER 12', 'https://kingshoes.vn/data/upload/media/dd9294-007-giay-nike-downshifter-12-road-running-chinh-hang-gia-tot-den-king-shoes-5.jpeg', 'https://kingshoes.vn/data/upload/media/dd9294-007-giay-nike-downshifter-12-road-running-chinh-hang-gia-tot-den-king-shoes-12.jpeg', 'https://kingshoes.vn/data/upload/media/dd9294-007-giay-nike-downshifter-12-road-running-chinh-hang-gia-tot-den-king-shoes-3.jpeg', '2300000', '202301006', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nam', 'popular', '10%', 1),
('07', 'NIKECOURT VAPOR LITE HARD COURT TENNIS', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-vapor-lite-white-university-red-dc3431-188-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-2.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-vapor-lite-white-university-red-dc3431-188-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-4-1646278822.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-vapor-lite-white-university-red-dc3431-188-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.jpeg', '3200000', '202301007', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nam', 'rare', '5%', 1),
('08', 'NIKE COURT VISION LOW', 'https://kingshoes.vn/data/upload/media/dr9514-400-giay-nike-court-vision-low-chinh-hang-gia-tot-den-king-shoes-6.jpeg', 'https://kingshoes.vn/data/upload/media/dr9514-400-giay-nike-court-vision-low-chinh-hang-gia-tot-den-king-shoes-12.jpeg', 'https://kingshoes.vn/data/upload/media/dr9514-400-giay-nike-court-vision-low-chinh-hang-gia-tot-den-king-shoes-5.jpeg', '2600000', '202301008', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nam', 'popular', '10%', 1),
('09', 'AIR FORCE 1 07', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-8.png', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-5.jpeg', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-7.png', '3900000', '202301009', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nam', 'popular', '10%', 1),
('10', 'AIR FORCE 1 JDI', 'https://kingshoes.vn/data/upload/media/dv7584-100-giay-nike-air-force-1-07-se-chinh-hang-gia-tot-den-king-shoes-5.png', 'https://kingshoes.vn/data/upload/media/dv7584-100-giay-nike-air-force-1-07-se-chinh-hang-gia-tot-den-king-shoes.jpeg', 'https://kingshoes.vn/data/upload/media/dv7584-100-giay-nike-air-force-1-07-se-chinh-hang-gia-tot-den-king-shoes-3.png', '4000000', '202301010', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nam', 'sp-rare', '15%', 1),
('11', 'NIKECOURT AIR ZOOM VAPOR PRO WHITE HABANERO RED', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-vapor-pro-white-habanero-red-cz0220-136-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-1.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-vapor-pro-white-habanero-red-cz0220-136-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-9.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-vapor-pro-white-habanero-red-cz0220-136-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-2.jpeg', '4200000', '202301001', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nam', 'sp-rare', '15%', 1),
('12', 'NIKE AIR MAX EXCEE', 'https://kingshoes.vn/data/upload/media/dq3993-002-giay-nike-air-max-excee-chinh-hang-gia-tot-den-king-shoes-5.png', 'https://kingshoes.vn/data/upload/media/dq3993-002-giay-nike-air-max-excee-chinh-hang-gia-tot-den-king-shoes-1.jpeg', 'https://kingshoes.vn/data/upload/media/dq3993-002-giay-nike-air-max-excee-chinh-hang-gia-tot-den-king-shoes-3.png', '2900000', '202301012', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nam', 'popular', '10%', 1),
('13', 'AIR FORCE 1 PLT.AF.ORM LV8', 'https://kingshoes.vn/data/upload/media/dz4985-097-giay-nike-air-force-1-pltaform-lv8-chinh-hang-gia-tot-den-king-shoes-6.png', 'https://kingshoes.vn/data/upload/media/dz4985-097-giay-nike-air-force-1-pltaform-lv8-chinh-hang-gia-tot-den-king-shoes-13.jpeg', 'https://kingshoes.vn/data/upload/media/dz4985-097-giay-nike-air-force-1-pltaform-lv8-chinh-hang-gia-tot-den-king-shoes-5.jpeg', '3900000', '202301013', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'rare', '5%', 1),
('14', 'NIKE AIR ZOOM PEGASUS 39', 'https://kingshoes.vn/data/upload/media/dm0173-006-giay-nike-air-zoom-pegasus-39-womens-chinh-hang-den-king-shoes-4.png', 'https://kingshoes.vn/data/upload/media/dm0173-006-giay-nike-air-zoom-pegasus-39-womens-chinh-hang-den-king-shoes-12.jpeg', 'https://kingshoes.vn/data/upload/media/dm0173-006-giay-nike-air-zoom-pegasus-39-womens-chinh-hang-den-king-shoes-3.jpeg', '3600000', '202301014', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'popular', '10%', 1),
('15', 'NIKE AIR MAX 90', 'https://kingshoes.vn/data/upload/media/dx0115-100-giay-nike-air-max-90-womens-chinh-hang-gia-tot-den-king-shoes-4.png', 'https://kingshoes.vn/data/upload/media/dx0115-100-giay-nike-air-max-90-womens-chinh-hang-gia-tot-den-king-shoes-12.jpeg', 'https://kingshoes.vn/data/upload/media/dx0115-100-giay-nike-air-max-90-womens-chinh-hang-gia-tot-den-king-shoes-3.png', '3600000', '202301015', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'best-seller', '30%', 1),
('16', 'AIR FORCE 1 07', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-8.png', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-5.jpeg', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-7.png', '3900000', '202301016', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'rare', '5%', 1),
('17', 'AIR FORCE 1 JDI', 'https://kingshoes.vn/data/upload/media/dv7584-100-giay-nike-air-force-1-07-se-chinh-hang-gia-tot-den-king-shoes-5.png', 'https://kingshoes.vn/data/upload/media/dv7584-100-giay-nike-air-force-1-07-se-chinh-hang-gia-tot-den-king-shoes.jpeg', 'https://kingshoes.vn/data/upload/media/dv7584-100-giay-nike-air-force-1-07-se-chinh-hang-gia-tot-den-king-shoes-3.png', '4200000', '202301017', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'popular', '10%', 1),
('18', 'NIKE AIR FORCE 1 PLTAFORM', 'https://kingshoes.vn/data/upload/media/dj9946-102-giay-nike-air-force-1-pltaform-chinh-hang-gia-tot-den-king-shoes-8.jpeg', 'https://kingshoes.vn/data/upload/media/dj9946-102-giay-nike-air-force-1-pltaform-chinh-hang-gia-tot-den-king-shoes-6.jpeg', 'https://kingshoes.vn/data/upload/media/dj9946-102-giay-nike-air-force-1-pltaform-chinh-hang-gia-tot-den-king-shoes-2.jpeg', '3900000', '202301018', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'sp-rare', '15%', 1),
('19', 'AIR FORCE 1 BLING BLING', 'https://kingshoes.vn/data/upload/media/cz8101-100-giay-nike-air-force-1-bling-bling-chinh-hang-den-king-shoes-2.jpg', 'https://kingshoes.vn/data/upload/media/cz8101-100-giay-nike-air-force-1-bling-bling-chinh-hang-den-king-shoes-12.jpeg', 'https://kingshoes.vn/data/upload/media/cz8101-100-giay-nike-air-force-1-bling-bling-chinh-hang-den-king-shoes-4.jpg', '4600000', '202301019', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'sp-rare', '15%', 1),
('20', 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/dq7569-100-giay-nike-air-force-1-07-chinh-hang-gia-tot-den-king-shoes-3.jpg', 'https://kingshoes.vn/data/upload/media/dq7569-100-giay-nike-air-force-1-07-chinh-hang-gia-tot-den-king-shoes-12.jpeg', 'https://kingshoes.vn/data/upload/media/dq7569-100-giay-nike-air-force-1-07-chinh-hang-gia-tot-den-king-shoes-5.jpg', '3900000', '202301020', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'rare', '5%', 1),
('21', 'AIR MAX BLISS', 'https://kingshoes.vn/data/upload/media/dh5128-001-giay-nike-air-max-bliss-chinh-hang-gia-tot-den-king-shoes-2.jpeg', 'https://kingshoes.vn/data/upload/media/dh5128-001-giay-nike-air-max-bliss-chinh-hang-gia-tot-den-king-shoes-12.jpeg', 'https://kingshoes.vn/data/upload/media/dh5128-001-giay-nike-air-max-bliss-chinh-hang-gia-tot-den-king-shoes-4.jpeg', '3900000', '202301021', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'popular', '10%', 1),
('22', 'AIR MAX BLISS', 'https://kingshoes.vn/data/upload/media/dh5128-103-giay-nike-air-max-bliss-chinh-hang-den-king-shoes-2.jpeg', 'https://kingshoes.vn/data/upload/media/dh5128-103-giay-nike-air-max-bliss-chinh-hang-den-king-shoes-12.jpeg', 'https://kingshoes.vn/data/upload/media/dh5128-103-giay-nike-air-max-bliss-chinh-hang-den-king-shoes-5.jpeg', '3900000', '20230102', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'rare', '5%', 1),
('23', 'AIR MAX BELLA', 'https://kingshoes.vn/data/upload/media/dd9285-010-giay-nike-air-max-bella-tr-5-chinh-hang-gia-tot-den-king-shoes-1.jpeg', 'https://kingshoes.vn/data/upload/media/dd9285-010-giay-nike-air-max-bella-tr-5-chinh-hang-gia-tot-den-king-shoes-2.jpeg', 'https://kingshoes.vn/data/upload/media/dd9285-010-giay-nike-air-max-bella-tr-5-chinh-hang-gia-tot-den-king-shoes-3.jpeg', '2800000', '202301023', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'rare', '5%', 1),
('24', 'AIR FORCE 1 FONTANKA', 'https://kingshoes.vn/data/upload/media/dh1290-101-giay-nike-air-force-1-fontanka-chinh-hang-gia-tot-den-king-shoes-5.jpeg', 'https://kingshoes.vn/data/upload/media/dh1290-101-giay-nike-air-force-1-fontanka-chinh-hang-gia-tot-den-king-shoes-12.jpeg', 'https://kingshoes.vn/data/upload/media/dh1290-101-giay-nike-air-force-1-fontanka-chinh-hang-gia-tot-den-king-shoes-4.jpeg', '3600000', '202301024', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Nike', 'Nữ', 'popular', '10%', 1),
('25', 'ADIDAS BREAKNET', 'https://kingshoes.vn/data/upload/media/fx8707-giay-adidas-breaknet-trang-chinh-hang-den-king-shoes-6.jpg', 'https://kingshoes.vn/data/upload/media/fx8707-giay-adidas-breaknet-trang-chinh-hang-den-king-shoes-12.jpg', 'https://kingshoes.vn/data/upload/media/fx8707-giay-adidas-breaknet-trang-chinh-hang-den-king-shoes-9.jpg', '1900000', '202301025', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'popular', '10%', 1),
('26', 'ADIDAS FLUIDFLOW 2.0', 'https://kingshoes.vn/data/upload/media/fz1985-giay-adidas-fluidflow-chinh-hang-gia-tot-den-king-shoes-4.jpg', 'https://kingshoes.vn/data/upload/media/fz1985-giay-adidas-fluidflow-chinh-hang-gia-tot-den-king-shoes-7.jpg', 'https://kingshoes.vn/data/upload/media/fz1985-giay-adidas-fluidflow-chinh-hang-gia-tot-den-king-shoes-8.jpg', '2200000', '202301026', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'best-seller', '30%', 1),
('27', 'PUMA SLIPSTREAM', 'https://kingshoes.vn/data/upload/media/388549-04-giay-puma-slipstream-chinh-hang-gia-tot-den-king-shoes-24.jpg', 'https://kingshoes.vn/data/upload/media/388549-04-giay-puma-slipstream-chinh-hang-gia-tot-den-king-shoes-28.jpg', 'https://kingshoes.vn/data/upload/media/388549-04-giay-puma-slipstream-chinh-hang-gia-tot-den-king-shoes-27.jpg', '2900000', '202301027', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'best-seller', '30%', 1),
('28', 'ADIDAS STAN SMITH', 'https://kingshoes.vn/data/upload/media/gz2202-giay-adidas-stan-smith-andre-saraiva-chinh-hang-gia-tot-den-king-shoes-4.jpg', 'https://kingshoes.vn/data/upload/media/gz2202-giay-adidas-stan-smith-andre-saraiva-chinh-hang-gia-tot-den-king-shoes-8.jpg', 'https://kingshoes.vn/data/upload/media/gz2202-giay-adidas-stan-smith-andre-saraiva-chinh-hang-gia-tot-den-king-shoes-5.jpg', '2200000', '202301028', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'sp-rare', '15%', 1),
('29', 'PUMA SLIPSTREAM LO RETRO', 'https://kingshoes.vn/data/upload/media/384692-04-giay-puma-slipstream-lo-retro-chinh-hang-gia-tot-den-king-shoes-1.jpg', 'https://kingshoes.vn/data/upload/media/384692-04-giay-puma-slipstream-lo-retro-chinh-hang-gia-tot-den-king-shoes-7.jpeg', 'https://kingshoes.vn/data/upload/media/384692-04-giay-puma-slipstream-lo-retro-chinh-hang-gia-tot-den-king-shoes-5.jpeg', '2900000', '202301026', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'popular', '10%', 1),
('30', 'ADIDAS STAN SMITH', 'https://kingshoes.vn/data/upload/media/fx5501-giay-adidas-stan-smith-chinh-hang-gia-tot-den-king-shoes-5.jpg', 'https://kingshoes.vn/data/upload/media/fx5501-giay-adidas-stan-smith-chinh-hang-gia-tot-den-king-shoes-8.jpg', 'https://kingshoes.vn/data/upload/media/fx5501-giay-adidas-stan-smith-chinh-hang-gia-tot-den-king-shoes-9.jpg', '1950000', '202301030', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'sp-rare', '15%', 1),
('31', 'ADIDAS ULTRABOOST 22', 'https://kingshoes.vn/data/upload/media/gx3062-giay-ultraboost-22-chinh-hang-gia-tot-den-king-shoes-5.jpg', 'https://kingshoes.vn/data/upload/media/gx3062-giay-ultraboost-22-chinh-hang-gia-tot-den-king-shoes-8.jpg', 'https://kingshoes.vn/data/upload/media/gx3062-giay-ultraboost-22-chinh-hang-gia-tot-den-king-shoes-9.jpg', '3800000', '202301031', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'popular', '10%', 1),
('32', 'ADIDAS ULTRABOOST 4.0 DNA', 'https://kingshoes.vn/data/upload/media/fy9336-giay-ultraboost-4.0-dna-chinh-hang-gia-tot-den-king-shoes-5.jpg', 'https://kingshoes.vn/data/upload/media/fy9336-giay-ultraboost-4.0-dna-chinh-hang-gia-tot-den-king-shoes-9.jpg', 'https://kingshoes.vn/data/upload/media/fy9336-giay-ultraboost-4.0-dna-chinh-hang-gia-tot-den-king-shoes-8.jpg', '4200000', '202301032', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'rare', '5%', 1),
('33', 'PUMA MERCEDES F1 RS-Z', 'https://kingshoes.vn/data/upload/media/307058-01-giay-puma-mercedes-f1-rs-z-chinh-hang-gia-tot-den-king-shoes-23.jpeg', 'https://kingshoes.vn/data/upload/media/307058-01-giay-puma-mercedes-f1-rs-z-chinh-hang-gia-tot-den-king-shoes-21.jpeg', 'https://kingshoes.vn/data/upload/media/307058-01-giay-puma-mercedes-f1-rs-z-chinh-hang-gia-tot-den-king-shoes-26.jpeg', '3200000', '202301033', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'popular', '10%', 1),
('34', 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-8.jpg', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-9.jpg', '2900000', '202301034', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'best-seller', '30%', 1),
('35', 'PUMA MERCEDES F1 RS-Z', 'https://kingshoes.vn/data/upload/media/gv8740-giay-ultraboost-5-dna-running-chinh-hang-gia-tot-den-king-shoes-4.jpg', 'https://kingshoes.vn/data/upload/media/gv8740-giay-ultraboost-5-dna-running-chinh-hang-gia-tot-den-king-shoes-7.jpg', 'https://kingshoes.vn/data/upload/media/gv8740-giay-ultraboost-5-dna-running-chinh-hang-gia-tot-den-king-shoes-8.jpg', '4200000', '202301035', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'popular', '10%', 1),
('36', 'ADIDAS ULTRABOOST 5.0 DNA', 'https://kingshoes.vn/data/upload/media/gv8744-giay-adidas-ultraboost-5.0-dna-chinh-hang-gia-tot-den-king-shoes-5.jpg', 'https://kingshoes.vn/data/upload/media/gv8744-giay-adidas-ultraboost-5.0-dna-chinh-hang-gia-tot-den-king-shoes-8.jpg', 'https://kingshoes.vn/data/upload/media/gv8744-giay-adidas-ultraboost-5.0-dna-chinh-hang-gia-tot-den-king-shoes-9.jpg', '4200000', '202301036', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nam', 'rare', '5%', 1),
('37', 'ADIDAS NMD R1 REFINED', 'https://kingshoes.vn/data/upload/media/h02334-giay-adidas-nmd-r1-refined-chinh-hang-den-king-shoes-6.jpg', 'https://kingshoes.vn/data/upload/media/h02334-giay-adidas-nmd-r1-refined-chinh-hang-den-king-shoes-12.jpg', 'https://kingshoes.vn/data/upload/media/h02334-giay-adidas-nmd-r1-refined-chinh-hang-den-king-shoes-15.jpg', '2800000', '202301037', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'best-seller', '30%', 1),
('38', 'DURAMO 10', 'https://kingshoes.vn/data/upload/media/gx0714-giay-adidas-duramo-chinh-hang-gia-tot-den-king-shoes-4.jpg', 'https://kingshoes.vn/data/upload/media/gx0714-giay-adidas-duramo-chinh-hang-gia-tot-den-king-shoes-7.jpg', 'https://kingshoes.vn/data/upload/media/gx0714-giay-adidas-duramo-chinh-hang-gia-tot-den-king-shoes-8.jpg', '2200000', '202301038', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'best-seller', '30%', 1),
('39', 'SUPERGRIP', 'https://kingshoes.vn/data/upload/media/fw5171-gia%CC%80y-adidas-supergrip-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-2-1657894912.jpg', 'https://kingshoes.vn/data/upload/media/fw5171-gia%CC%80y-adidas-supergrip-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-6.jpg', 'https://kingshoes.vn/data/upload/media/fw5171-gia%CC%80y-adidas-supergrip-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7.jpg', '2600000', '202301037', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'rare', '5%', 1),
('40', 'SN1997 X MARIMEKKO', 'https://kingshoes.vn/data/upload/media/gw2763-gia%CC%80y-adidas-sn1997-x-marimekko-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7-1656581808.jpg', 'https://kingshoes.vn/data/upload/media/gw2763-gia%CC%80y-adidas-sn1997-x-marimekko-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-12.jpg', 'https://kingshoes.vn/data/upload/media/gw2763-gia%CC%80y-adidas-sn1997-x-marimekko-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-13.jpg', '2800000', '202301040', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'best-seller', '30%', 1),
('41', 'ADIDAS PUREMOTION', 'https://kingshoes.vn/data/upload/media/ho0586-giay-adidas-puremotion-nu-chinh-hang-gia-tot-den-king-shoes-4.jpg', 'https://kingshoes.vn/data/upload/media/ho0586-giay-adidas-puremotion-nu-chinh-hang-gia-tot-den-king-shoes-8.jpg', 'https://kingshoes.vn/data/upload/media/ho0586-giay-adidas-puremotion-nu-chinh-hang-gia-tot-den-king-shoes-5.jpg', '1600000', '202301041', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'popular', '10%', 1),
('42', 'DAY JOGGER DASH GREEN LINEN', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-day-jogger-dash-green-linen-fw4829-king-shoes-sneaker-real-hcm-5.jpg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-day-jogger-dash-green-linen-fw4829-king-shoes-sneaker-real-hcm-8.jpg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-day-jogger-dash-green-linen-fw4829-king-shoes-sneaker-real-hcm-9.jpg', '2200000', '202301042', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'best-seller', '30%', 1),
('43', 'ULTRABOOST 20 METALLIC GOLD', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-20-fv8351-king-shoes-sneaker-real-hcm-12.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-20-fv8351-king-shoes-sneaker-real-hcm-15.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-20-fv8351-king-shoes-sneaker-real-hcm-16.jpeg', '2900000', '202301043', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'rare', '5%', 1),
('44', 'NMD R1 METALLIC GOLD', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-nmd-r1-metallic-gold-eg5665-king-shoes-sneaker-real-hcm-21.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-nmd-r1-metallic-gold-eg5665-king-shoes-sneaker-real-hcm-24.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-nmd-r1-metallic-gold-eg5665-king-shoes-sneaker-real-hcm-23.jpeg', '2800000', '202301044', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'sp-rare', '15%', 1),
('45', 'ULTRABOOST 20 CLOUD WHITE', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-20-fv8336-king-shoes-sneaker-real-hcm-62.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-20-fv8336-king-shoes-sneaker-real-hcm-65.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-20-fv8336-king-shoes-sneaker-real-hcm-64.jpeg', '3200000', '202301045', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'popular', '10%', 1),
('46', 'FALCON PINK PURPLE', 'https://kingshoes.vn/data/upload/media/adidas-falcon-pink-purple-bd78251-king-shoes-sneaker-real-hcm-1624253267.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-falcon-pink-purple-bd7825-king-shoes-sneaker-real-hcm-56.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-falcon-pink-purple-bd7825-king-shoes-sneaker-real-hcm-55.jpeg', '2600000', '202301046', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'sp-rare', '15%', 1),
('47', 'SUPERSTAR', 'https://kingshoes.vn/data/upload/media/sneaker-c77124-super-star-adidas-kingshoes.vn-tphcm-tanbinh-27-1628053703.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-superstar-review-on-feet-c77124-king-shoes-sneaker-real-hcm-69.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-superstar-review-on-feet-c77124-king-shoes-sneaker-real-hcm-68.jpeg', '2200000', '202301047', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'rare', '5%', 1),
('48', 'ULTRABOOST 21', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-21-hong-fy3953-king-shoes-sneaker-real-hcm-4.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-21-hong-fy3953-king-shoes-sneaker-real-hcm-8.jpeg', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-21-hong-fy3953-king-shoes-sneaker-real-hcm-9.jpeg', '3800000', '202301048', ' ⚡️ TwoTown ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng Trọn Đời.!!! \r\nĐến với \"TwoTown” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.', 'Adidas', 'Nữ', 'popular', '10%', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

DROP TABLE IF EXISTS `tbl_donhang`;
CREATE TABLE IF NOT EXISTS `tbl_donhang` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `soluong` int NOT NULL DEFAULT '0',
  `dongia` int NOT NULL DEFAULT '0',
  `tensp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhsp` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhtien` int NOT NULL DEFAULT '0',
  `idbill` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `idbill` (`idbill`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`ID`, `soluong`, `dongia`, `tensp`, `hinhsp`, `thanhtien`, `idbill`) VALUES
(2, 6, 3900000, 'AIR FORCE 1 07', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-8.png', 23400000, 19),
(3, 13, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 37700000, 20),
(4, 6, 3900000, 'AIR FORCE 1 07', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-8.png', 23400000, 20),
(5, 13, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 37700000, 21),
(6, 6, 3900000, 'AIR FORCE 1 07', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-8.png', 23400000, 21),
(7, 13, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 37700000, 22),
(8, 4, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 11600000, 23),
(9, 1, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 2900000, 24),
(10, 1, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 2900000, 25),
(11, 4, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 11600000, 26),
(12, 8, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 23200000, 27),
(13, 4, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 11600000, 28),
(14, 7, 2600000, 'NIKE COURT VISION LOW', 'https://kingshoes.vn/data/upload/media/dr9514-400-giay-nike-court-vision-low-chinh-hang-gia-tot-den-king-shoes-6.jpeg', 18200000, 29),
(15, 3, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 9900000, 31),
(16, 3, 3900000, 'AIR FORCE 1 07', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-8.png', 11700000, 32),
(17, 1, 2800000, 'SN1997 X MARIMEKKO', 'https://kingshoes.vn/data/upload/media/gw2763-gia%CC%80y-adidas-sn1997-x-marimekko-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7-1656581808.jpg', 2800000, 35),
(18, 3, 2800000, 'SN1997 X MARIMEKKO', 'https://kingshoes.vn/data/upload/media/gw2763-gia%CC%80y-adidas-sn1997-x-marimekko-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7-1656581808.jpg', 8400000, 37),
(19, 6, 3600000, 'NIKE AIR ZOOM PEGASUS 39', 'https://kingshoes.vn/data/upload/media/dm0173-006-giay-nike-air-zoom-pegasus-39-womens-chinh-hang-den-king-shoes-4.png', 21600000, 38),
(20, 4, 3600000, 'AIR FORCE 1 FONTANKA', 'https://kingshoes.vn/data/upload/media/dh1290-101-giay-nike-air-force-1-fontanka-chinh-hang-gia-tot-den-king-shoes-5.jpeg', 14400000, 40),
(21, 2, 2800000, 'SN1997 X MARIMEKKO', 'https://kingshoes.vn/data/upload/media/gw2763-gia%CC%80y-adidas-sn1997-x-marimekko-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7-1656581808.jpg', 5600000, 41),
(22, 4, 3900000, 'AIR FORCE 1 07', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-8.png', 15600000, 42),
(23, 0, 2800000, 'SN1997 X MARIMEKKO', 'https://kingshoes.vn/data/upload/media/gw2763-gia%CC%80y-adidas-sn1997-x-marimekko-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7-1656581808.jpg', 0, 43),
(24, 3, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 8700000, 44),
(25, 2, 3900000, 'AIR FORCE 1 07', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-8.png', 7800000, 45),
(26, 2, 4200000, 'ADIDAS ULTRABOOST 5.0 DNA', 'https://kingshoes.vn/data/upload/media/gv8744-giay-adidas-ultraboost-5.0-dna-chinh-hang-gia-tot-den-king-shoes-5.jpg', 8400000, 46),
(27, 3, 3900000, 'AIR FORCE 1 07', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-8.png', 11700000, 47),
(28, 4, 4200000, 'AIR FORCE 1 JDI', 'https://kingshoes.vn/data/upload/media/dv7584-100-giay-nike-air-force-1-07-se-chinh-hang-gia-tot-den-king-shoes-5.png', 16800000, 48),
(29, 10, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 29000000, 49),
(30, 3, 3900000, 'AIR MAX BLISS', 'https://kingshoes.vn/data/upload/media/dh5128-001-giay-nike-air-max-bliss-chinh-hang-gia-tot-den-king-shoes-2.jpeg', 11700000, 50),
(31, 3, 3200000, 'PUMA MERCEDES F1 RS-Z', 'https://kingshoes.vn/data/upload/media/307058-01-giay-puma-mercedes-f1-rs-z-chinh-hang-gia-tot-den-king-shoes-23.jpeg', 9600000, 51),
(32, 3, 3200000, 'ULTRABOOST 20 CLOUD WHITE', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-20-fv8336-king-shoes-sneaker-real-hcm-62.jpeg', 9600000, 52),
(33, 2, 4200000, 'NIKECOURT AIR ZOOM GP TURBO', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.png', 8400000, 52),
(34, 4, 2800000, 'NIKECOURT VAPOR LITE HC', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-tennis-nikecourt-vapor-lite-hc-dc3432-125-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7.jpeg', 11200000, 53),
(35, 3, 3200000, 'NIKECOURT VAPOR LITE HARD COURT TENNIS', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-vapor-lite-white-university-red-dc3431-188-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-2.jpeg', 9600000, 53),
(36, 4, 4200000, 'NIKECOURT AIR ZOOM GP TURBO', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.png', 16800000, 55),
(37, 3, 2800000, 'NIKECOURT VAPOR LITE HC', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-tennis-nikecourt-vapor-lite-hc-dc3432-125-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7.jpeg', 8400000, 57),
(38, 1, 2300000, 'NIKE DOWNSHIFTER 12', 'https://kingshoes.vn/data/upload/media/dd9294-007-giay-nike-downshifter-12-road-running-chinh-hang-gia-tot-den-king-shoes-5.jpeg', 2300000, 59),
(39, 2, 3900000, 'AIR FORCE 1 07', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-8.png', 7800000, 59),
(40, 3, 2900000, 'PUMA SLIPSTREAM', 'https://kingshoes.vn/data/upload/media/388549-04-giay-puma-slipstream-chinh-hang-gia-tot-den-king-shoes-24.jpg', 8700000, 60),
(41, 4, 2800000, 'SN1997 X MARIMEKKO', 'https://kingshoes.vn/data/upload/media/gw2763-gia%CC%80y-adidas-sn1997-x-marimekko-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7-1656581808.jpg', 11200000, 60),
(42, 1, 4200000, 'NIKECOURT AIR ZOOM GP TURBO', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.png', 4200000, 60),
(43, 1, 4200000, 'AIR FORCE 1 JDI', 'https://kingshoes.vn/data/upload/media/dv7584-100-giay-nike-air-force-1-07-se-chinh-hang-gia-tot-den-king-shoes-5.png', 4200000, 60),
(44, 2, 2800000, 'SN1997 X MARIMEKKO', 'https://kingshoes.vn/data/upload/media/gw2763-gia%CC%80y-adidas-sn1997-x-marimekko-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7-1656581808.jpg', 5600000, 61),
(45, 1, 3900000, 'AIR FORCE 1 07', 'https://kingshoes.vn/data/upload/media/dq7569-101-giay-nike-air-force-1-07-white-desert-berry-chinh-hang-gia-tot-den-king-shoes-8.png', 3900000, 62),
(46, 2, 4200000, 'NIKECOURT AIR ZOOM GP TURBO', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.png', 8400000, 63),
(47, 1, 2900000, 'ADIDAS ADISTAR', 'https://kingshoes.vn/data/upload/media/gx3000-giay-adistar-mau-xanh-da-troi-chinh-hang-gia-tot-den-king-shoes-5.jpg', 2900000, 64),
(48, 3, 4200000, 'AIR FORCE 1 JDI', 'https://kingshoes.vn/data/upload/media/dv7584-100-giay-nike-air-force-1-07-se-chinh-hang-gia-tot-den-king-shoes-5.png', 12600000, 66),
(49, 2, 2800000, 'SN1997 X MARIMEKKO', 'https://kingshoes.vn/data/upload/media/gw2763-gia%CC%80y-adidas-sn1997-x-marimekko-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7-1656581808.jpg', 5600000, 67),
(50, 1, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 3300000, 68),
(51, 1, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 3300000, 69),
(52, 6, 2300000, 'NIKE DOWNSHIFTER 12', 'https://kingshoes.vn/data/upload/media/dd9294-007-giay-nike-downshifter-12-road-running-chinh-hang-gia-tot-den-king-shoes-5.jpeg', 13800000, 70),
(53, 3, 4200000, 'NIKECOURT AIR ZOOM GP TURBO', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.png', 12600000, 72),
(54, 2, 2800000, 'NIKECOURT VAPOR LITE HC', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-tennis-nikecourt-vapor-lite-hc-dc3432-125-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7.jpeg', 5600000, 73),
(55, 2, 3200000, 'PUMA MERCEDES F1 RS-Z', 'https://kingshoes.vn/data/upload/media/307058-01-giay-puma-mercedes-f1-rs-z-chinh-hang-gia-tot-den-king-shoes-23.jpeg', 6400000, 75),
(56, 2, 3800000, 'ULTRABOOST 21', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-21-hong-fy3953-king-shoes-sneaker-real-hcm-4.jpeg', 7600000, 77),
(57, 2, 4200000, 'NIKECOURT AIR ZOOM GP TURBO', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.png', 8400000, 78),
(58, 1, 4200000, 'NIKECOURT AIR ZOOM GP TURBO', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.png', 4200000, 79),
(59, 2, 4200000, 'NIKECOURT AIR ZOOM GP TURBO', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.png', 8400000, 80),
(60, 3, 4200000, 'NIKECOURT AIR ZOOM GP TURBO', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.png', 12600000, 81),
(61, 1, 1600000, 'ADIDAS PUREMOTION', 'https://kingshoes.vn/data/upload/media/ho0586-giay-adidas-puremotion-nu-chinh-hang-gia-tot-den-king-shoes-4.jpg', 1600000, 81),
(62, 2, 1600000, 'ADIDAS PUREMOTION', 'https://kingshoes.vn/data/upload/media/ho0586-giay-adidas-puremotion-nu-chinh-hang-gia-tot-den-king-shoes-4.jpg', 3200000, 82),
(63, 1, 3600000, 'NIKE AIR ZOOM PEGASUS 39', 'https://kingshoes.vn/data/upload/media/dm0173-006-giay-nike-air-zoom-pegasus-39-womens-chinh-hang-den-king-shoes-4.png', 3600000, 83),
(64, 1, 3200000, 'PUMA MERCEDES F1 RS-Z', 'https://kingshoes.vn/data/upload/media/307058-01-giay-puma-mercedes-f1-rs-z-chinh-hang-gia-tot-den-king-shoes-23.jpeg', 3200000, 84),
(65, 1, 3900000, 'AIR FORCE 1 PLT.AF.ORM LV8', 'https://kingshoes.vn/data/upload/media/dz4985-097-giay-nike-air-force-1-pltaform-lv8-chinh-hang-gia-tot-den-king-shoes-6.png', 3900000, 85),
(66, 1, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 3300000, 0),
(67, 2, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 6600000, 86),
(68, 2, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 6600000, 87),
(69, 2, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 6600000, 88),
(70, 1, 2800000, 'NIKECOURT VAPOR LITE HC', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-tennis-nikecourt-vapor-lite-hc-dc3432-125-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7.jpeg', 2800000, 89),
(71, 1, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 3300000, 91),
(72, 2, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 6600000, 92),
(73, 1, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 3300000, 93),
(74, 1, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 3300000, 94),
(75, 1, 3300000, 'AIR FORCE 1', 'https://kingshoes.vn/data/upload/media/SNEAKER-315122-111-AIR-FORCE-1-07-NIKE-KINGSHOES.VN-TPHCM-TANBINH-14.jpg', 3300000, 95),
(76, 7, 4200000, 'NIKECOURT AIR ZOOM GP TURBO', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-nike-court-air-zoom-gp-turbo-hard-court-tennis-ck7513-005-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-5.png', 29400000, 96),
(77, 1, 2800000, 'SN1997 X MARIMEKKO', 'https://kingshoes.vn/data/upload/media/gw2763-gia%CC%80y-adidas-sn1997-x-marimekko-chi%CC%81nh-ha%CC%83ng-de%CC%82%CC%81n-king-shoes-7-1656581808.jpg', 2800000, 97),
(78, 1, 1900000, 'ADIDAS BREAKNET', 'https://kingshoes.vn/data/upload/media/fx8707-giay-adidas-breaknet-trang-chinh-hang-den-king-shoes-6.jpg', 1900000, 98),
(79, 1, 1900000, 'ADIDAS BREAKNET', 'https://kingshoes.vn/data/upload/media/fx8707-giay-adidas-breaknet-trang-chinh-hang-den-king-shoes-6.jpg', 1900000, 99),
(80, 1, 2800000, 'AIR MAX BELLA', 'https://kingshoes.vn/data/upload/media/dd9285-010-giay-nike-air-max-bella-tr-5-chinh-hang-gia-tot-den-king-shoes-1.jpeg', 2800000, 99);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khachhang`
--

DROP TABLE IF EXISTS `tbl_khachhang`;
CREATE TABLE IF NOT EXISTS `tbl_khachhang` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int NOT NULL DEFAULT '0',
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`ID`, `name`, `phone`, `address`, `note`, `total`, `email`, `purchase`, `ngay`) VALUES
(2, 'Nguyễn Lý Linh Nga', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'Ship lẹ cho em nha anh', 20300000, 'linga@gmail.com', '0', '0000-00-00'),
(3, 'Nguyễn Lý Linh Nga', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'Ship lẹ cho em nha anh', 20300000, 'linga@gmail.com', '0', '0000-00-00'),
(4, 'Nguyễn Lý Linh Nga', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'Ship lẹ cho em nha anh', 20300000, 'linga@gmail.com', '0', '0000-00-00'),
(5, 'Nguyễn Lý Linh Nga', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'Ship lẹ cho em nha anh', 20300000, 'linga@gmail.com', '0', '0000-00-00'),
(6, 'Nguyễn Lý Linh Nga', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'Ship lẹ cho em nha anh', 20300000, 'linga@gmail.com', '0', '0000-00-00'),
(7, 'Nguyễn Lý Linh Nga', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'Ship lẹ cho em nha anh', 20300000, 'linga@gmail.com', '0', '0000-00-00'),
(17, 'Nguyễn Lý Linh Nga', '0123456789', '27 Đ.TL 22, Thạnh Lộc, Quận 12, TP.Hồ Chí Minh', 'hg', 52400000, 'linga@gmail.com', '0', '0000-00-00'),
(18, 'Nguyễn Lý Linh Nga', '0123456789', '27 Đ.TL 22, Thạnh Lộc, Quận 12, TP.Hồ Chí Minh', 'hg', 52400000, 'linga@gmail.com', '0', '0000-00-00'),
(19, 'Nguyễn Lý Linh Nga', '0123456789', '27 Đ.TL 22, Thạnh Lộc, Quận 12, TP.Hồ Chí Minh', 'hg', 52400000, 'linga@gmail.com', '0', '0000-00-00'),
(20, 'Trần Nguyễn Quốc Tuấn', '0258741369', 'Việt Nam', 'được', 61100000, 'Tuan!@gmail.com', '0', '0000-00-00'),
(21, 'Trần Nguyễn Quốc Tuấn', '0258741369', 'Việt Nam', 'được', 61100000, 'Tuan!@gmail.com', '0', '0000-00-00'),
(23, 'Trần Nguyễn Quốc Tuấn', '0641326523', 'sdfasdfasdf', 'sadfasdfasdfsadfsadf', 11600000, 'Tuan!@gmail.com', '0', '0000-00-00'),
(25, 'Trần Nguyễn Quốc Tuấn', '', '', '', 2900000, 'Tuan!@gmail.com', '0', '0000-00-00'),
(28, 'Trần Nguyễn Quốc Tuấn', '', '', '', 11600000, 'Tuan!@gmail.com', '0', '0000-00-00'),
(29, 'Trần Nguyễn Quốc Tuấn', '0345462407', 'sdfasdf', 'ádfsdfsdf', 18200000, 'Tuan!@gmail.com', '0', '0000-00-00'),
(30, 'Trần Nguyễn Quốc Tuấn', '0345462407', 'sdfasdf', 'ádfsdfsdf', 0, 'Tuan!@gmail.com', '0', '0000-00-00'),
(31, 'qưerty', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', '7', 9900000, 'ngabui@gmail.com', '0', '0000-00-00'),
(32, 'Bùi Minh Thành', '0123456879', '2', 'ship ngay cho em nhé anh', 11700000, 'ngabui@gmail.com', '0', '0000-00-00'),
(33, 'Bùi Minh Thành', '0123456879', '2', 'ship ngay cho em nhé anh', 0, 'ngabui@gmail.com', '0', '0000-00-00'),
(34, 'Bùi Minh Thành', '0123456879', '2', 'ship ngay cho em nhé anh', 0, 'ngabui@gmail.com', '0', '0000-00-00'),
(35, 'Bùi Minh Thành', '0641326523', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'chuyện nhỏ', 2800000, 'ngabui@gmail.com', '0', '0000-00-00'),
(36, 'Bùi Minh Thành', '0641326523', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'chuyện nhỏ', 0, 'ngabui@gmail.com', '0', '0000-00-00'),
(37, 'Nguyễn Lý Linh Nga', '0383812397', '102 Hoàng Diệu 2, Tp Hồ Chí Minh10s', 'ddfasdfasdfasdfasdf', 8400000, 'linga@gmail.com', '0', '0000-00-00'),
(38, 'Trần Nguyễn Quốc Tuấn', '0123456789', 'bên', 'ebeee', 21600000, 'Tuan!@gmail.com', '0', '0000-00-00'),
(39, 'Trần Nguyễn Quốc Tuấn', '0123456789', 'bên', 'ebeee', 0, 'Tuan!@gmail.com', '0', '0000-00-00'),
(41, 'Bùi Minh Thành', '0123456789', '27 Đ.TL 22, Thạnh Lộc, Quận 12, TP.Hồ Chí Minh', 'giao lẹ cho em nhé anh', 5600000, 'ngabui@gmail.com', '0', '0000-00-00'),
(42, 'Trần Nguyễn Quốc Tuấn', '0345462407', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'lần cuối đấy', 15600000, 'Tuan!@gmail.com', '0', '0000-00-00'),
(45, 'Trần Nguyễn Quốc Tuấn', '0123456789', '27 Đ.TL 22, Thạnh Lộc, Quận 12, TP.Hồ Chí Minh', '', 7800000, 'Tuan!@gmail.com', '0', '0000-00-00'),
(46, 'Bùi Minh Thành', '0641326523', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'cảm ơn vì đã ở lại', 8400000, 'ngabui@gmail.com', '0', '0000-00-00'),
(47, 'Nguyễn Lý Linh Nga', '0641326523', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'làm ơn đi can u top blame me', 11700000, 'linga@gmail.com', '0', '0000-00-00'),
(48, 'Trần Nguyễn Quốc Tuấn', '0345462407', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'đừng giao cho em nha', 16800000, 'Tuan!@gmail.com', '0', '0000-00-00'),
(49, 'Bùi Minh Thành', '0345462407', 'Việt Nam', 'kjds', 29000000, 'ngabui@gmail.com', '0', '0000-00-00'),
(50, 'Hoang An', '0123456789', 'sdfasdf', 'jvh', 11700000, 'buiminhthanh@gmail.com', '0', '0000-00-00'),
(51, 'ten', '0123546123', 'sdfsadfasdfasdf', 'uytdfghj', 9600000, 'ten@gmail.com', '0', '0000-00-00'),
(52, 'Bùi Minh Thành ', '0345462407', '207 đâu đó ở Tp ', 'khỏi cần ship cũm đc', 18000000, 'buiminhthanh152@gmail.com', '0', '0000-00-00'),
(53, 'Nguyễn Lý Linh Nga ', '0383812397', '102 Hoàng Diệu 2, Quận Thủ Đức, TP.Hồ Chí Minh', 'đặt hàng sản phẩm ', 20800000, 'linhnga386@gmail.com', '0', '0000-00-00'),
(54, 'Bùi Minh Thành', '0345462407', 'Việt Nam', 'kjds', 0, 'ngabui@gmail.com', '0', '0000-00-00'),
(55, 'Bùi Minh Thành', '0345462407', '27 Đ.TL 22, Thạnh Lộc, Quận 12, TP.Hồ Chí Minh', 'Giao lẹ cho em nha anh', 16800000, 'tantienthanhdat@gmail.com', '0', '0000-00-00'),
(56, 'Bùi Minh Thành', '0345462407', '27 Đ.TL 22, Thạnh Lộc, Quận 12, TP.Hồ Chí Minh', 'Giao lẹ cho em nha anh', 0, 'tantienthanhdat@gmail.com', '0', '0000-00-00'),
(57, 'Bùi Thành', '0258741369', 'xã Việt Nam', 'Đúm nhau không', 8400000, 'linhnga386@gmail.com', '0', '0000-00-00'),
(58, 'Bùi Thành', '0258741369', 'xã Việt Nam', 'Đúm nhau không', 0, 'linhnga386@gmail.com', '0', '0000-00-00'),
(59, 'Bùi Thành', '0345462407', '27 Đ.TL 22, Thạnh Lộc, Quận 12, TP.Hồ Chí Minh', 'adfasdfasdfasdf', 10100000, 'linhnga386@gmail.com', '0', '0000-00-00'),
(60, 'Bùi Minh Thành ', '0345462407', 'ở đâu ', 'sdfasdfasd', 28300000, 'buiminhthanh152@gmail.com', 'on', '0000-00-00'),
(61, 'Bùi Minh Thành', '0641326523', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'kjhfd', 5600000, 'tantienthanhdat@gmail.com', 'on', '0000-00-00'),
(62, 'Bùi Thành', '0641326523', '27 Đ.TL 22, Thạnh Lộc, Quận 12, TP.Hồ Chí Minh', 'ffghjklkjhgfk', 3900000, 'linhnga386@gmail.com', 'Thanh toán momo', '0000-00-00'),
(63, 'Bùi Thành', '0345462407', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'zxdcfghbjnkml', 8400000, 'linhnga386@gmail.com', 'Thanh toán momo', '0000-00-00'),
(64, 'Bùi Minh Thành', '0641326523', 'Việt Nam', 'đúng rồi', 2900000, 'buiminhthanh152@gmail.com', 'Thanh toán tiền mặt', '0000-00-00'),
(65, 'Bùi Minh Thành', '0641326523', 'Việt Nam', 'đúng rồi', 0, 'buiminhthanh152@gmail.com', 'Thanh toán tiền mặt', '0000-00-00'),
(66, 'Bùi Minh Thành', '0641326523', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'cảm ơn shop', 12600000, 'tantienthanhdat@gmail.com', 'Thanh toán momo', '0000-00-00'),
(67, 'Bùi Minh Thành', '0258741369', 'sdfasdfasdf', 'FSDFGHVHB', 5600000, 'buiminhthanh152@gmail.com', 'Thanh toán momo', '0000-00-00'),
(68, 'Bùi Minh Thành', '0641326523', '27 Đ.TL 22, Thạnh Lộc, Quận 12, TP.Hồ Chí Minh', '6H sáng tại nhà riêng', 3300000, 'buiminhthanh152@gmail.com', 'Thanh toán tiền mặt', '0000-00-00'),
(69, 'Bùi Minh Thành', '0345462407', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'giao chiều tối tại nhà cho anh', 3300000, 'buiminhthanh152@gmail.com', 'Thanh toán momo', '0000-00-00'),
(70, 'ten', '0123456789', 'sfsadf', 'QÀAF', 13800000, 'Hoangan@gmail.com', 'Thanh toán momo', '0000-00-00'),
(71, 'ten', '0123456789', 'sfsadf', 'QÀAF', 0, 'Hoangan@gmail.com', 'Thanh toán momo', '0000-00-00'),
(72, 'Tân', '0123456879', '27 Đ.TL 22, Thạnh Lộc, Quận 12, TP.Hồ Chí Minh', 'sdfasdfasdf', 12600000, 'tantienthanhdat@gmail.com', 'Thanh toán momo', '0000-00-00'),
(73, 'Bùi Minh Thành ', '0345462407', '102 ', 'cảm ơn', 5600000, 'tantienthanhdat@gmail.com', 'Thanh toán tiền mặt', '0000-00-00'),
(74, 'Bùi Minh Thành ', '0345462407', '102 ', 'cảm ơn', 0, 'tantienthanhdat@gmail.com', 'Thanh toán tiền mặt', '0000-00-00'),
(75, 'Bùi Minh Thành', '0345462407', '102 Hoàng Diệu 2', 'oke', 6400000, 'addictedlame@gmail.com', 'Thanh toán tiền mặt', '0000-00-00'),
(76, 'Bùi Minh Thành', '0345462407', '102 Hoàng Diệu 2', 'oke', 0, 'addictedlame@gmail.com', 'Thanh toán tiền mặt', '0000-00-00'),
(77, 'Bùi Minh Thành', '0345462407', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', 'sádf;ládfkl;ádf', 7600000, 'tantienthanhdat@gmail.com', 'Thanh toán momo', '0000-00-00'),
(78, 'twotown', '0123456789', 'sdfasdf', 'xác nhận', 8400000, 'buiminhthanh152@gmail.com', '', '0000-00-00'),
(79, 'twotown', '0123456879', 'bên', 'xác nhận', 4200000, 'buiminhthanh152@gmail.com', 'Thanh toán vnpay', '0000-00-00'),
(80, 'Bùi Thành', '0383812397', '2', '', 8400000, 'nga@gmail.com', 'Thanh toán vnpay', '0000-00-00'),
(81, 'Bùi Minh Thành', '0383812397', 'sdfasdfasdf', '', 14200000, 'tantienthanhdat@gmail.com', 'Thanh toán vnpay', '0000-00-00'),
(82, 'Bùi Thành', '0383812397', 'sdfasdfasdf', 'sdf', 3200000, 'nga@gmail.com', 'Thanh toán vnpay', '0000-00-00'),
(83, 'Bùi Minh Thành', '0123456789', 'bên', '', 3600000, 'tantienthanhdat@gmail.com', 'Thanh toán vnpay', '0000-00-00'),
(84, 'SunLightChanh', '0383812397', 'bên', '', 3200000, 'buiminhthanh152@gmail.com', 'Thanh toán vnpay', '0000-00-00'),
(85, 'Bùi Minh Thành', '0123456789', 'bên', '', 3900000, 'tantienthanhdat@gmail.com', 'Thanh toán vnpay', '0000-00-00'),
(86, 'Bùi Thành', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', '', 6600000, 'nga@gmail.com', 'Thanh toán momo', '0000-00-00'),
(87, 'Bùi Thành', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', '', 6600000, 'nga@gmail.com', 'Thanh toán momo', '0000-00-00'),
(88, 'Bùi Thành', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', '', 6600000, 'nga@gmail.com', 'Thanh toán momo', '0000-00-00'),
(89, 'Mai Phúc Lộc', '0345462407', '34 Hóc Môn', '', 2800000, 'mpl123@gmail.com', 'Thanh toán tiền mặt', '0000-00-00'),
(90, 'Mai Phúc Lộc', '0345462407', '34 Hóc Môn', '', 0, 'mpl123@gmail.com', 'Thanh toán tiền mặt', '0000-00-00'),
(91, 'Bùi Minh Thành', '0383812397', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', '', 3300000, 'tantienthanhdat@gmail.com', 'Thanh toán vnpay', '0000-00-00'),
(92, 'Mai Phúc Lộc', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', '', 6600000, 'addictedlame@gmail.com', 'Thanh toán tiền mặt', '0000-00-00'),
(93, 'Mai Phúc Lộc', '0383812397', 'sdfasdfasdf', '', 3300000, 'mpl123@gmail.com', 'Thanh toán tiền mặt', '0000-00-00'),
(94, 'Mai Phúc Lộc', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', '', 3300000, 'addictedlame@gmail.com', 'Thanh toán momo', '0000-00-00'),
(95, 'bandienmay', '0383812397', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', '', 3300000, 'nga@gmail.com', 'Thanh toán tiền mặt', '2023-04-12'),
(96, 'Đỗ Phương Nam', '0213564789', '34 Định Quán', 'sdf', 29400000, 'NamDo@gmail.com', 'Thanh toán tiền mặt', '2023-04-12'),
(97, 'Mai Phúc Lộc', '0215463987', '23 Tiền Gianh', '', 2800000, 'mpl123@gmail.com', 'Thanh toán momo', '2023-04-12'),
(98, 'Bùi Thành', '0123456789', '102 Hoàng Diệu 2, Tp Hồ Chí Minh', '', 1900000, 'nga@gmail.com', 'Thanh toán momo', '2023-04-13'),
(99, 'Võ Ngọc Truyền', '0123546878', '34 Hai Bà Trưng', '', 4700000, 'truyen@gmail.com', 'Thanh toán tiền mặt', '2023-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `Ho` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `Ten` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `SoDienThoai` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `GioiTinh` char(3) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Ho`, `Ten`, `MatKhau`, `NgaySinh`, `SoDienThoai`, `GioiTinh`) VALUES
(1, 'ntnquynh210@gmail.com', 'Nguyyễn Thị Ngọc', 'Quỳnh', 'quynhngoc20', '2002-11-20', '0986321459', 'Nữ'),
(2, 'thienphuong81@gmail.com', 'Nguyễn Thiên', 'Phương', '18contho', '2001-01-08', '0865932569', 'Nữ'),
(3, 'thiennhan1210@gmail.com', 'Võ Thiên', 'Nhân', 'thiennhan123', '2001-12-10', '0902352455', 'Nam'),
(4, 'thaitinhtran2@gmail.com', 'Trần Thái', 'Tịnh', 'thanhtinh2', '2002-02-09', '0835692458', 'Nam'),
(5, 'leminhtriet@gmail.com', 'Lê Minh', 'Triết', '7de82a5b547418022124112a2cd4fee3', '2002-01-01', '0123456789', 'Nam'),
(6, 'maiphucloc@gmail.com', 'Mai Phúc', 'Lộc', 'f415554d2795a32da3ee8aad4378e2d8', '2002-11-22', '0123456789', 'Nam'),
(7, 'buiminhthanh@gmail.com', 'Bùi Minh', 'Thành', '32c2c59809d4b1b639e5b9d6207d0fb8', '2002-05-01', '0123456789', 'Nam'),
(8, 'ntn@gmail.com', 'tu', 'ten', '1358978c071477f6458f58b566e89c39', '2012-02-12', '0345462407', 'Nam'),
(9, 'ltw@gmail.com', 'sdgf`', 'Thanh', '25f9e794323b453885f5181f1b624d0b', '2023-03-02', '0123456789', 'Nam'),
(10, 'fasdstdao@gmail.com', 'Bui', 'Siu', '0052d252dadd1d530da738b25ff9554f', '2023-03-07', '0123456789', 'Nam'),
(11, 'ngabui@gmail.com', 'Nguyễn', 'Heo', '0052d252dadd1d530da738b25ff9554f', '2023-03-16', '0321456987', 'Nam'),
(12, 'lt@gmail.com', 'ho', 'Văn', '0052d252dadd1d530da738b25ff9554f', '2023-03-08', '0125436987', 'Nam'),
(13, 'nga@gmail.com', 'nga', 'bui', '0052d252dadd1d530da738b25ff9554f', '2023-03-31', '0345462407', 'Nữ'),
(14, 'admin', 'Bùi', 'Thành', '0052d252dadd1d530da738b25ff9554f', '2002-05-01', '0345462407', 'Nam');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
