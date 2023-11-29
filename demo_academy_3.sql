-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 05:25 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo_academy 3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dtb_ca_hoc`
--

CREATE TABLE `dtb_ca_hoc` (
  `id` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dtb_ca_hoc`
--

INSERT INTO `dtb_ca_hoc` (`id`, `name`, `time_start`, `time_end`) VALUES
(7, 'Ca 1', '08:30:00', '10:30:00'),
(8, 'Ca 2', '14:30:00', '16:30:00'),
(9, 'Ca 3', '19:30:00', '21:30:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dtb_course`
--

CREATE TABLE `dtb_course` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `mo_ta` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dtb_course`
--

INSERT INTO `dtb_course` (`id`, `name`, `price`, `mo_ta`) VALUES
(10, 'IELTS', 350, 'Luyện thi IELTS'),
(11, 'TOEIC', 330, 'Luyện thi TOEIC'),
(12, 'Tiếng Anh Giao Tiếp', 200, 'Luyện giao tiếp'),
(13, 'Tiếng anh cơ bản', 400, 'Dành cho người mất gốc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dtb_customer`
--

CREATE TABLE `dtb_customer` (
  `id` int NOT NULL,
  `name` varchar(130) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'gv',
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL,
  `location` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `birth_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dtb_customer`
--

INSERT INTO `dtb_customer` (`id`, `name`, `pass`, `email`, `role`, `image`, `phone`, `location`, `birth_day`) VALUES
(7, 'Trần Thị Lan', '12345', 'btt12@gmail.com', 'gv', '950299.png', 123456, 'Hà Nội', '2023-07-13'),
(8, 'Trịnh Việt Đức ', '11111', 'trinhduc59@gmail.com', 'gv', 'avt.jpg', 456789, 'Hải Dương', '2023-05-26'),
(9, 'admin1', '1234', 'admin', 'admin', '487622.png', 11111, 'admin', '2023-07-11'),
(10, 'Nguyễn Thị Hà', '123456', 'hant1@gmail.com', 'gv', 'fo44.png', 123456, 'Hải Phòng', '1998-06-10'),
(11, 'Nguyễn Thị Việt Nam', '123456', 'namntv1@gmail.com', 'gv', 'bd2.jpg', 123456, 'Nam Định', '1997-07-16'),
(12, 'Nguyễn Thị Lý', '123456', 'lynt1@gmail.com', 'gv', '', 123456, 'Phú Thọ', '1997-08-04'),
(13, 'Đinh Thị Hải Yến', '123456', 'yendth1@gmail.com', 'gv', '', 123456, 'Thái Bình', '1999-08-02'),
(14, 'Trần Văn Hải', '123456', 'haitv1@gmail.com', 'gv', '', 123456, 'Hải Dương', '1992-08-02'),
(15, 'Trần Hải Long', '123456', 'longth1@gmail.com', 'gv', '', 123456, 'Hưng Yên', '1999-11-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dtb_hoadon`
--

CREATE TABLE `dtb_hoadon` (
  `id` int NOT NULL,
  `member_id` int NOT NULL,
  `lop_id` int NOT NULL,
  `sotien_vnd` decimal(15,0) NOT NULL,
  `bank_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `register_time` datetime DEFAULT NULL,
  `payment_time` date DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `hinhthuc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `dtb_hoadon`
--

INSERT INTO `dtb_hoadon` (`id`, `member_id`, `lop_id`, `sotien_vnd`, `bank_name`, `register_time`, `payment_time`, `status`, `hinhthuc`) VALUES
(88, 49, 60, 400, NULL, '2023-08-17 14:17:15', '2023-08-17', 'Đã thanh toán', 'Thanh toán tại trung tâm'),
(91, 50, 43, 330, 'NCB', NULL, '2023-08-19', 'Đã thanh toán', 'Chuyển khoản'),
(92, 50, 42, 330, NULL, '2023-08-19 08:53:19', '2023-08-19', 'Đã thanh toán', 'Thanh toán tại trung tâm'),
(93, 52, 42, 330, NULL, '2023-08-19 11:12:13', '2023-08-19', 'Đã thanh toán', 'Thanh toán tại trung tâm'),
(95, 52, 43, 330, 'NCB', NULL, '2023-08-19', 'Đã thanh toán', 'Chuyển khoản'),
(96, 52, 44, 330, NULL, '2023-08-19 11:19:28', NULL, 'Chưa thanh toán', 'Thanh toán tại trung tâm'),
(98, 49, 48, 350, NULL, '2023-11-01 10:55:55', '2023-11-01', 'Đã thanh toán', 'Thanh toán tại trung tâm'),
(99, 49, 49, 350, NULL, '2023-11-25 06:29:55', NULL, 'Chưa thanh toán', 'Thanh toán tại trung tâm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dtb_lop`
--

CREATE TABLE `dtb_lop` (
  `id` int NOT NULL,
  `course_id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_id` int NOT NULL,
  `time` time NOT NULL DEFAULT '02:00:00',
  `ca_hoc_id` int NOT NULL,
  `day` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slot` int NOT NULL DEFAULT '20'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dtb_lop`
--

INSERT INTO `dtb_lop` (`id`, `course_id`, `name`, `customer_id`, `time`, `ca_hoc_id`, `day`, `slot`) VALUES
(42, 11, 'TOEIC 1', 10, '02:00:00', 7, 'Thứ 2 4 6', 20),
(43, 11, 'TOEIC 2', 10, '02:00:00', 8, 'Thứ 2 4 6', 20),
(44, 11, 'TOEIC 3', 10, '02:00:00', 9, 'Thứ 2 4 6', 20),
(45, 11, 'TOEIC 4', 11, '02:00:00', 7, 'Thứ 3 5 7', 20),
(46, 11, 'TOEIC 5', 11, '02:00:00', 8, 'Thứ 3 5 7', 20),
(47, 11, 'TOEIC 6', 11, '02:00:00', 9, 'Thứ 3 5 7', 20),
(48, 10, 'IELTS 1', 8, '02:00:00', 7, 'Thứ 2 4 6', 20),
(49, 10, 'IELTS 2', 8, '02:00:00', 8, 'Thứ 2 4 6', 20),
(50, 10, 'IELTS 3', 8, '02:00:00', 9, 'Thứ 2 4 6', 20),
(51, 10, 'IELTS 4', 7, '02:00:00', 7, 'Thứ 3 5 7', 20),
(52, 10, 'IELTS 5', 7, '02:00:00', 8, 'Thứ 3 5 7', 20),
(53, 10, 'IELTS 6', 7, '02:00:00', 9, 'Thứ 3 5 7', 20),
(54, 12, 'Giao Tiếp 1', 12, '02:00:00', 7, 'Thứ 2 4 6', 20),
(55, 12, 'Giao Tiếp 2', 12, '02:00:00', 8, 'Thứ 2 4 6', 20),
(56, 12, 'Giao Tiếp 3', 12, '02:00:00', 9, 'Thứ 2 4 6', 20),
(57, 12, 'Giao Tiếp 4', 14, '02:00:00', 7, 'Thứ 3 5 7', 20),
(58, 12, ' Giao Tiếp 5', 14, '02:00:00', 8, 'Thứ 3 5 7', 20),
(59, 12, 'Giao Tiếp 6', 14, '02:00:00', 9, 'Thứ 3 5 7', 20),
(60, 13, 'Tiếng Anh 1', 13, '02:00:00', 7, 'Thứ 2 4 6', 20),
(61, 13, 'Tiếng Anh 2', 13, '02:00:00', 8, 'Thứ 2 4 6', 20),
(62, 13, 'Tiếng Anh 3', 13, '02:00:00', 9, 'Thứ 2 4 6', 20),
(63, 13, 'Tiếng Anh 4', 15, '02:00:00', 7, 'Thứ 3 5 7', 20),
(64, 13, 'Tiếng Anh 5', 15, '02:00:00', 8, 'Thứ 3 5 7', 20),
(65, 13, 'Tiếng Anh 6', 15, '02:00:00', 9, 'Thứ 3 5 7', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dtb_member`
--

CREATE TABLE `dtb_member` (
  `id` int NOT NULL,
  `name` varchar(130) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(130) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `location` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL DEFAULT '0',
  `birth_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dtb_member`
--

INSERT INTO `dtb_member` (`id`, `name`, `pass`, `email`, `image`, `location`, `phone`, `birth_day`) VALUES
(48, 'Trịnh Việt Đức', '123456', 'duc1@gmail.com', '123', 'Hải dương', 123456, '2023-08-15'),
(49, 'Đoàn Minh Tùng', '123456', 'tung1@gmail.com', 'fo41.png', 'Hải Dương', 23456, '1993-06-09'),
(50, 'Trịnh Long Vũ', '123456', 'vu1@gmail.com', 'fo44.png', 'Hải Dương', 123456, '2023-08-17'),
(52, 'Ha', '123456', 'ha1@gmail.com', 'bd.jpg', 'Hải Dương', 123456, '2023-08-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dtb_recomment`
--

CREATE TABLE `dtb_recomment` (
  `id` int NOT NULL,
  `member_id` int NOT NULL,
  `content` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_id` int NOT NULL,
  `day_comment` date NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'chưa duyệt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dtb_recomment`
--

INSERT INTO `dtb_recomment` (`id`, `member_id`, `content`, `course_id`, `day_comment`, `status`) VALUES
(15, 52, 'okok', 10, '2023-08-19', 'đã duyệt');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dtb_ca_hoc`
--
ALTER TABLE `dtb_ca_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dtb_course`
--
ALTER TABLE `dtb_course`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dtb_customer`
--
ALTER TABLE `dtb_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dtb_hoadon`
--
ALTER TABLE `dtb_hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon_mem_id` (`member_id`),
  ADD KEY `hoadon_lop_id` (`lop_id`);

--
-- Chỉ mục cho bảng `dtb_lop`
--
ALTER TABLE `dtb_lop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dtb_course_id` (`course_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `ca_hoc_id` (`ca_hoc_id`);

--
-- Chỉ mục cho bảng `dtb_member`
--
ALTER TABLE `dtb_member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dtb_recomment`
--
ALTER TABLE `dtb_recomment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dtb_member_id` (`member_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dtb_ca_hoc`
--
ALTER TABLE `dtb_ca_hoc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `dtb_course`
--
ALTER TABLE `dtb_course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `dtb_customer`
--
ALTER TABLE `dtb_customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `dtb_hoadon`
--
ALTER TABLE `dtb_hoadon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `dtb_lop`
--
ALTER TABLE `dtb_lop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `dtb_member`
--
ALTER TABLE `dtb_member`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `dtb_recomment`
--
ALTER TABLE `dtb_recomment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dtb_hoadon`
--
ALTER TABLE `dtb_hoadon`
  ADD CONSTRAINT `hoadon_lop_id` FOREIGN KEY (`lop_id`) REFERENCES `dtb_lop` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `hoadon_mem_id` FOREIGN KEY (`member_id`) REFERENCES `dtb_member` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `dtb_lop`
--
ALTER TABLE `dtb_lop`
  ADD CONSTRAINT `dtb_lop_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `dtb_course` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `dtb_lop_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `dtb_customer` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `dtb_lop_ibfk_3` FOREIGN KEY (`ca_hoc_id`) REFERENCES `dtb_ca_hoc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `dtb_recomment`
--
ALTER TABLE `dtb_recomment`
  ADD CONSTRAINT `dtb_recomment_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `dtb_member` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `dtb_recomment_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `dtb_course` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
