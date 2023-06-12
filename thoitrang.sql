-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 08:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thoitrang`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(30) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `hoten`, `sdt`, `email`, `password`, `role`) VALUES
(67, 'Nguyễn Văn Thắng', 962373175, 'nguyenvanthang.19082001@gmail.com', '123456789', '1'),
(84, 'Nguyễn Văn Thắng', 962373175, 'thang480084@gmail.com', '1908', '1'),
(89, 'Nguyễn Văn Lơi', 123456789, 'Loi480084@gmail.com', '2601', ''),
(90, 'Nguyễn Văn A', 962373175, 'A@gmail.com', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `account_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(100) NOT NULL,
  `created_time` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `account_id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_update`) VALUES
(18, 90, 'nguyenvanthang', 'uuu', 'e', 'e', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(20) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_s` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `n_content` text COLLATE utf8_unicode_ci NOT NULL,
  `d_content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_time` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `image_s`, `title`, `n_content`, `d_content`, `created_time`, `last_update`) VALUES
(5, './img/upload_blog/adi2.jpg', './img/upload_blog2/shoes2.jpg', 'Danh ca Ngọc Sơn thông báo tình trạng hiện tại của Hồ Văn Cường, một câu nói mà dân tình thở phào!', 'Để chống chọi hiệu quả với cái rét ẩm của miền Bắc, bạn nên diện những chiếc áo dày dặn bên trong như len vặn thừng để giữ ấm tuyệt đối cho cơ thể. Cũng nên chọn áo trong có gam màu tương phản với áo parka để trang phục thêm nổi bật hơn trong các mẫu dưới đây của H2T nhé.', 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettin', '2023-06-10', '2023-06-10'),
(6, './img/upload_blog/shoes2.jpg', './img/upload_blog2/shoes9.jpg', 'Berry Special', 'Để chống chọi hiệu quả với cái rét ẩm của miền Bắc, bạn nên diện những chiếc áo dày dặn bên trong như len vặn thừng để giữ ấm tuyệt đối cho cơ thể. Cũng nên chọn áo trong có gam màu tương phản với áo parka để trang phục thêm nổi bật hơn trong các mẫu dưới đây của H2T nhé.', 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettin', '2023-06-10', '2023-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `product_id` int(100) NOT NULL,
  `account_id` int(11) DEFAULT NULL,
  `bill_id` int(11) NOT NULL,
  `mausac` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kichco` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(50) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(50) NOT NULL,
  `blog_id` int(50) NOT NULL,
  `ten_cmt` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `emai_cmt` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_time` date NOT NULL,
  `last_update` date NOT NULL,
  `content_cmt` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `blog_id`, `ten_cmt`, `emai_cmt`, `created_time`, `last_update`, `content_cmt`) VALUES
(20, 2, 'Nguyễn Văn Thắng', 'nguyenvanthang.19082001@gmail.com', '2023-06-10', '2023-06-10', 'Tôi cảm thấy bài viết nhất có ích và hiệu quả'),
(21, 5, 'd', 'nguyenvanthang.19082001@gmail.com', '2023-06-10', '2023-06-10', 's'),
(22, 6, 'Nguyễn Văn Thắng', 'nguyenvanthang.19082001@gmail.com', '2023-06-10', '2023-06-10', 's');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `note`) VALUES
(2, 'dfbdfbfb', 'sdvsdv@gmail.com', 'hgfdgfdvfbv'),
(3, 'gnfgfgn', 'sdvsdv@gmail.com', 'hkhgfhdhgmndbdfdbdfbdfb'),
(4, 'gnfgfgntttttttttt', 'sdvsdv@gmail.com', 'hkhgfhdhgmndbdfdbdfbdfb'),
(5, 'Họ và têncsdcsd', 'sdvsdv@gmail.com', 'sssssssssssssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(20) NOT NULL,
  `product_id` int(30) NOT NULL,
  `path` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `path`) VALUES
(114, 55, './img/upload/nike4.png'),
(139, 1, './img/upload/shirt16.jpg'),
(140, 1, './img/upload/shirt17.jpg'),
(141, 1, './img/upload/shirt18.jpg'),
(142, 1, './img/upload/short8.jpg'),
(208, 105, './img/upload/shirt2.jpg'),
(209, 105, './img/upload/shirt3.jpg'),
(210, 105, './img/upload/shirt4.jpg'),
(211, 105, './img/upload/shirt5.jpg'),
(212, 106, './img/upload/shoes2.jpg'),
(213, 106, './img/upload/shoes8.jpg'),
(214, 106, './img/upload/shoes9.jpg'),
(215, 106, './img/upload/shoes11.jpeg'),
(220, 107, './img/upload/shoes2.jpg'),
(221, 107, './img/upload/shoes8.jpg'),
(222, 107, './img/upload/shoes9.jpg'),
(223, 107, './img/upload/shoes11.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(30) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `anh` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` text COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(222) NOT NULL,
  `theloai` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `created_time` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `soluong` int(50) NOT NULL,
  `giagoc` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `anh`, `tensp`, `gia`, `theloai`, `status`, `mota`, `created_time`, `last_update`, `soluong`, `giagoc`) VALUES
(1, './img/upload/owen-so-mi.jpg', 'Áo Sơ Mi Owen', 550000, 'Áo', '', 'Một lựa chọn khá chill và ấm áp đến từ áo thun nỉ dày dặn S.W.D Higher Quality Garment. Chất liệu vải nỉ da cá mềm mịn, đặc biệt không lo bai rão hay xù lông. Logo thuê nổi tinh tế.', NULL, NULL, 0, 0),
(2, './img/upload/shirt.jpg', 'Áo thun nam dài tay Julido', 200, 'Áo', '', '', NULL, NULL, 0, 0),
(3, './img/upload/shirt9.jpg', 'Áo Uniqlo Nam polo', 500, 'Áo', '', '', NULL, NULL, 0, 0),
(4, './img/upload/shirt15.jpg', 'NAM Áo polo DRY', 500, 'Áo', '', '', NULL, NULL, 0, 0),
(5, './img/upload/shirt16.jpg', 'NAM Uniqlo U Áo Vest', 1, 'Áo', '', '', NULL, NULL, 0, 0),
(6, './img/upload/shirt17.jpg', 'NAM Uniqlo U Áo Khoác Dài', 2, 'Áo', '', '', NULL, NULL, 0, 0),
(7, './img/upload/owen-somi2.jpg', 'Áo Sơ Mi Owen', 500, 'Áo', '', '', NULL, NULL, 0, 0),
(8, './img/upload/shirt18.jpg', 'Paris Saint-Germain Logo', 1, 'Áo', '', '', NULL, NULL, 0, 0),
(9, './img/upload/shirt4.jpg', 'Áo Thun Nam Thể Thao', 500, 'Áo', '', '', NULL, NULL, 0, 0),
(10, './img/upload/shirt5.jpg', 'Blentino Áo Thun Nam Polo', 150, 'Áo', '', '', NULL, NULL, 0, 0),
(11, './img/upload/shirt6.jpg', 'Áo Len Collective co', 350, 'Áo', '', '', NULL, NULL, 0, 0),
(12, './img/upload/shirt7.jpg', 'Áo Jeans MIIX Collective co', 350, 'Áo', '', '', NULL, NULL, 0, 0),
(13, './img/upload/owen1.jpg', 'Quần Khaki', 400, 'Quần', '', '', NULL, NULL, 0, 0),
(14, './img/upload/owen2.jpg', 'Quần Short', 485, 'Quần', '', '', NULL, NULL, 0, 0),
(15, './img/upload/owen3.jpg', 'Quần Tây', 575, 'Quần', '', '', NULL, NULL, 0, 0),
(16, './img/upload/uni1.jpg', 'NAM Uniqlo U Quần Dài', 599, 'Quần', '', '', NULL, NULL, 0, 0),
(17, './img/upload/uni2.jpg', 'NAM Quần Jersey Dáng Relax', 249, 'Quần', '', '', NULL, NULL, 0, 0),
(18, './img/upload/uni3.jpg', 'NAM Quần Cotton Dáng Relax', 500, 'Quần', '', '', NULL, NULL, 0, 0),
(19, './img/upload/nike1.jpg', 'Jordan Dri-FIT Air', 1, 'Quần', '', '', NULL, NULL, 0, 0),
(20, './img/upload/nike2.jpg', 'Nike Sportswear Windrunner', 1, 'Quần', '', '', NULL, NULL, 0, 0),
(21, './img/upload/nike3.jpg', 'Paris Saint-Germain Strike', 2, 'Quần', '', '', NULL, NULL, 0, 0),
(22, './img/upload/tik1.jpg', 'Quần jogger MIKENCO', 700, 'Quần', '', '', NULL, NULL, 0, 0),
(23, './img/upload/1k2.jpg', 'MLB - Quần jogger Change Up', 1, 'Quần', '', '', NULL, NULL, 0, 0),
(24, './img/upload/tik3.jpg', 'Quần dài nam thể thao', 200, 'Quần', '', '', NULL, NULL, 0, 0),
(40, './img/upload/shoes15.jpg', 'Nike Air Zoom Pegasus 36', 2, 'Quần', '', '', NULL, NULL, 0, 0),
(41, './img/upload/shoes14.jpg', 'Giày Sneaker Nam ALDO COWIEN', 1, 'Giày', '', '', NULL, NULL, 0, 0),
(42, './img/upload/shoes8.jpg', 'Giày Sneaker Nam ALDO COWIEN', 1, 'Giày', '', '', NULL, NULL, 0, 0),
(43, './img/upload/shoes2.jpg', 'Giày Thể Thao Nam', 500, 'Giày', '', '', NULL, NULL, 0, 0),
(44, './img/upload/shoes1.jpg', 'Giày Nam Cổ Cao', 600, 'Giày', '', '', NULL, NULL, 0, 0),
(45, './img/upload/adi1.jpg', 'RUNFALCON 2.0', 1, 'Giày', '', '', NULL, NULL, 0, 0),
(46, './img/upload/shoes9.jpg', 'Giày Sneaker Nam', 500, 'Giày', '', '', NULL, NULL, 0, 0),
(47, './img/upload/adi2.jpg', 'Bitis Hunter X Festive Aurora Black', 999, 'Giày', '', '', NULL, NULL, 0, 0),
(48, './img/upload/adi3.jpg', 'Giày Thể Thao Nam Bitis', 600, 'Giày', '', '', NULL, NULL, 0, 0),
(49, './img/upload/biti2.jpg', 'Bitis Hunter Core Festive Breezer Black', 799, 'Giày', '', '', NULL, NULL, 0, 0),
(50, './img/upload/bitit1.jpg', 'Bitis Hunter Core Festive Snowflake Blue', 799, 'Giày', '', '', NULL, NULL, 0, 0),
(51, './img/upload/biti3.jpg', 'Bitis Hunter Street x VietMax', 1, 'Giày', '', '', NULL, NULL, 0, 0),
(52, './img/upload/adi1.jpg', 'Găng Tay Gôn', 650, 'Phụ Kiện', '', '', NULL, NULL, 0, 0),
(53, './img/upload/adi2.jpg', 'MŨ LƯỠI TRAI ADICOLOR', 600, 'Phụ Kiện', '', '', NULL, NULL, 0, 0),
(54, './img/upload/nike_tuideo.jpg', 'Nike Heritage', 700, 'Phụ Kiện', '', '', NULL, NULL, 0, 0),
(55, './img/upload/nike_balo1.jpg', 'Nike Heritage 2.0', 800, 'Áo', '', '', NULL, NULL, 0, 0),
(56, './img/upload/nike_balo2.jpg', 'Nike Heritage', 400, 'Phụ Kiện', '', '', NULL, NULL, 0, 0),
(57, './img/upload/nike4.png', 'Nike Sportswear', 500, 'Phụ Kiện', '', '', NULL, NULL, 0, 0),
(58, './img/upload/tat1.jpg', 'TẤT THẤP CỔ CÓ ĐỆM', 60, 'Phụ Kiện', '', '', NULL, NULL, 0, 0),
(59, './img/upload/tat2.jpg', '3 ĐÔI TẤT TREFOIL LINER', 300, 'Phụ Kiện', '', '', NULL, NULL, 0, 0),
(60, './img/upload/day1.jpg', 'Dây Đeo Thẻ', 100, 'Phụ Kiện', '', '', NULL, NULL, 0, 0),
(61, './img/upload/tl1.jpg', 'Thắt Lưng Nam', 250, 'Phụ Kiện', '', '', NULL, NULL, 0, 0),
(62, './img/upload/tl2.jpg', 'Thắt Lưng Nam NutuShop', 300, 'Phụ Kiện', '', '', NULL, NULL, 0, 0),
(63, './img/upload/t3.jpg', 'Milina 16 Sock', 100, 'Phụ Kiện', '', '', NULL, NULL, 0, 0),
(105, './img/upload/shirt4.jpg', 'Biti Hunter X Festive Aurora Black', 2000, 'Áo', '', 'áo mới', '2023-05-28 16:10:37', '2023-05-28 16:10:37', 0, 0),
(106, './img/upload/biti3.jpg', 'tttttttttttttt', 122000, 'Áo', '', 'tttttttttttttt', '2023-05-28 16:16:33', '2023-05-28 16:16:33', 0, 0),
(107, './img/upload/adi1.jpg', 'sdfsdf', 2000, 'Giày', '', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', '2023-06-04 08:06:08', '2023-06-04 14:00:03', 24, 3500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acc_account_id` (`account_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ka_product_id` (`product_id`),
  ADD KEY `ac_account_id` (`account_id`),
  ADD KEY `bi_bill_id` (`bill_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kf_product_id` (`product_id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `acc_account_id` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `ac_account_id` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bi_bill_id` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ka_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `kf_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
