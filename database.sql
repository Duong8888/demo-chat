-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 14, 2023 lúc 12:08 AM
-- Phiên bản máy phục vụ: 10.5.16-MariaDB
-- Phiên bản PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id19592274_hello122`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `avatar`, `status`) VALUES
(62, 'truong', 'truongzeeeeee@gmail.com', '123', './src/img/Hoa-hau_-18.jpg', 0),
(63, 'Dương ADMIN', 'duongna1603@gmail.com', '111', './src/img/199308887_1412477172468089_2593694400813705621_n.jpg', 0),
(64, 'Dương Đẹp Trai', 'anhduongpro16032003@gmail.com', '111', './src/img/avatar.png', 0),
(65, 'truong', 'truongntph23520@fpt.edu.vn', '123', './src/img/319875118_821134735785508_8687401364541019413_n.jpg', 0),
(66, 'Thịnh', 'thinh123@gmail.com', '12012004', './src/img/inbound2807301617149711377.jpg', 1),
(67, 'anhdt', 'anhdtph23554@fpt.edu.vn', '123', './src/img/images.jpg', 1),
(68, 'tuanmc', 'maicongtuann2k2@gmail.com', '12345', './src/img/IMG_20230302_172221.jpg', 0),
(69, 'Chị Gái', 'duongna@gmail.com', '111', './src/img/100-Ảnh-nền-máy-tính-đẹp-nhất-có-link-tải-về-trực-tiếp.jpeg', 1),
(70, 'truong', 'youdoknow396@gmail.com', 'truong123', './src/img/330416204_440307938258223_4682112870647134137_n.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_message`
--

CREATE TABLE `user_message` (
  `id_message` int(11) NOT NULL,
  `message` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_user_send` int(11) NOT NULL,
  `id_user_take` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user_message`
--

INSERT INTO `user_message` (`id_message`, `message`, `id_user_send`, `id_user_take`, `status`) VALUES
(473, 'nonn', 63, 62, 1),
(474, ' cặc', 62, 63, 1),
(475, 'tạch môn đến nơi r', 62, 63, 1),
(476, 'Nonnn', 63, 62, 1),
(477, 'cặc', 62, 63, 1),
(478, 'có gửi đc ảnh ko', 62, 63, 1),
(479, 'vd đéo gì lắm thế', 62, 63, 1),
(480, 'xóa cái animation đi', 62, 63, 1),
(481, 'animation cái đầu chim', 62, 63, 1),
(482, 'chị huế bạn có xinh ko', 62, 63, 1),
(483, 'có bạn', 63, 62, 1),
(484, 'ok', 63, 62, 1),
(485, 'hello bạnk', 63, 62, 1),
(486, 'hello bạnk', 63, 62, 1),
(487, 'ok', 63, 62, 1),
(488, 'ok bạn', 63, 62, 1),
(489, 'đừng tạch nhé bạn', 63, 62, 1),
(490, 'alo bạn hiền', 63, 62, 1),
(491, 'hú', 63, 62, 1),
(492, 'hú', 63, 62, 1),
(493, 'hu', 63, 62, 1),
(494, 'hu', 63, 62, 1),
(495, 'hu', 63, 62, 1),
(496, 'hú', 63, 62, 1),
(497, 'hihi', 63, 62, 1),
(498, 'alo', 63, 62, 1),
(499, 'alo', 62, 63, 1),
(500, 'đây', 62, 63, 1),
(501, 'alo', 63, 62, 1),
(502, 'mở meet đi bạn hiền', 63, 62, 1),
(503, 'mở làm gì', 62, 63, 1),
(504, 'mà ko hiện thời gian ak', 62, 63, 1),
(505, 'không bạn ', 63, 62, 1),
(506, 'code lởm nên làm gì có thời gian bạn', 63, 62, 1),
(507, 'dùng song thì đăng suất đi bạn', 63, 62, 1),
(508, 'chán', 63, 62, 1),
(509, 'kẹc', 62, 63, 1),
(510, 'kém', 63, 62, 1),
(511, 'ok bạn', 63, 62, 1),
(512, 'hello bạnk', 63, 62, 1),
(513, '       </script> </body>  </html>', 63, 62, 1),
(514, 'lỗi r', 62, 63, 1),
(515, 'web lậu có virut ko', 62, 63, 1),
(516, 'k lỗi', 63, 62, 1),
(517, 'có lỗi đâu :V', 63, 62, 1),
(518, 'chào bạn', 63, 64, 1),
(519, 'ừ chào bạn', 64, 63, 1),
(520, 'chào bạn nhé', 64, 62, 1),
(521, 'ok bạn', 63, 64, 0),
(522, 'hi', 65, 63, 1),
(523, 'chào em gái', 63, 65, 0),
(524, 'em có ny chưa', 63, 65, 0),
(525, 'Chào em', 63, 66, 1),
(526, 'Chào em', 63, 66, 1),
(527, 'Good morning ', 66, 63, 1),
(528, 'Ăn cơm đi', 63, 66, 1),
(529, 'Kém', 63, 62, 1),
(530, 'bạn k dùng web của tôi nữa à', 63, 62, 1),
(531, 'Có', 62, 63, 1),
(532, 'non', 63, 62, 1),
(533, 'có cái đầu chim', 63, 62, 1),
(534, 'đăng suất đi bạn ơi', 63, 62, 1),
(535, 'chán bạn quá', 63, 62, 1),
(536, 'hi', 63, 62, 1),
(537, 'hi', 63, 67, 1),
(538, 'hehe', 63, 67, 1),
(539, '123', 67, 63, 1),
(540, 'kkkkk', 63, 67, 1),
(541, 'hihi copy code trên mạng', 63, 67, 1),
(542, 'hello', 62, 63, 1),
(543, 'aaaa', 68, 62, 1),
(544, 'hello', 62, 68, 1),
(545, '111111', 63, 62, 0),
(546, 'chào', 63, 62, 0),
(547, 'chào', 63, 69, 1),
(548, 'ok bạn', 63, 69, 1),
(549, 'hello', 70, 62, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `user_message` (`id_user_send`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `user_message`
--
ALTER TABLE `user_message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=550;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `user_message`
--
ALTER TABLE `user_message`
  ADD CONSTRAINT `user_message` FOREIGN KEY (`id_user_send`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
