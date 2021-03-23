-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babyshop`
--

-- --------------------------------------------------------
CREATE DATABASE `babyshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `babyshop`;
--
-- Table structure for table `chitietdondathang`
--

CREATE TABLE `chitietdondathang` (
  `MaChiTietDonDatHang` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaBan` int(11) DEFAULT NULL,
  `MaDonDatHang` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `MaSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdondathang`
--

INSERT INTO `chitietdondathang` (`MaChiTietDonDatHang`, `SoLuong`, `GiaBan`, `MaDonDatHang`, `MaSanPham`) VALUES
('08101200100', 4, 260000, '081012001', 11),
('08101200101', 3, 160000, '081012001', 4),
('08101200102', 30, 220000, '081012001', 10),
('08101200103', 1, 380000, '081012001', 9),
('08101200200', 1, 380000, '081012002', 9),
('08101200300', 2, 220000, '081012003', 10),
('13121200100', 4, 160000, '131212001', 4),
('13121200200', 1, 180000, '131212002', 5),
('13121200201', 2, 260000, '131212002', 11);

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `MaDonDatHang` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` datetime DEFAULT NULL,
  `TongThanhTien` int(11) DEFAULT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `MaTinhTrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`MaDonDatHang`, `NgayLap`, `TongThanhTien`, `MaTaiKhoan`, `MaTinhTrang`) VALUES
('081012001', '2020-10-08 00:00:00', 380000, 1, 1),
('081012002', '2020-10-08 00:00:00', 380000, 1, 1),
('081012003', '2020-10-08 00:00:00', 440000, 1, 1),
('131212001', '2020-12-13 00:00:00', 640000, 1, 1),
('131212002', '2020-12-13 00:00:00', 700000, 1, 1),
('231219001', '2020-12-23 10:49:19', 0, 1, 1),
('231219002', '2020-12-23 10:50:40', 0, 1, 1),
('231219003', '2020-12-23 10:50:57', 0, 1, 1),
('231219004', '2020-12-23 10:51:10', 0, 1, 1),
('231219005', '2020-12-23 11:06:26', 43990000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `MaHangSanXuat` int(11) NOT NULL,
  `TenHangSanXuat` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LogoURL` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`MaHangSanXuat`, `TenHangSanXuat`, `LogoURL`, `BiXoa`) VALUES
(1, 'Apple', 'Revell.png', 0),
(2, 'SamSung', 'Lego.png', 0),
(3, 'Huawei', 'Lamaze.png', 0),
(4, 'Lenovo', 'vtech.png', 0),
(5, 'Asus', 'Rastar.jpg', 0),
(6, 'Acer', 'Syma.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoaiSanPham` int(11) NOT NULL,
  `TenLoaiSanPham` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSanPham`, `TenLoaiSanPham`, `BiXoa`) VALUES
(1, 'Điện thoại', 0),
(2, 'Laptop', 0),
(3, 'Tablet', 0),
(4, 'Tai nghe', 0),
(5, 'Smart watch', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `MaLoaiTaiKhoan` int(11) NOT NULL,
  `TenLoaiTaiKhoan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`MaLoaiTaiKhoan`, `TenLoaiTaiKhoan`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhURL` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaXuatXu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GiaSanPham` int(11) DEFAULT NULL,
  `NgayNhap` datetime DEFAULT NULL,
  `SoLuongTon` int(11) DEFAULT NULL,
  `SoLuongBan` int(11) DEFAULT NULL,
  `SoLuocXem` int(11) DEFAULT NULL,
  `MoTa` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT 0,
  `MaLoaiSanPham` int(11) NOT NULL,
  `MaHangSanXuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `HinhURL`, `MaXuatXu`, `GiaSanPham`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `SoLuocXem`, `MoTa`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`) VALUES
(4, 'Samsung EG920B', 'TN_Samsung_2.jpg', '3', 280000, '2020-08-25 00:00:00', 14, 9, 30, 'Tương thích:	Android/Windows/Windows Phone   ', 0, 4, 2),
(5, 'Samsung MG900E', 'TN_Samsung_1.jpg', '3', 850000, '2020-05-01 00:00:00', 14, 6, 4, 'Tương thích:	AndroidWindowsiOS (iPhone, iPad)Windows Phone\r\nThời gian sử dụng:	9 giờ ', 0, 4, 2),
(7, 'AirPods 2', 'TN_Apple_2.jpg', '2', 4900000, '2020-09-12 00:00:00', 25, 2, 12, 'Tương thích:	AndroidiOS (iPhone, iPad)\r\nThời gian sử dụng:	3 giờ', 0, 4, 1),
(8, 'AirPods Pro', 'TN_Apple_1.jpg', '2', 7900000, '2020-07-03 00:00:00', 30, 1, 8, 'Tương thích:	MacOS (Macbook, iMac)iOS (iPhone, iPad)\r\nThời gian sử dụng:	4.5 giờ nghe nhạc, 3.5 giờ đàm thoại     ', 0, 4, 1),
(9, 'Lenovo Tab 4', 'TB_Lenovo_2.png', '1', 3090000, '2020-01-01 00:00:00', 24, 6, 14, 'Hệ điều hành	Android 7.0\r\nRAM	2 GB\r\nBộ nhớ trong	16 GB ', 0, 3, 4),
(10, 'Lenovo Tab E10', 'TB_Lenovo_1.png', '1', 3590000, '2020-08-15 00:00:00', 28, 7, 8, 'Hệ điều hành	Android 8.0\r\nRAM	2 GB\r\nBộ nhớ trong	16 GB ', 0, 3, 4),
(11, 'Huawei Mediapad T5', 'TB_Huawei_2.png', '1', 5390000, '2020-09-01 00:00:00', 38, 3, 41, 'Hệ điều hành	Android 8.0\r\nRAM	3 GB\r\nBộ nhớ trong	32 GB ', 0, 3, 3),
(12, 'Huawei MediaPad M5 Lite', 'TB_Huawei_1.png', '1', 7600000, '2020-10-02 00:00:00', 20, 0, 0, 'Hệ điều hành	Android 8.0\r\nRAM	4 GB\r\nBộ nhớ trong	64 GB\r\n  ', 0, 3, 3),
(13, 'Samsung Galaxy Tab A', 'TB_Samsung_2.png', '3', 9200000, '2020-10-04 00:00:00', 10, 2, 14, 'Hệ điều hành	Android 8.0\r\nRAM	3 GB\r\nBộ nhớ trong	32 GB ', 0, 3, 2),
(14, 'Samsung Galaxy Tab S6', 'TB_Samsung_1.png', '3', 18490000, '2020-09-25 00:00:00', 40, 5, 1, 'Hệ điều hành	Android 9.0 (Pie)\r\nRAM	6 GB\r\nBộ nhớ trong	128 GB ', 0, 3, 2),
(15, 'iPad Pro 11', 'TB_Apple_1.png', '2', 19900000, '2020-08-27 00:00:00', 19, 3, 3, 'Hệ điều hành	iOS 12\r\nRAM	4 GB\r\nBộ nhớ trong	64 GB', 0, 3, 1),
(16, 'Acer Swift 1 ', 'LT_Acer_2.jpg', '4', 10900000, '2020-07-13 00:00:00', 50, 3, 5, 'CPU:	Intel Pentium, N5000, 1.10 GHz\r\nRAM:	4 GB, DDR4 (1 khe), 2133 MHz\r\nỔ cứng:	eMMC: 64 GB,\r\nHệ điều hành:	Windows 10 Home SL ', 0, 2, 6),
(17, 'Acer Aspire 3 A315', 'LT_Acer_1.jpg', '4', 9900000, '2020-09-15 00:00:00', 60, 3, 2, 'CPU:	AMD Ryzen 3, 3200U, 2.60 GHz\r\nRAM:	4 GB, DDR4 (2 khe), 2133 MHz\r\nỔ cứng:	SSD 256GB\r\nHệ điều hành:	Windows 10 Home SL ', 0, 2, 6),
(18, 'Lenovo Yoga 520 14IKB', 'LT_Lenovo_2.jpg', '4', 11390000, '2020-09-14 00:00:00', 30, 5, 22, 'CPU:	Intel Core i3 Kabylake, 7130U, 2.70 GHz\r\nRAM:	4 GB, DDR4 (1 khe), 2133 MHz\r\nỔ cứng:	HDD: 500 GB\r\nHệ điều hành:	Windows 10 Home SL ', 0, 2, 4),
(19, 'Lenovo IdeaPad S145 15IKB', 'LT_Lenovo_1.jpg', '1', 8990000, '2020-06-12 00:00:00', 19, 13, 24, 'CPU:	Intel Core i3 Kabylake Refresh, 7020U, 2.30 GHz\r\nRAM:	4 GB, DDR4 (On board +1 khe), 2133 MHz\r\nỔ cứng:	SSD 256GB\r\nHệ điều hành:	Windows 10 Home SL ', 0, 2, 4),
(20, 'Asus ZenBook 13', 'LT_Asus_3.jpg', '4', 21490000, '2020-07-12 00:00:00', 20, 12, 13, 'CPU:	Intel Core i5 Coffee Lake, 8265U, 1.60 GHz\r\nRAM:	8 GB, DDR3L(On board), 2133 MHz\r\nỔ cứng:	SSD 256GB\r\nHệ điều hành:	Windows 10 Home SL ', 0, 2, 5),
(21, 'Asus VivoBook Pro ', 'LT_Asus_2.jpg', '4', 19290000, '2020-08-17 00:00:00', 35, 12, 12, 'CPU:	Intel Core i5 Coffee Lake, 8300H, 2.30 GHz\r\nRAM:	8 GB, DDR4 (On board +1 khe), 2400 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe, \r\nHệ điều hành:	Windows 10 Home SL  ', 0, 2, 5),
(22, 'Asus VivoBook 14', 'LT_Asus_1.jpg', '4', 9900000, '2020-10-05 00:00:00', 24, 20, 30, 'CPU:	Intel Core i3 Kabylake Refresh, 7020U, 2.30 GHz\r\nRAM:	4 GB, DDR4 (2 khe), 2400 MHz\r\nỔ cứng:	HDD: 1 TB SATA3\r\nHệ điều hành:	Windows 10 Home SL  ', 0, 2, 5),
(23, 'Apple Macbook Air 2020', 'LT_Apple_2.jpg', '2', 27990000, '2020-10-07 00:00:00', 30, 2, 24, 'CPU:	Intel Core i5 Coffee Lake, 1.60 GHz\r\nRAM:	8 GB, \r\nỔ cứng:	SSD: 128 GB\r\nHệ điều hành:	Mac OS', 0, 2, 1),
(24, ' Apple Macbook Pro Touch 2020', 'LT_Apple_1.jpg', '2', 33990000, '2020-10-08 00:00:00', 39, 23, 10, 'CPU:	Intel Core i5 Coffee Lake, 1.40 GHz,\r\nRAM:	8 GB, \r\nỔ cứng:	SSD: 128 GB,\r\nHệ điều hành:	Mac OS ', 0, 2, 1),
(25, 'Lenovo K11', 'DT_Lenovo_1.jpg', '1', 4200000, '2020-09-07 00:00:00', 38, 2, 4, 'Hệ điều hành:	Android 9.0 (Pie)\r\nRAM:	4 GB\r\nBộ nhớ trong:	32 GB ', 0, 1, 4),
(26, 'ASUS Zenfone Max Pro M2', 'DT_Asus_2.png', '4', 16050000, '2020-10-07 00:00:00', 20, 12, 31, 'Hệ điều hành:	Android 8.1 (Oreo)\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB  ', 0, 1, 5),
(27, 'ASUS ROG Phone 2', 'DT_Asus_1.png', '4', 22300000, '2020-10-02 00:00:00', 20, 12, 3, 'Hệ điều hành:	Android 9.0 (Pie)\r\nRAM:	12 GB\r\nBộ nhớ trong:	256 GB  ', 0, 1, 5),
(28, 'Huawei Nova 3i', 'DT_Huawei_2.png', '1', 5390000, '2020-10-01 00:00:00', 10, 1, 2, 'Hệ điều hành:	Android 8.1 (Oreo)\r\nRAM:	4 GB\r\nBộ nhớ trong:	128 GB ', 0, 1, 3),
(29, 'Huawei P30 Lite', 'DT_Huawei_1.png', '1', 6020000, '2020-09-30 00:00:00', 10, 3, 2, 'Hệ điều hành:	Android 9.0 (Pie)\r\nRAM:	6 GB\r\nBộ nhớ trong:	128 GB ', 0, 1, 3),
(30, 'Samsung Galaxy S10+', 'DT_Samsung_2.png', '3', 22990000, '2020-10-01 00:00:00', 15, 2, 1, 'Hệ điều hành:	Android 9.0 (Pie)\r\nRAM:	8 GB\r\nBộ nhớ trong:	512 GB ', 0, 1, 2),
(31, 'Samsung Galaxy Fold', 'DT_Samsung_1.png', '3', 50000000, '2020-10-05 00:00:00', 20, 6, 5, 'Hệ điều hành:	Android 9.0 (Pie)\r\nRAM:	12 GB\r\nBộ nhớ trong:	512 GB ', 0, 1, 2),
(32, 'IPhone XS Max', 'DT_Apple_2.png', '2', 28990000, '2020-10-06 00:00:00', 30, 9, 0, 'Hệ điều hành:	iOS 12\r\nRAM:	4 GB\r\nBộ nhớ trong:	256 GB', 0, 1, 1),
(33, 'IPhone 11 Pro Max ', 'DT_Apple_1.jpg', '2', 43990000, '2020-10-06 00:00:00', 110, 5, 17, 'Hệ điều hành:iOS 13\r\nRAM:4 GB\r\nBộ nhớ trong:512 GB  ', 0, 1, 1),
(34, 'Apple Watch S3 GPS', 'SW_Apple_1.png', '2', 5490000, '2020-10-07 00:00:00', 50, 2, NULL, 'Thời gian sử dụng pin:	Khoảng 18 giờ\r\nHệ điều hành:	iOS 13 trở lên  ', 0, 5, 1),
(35, 'Apple Watch S5 LTE', 'SW_Apple_2.jpg', '2', 22990000, '2020-10-07 00:00:00', 32, 3, NULL, 'Thời gian sử dụng pin:	Khoảng 18 giờ\r\nHệ điều hành:	iOS 13 trở lên ', 0, 5, 1),
(36, 'Huawei Band 3e', 'SW_Huawei_1.jpg', '1', 590000, '2020-10-01 00:00:00', 32, 1, 1, 'Thời gian sử dụng pin:	Khoảng 14 ngày\r\nKết nối được với hệ điều hành:   ', 0, 5, 3),
(37, 'Huawei Watch GT2 ', 'SW_Huawei_2.jpg', '1', 4490000, '0000-00-00 00:00:00', 50, 1, NULL, 'Thời gian sử dụng pin:	Khoảng 30 giờ khi sử dụng GPS, Khoảng 14 ngày\r\nHệ điều hành:	Android 4.4 trở lên, iOS 9 trở lên   ', 0, 5, 3),
(38, 'Samsung Galaxy Watch Active R500', 'SW_Samsung_1.jpg', '3', 5210000, '2020-10-06 00:00:00', 10, 1, 5, 'Thời gian sử dụng pin:	Khoảng 5 ngày\r\nHệ điều hành:	Android 5.0, iOS 10 trở lên   ', 0, 5, 2),
(39, 'Samsung Gear Fit2 Pro', 'SW_Samsung_2.png', '3', 3600000, '2020-10-05 00:00:00', 30, 1, NULL, 'Thời gian sử dụng pin:	Khoảng 4 ngày\r\nKết nối được với hệ điều hành:	Android, iOS            ', 0, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `TenDangNhap` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenHienThi` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DienThoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT 0,
  `MaLoaiTaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDangNhap`, `MatKhau`, `TenHienThi`, `DiaChi`, `DienThoai`, `Email`, `BiXoa`, `MaLoaiTaiKhoan`) VALUES
(1, 'pdv', '123', 'Đình Văn', '227 - Nguyễn Văn Cừ - Q.5', '01234567890', 'pdvan@gmail.com', 0, 1),
(5, 'admin', 'admin', 'Admin website', 'Mobi Shop', '0909123456', 'admin@mobishop.vn', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `MaTinhTrang` int(11) NOT NULL,
  `TenTinhTrang` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`MaTinhTrang`, `TenTinhTrang`) VALUES
(1, 'Đặt hàng'),
(2, 'Đang giao hàng'),
(3, 'Thanh toán'),
(4, 'Hủy');

-- --------------------------------------------------------

--
-- Table structure for table `xuatxu`
--

CREATE TABLE `xuatxu` (
  `MaXuatXu` int(11) NOT NULL,
  `TenXuatXu` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `xuatxu`
--

INSERT INTO `xuatxu` (`MaXuatXu`, `TenXuatXu`) VALUES
(1, 'Trung Quốc'),
(2, 'Mỹ'),
(3, 'Hàn Quốc'),
(4, 'Đài loan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD PRIMARY KEY (`MaChiTietDonDatHang`),
  ADD KEY `fk_ChiTietDonDatHang_DonDatHang1_idx` (`MaDonDatHang`),
  ADD KEY `fk_ChiTietDonDatHang_SanPham1_idx` (`MaSanPham`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaDonDatHang`),
  ADD KEY `fk_DonDatHang_TaiKhoan1_idx` (`MaTaiKhoan`),
  ADD KEY `fk_DonDatHang_TinhTrang1_idx` (`MaTinhTrang`);

--
-- Indexes for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`MaHangSanXuat`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoaiSanPham`);

--
-- Indexes for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`MaLoaiTaiKhoan`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `fk_SanPham_LoaiSanPham1_idx` (`MaLoaiSanPham`),
  ADD KEY `fk_SanPham_HangSanXuat1_idx` (`MaHangSanXuat`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD KEY `fk_TaiKhoan_LoaiTaiKhoan_idx` (`MaLoaiTaiKhoan`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`MaTinhTrang`);

--
-- Indexes for table `xuatxu`
--
ALTER TABLE `xuatxu`
  ADD PRIMARY KEY (`MaXuatXu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  MODIFY `MaHangSanXuat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoaiSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `MaLoaiTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `MaTinhTrang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `xuatxu`
--
ALTER TABLE `xuatxu`
  MODIFY `MaXuatXu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `fk_ChiTietDonDatHang_DonDatHang1` FOREIGN KEY (`MaDonDatHang`) REFERENCES `dondathang` (`MaDonDatHang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ChiTietDonDatHang_SanPham1` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `fk_DonDatHang_TaiKhoan1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DonDatHang_TinhTrang1` FOREIGN KEY (`MaTinhTrang`) REFERENCES `tinhtrang` (`MaTinhTrang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_SanPham_HangSanXuat1` FOREIGN KEY (`MaHangSanXuat`) REFERENCES `hangsanxuat` (`MaHangSanXuat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SanPham_LoaiSanPham1` FOREIGN KEY (`MaLoaiSanPham`) REFERENCES `loaisanpham` (`MaLoaiSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_TaiKhoan_LoaiTaiKhoan` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`MaLoaiTaiKhoan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
