-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2021 lúc 11:46 AM
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
  `cat_quantity` int(11) NOT NULL,
  `cat_description` text NOT NULL,
  `cat_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cat_id`, `cat_status`, `cat_name`, `cat_quantity`, `cat_description`, `cat_image`) VALUES
(1, 1, 'Armchairs', 8, 'Armchairs', 'nav-img-2.jpg'),
(2, 1, 'Bath Room', 5, 'Bath Room', 'cate1.png'),
(3, 1, 'Dining Chairs', 9, 'Dining Chairs', 'nav-img-3.jpg'),
(4, 1, 'Dining Tables', 13, 'Dining Tables', 'nav-img-4.jpg'),
(5, 1, 'Lightings', 1, 'Lightings', 'nav-img-5.jpg'),
(6, 1, 'Living Room', 14, 'Living Room', 'nav-img-6.jpg'),
(7, 1, 'Office', 11, 'Office', 'nav-img-7.jpg'),
(8, 1, 'Seating', 4, 'Seating', 'nav-img-8.jpg'),
(9, 1, 'Sofas', 14, 'Sofas', 'nav-img-9.jpg'),
(10, 1, 'Special', 16, 'Special', 'nav-img-10.jpg'),
(11, 1, 'Table', 11, 'Table', 'nav-img-11.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_prd_id`
--

CREATE TABLE `order_prd_id` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_prd_id`
--

INSERT INTO `order_prd_id` (`order_id`, `user_id`, `product_id`, `order_status`) VALUES
(60, 3, 1, 0),
(61, 3, 2, 0),
(62, 7, 2, 0),
(63, 7, 4, 0),
(64, 7, 5, 0),
(65, 19, 2, 0),
(66, 19, 20, 0);

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
(1, 'Coby Coffee Table', 1, '150.00', '140.00', 'filter-latest4.jpg', 'filter-latest4.1.jpg', 'Coby Coffee Table', 1, 'Blast', '19 Nov, 2021', '-7%', 1),
(2, 'Copeland Furniture Audrey', 1, '100.00', '$90.00', 'filter-latest5.1.jpg', 'filter-latest5.jpg', 'Copeland Furniture Audrey', 1, 'Minimal', '19 Nov, 2021', '-10%', 1),
(3, 'Artemis Lounge Chair', 1, '100.00', '$90.00', 'filter-latest3.1.jpg', 'filter-latest3.jpg', 'Artemis Lounge Chair', 1, 'Money', '19 Nov, 2021', '-10%', 4),
(4, 'Eiffel Round Dining Table', 1, '217', '$214.22', 'filter-latest8.1.jpg', 'filter-latest8.jpg', 'Eiffel Round Dining Table', 1, 'Money', '19 Nov, 2021', '-10%', 4),
(5, 'Euclid Pendant Lamp', 1, '250.00 ', '$233.00', 'filter-latest9.1.jpg', 'filter-latest9.jpg', 'Euclid Pendant Lamp', 1, 'Money', '19 Nov, 2021', '-7%', 4),
(6, 'Bend Goods Farmhouse Chair', 1, '35.00 – 45.00', '', 'dining-table-1.jpg', 'dining-table-1.1.jpg', 'Bend Goods Farmhouse Chair', 1, 'Money', '19 Nov, 2021', '-22%', 4),
(7, 'Glass Dining Table', 1, '214.22', '', 'dining-table-2.jpg', 'dining-table-2.1.jpg', 'Glass Dining Table', 1, 'Money', '19 Nov, 2021', '', 4),
(9, 'Godenza Round Dining Table', 1, '80.00', '$100.00 ', 'dining-table-3.jpg', 'dining-table-3.1.jpg', 'Godenza Round Dining Table', 1, 'Best Sound', '19 Nov, 2021', '-20%', 4),
(10, 'Grace Accent Chair', 1, '190.00', '$200.00', 'dining-table-4.jpg', 'dining-table-4.1.jpg', '', 1, 'Minimal', '19 Nov, 2021', '-5%', 4),
(11, 'Isla Round Dining Table', 1, '350.00', '$400.00 ', 'dining-table-5.jpg', 'dining-table-5.1.jpg', 'Isla Round Dining Table', 1, 'RedBox', '25 Nov, 2021', '-13%', 7),
(20, 'Della Chair – Navy', 1, '90.00', '100.00', 'filter-latest7.1.jpg', 'filter-latest7.jpg', 'Della Chair – Navy', 1, 'Money', '25 Nov, 2021', '-10%', 1),
(21, 'Fatboy Square Pillow', 1, '120.00', '180.00', 'arm-chair-4.jpg', 'arm-chair-4.1.jpg', 'Fatboy Square Pillow', 1, 'Minimal', '25 Nov, 2021', '-17%', 1),
(22, 'Gretchen Single Seat Sofa', 1, '30.00', '40.00', 'arm-chair-5.1.jpg', 'arm-chair-5.jpg', 'Gretchen Single Seat Sofa', 1, 'Blast', '25 Nov, 2021', '-6%', 1),
(23, 'Leighton Lounge Chair', 1, '180.00', '200.00', 'arm-chair-6.jpg', 'arm-chair-6.1.jpg', 'Leighton Lounge Chair', 1, 'RedBox', '25 Nov, 2021', '-10%', 1),
(24, 'Liam Pendant Lighting', 1, '350.00', '', 'arm-chair-7.jpg', 'arm-chair-7.1.jpg', 'Liam Pendant Lighting', 1, 'Minimal', '25 Nov, 2021', '', 1),
(25, 'Luna Buffet', 1, '350.00', '400.00 ', 'arm-chair-8.jpg', 'arm-chair-8.1.jpg', 'Luna Buffet', 1, 'Money', '25 Nov, 2021', '-13%', 1),
(26, 'Copeland Furniture Audrey', 1, '90.00', '100.00 ', 'filter-latest5.1.jpg', 'filter-latest5.jpg', 'Copeland Furniture Audrey', 1, 'Minimal', '25 Nov, 2021', '-10%', 2),
(27, 'Euclid Pendant Lamp', 1, '233.00', '250.00', 'filter-latest9.1.jpg', 'filter-latest9.jpg', 'Euclid Pendant Lamp', 1, 'Money', '25 Nov, 2021', '-7%', 3),
(28, 'Glass Dining Table', 1, '214.22', '214.22', 'dining-table-2.jpg', 'dining-table-2.1.jpg', 'Glass Dining Table', 1, 'Money', '25 Nov, 2021', '', 3),
(29, 'Gretchen Single Seat Sofa', 1, '$30.00 – $40.00', '', 'arm-chair-5.1.jpg', 'arm-chair-5.jpg', 'Gretchen Single Seat Sofa', 1, 'Money', '25 Nov, 2021', '', 3),
(30, 'Liam Pendant Lighting', 0, '350.00', '', 'arm-chair-7.jpg', 'arm-chair-7.1.jpg', 'The EcoSmart Fleece Hoodie full-zip hooded jacket provides medium weight fleece comfort all year around. Feel better in this sweatshirt because Hanes keeps plastic bottles of landfills by using recycled polyester.7.8 ounce fleece sweatshirt made with up to 5 percent polyester created from recycled plastic.', 1, 'Best Sound', '26 Nov, 2021', '', 5);

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
  `total` int(11) NOT NULL,
  `note` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `purchase_user_id`, `firstname`, `lastname`, `address`, `city`, `postcode`, `email`, `phone`, `total`, `note`, `date`) VALUES
(45, 3, 'tst', 'test', 'qn', 'qn', 1001, 'dnhau191@gmail.com', '003', 250, 'no', '25 Nov, 2021'),
(47, 19, 'hau', 'dang', 'DN', 'DN', 1001, 'dnhau191@gmail.com', '03', 190, 'no', '26 Nov, 2021');

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
(2, 1, 'admin_avt4.png', 'John', 'john@gmail.com', 'johncute', '202cb962ac59075b964b07152d234b70', 'USA', '0123 456 789'),
(3, 1, 'admin_avt2.png', 'Lisa2', 'lisa@gmail.com', 'lisa', '202cb962ac59075b964b07152d234b70', 'Korea', '0088 343 546'),
(4, 1, 'admin_avt.png', 'Kai', 'admin@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'VietNam', '0345 546 2424'),
(7, 0, '', '', 'testuser2@gmail.com', 'testuser2', '202cb962ac59075b964b07152d234b70', '', ''),
(19, 0, 'avatar-3.jpg', 'Dang Ngoc Hau', 'hau2@gmail.com', 'haudz', '202cb962ac59075b964b07152d234b70', 'DN', '03');

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
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `order_prd_id`
--
ALTER TABLE `order_prd_id`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
