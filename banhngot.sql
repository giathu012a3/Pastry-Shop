-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2024 at 09:38 AM
-- Server version: 8.0.35
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhngot`
--

-- --------------------------------------------------------

--
-- Table structure for table `banhngot`
--

CREATE TABLE `banhngot` (
  `mabanh` int NOT NULL,
  `TENBANH` varchar(45) DEFAULT NULL,
  `mota` varchar(10000) DEFAULT NULL,
  `NGAYLAP` date DEFAULT NULL,
  `SOLUOTXEM` int DEFAULT NULL,
  `TinhTrang` int NOT NULL,
  `check` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `banhngot`
--

INSERT INTO `banhngot` (`mabanh`, `TENBANH`, `mota`, `NGAYLAP`, `SOLUOTXEM`, `TinhTrang`, `check`) VALUES
(1, 'Hawaii mousse', 'Hawaii mousse là loại bánh 4 lớp, được mệnh danh là hương vị của mùa hè. Khi thưởng thức, món bánh này sẽ mang đến những điều thú vị qua từng lớp bánh.', '2023-12-19', 20, 0, 0),
(2, 'Bánh Croissant', 'Croissant, hay còn được gọi là bánh sừng bò là một loại bánh mì nổi tiếng của Pháp. Đây là loại bánh mì đặc biệt với vô số lớp bột mì mỏng cuộn với nhau. Mùi bơ thơm lừng được ẩn hiện giữa các lớp bột mì khiến cho món bánh trở nên thơm ngon đặc biệt. Cùng Nguyễn Sơn Bakery tìm hiểu hương vị của món bánh này qua bài viết dưới đây.\nĐặc điểm của bánh Croissant\nBánh sừng bò là một món ăn sáng rất mộc mạc tại Pháp được làm từ lớp bột xốp tạo bởi bột mì, men, bơ, sữa và muối. Bánh có kết cấu đơn giản, không có nhân, nhưng chính sự rỗng xốp đó lại chứng tỏ chất lượng men đạt đến độ hoàn hảo.\nMột chiếc bánh Croissant ngon chính là sau khi nướng bánh có độ phân lớp một cách rõ rệt, ruột bánh không bị bết, không đặc dính mà phải nở bung xốp, nếu phần ruột có các lỗ khí như tổ ong thì chứng tỏ thành phẩm vô cùng hoàn hảo.\nHương vị của bánh Croissan Bánh sừng bò có hương vị thơm nhẹ của bơ sữa, cùng với sự mềm mại của lớp ruột bánh, vỏ bên ngoài là màu vàng ươm và thơm mùi bơ sau khi nướng.\nNgoài ra, bánh Croissant Pháp còn được thêm nhân chocolate, mứt, nho khô hoặc kem bơ mềm óng.\nTại sao nên mua bánh Croissant tại Nguyễn Sơn Bakery? \nCung cấp đa dạng các loại bánh khác nhau để khách hàng có sự phong phú hơn trong việc lựa chọn.\nNguyễn Sơn Bakery còn nhân các mẫu bánh theo yêu cầu của khách hàng với hương vị chuẩn chất lượng.\nGiá thành sản phẩm hợp lý, cạnh tranh trên thị trường.', '2023-12-19', 3, 0, 0),
(3, 'Petit Fours Set Mix', NULL, '2023-12-19', 25, 0, 0),
(4, 'Choux Cream', NULL, '2023-12-19', 78, 0, 0),
(5, 'Tiramisu Cake Piece', NULL, '2023-12-19', 11, 0, 0),
(6, 'Bánh ốc quế kem', NULL, '2023-12-19', 0, 0, 0),
(7, 'Red velvet cake', NULL, '2023-12-19', 34, 0, 0),
(8, 'Tropical Forest cake', NULL, '2023-12-19', 16, 0, 0),
(9, 'Passion fruit & chocolate cake', NULL, '2023-12-19', 34, 0, 0),
(10, 'Tiramisu cake', NULL, '2023-12-19', 17, 0, 0),
(11, 'Black Forest cake', NULL, '2023-12-19', 0, 0, 0),
(12, 'Seasonal Fruit cake', NULL, '2023-12-19', 10, 0, 0),
(13, 'Socola Cake', NULL, '2023-12-28', 7, 0, 0),
(14, 'Vani Cake', NULL, '2023-12-28', 25, 0, 0),
(15, 'Bánh Cake dâu', NULL, '2023-12-28', 16, 0, 0),
(16, 'Hazenut Chocolate Cake', NULL, '2023-12-28', 78, 0, 0),
(17, 'Hazenut Chocolate Cake', NULL, '2023-12-28', 45, 0, 0),
(18, 'Bánh dừa sữa chua', NULL, '2023-12-28', 12, 0, 0),
(19, 'Layer latte cake', NULL, '2023-12-28', 25, 0, 0),
(20, 'Snow chocolate', 'Bánh Tiramisu có nguồn gốc đến từ nước Ý thơ mộng. Khi bạn thưởng thức bánh sẽ cảm nhận được vị mềm nhẹ, hòa cùng với mùi cà phê cacao thơm nức mũi, và điểm đặc biệt của chiếc bánh chính là lớp kem béo ngậy nhưng không hề ngán. Cùng Nguyễn Sơn Bakery tìm hiểu về những lưu ý trong cách làm cũng như hương vị của chiếc bánh đặc biệt này thông qua bài viết dưới đây.\n\nĐặc điểm của bánh Tiramisu cake piece\nNguyên liệu cần chuẩn bị làm hỗn hợp kem Tiramisu bao gồm: kem tươi, sữa tươi không đường, rượu rum, phô mai, lòng đỏ trứng lớn.\n\nPhần cốt bánh được làm bằng bánh Sampa vẫn giữ được độ mềm mại sau khi đã hoàn thành xong thành phẩm.\n\nBạn nên thưởng thức bánh trong ngày để giữ được vị ngon hoặc có thể bảo quản trong ngăn mát tủ lạnh từ 2-3 ngày.\n\nHương vị của bánh Tiramisu cake piece\nBánh Tiramisu cake piece có hương vị ngọt nhẹ của phần rượu Rum, hòa quyện cùng với đó là vị béo của phần kem và chút đắng nhẹ của thành phần cà phê tạo nên sự hòa quyện thơm ngon khó cưỡng.\n\nĐây là món bánh vô cùng thích hợp khi thưởng thức trong các buổi trà chiều hoặc sử dụng làm món tráng miệng.\n\nTại sao nên mua bánh Tiramisu cake tại Nguyễn Sơn Bakery?\nCung cấp đa dạng các mẫu bánh khác nhau để khách hàng có thêm sự lựa chọn phong phú khi thưởng thức hoặc dành cho các bữa tiệc.\n\nGiá thành các mẫu bánh dao động trong phân khúc hợp lý, phù hợp trên thị trường với chất lượng đạt đến độ hoàn hảo nhất định.', '2023-12-28', 16, 0, 0),
(21, 'Coco-Choco cake', NULL, '2023-12-28', 58, 0, 0),
(22, 'Bánh Sữa chua Phoma', '', '2023-12-01', 19, 0, 0),
(23, 'Bánh Phúc bồn tử & Sữa chua', NULL, '2023-12-28', 11, 0, 0),
(24, 'AMERICAN CHEESE cake', NULL, '2023-12-28', 0, 0, 0),
(25, 'Double Cheese Cake', NULL, '2023-12-28', 35, 0, 0),
(26, 'Mango cheese cake', NULL, '2023-12-28', 46, 0, 0),
(27, 'Chocolate & Strawberry charlotte', NULL, '2023-12-28', 17, 0, 0),
(28, 'Bánh hamburger 3pcs', NULL, '2023-12-29', 87, 0, 0),
(29, 'Bánh mì Hàn Quốc chocolate', NULL, '2023-12-29', 25, 0, 0),
(30, 'Bánh mì Hàn Quốc mè đen', NULL, '2023-12-29', 34, 0, 0),
(31, 'Bánh mỳ baguette', NULL, '2023-12-29', 1, 0, 0),
(32, 'Bánh mỳ Brioche', NULL, '2023-12-29', 3, 0, 0),
(33, 'Bánh mỳ đen', NULL, '2023-12-29', 24, 0, 0),
(34, 'Bánh mỳ gối', NULL, '2023-12-29', 15, 0, 0),
(35, 'Bánh mỳ gối đen', NULL, '2023-12-29', 16, 0, 0),
(36, 'Bánh mỳ gối men tự nhiên', NULL, '2023-12-29', 23, 0, 0),
(37, 'Bánh mỳ gối tinh chất than tre', NULL, '2023-12-29', 16, 1, 0),
(38, 'Bánh mỳ hoa cúc đậu đỏ', NULL, '2023-12-29', 17, 0, 0),
(39, 'Bánh mỳ hoa cúc lá dứa', NULL, '2023-12-29', 25, 0, 0),
(45, 'Banh baooo', 'das', '2024-02-29', 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `mabinhluan` int NOT NULL,
  `makh` int NOT NULL,
  `mabanh` int NOT NULL,
  `noidung` varchar(400) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `luotthich` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`mabinhluan`, `makh`, `mabanh`, `noidung`, `luotthich`) VALUES
(1, 2, 38, '  dep', 0),
(2, 8, 33, '  ngon quá', 0),
(3, 8, 36, '  ngon', 0),
(4, 8, 36, '  hơi lạc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MAHD` int NOT NULL,
  `MABANH` int NOT NULL,
  `SOLUONG` int NOT NULL,
  `THANHTIEN` int NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `TINHTRANG` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MAHD`, `MABANH`, `SOLUONG`, `THANHTIEN`, `size`, `TINHTRANG`) VALUES
(25, 34, 1, 26000, '6', 0),
(25, 38, 1, 16500, '0', 0),
(26, 34, 1, 26000, '6', 0),
(26, 38, 1, 16500, '0', 0),
(28, 34, 1, 26000, '6', 0),
(28, 38, 1, 16500, '0', 0),
(30, 34, 1, 26000, '6', 0),
(30, 38, 1, 16500, '0', 0),
(32, 34, 1, 26000, '6', 0),
(32, 38, 1, 16500, '0', 0),
(34, 34, 1, 26000, '6', 0),
(34, 38, 1, 16500, '0', 0),
(35, 34, 1, 26000, '6', 0),
(35, 38, 1, 16500, '0', 0),
(38, 38, 1, 16500, '0', 0),
(39, 38, 3, 49500, '0', 0),
(40, 29, 1, 32000, '0', 0),
(40, 33, 5, 75000, '0', 0),
(40, 34, 2, 52000, '5', 0),
(40, 34, 1, 26000, '6', 0),
(40, 37, 1, 34000, '0', 0),
(41, 37, 1, 34000, '0', 0),
(42, 34, 2, 52000, '6', 0),
(43, 34, 1, 26000, '5', 0),
(44, 34, 1, 26000, '5', 0),
(45, 34, 1, 26000, '5', 0),
(46, 34, 2, 52000, '0', 0),
(47, 34, 2, 52000, '5', 0),
(48, 34, 2, 52000, '5', 0),
(49, 34, 22, 572000, '5', 0),
(49, 34, 23, 598000, '6', 0),
(50, 27, 1, 275000, '1', 0),
(50, 27, 1, 275000, '2', 0),
(50, 34, 1, 26000, '6', 0),
(50, 38, 2, 33000, '0', 0),
(51, 37, 1, 34000, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ctbanhngot`
--

CREATE TABLE `ctbanhngot` (
  `MABANH` int NOT NULL,
  `GIA` int NOT NULL,
  `HINHANH` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `MALOAI` int NOT NULL,
  `MASIZEBANH` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ctbanhngot`
--

INSERT INTO `ctbanhngot` (`MABANH`, `GIA`, `HINHANH`, `MALOAI`, `MASIZEBANH`) VALUES
(22, 320000, '22.jpg', 1, 2),
(23, 300000, '23.jpg', 1, 0),
(24, 350000, '24.jpg', 1, 3),
(24, 350000, '24.jpg', 1, 4),
(25, 325000, '25.jpg', 1, 1),
(25, 325000, '25.jpg', 1, 2),
(26, 275000, '26.jpg', 1, 1),
(26, 500000, '26.jpg', 1, 2),
(27, 275000, '27.jpg', 1, 1),
(27, 540000, '27.jpg', 1, 2),
(28, 15000, '28.jpg', 2, 0),
(29, 32000, '29.jpg', 2, 0),
(30, 30000, '30.jpg', 2, 0),
(31, 14000, '31.jpg', 2, 0),
(32, 55000, '32.jpg', 2, 0),
(33, 15000, '33.jpg', 2, 0),
(34, 26000, '34.jpg', 2, 5),
(34, 20000, '34.jpg', 2, 6),
(35, 28000, '35.jpg', 2, 0),
(35, 30000, 'Screenshot 2023-08-25 002037.png', 4, 3),
(36, 28000, '36.jpg', 2, 0),
(37, 34000, '37.jpg', 2, 0),
(38, 16500, '38.jpg', 2, 0),
(45, 50000, 'Screenshot 2023-08-25 002037.png', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MAHD` int NOT NULL,
  `NGAYDAT` date NOT NULL,
  `TONGTIEN` int NOT NULL,
  `MAKH` int DEFAULT NULL,
  `tthd` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MAHD`, `NGAYDAT`, `TONGTIEN`, `MAKH`, `tthd`) VALUES
(25, '2024-02-20', 42500, 2, 2),
(26, '2024-02-20', 42500, 2, 1),
(28, '2024-02-20', 42500, 2, 1),
(30, '2024-02-20', 42500, 2, 1),
(32, '2024-02-20', 42500, 2, 1),
(34, '2024-02-20', 42500, 2, 1),
(35, '2024-02-20', 42500, 2, 1),
(38, '2024-02-21', 16500, 2, 1),
(39, '2024-02-21', 49500, 2, 1),
(40, '2024-02-21', 219000, 2, 1),
(41, '2024-02-21', 34000, 2, 1),
(42, '2024-02-21', 52000, 2, 1),
(43, '2024-02-21', 26000, 2, 2),
(44, '2024-02-21', 26000, 2, 1),
(45, '2024-02-21', 26000, 2, 1),
(46, '2024-02-21', 52000, 2, 1),
(47, '2024-02-21', 52000, 2, 1),
(48, '2024-02-21', 52000, 2, 1),
(49, '2024-02-21', 1170000, 2, 1),
(50, '2024-02-21', 609000, 2, 1),
(51, '2024-03-24', 34000, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int NOT NULL,
  `TENKH` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `DIACHI` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `SDT` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `username` varchar(45) NOT NULL,
  `PASS` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `TENKH`, `DIACHI`, `SDT`, `EMAIL`, `username`, `PASS`) VALUES
(1, 'abc', '2312', '0326489642', 'nguyengiathu@gmail.com', 'Giathuct7', '2e6d85a4210bc7f196062ac46632b164'),
(2, 'xzcxz', '2321', '0965845931', 'html@gmail.com', 'root', '2e6d85a4210bc7f196062ac46632b164'),
(4, 'nguyen gia thu', '142', '0326489642', 'ndnfnf@gmail.com', 'mstk', '6a527dd4d642624db8ebb5f165df0176'),
(5, 'nguyengia', '213', '0326489642', 'ábdukja@gmail.com', 'giathu012a3', 'aeb647a8e0cacc66206443c8b9e513e4'),
(7, 'ádas', 'ádas', '12312', 'lehuynhduc587@gmail.com', 'edrfg ', 'aeb647a8e0cacc66206443c8b9e513e4'),
(8, 'sadasdà', 'fasf', 'fsaf', 'àdas', 'admin', '6a527dd4d642624db8ebb5f165df0176'),
(9, 'Gia Thụ', '142', '0326489642', 'nguyengiathu24052004@gmail.com', 'giathu012a311', 'c9579d9d714a575f1ac7e3808575fea7');

-- --------------------------------------------------------

--
-- Table structure for table `loaibanh`
--

CREATE TABLE `loaibanh` (
  `MALOAI` int NOT NULL,
  `TENLOAI` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loaibanh`
--

INSERT INTO `loaibanh` (`MALOAI`, `TENLOAI`) VALUES
(1, 'Bánh sinh nhật'),
(2, 'Bánh mì'),
(3, 'Bánh tươi'),
(4, 'Bánh ngọt'),
(5, 'Bánh quy khô'),
(6, 'Chocolate'),
(7, 'Bánh miến nhỏ'),
(8, 'Bánh Trung Thu'),
(9, 'Phụ kiện Sinh nhật'),
(10, 'Bánh truyền Thống'),
(11, 'Bánh mì đông lạnh'),
(12, 'Bánh Giáng Sinh'),
(13, 'xcfdxf');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `dia` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `matkhau` text NOT NULL,
  `roles` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`, `roles`) VALUES
(1, 'nguyễn hạo vy', 'hcm', 'admin', '123456', 2),
(2, 'Nguyen Gia Thu', '142', 'giathu', '123456', 1),
(5, 'jsadna', '142', 'jjgjgj', '123456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `idRoles` int NOT NULL,
  `nameRoles` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idRoles`, `nameRoles`) VALUES
(1, 'Quản lý'),
(2, 'Nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `sizebanh`
--

CREATE TABLE `sizebanh` (
  `MASIZEBANH` int NOT NULL,
  `SIZEBANH` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sizebanh`
--

INSERT INTO `sizebanh` (`MASIZEBANH`, `SIZEBANH`) VALUES
(0, 'Cơ bản'),
(1, '20cm'),
(2, '28cm'),
(3, '16x16cm'),
(4, '12 pax'),
(5, '345g'),
(6, '275g');

-- --------------------------------------------------------

--
-- Table structure for table `ttdonhang`
--

CREATE TABLE `ttdonhang` (
  `idtt` int NOT NULL,
  `tenTrangThai` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ttdonhang`
--

INSERT INTO `ttdonhang` (`idtt`, `tenTrangThai`) VALUES
(1, 'Đang xử lý'),
(2, 'Đang Giao'),
(3, 'Giao thành công');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banhngot`
--
ALTER TABLE `banhngot`
  ADD PRIMARY KEY (`mabanh`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabinhluan`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MAHD`,`MABANH`,`size`);

--
-- Indexes for table `ctbanhngot`
--
ALTER TABLE `ctbanhngot`
  ADD PRIMARY KEY (`MABANH`,`MASIZEBANH`,`MALOAI`),
  ADD KEY `fk_loaibanh` (`MALOAI`),
  ADD KEY `fk_size` (`MASIZEBANH`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MAHD`),
  ADD KEY `fk_khachhang` (`MAKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Indexes for table `loaibanh`
--
ALTER TABLE `loaibanh`
  ADD PRIMARY KEY (`MALOAI`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRoles`);

--
-- Indexes for table `sizebanh`
--
ALTER TABLE `sizebanh`
  ADD PRIMARY KEY (`MASIZEBANH`);

--
-- Indexes for table `ttdonhang`
--
ALTER TABLE `ttdonhang`
  ADD PRIMARY KEY (`idtt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banhngot`
--
ALTER TABLE `banhngot`
  MODIFY `mabanh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabinhluan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MAHD` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MAKH` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `loaibanh`
--
ALTER TABLE `loaibanh`
  MODIFY `MALOAI` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRoles` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ttdonhang`
--
ALTER TABLE `ttdonhang`
  MODIFY `idtt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
