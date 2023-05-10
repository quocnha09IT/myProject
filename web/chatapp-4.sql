-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 04:55 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `dangtin`
--

CREATE TABLE `dangtin` (
  `id` int(5) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `khuvuc` varchar(30) NOT NULL,
  `diachi` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tieude` varchar(20) NOT NULL,
  `kieuchothue` varchar(20) NOT NULL,
  `dientich` varchar(10) NOT NULL,
  `gia` varchar(20) NOT NULL,
  `hinhanh` varchar(20) NOT NULL,
  `chitiet` varchar(20) NOT NULL,
  `create_datetime` varchar(20) NOT NULL,
  `dienthoai` varchar(12) NOT NULL,
  `show` varchar(10) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `id_news` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dangtin`
--

INSERT INTO `dangtin` (`id`, `hoten`, `khuvuc`, `diachi`, `email`, `tieude`, `kieuchothue`, `dientich`, `gia`, `hinhanh`, `chitiet`, `create_datetime`, `dienthoai`, `show`, `unique_id`, `id_news`) VALUES
(1, 'Quốc Nhã', 'Đà Nẵng', '165 Tôn Thất Tình', 'quocnha09@gmail.com', 'Cần bạn nữ ở chụng', 'nhà cho thuê', '300m2', '1.500.000 ', 'tro10.jpg', 'nhà này đủ ở 2 người', '2021-11-04 15:02:39', '090129312', '1', '707078264', '267134'),
(3, 'Văn Phong', 'Đà Nẵng', '123 Ngũ Hành Sơn', 'phong@gmail.com', 'Cần bạn nam ở chung', 'nhà nguyên căn', '500m2', '2.000.000 / tháng', 'tro1.jpg', 'trọ này đầy đủ tiện ', '0000-00-00 00:00:00', '0901298312', '1', '707078264', '5123123'),
(11, 'nhung', 'Quảng Nam', '135 huy nhật', 'nhung@gmail.com', 'Tìm 3 bạn nữ ở chung', 'nhà nguyên căn', '500m2', '3000000', 'tro9.jpg', 'trọ này đầy đủ tiện ', '1/12/2019', '0901298312', '1', '707078264', '131241');

-- --------------------------------------------------------

--
-- Table structure for table `detail_motel`
--

CREATE TABLE `detail_motel` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `paradigm` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `S` varchar(20) NOT NULL,
  `empty_room` varchar(10) NOT NULL,
  `conven` varchar(100) NOT NULL,
  `id_motel` int(11) NOT NULL,
  `khuvuc` varchar(30) NOT NULL,
  `img` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_motel`
--

INSERT INTO `detail_motel` (`id`, `address`, `paradigm`, `price`, `S`, `empty_room`, `conven`, `id_motel`, `khuvuc`, `img`, `name`, `type`, `lat`, `lng`) VALUES
(1, ' 131 Liên Chiểu, Đà nẵng ', 'nhà cho thuê', 2100000, '500m2', '7', 'Gần trường đại học Kinh Tế ', 3, 'Đà Nẵng', 'tro2.jpg', 'Hồng Lạc', 'college', 16.060860, 108.218529),
(2, '151 Phạm Ngũ lão', 'Nhà nguyên căn', 1400000, '400m2', '3', 'Sạch sẽ thoáng mát , gần trường Đại Học Duy Tân', 2313, 'Đà Nẵng', 'tro3.jpg', 'Huy Long', 'college', 16.066631, 108.212593),
(4, '147 Phan Ngũ Lão Ngũ Hành Sơn', 'phòng trọ', 4000000, '500m2', '8', 'Trung tâm thành phố Đà Nẵng', 41231, 'Đà Nẵng', 'tro6.jpg', 'nike', '', 16.048254, 108.213852);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1597754937, 1498868375, 'lô '),
(2, 1498868375, 1597754937, 'chi m '),
(3, 1498868375, 1597754937, 'dmm'),
(4, 1597754937, 1498868375, 'muốn gây hử'),
(5, 1597754937, 1498868375, 'quánh chet me ');

-- --------------------------------------------------------

--
-- Table structure for table `motel`
--

CREATE TABLE `motel` (
  `id_motel` int(11) NOT NULL,
  `name_motel` varchar(30) NOT NULL,
  `img` varchar(13) NOT NULL,
  `khuvuc` varchar(20) NOT NULL,
  `kieuchothue` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motel`
--

INSERT INTO `motel` (`id_motel`, `name_motel`, `img`, `khuvuc`, `kieuchothue`) VALUES
(3, 'Vương công', 'tro1.jpg', 'Đà Nẵng', 'nhà cho thuê');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `id_per` varchar(20) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `id_per`, `question`, `reply`) VALUES
(5, '699451499', 'trọ ở đây có đẹp như hình không ạ????', 'dạ đẹp như hình ạ'),
(6, '699451499', 'trọ ở đây có đẹp như hình không ạ????', '');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `unique_id` varchar(30) NOT NULL,
  `id_motel` varchar(40) NOT NULL,
  `show` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `name`, `rating`, `comment`, `unique_id`, `id_motel`, `show`) VALUES
(3, 'Kier', '', 'gheee', '707078264', '3', '1'),
(4, 'Kier', '4.6', 'quas du ban oi', '707078264', '2313', '1');

-- --------------------------------------------------------

--
-- Table structure for table `registration_room`
--

CREATE TABLE `registration_room` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `quoctich` varchar(30) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `dienthoai` varchar(12) NOT NULL,
  `cancuoc` varchar(20) NOT NULL,
  `nghenghiep` varchar(40) NOT NULL,
  `ngaydk` varchar(30) NOT NULL,
  `ngaynhan` varchar(30) NOT NULL,
  `tenTKKH` varchar(40) NOT NULL,
  `tenNH` varchar(40) NOT NULL,
  `ma` varchar(40) NOT NULL,
  `STK` varchar(50) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `id_motel` varchar(20) NOT NULL,
  `show` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_room`
--

INSERT INTO `registration_room` (`id`, `fname`, `lname`, `email`, `quoctich`, `diachi`, `dienthoai`, `cancuoc`, `nghenghiep`, `ngaydk`, `ngaynhan`, `tenTKKH`, `tenNH`, `ma`, `STK`, `unique_id`, `id_motel`, `show`) VALUES
(1, 'Long', 'Phan', 'phong@gmail.com', 'Việt Nam', '123 Ngũ Hành Sơn', '09123412', '412315123', 'Sinh viên', '2021-12-03', '2021-12-18', 'PHAN LONG', 'Agribank', '123141', '9312124123312', '', '', '0'),
(2, 'Long', 'Phan', 'phong@gmail.com', 'Việt Nam', '123 Ngũ Hành Sơn', '09123412', '412315123', 'Sinh viên', '2021-12-03', '2021-12-18', 'PHAN LONG', 'Agribank', '123141', '9312124123312', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `rep` varchar(255) NOT NULL,
  `id_comment` varchar(40) NOT NULL,
  `id_reper` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `rep`, `id_comment`, `id_reper`) VALUES
(1, 'có chi đâu ghê bạn ơi', '3', '699451499'),
(2, 'hey man', '3', '707078264'),
(3, 'hey gì bro', '3', '699451499'),
(4, 'hey man', '3', '707078264');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `name` varchar(30) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `zalo` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`name`, `fb`, `zalo`, `description`, `email`, `img`, `id`) VALUES
('Vương Công Hoàng', 'https://www.facebook.com/profile.php?id=100004145987072', '', 'năng động , hòa đồng , nhiệt tình ....', 'vuongconghoang2406@gmail.com', 'team1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `col` int(4) NOT NULL,
  `birth_day` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `ID_card` varchar(16) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `col`, `birth_day`, `address`, `ID_card`, `phone`, `sex`) VALUES
(10, 707078264, 'Huy', 'Kier', 'k@gmail.com', '202cb962ac59075b964b07152d234b70', 'ava5.jpg', 'Active now', 0, '21/3/2001', '', '', '', ''),
(11, 41231412, 'ad', 'admin', 'admin@gmail.com', '123', 'ava1.jpg', 'online', 1, '', '', '', '', ''),
(12, 797336360, 'Long ', 'Phan', 'phan@gmail.com', '202cb962ac59075b964b07152d234b70', '1638553413ava2.jpg', 'Active now', 0, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dangtin`
--
ALTER TABLE `dangtin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_motel`
--
ALTER TABLE `detail_motel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `motel`
--
ALTER TABLE `motel`
  ADD PRIMARY KEY (`id_motel`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_room`
--
ALTER TABLE `registration_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangtin`
--
ALTER TABLE `dangtin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `detail_motel`
--
ALTER TABLE `detail_motel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `motel`
--
ALTER TABLE `motel`
  MODIFY `id_motel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration_room`
--
ALTER TABLE `registration_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
