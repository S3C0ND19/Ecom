-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2021 lúc 12:53 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ecom`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_img`) VALUES
(3, 'Blast', 'brand__7.png'),
(4, 'Minimal', 'brand__1.png'),
(5, 'Money', 'brand__2.png'),
(7, 'Best Sound', 'brand__3.png'),
(9, 'RedBox', 'brand__4.png'),
(10, 'Camp Fire', 'brand__5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_status` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_description` text NOT NULL,
  `cat_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cat_id`, `cat_status`, `cat_name`, `cat_description`, `cat_image`) VALUES
(1, 1, 'Armchairs', 'Armchairs', 'nav-img-2.jpg'),
(2, 1, 'Bath Room', 'Bath Room', 'cate1.png'),
(3, 1, 'Dining Chairs', 'Dining Chairs', 'nav-img-3.jpg'),
(4, 1, 'Dining Tables', 'Dining Tables', 'nav-img-4.jpg'),
(5, 1, 'Lightings', 'Lightings', 'nav-img-5.jpg'),
(7, 1, 'Office', 'Office', 'nav-img-7.jpg'),
(12, 1, 'Seating', 'Seating', 'nav-img-8.jpg'),
(13, 1, 'Sofas', 'Sofas', 'nav-img-9.jpg'),
(14, 1, 'Special', 'Special', 'nav-img-10.jpg'),
(15, 1, 'Table', 'Table', 'nav-img-11.jpg'),
(16, 1, 'Living Room', 'Living Room', 'cate3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_prd_id`
--

CREATE TABLE `order_prd_id` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_prd_id`
--

INSERT INTO `order_prd_id` (`order_id`, `user_id`, `product_id`) VALUES
(9, 19, 22),
(10, 19, 23),
(11, 19, 25),
(12, 20, 2),
(13, 20, 21),
(14, 20, 24),
(15, 20, 25),
(16, 19, 28),
(17, 19, 10),
(18, 19, 11),
(19, 21, 22),
(20, 21, 20),
(21, 21, 20),
(22, 21, 23),
(23, 22, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `prd_id` int(11) NOT NULL,
  `prd_name` varchar(100) NOT NULL,
  `prd_status` int(11) NOT NULL,
  `prd_price` text NOT NULL,
  `prd_price_old` text NOT NULL,
  `prd_image` varchar(255) NOT NULL,
  `prd_image_2` varchar(255) NOT NULL,
  `prd_description` text NOT NULL,
  `prd_quantity` int(11) NOT NULL,
  `prd_brand` varchar(50) NOT NULL,
  `prd_date` text NOT NULL,
  `prd_sale` varchar(50) NOT NULL,
  `prd_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`prd_id`, `prd_name`, `prd_status`, `prd_price`, `prd_price_old`, `prd_image`, `prd_image_2`, `prd_description`, `prd_quantity`, `prd_brand`, `prd_date`, `prd_sale`, `prd_cat_id`) VALUES
(1, 'Coby Coffee Table', 1, '150.00', '140.00', 'filter-latest4.jpg', 'filter-latest4.1.jpg', 'Coby Coffee Table', 1, 'Blast', '27 Nov, 2021', '-7%', 1),
(2, 'Copeland Furniture Audrey', 1, '100.00', '90.00', 'filter-latest5.1.jpg', 'filter-latest5.jpg', 'Copeland Furniture Audrey', 1, 'Minimal', '19 Nov, 2021', '-10%', 1),
(3, 'Artemis Lounge Chair', 1, '100.00', '90.00', 'filter-latest3.1.jpg', 'filter-latest3.jpg', 'Artemis Lounge Chair', 1, 'Money', '19 Nov, 2021', '-10%', 4),
(4, 'Eiffel Round Dining Table', 1, '217.00', '214.22', 'filter-latest8.1.jpg', 'filter-latest8.jpg', 'Eiffel Round Dining Table', 1, 'Money', '19 Nov, 2021', '-10%', 4),
(5, 'Euclid Pendant Lamp', 1, '250.00 ', '233.00', 'filter-latest9.1.jpg', 'filter-latest9.jpg', 'Euclid Pendant Lamp', 1, 'Money', '19 Nov, 2021', '-7%', 4),
(6, 'Bend Goods Farmhouse Chair', 1, '35.00 – 45.00', '', 'dining-table-1.jpg', 'dining-table-1.1.jpg', 'Bend Goods Farmhouse Chair', 1, 'Money', '19 Nov, 2021', '-22%', 4),
(7, 'Glass Dining Table', 1, '214.22', '', 'dining-table-2.jpg', 'dining-table-2.1.jpg', 'Glass Dining Table', 1, 'Money', '19 Nov, 2021', '', 4),
(9, 'Godenza Round Dining Table', 1, '80.00', '100.00 ', 'dining-table-3.jpg', 'dining-table-3.1.jpg', 'Godenza Round Dining Table', 1, 'Best Sound', '19 Nov, 2021', '-20%', 4),
(10, 'Grace Accent Chair', 1, '190.00', '200.00', 'dining-table-4.jpg', 'dining-table-4.1.jpg', '', 1, 'Minimal', '19 Nov, 2021', '-5%', 4),
(11, 'Isla Round Dining Table', 1, '350.00', '400.00 ', 'dining-table-5.jpg', 'dining-table-5.1.jpg', 'Isla Round Dining Table', 1, 'RedBox', '28 Nov, 2021', '-13%', 7),
(20, 'Della Chair – Navy', 1, '90.00', '100.00', 'filter-latest7.1.jpg', 'filter-latest7.jpg', 'Della Chair – Navy', 1, 'Money', '25 Nov, 2021', '-10%', 1),
(21, 'Fatboy Square Pillow', 1, '120.00', '180.00', 'arm-chair-4.jpg', 'arm-chair-4.1.jpg', 'Fatboy Square Pillow', 1, 'Minimal', '25 Nov, 2021', '-17%', 1),
(22, 'Gretchen Single Seat Sofa', 1, '30.00', '40.00', 'arm-chair-5.1.jpg', 'arm-chair-5.jpg', 'Gretchen Single Seat Sofa', 1, 'Blast', '25 Nov, 2021', '-6%', 1),
(23, 'Leighton Lounge Chair', 1, '180.00', '200.00', 'arm-chair-6.jpg', 'arm-chair-6.1.jpg', 'Leighton Lounge Chair', 1, 'RedBox', '25 Nov, 2021', '-10%', 1),
(24, 'Liam Pendant Lighting', 1, '350.00', '', 'arm-chair-7.jpg', 'arm-chair-7.1.jpg', 'Liam Pendant Lighting', 1, 'Minimal', '25 Nov, 2021', '', 1),
(25, 'Luna Buffet', 1, '350.00', '400.00 ', 'arm-chair-8.jpg', 'arm-chair-8.1.jpg', 'Luna Buffet', 1, 'Money', '25 Nov, 2021', '-13%', 1),
(26, 'Copeland Furniture Audrey', 1, '90.00', '100.00 ', 'filter-latest5.1.jpg', 'filter-latest5.jpg', 'Copeland Furniture Audrey', 1, 'Minimal', '25 Nov, 2021', '-10%', 2),
(27, 'Euclid Pendant Lamp', 1, '233.00', '250.00', 'filter-latest9.1.jpg', 'filter-latest9.jpg', 'Euclid Pendant Lamp', 1, 'Money', '25 Nov, 2021', '-7%', 3),
(28, 'Glass Dining Table', 1, '214.22', '214.22', 'dining-table-2.jpg', 'dining-table-2.1.jpg', 'Glass Dining Table', 1, 'Money', '25 Nov, 2021', '', 3),
(29, 'Gretchen Single Seat Sofa', 1, '30.00 – 40.00', '', 'arm-chair-5.1.jpg', 'arm-chair-5.jpg', 'Gretchen Single Seat Sofa', 1, 'Money', '25 Nov, 2021', '', 3),
(37, 'Onyx Winter Vase', 1, '150.00', '200.00 ', 'dining-chair-1.jpg', 'dining-chair-1.1.jpg', 'no', 0, 'Best Sound', '28 Nov, 2021', '-25%', 3),
(43, 'Saarinen Womb Chair', 1, '70.00', '90.00', 'dining-table-7.jpg', 'dining-table-7.1.jpg', 'Saarinen Womb Chair', 1, 'Money', '28 Nov, 2021', '-10%', 4),
(44, 'Ribbonwood Wall Clock', 1, '30.00', '', 'sale_5.jpg', 'sale_5.1.jpg', 'Ribbonwood Wall Clock', 1, 'Minimal', '28 Nov, 2021', '', 4),
(45, 'Luxmod Pendant Light', 1, '350.00', '400.00', 'dining-table-6.jpg', 'dining-table-6.1.jpg', 'Luxmod Pendant Light', 1, 'Minimal', '28 Nov, 2021', '-13%', 4),
(46, 'LAX Series Entertainment Shelf', 1, '300.00', '350.00 ', 'office-1.jpg', 'office-1.1.jpg', 'LAX Series Entertainment Shelf', 1, 'Money', '28 Nov, 2021', '-14%', 1),
(47, 'Norwood Chenille Lounge Chair', 1, '30.00 – $50.00', '', 'sale_1.jpg', 'sale_1.1.jpg', 'Norwood Chenille Lounge Chair', 1, '', '28 Nov, 2021', '', 1),
(48, 'Liam Pendant Lighting', 1, '350.00', '', 'arm-chair-7.jpg', 'arm-chair-7.1.jpg', 'Liam Pendant Lighting', 1, 'Minimal', '28 Nov, 2021', '', 5),
(50, 'Round Libra Vase', 1, '115.00', '', 'dining-table-8.1.jpg', 'dining-table-8.jpg', 'Round Libra Vase', 1, 'Best Sound', '28 Nov, 2021', '', 14),
(51, 'Glass Dining Table', 1, '214.22', '', 'dining-table-2.1.jpg', 'dining-table-2.jpg', 'Glass Dining Table', 1, 'Best Sound', '28 Nov, 2021', '', 15),
(52, 'Bend Goods Farmhouse Chair', 1, '35.00 – $45.00', '', 'dining-table-1.1.jpg', 'dining-table-1.jpg', '', 1, 'Blast', '28 Nov, 2021', '', 16),
(53, 'Grace Accent Chair', 1, '190.00', '200.00 ', 'dining-table-4.jpg', 'dining-table-4.1.jpg', 'Grace Accent Chair', 1, 'Minimal', '28 Nov, 2021', '-5%', 12),
(54, 'Norwood Chenille Lounge Chair', 1, '30.00 – $50.00', '', 'special-1.png', 'special-1.1.png', 'Norwood Chenille Lounge Chair', 1, 'Minimal', '28 Nov, 2021', '', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `purchase_user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `note` text NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `purchase_user_id`, `firstname`, `lastname`, `address`, `city`, `postcode`, `email`, `phone`, `quantity`, `total`, `note`, `status`, `date`) VALUES
(2, 19, 'Dang Ngoc', 'Hau', 'Hai Chau', 'Da Nang', 1001, 'hau@gmail.com', '0362821110', 3, 560, 'no', 0, '26 Nov, 2021'),
(3, 20, 'Tri', 'Nguyen', 'Nam Dan', 'Nghe An', 1001, 'tri@gmail.com', '036282110', 4, 920, 'no', 0, '26 Nov, 2021'),
(4, 19, 'Tin', 'Nguyen', 'Krong', 'Dak Lak', 220, 'tin@dau.edu.vn', '0464349389', 3, 754, 'no', 1, '26 Nov, 2021'),
(5, 21, 'Nguyen Huu', 'Tin', 'Tu Liem', 'Ha Noi', 1323, 'tin@gmail.com', '02424', 3, 340, 'no', 1, '27 Nov, 2021'),
(6, 21, 'Hau', 'Dang', 'QN', 'QN', 1001, 'hau@gmail.com', '0123455756', 1, 350, 'No', 0, '28 Nov, 2021'),
(7, 21, 'Tri', 'Nguyen', 'Nghe An', 'Nghe An', 10032, 'tri@gmail.com', '024242242', 1, 150, 'no', 0, '28 Nov, 2021'),
(14, 21, 'tin', 'nguyen', 'dl', 'dlak', 313, 'tin@gmail.com', '3123', 2, 270, 'no', 1, '28 Nov, 2021'),
(15, 22, 'dsa', 'asdd', 'asd', 'ds', 21, 'g@gmail', '2342', 1, 150, '43', 0, '28 Nov, 2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_level` int(11) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_address` text NOT NULL,
  `user_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_level`, `user_img`, `user_name`, `user_email`, `user_username`, `user_password`, `user_address`, `user_contact`) VALUES
(2, 1, 'avatar-2.jpg', 'John', 'john@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'USA', '0123 456 789'),
(3, 1, 'admin_avt2.png', 'Lisa2', 'lisa@gmail.com', 'lisa', '202cb962ac59075b964b07152d234b70', 'Korea', '0088 343 546'),
(4, 1, 'admin_avt4.png', 'Kai', 'admin@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'VietNam', '0345 546 2424'),
(7, 1, 'avatar-1.jpg', 'Jenie', 'testuser2@gmail.com', 'testuser2', '81dc9bdb52d04dc20036dbd8313ed055', 'Korea', '111-111-111'),
(19, 1, 'avatar-6.jpg', 'Đặng Ngọc Hậu dz', 'dnhau191@gmail.com', 'haudz', '202cb962ac59075b964b07152d234b70', 'Đà Nẵng', '4352334'),
(20, 0, 'avatar-3.jpg', 'Dang Ngoc Hau', 'hau191@gmail.com', 'hau191', '202cb962ac59075b964b07152d234b70', 'Da Nang', '0362821110'),
(21, 0, 'avatar-4.jpg', 'Nguyen Huu tin', 'tin@gmail.com', 'tin123', 'e10adc3949ba59abbe56e057f20f883e', 'DakLak', '0335353'),
(22, 0, 'avatar-3.jpg', '', 'viet@gmail.com', 'viet1', '202cb962ac59075b964b07152d234b70', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `order_prd_id`
--
ALTER TABLE `order_prd_id`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `fk_prd_cat` (`prd_cat_id`);

--
-- Chỉ mục cho bảng `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `purchase_user_id` (`purchase_user_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `order_prd_id`
--
ALTER TABLE `order_prd_id`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_prd_id`
--
ALTER TABLE `order_prd_id`
  ADD CONSTRAINT `order_prd_id_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `order_prd_id_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`prd_id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_prd_cat` FOREIGN KEY (`prd_cat_id`) REFERENCES `category` (`cat_id`);

--
-- Các ràng buộc cho bảng `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`purchase_user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
