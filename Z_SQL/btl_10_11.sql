-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 03:46 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl_10_11`
--

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE `chude` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`id`, `ten`) VALUES
(1, 'vui');

-- --------------------------------------------------------

--
-- Table structure for table `hoi_hoidap`
--

CREATE TABLE `hoi_hoidap` (
  `id` int(11) NOT NULL,
  `phien` int(11) NOT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL,
  `cauhoi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `hoi_hoidap`
--

INSERT INTO `hoi_hoidap` (`id`, `phien`, `nguoitao`, `cauhoi`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'đi học có phải mang cặp không nhỉ', '2019-11-10 11:37:28', NULL),
(2, 2, 2, 'sáng thì nên ăn xôi hay ăn phở', '2019-11-11 05:51:50', NULL),
(3, 2, 5, '20/11 có phải đi học không nhỉ ?', '2019-11-11 02:20:02', '2019-11-11 02:20:02'),
(5, 1, 5, 'I love you 3000??\r\nDo you love me???', '2019-11-14 21:46:55', '2019-11-14 21:46:55'),
(6, 11, 5, 'hocj java the nao?', '2019-11-19 02:56:02', '2019-11-19 02:56:02'),
(7, 4, 5, 'mua cho tôi một gói bim, một một gói chip', '2019-11-20 12:19:14', '2019-11-20 12:19:14'),
(8, 26, 5, 'link tink cái tờ ring ting ting', '2019-11-22 03:04:11', '2019-11-22 03:04:11'),
(9, 26, 5, 'các bạn thấy mình có ngầu không', '2019-11-22 03:04:35', '2019-11-22 03:04:35'),
(10, 21, 10, 'day la cau hoi linh tinh ?', '2019-11-22 19:01:17', '2019-11-22 19:01:17'),
(12, 28, 15, 'cau hoi test hoy', '2019-11-25 09:50:19', '2019-11-25 09:50:19'),
(13, 30, 10, 'thoi gian thi la luc nao?', '2019-11-25 21:14:53', '2019-11-25 21:14:53'),
(14, 30, 1, '24/12 la ngay thi', '2019-11-25 21:17:19', '2019-11-25 21:17:19'),
(15, 31, 16, 'Nhi thích ăn gì nhỉ?', '2019-11-25 21:28:37', '2019-11-25 21:28:37'),
(16, 32, 16, 'Kì 2 năm học 2019-2020 bắt đầu từ lúc nào?', '2019-11-25 21:36:52', '2019-11-25 21:36:52'),
(17, 33, 17, 'câu hỏi 1', '2019-11-26 01:51:14', '2019-11-26 01:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `hoi_luachon`
--

CREATE TABLE `hoi_luachon` (
  `id` int(11) NOT NULL,
  `type` smallint(6) NOT NULL DEFAULT 1,
  `phien` int(11) NOT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL,
  `cauhoi` varchar(255) DEFAULT NULL,
  `so_luachon` int(11) NOT NULL DEFAULT 4,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `hoi_luachon`
--

INSERT INTO `hoi_luachon` (`id`, `type`, `phien`, `nguoitao`, `cauhoi`, `so_luachon`, `created_at`, `updated_at`) VALUES
(2, 1, 4, 5, 'con lợn có mấy chân', 4, '2019-11-22 06:52:27', '2019-11-22 06:52:27'),
(3, 1, 4, 5, 'bạn thích ăn gì', 4, '2019-11-22 08:39:28', '2019-11-22 08:39:28'),
(4, 1, 18, 10, 'con lợn có mấy chân', 4, '2019-11-23 20:40:44', '2019-11-23 20:40:44'),
(5, 1, 17, 10, 'con lợn có mấy chân', 4, '2019-11-24 01:42:34', '2019-11-24 01:42:34'),
(6, 1, 17, 10, 'ai là người khám phá ra thuyết tương đối rộng', 4, '2019-11-24 06:57:11', '2019-11-24 06:57:11'),
(7, 1, 17, 10, 'bạn thích ăn gì', 4, '2019-11-24 06:59:08', '2019-11-24 06:59:08'),
(8, 1, 17, 10, 'con lợn có mấy chân', 4, '2019-11-24 07:08:01', '2019-11-24 07:08:01'),
(9, 1, 22, 15, 'tri test hoy', 4, '2019-11-25 09:12:59', '2019-11-25 09:12:59'),
(10, 1, 22, 15, 'tri test hoy 2', 4, '2019-11-25 09:13:32', '2019-11-25 09:13:32'),
(11, 1, 24, 16, 'Một tuần bạn đi chơi bao nhiêu lần?', 4, '2019-11-25 21:30:33', '2019-11-25 21:30:33'),
(12, 1, 25, 16, 'Bạn thích xem phim ở nước nào?', 4, '2019-11-25 21:38:02', '2019-11-25 21:38:02'),
(13, 1, 25, 16, 'Bạn thích thể loại phim nào?', 4, '2019-11-25 21:38:33', '2019-11-25 21:38:33'),
(14, 1, 26, 5, 'con lợn có mấy chân', 4, '2019-11-26 01:53:47', '2019-11-26 01:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `hoi_luachon_txt`
--

CREATE TABLE `hoi_luachon_txt` (
  `id` int(11) NOT NULL,
  `type` smallint(6) NOT NULL DEFAULT 2,
  `phien` int(11) NOT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL,
  `cauhoi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `hoi_luachon_txt`
--

INSERT INTO `hoi_luachon_txt` (`id`, `type`, `phien`, `nguoitao`, `cauhoi`, `created_at`, `updated_at`) VALUES
(10, 2, 4, 5, 'test hoyyyyy', '2019-11-22 18:41:44', '2019-11-22 18:41:44'),
(11, 2, 18, 10, 'test hoyyyyy phuong', '2019-11-23 20:33:53', '2019-11-23 20:33:53'),
(12, 2, 17, 10, 'test hoyyyyy phuong', '2019-11-24 01:42:53', '2019-11-24 01:42:53'),
(13, 2, 22, 15, 'test hoyyyyy phuong', '2019-11-25 09:28:56', '2019-11-25 09:28:56'),
(14, 2, 23, 10, 'nhung noi dung can on tap la gi?', '2019-11-25 21:19:50', '2019-11-25 21:19:50'),
(15, 2, 24, 16, 'Muốn tâm sự không nào?', '2019-11-25 21:31:21', '2019-11-25 21:31:21'),
(16, 2, 25, 16, 'Kể tên một bộ phim mà bạn thích nhất?', '2019-11-25 21:39:24', '2019-11-25 21:39:24'),
(17, 2, 26, 5, 'bạn thích ăn gì ạ ??', '2019-11-26 01:54:27', '2019-11-26 01:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `hoi_luachon_yn`
--

CREATE TABLE `hoi_luachon_yn` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 3,
  `phien` int(11) NOT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL,
  `cauhoi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `hoi_luachon_yn`
--

INSERT INTO `hoi_luachon_yn` (`id`, `type`, `phien`, `nguoitao`, `cauhoi`, `created_at`, `updated_at`) VALUES
(10, 3, 4, 5, 'con mèo kêu meo meo', '2019-11-22 08:54:19', '2019-11-22 08:54:19'),
(11, 3, 18, 10, 'con mèo kêu meo meo', '2019-11-23 20:40:56', '2019-11-23 20:40:56'),
(12, 3, 17, 10, 'con mèo kêu meo meo', '2019-11-24 01:43:06', '2019-11-24 01:43:06'),
(13, 3, 22, 15, 'con mèo kêu meo meo', '2019-11-25 09:20:05', '2019-11-25 09:20:05'),
(14, 3, 22, 15, 'con mèo kêu meo meo', '2019-11-25 09:25:46', '2019-11-25 09:25:46'),
(15, 3, 23, 10, 'thi cuoi ki vao ngay nao?', '2019-11-25 21:19:35', '2019-11-25 21:19:35'),
(16, 3, 24, 16, 'Bạn thích đi chơi chứ?', '2019-11-25 21:31:04', '2019-11-25 21:31:04'),
(17, 3, 25, 16, 'Bạn thấy phim dài tập hay hơn phim ngắn đúng không?', '2019-11-25 21:39:01', '2019-11-25 21:39:01'),
(18, 3, 26, 5, 'con mèo kêu meo meo ??', '2019-11-26 01:54:05', '2019-11-26 01:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phien_hoidap`
--

CREATE TABLE `phien_hoidap` (
  `type` bit(1) DEFAULT b'1',
  `id` int(11) NOT NULL,
  `chude` int(11) NOT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `gioithieu` varchar(255) NOT NULL,
  `co_mk` bit(1) NOT NULL DEFAULT b'0',
  `matkhau` varchar(255) DEFAULT NULL,
  `gioihan` bit(1) NOT NULL DEFAULT b'0',
  `batdau` timestamp NULL DEFAULT NULL,
  `ketthuc` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `phien_hoidap`
--

INSERT INTO `phien_hoidap` (`type`, `id`, `chude`, `nguoitao`, `tieude`, `gioithieu`, `co_mk`, `matkhau`, `gioihan`, `batdau`, `ketthuc`, `created_at`, `updated_at`) VALUES
(b'1', 1, 1, 5, 'sáng mai ăn gì', 'nào các bạn, hãy cùng bàn về bữa sáng', b'0', '', b'0', NULL, NULL, '2019-11-10 10:44:46', NULL),
(b'1', 2, 1, 4, 'chém gió đêm khuya', 'hãy chém nhiệt tình các bạn ơi', b'0', '', b'1', '2019-11-08 17:00:00', '2019-11-15 17:00:00', '2019-11-10 10:59:05', NULL),
(b'1', 3, 1, 5, 'phiên chém gió', 'Phiên có nội dung chém gió', b'0', NULL, b'0', NULL, NULL, '2019-11-10 19:30:05', '2019-11-10 19:30:05'),
(b'1', 4, 1, 5, 'đi chợ', 'Phiên có nội dung đi chợ mua gì', b'1', '12345678', b'1', '2019-11-10 05:59:00', '2019-11-22 17:00:00', '2019-11-10 20:05:20', '2019-11-10 20:05:20'),
(b'1', 5, 1, 5, 'phiên chém gió part 2', 'Phiên có nội dung chems gio', b'1', '12345678', b'1', '2019-10-31 18:00:00', '2019-11-29 18:00:00', '2019-11-10 20:06:43', '2019-11-10 20:06:43'),
(b'1', 6, 1, 5, 'phiên chém gió part 2', 'Phiên có nội dung chems gio', b'1', '12345678', b'1', '2019-10-31 18:00:00', '2019-11-29 18:00:00', '2019-11-10 20:31:39', '2019-11-10 20:31:39'),
(b'1', 7, 1, 5, 'phiên chém gió part 2', 'Phiên có nội dung chems gio', b'1', '12345678', b'1', '2019-10-31 18:00:00', '2019-11-29 18:00:00', '2019-11-10 20:33:02', '2019-11-10 20:33:02'),
(b'1', 11, 1, 5, 'hoi dap', 'IT', b'0', NULL, b'0', NULL, NULL, '2019-11-19 02:55:45', '2019-11-19 02:55:45'),
(b'1', 13, 1, 5, 'phieu khao sat dau tien', 'Phiếu khảo  có nội dung xyz', b'0', NULL, b'0', NULL, NULL, '2019-11-20 00:48:48', '2019-11-20 00:48:48'),
(b'1', 14, 1, 5, 'phieu khao sat thu 1', 'Phiếu khảo  có nội dung abc', b'0', NULL, b'0', NULL, NULL, '2019-11-20 00:49:47', '2019-11-20 00:49:47'),
(b'1', 15, 1, 5, 'phieu khao sat thu 1', 'Phiếu khảo  có nội dung abc', b'0', NULL, b'0', NULL, NULL, '2019-11-20 00:50:10', '2019-11-20 00:50:10'),
(b'1', 16, 1, 5, 'phien khao sat', 'Phiếu khảo  có nội dung mcnmx', b'0', NULL, b'0', NULL, NULL, '2019-11-20 00:50:42', '2019-11-20 00:50:42'),
(b'1', 17, 1, 5, 'phiên chém gió', 'Phiên có nội dung ... linh tinh', b'0', NULL, b'0', NULL, NULL, '2019-11-20 11:43:29', '2019-11-20 11:43:29'),
(b'1', 18, 1, 5, 'phiên chém gió', 'Phiên có nội dung ... linh tinh', b'0', NULL, b'0', NULL, NULL, '2019-11-20 11:44:05', '2019-11-20 11:44:05'),
(b'1', 19, 1, 5, 'phiên chém gió', 'Phiên có nội dung ... linh tinh', b'0', NULL, b'1', '2019-11-29 18:01:00', '2019-12-19 18:01:00', '2019-11-20 12:57:55', '2019-11-20 12:57:55'),
(b'1', 20, 1, 5, 'phiên chém gió', 'Phiên có nội dung ... linh tinh', b'0', NULL, b'1', '2019-11-29 18:01:00', '2019-12-19 18:01:00', '2019-11-20 12:58:40', '2019-11-20 12:58:40'),
(b'1', 21, 1, 5, 'hoi dap', 'Phiên có nội dung ... linh tinh', b'0', NULL, b'1', '2019-11-19 18:01:00', '2019-11-29 18:01:00', '2019-11-20 13:01:51', '2019-11-20 13:01:51'),
(b'1', 26, 1, 5, 'hoi dap', 'Phiên có nội dung ... linh tinh', b'0', NULL, b'1', '2019-11-19 18:01:00', '2019-11-29 18:01:00', '2019-11-20 13:11:29', '2019-11-20 13:11:29'),
(b'1', 27, 1, 10, 'phiên chém gió asdfasdf', 'Phiên có nội dung ...dasfasdfdasf', b'0', NULL, b'0', NULL, NULL, '2019-11-24 07:34:18', '2019-11-24 07:34:18'),
(b'1', 28, 1, 10, 'phiên chém gió asdfasdf', 'Phiên có nội dung ...dasfasdfdasf', b'0', NULL, b'0', NULL, NULL, '2019-11-24 07:35:18', '2019-11-24 07:35:18'),
(b'1', 30, 1, 10, 'Hq quan tri lop so 8', 'Kiem tra cuoi ki', b'1', '12345678', b'0', NULL, NULL, '2019-11-25 21:14:35', '2019-11-25 21:14:35'),
(b'1', 31, 1, 16, 'khen Nhi đi', 'Nhi xinh vc', b'0', NULL, b'0', NULL, NULL, '2019-11-25 21:27:57', '2019-11-25 21:27:57'),
(b'1', 32, 1, 16, 'Tìm hiểu về học tập', 'Quá trình học tập của sinh viên', b'0', NULL, b'0', NULL, NULL, '2019-11-25 21:36:17', '2019-11-25 21:36:17'),
(b'1', 33, 1, 5, 'phien hỏi đáp', 'Phiên có nội dung bài tập lớn', b'1', '12345678', b'0', NULL, NULL, '2019-11-26 01:49:11', '2019-11-26 01:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `phien_luachon`
--

CREATE TABLE `phien_luachon` (
  `type` bit(1) DEFAULT b'0',
  `id` int(11) NOT NULL,
  `chude` int(11) NOT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `gioithieu` varchar(255) NOT NULL,
  `co_mk` bit(1) NOT NULL DEFAULT b'0',
  `matkhau` varchar(255) DEFAULT NULL,
  `gioihan` bit(1) NOT NULL DEFAULT b'0',
  `batdau` timestamp NULL DEFAULT NULL,
  `ketthuc` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `phien_luachon`
--

INSERT INTO `phien_luachon` (`type`, `id`, `chude`, `nguoitao`, `tieude`, `gioithieu`, `co_mk`, `matkhau`, `gioihan`, `batdau`, `ketthuc`, `created_at`, `updated_at`) VALUES
(b'0', 1, 1, 4, 'bao giờ lẫy vợ', 'bao giờ lẫy vợ đây !!!!!!!!!', b'0', '', b'0', NULL, NULL, '2019-11-10 10:46:24', NULL),
(b'0', 2, 1, 5, 'phiên chém gió', 'Phiếu khảo  có nội dung ...', b'0', NULL, b'0', NULL, NULL, '2019-11-20 01:01:47', '2019-11-20 01:01:47'),
(b'0', 3, 1, 5, 'khao sat abc xyz', 'Phiếu khảo  có nội dung link tinh', b'1', '12345678', b'1', '2019-11-20 06:00:00', '2019-11-29 17:00:00', '2019-11-20 02:07:35', '2019-11-20 02:07:35'),
(b'0', 4, 1, 5, 'đi chợ', 'Phiếu khảo  có nội dung ...', b'0', NULL, b'1', '2019-11-19 17:00:00', '2019-11-30 05:00:00', '2019-11-20 02:32:07', '2019-11-20 02:32:07'),
(b'0', 5, 1, 5, 'đi chợ', 'Phiếu khảo  có nội dung ...đi chợ mua gì', b'1', '12345678', b'0', NULL, NULL, '2019-11-22 03:07:10', '2019-11-22 03:07:10'),
(b'0', 6, 1, 5, 'đi chợ mua gì', 'Phiếu khảo  có nội dung ...đi chợ mua gì', b'1', '12345678', b'0', NULL, NULL, '2019-11-22 03:10:29', '2019-11-22 03:10:29'),
(b'0', 7, 1, 5, 'đi chợ mua gì', 'Phiếu khảo  có nội dung ...đi chợ mua gì', b'1', '12345678', b'0', NULL, NULL, '2019-11-22 03:12:59', '2019-11-22 03:12:59'),
(b'0', 8, 1, 5, 'đi chợ mua gì', 'Phiếu khảo  có nội dung ...đi chợ mua gì', b'1', '12345678', b'0', NULL, NULL, '2019-11-22 03:31:39', '2019-11-22 03:31:39'),
(b'0', 9, 1, 5, 'đi chợ mua gì', 'Phiếu khảo  có nội dung ...đi chợ mua gì', b'1', '12345678', b'0', NULL, NULL, '2019-11-22 03:39:46', '2019-11-22 03:39:46'),
(b'0', 10, 1, 5, 'đi chợ mua gì', 'Phiếu khảo  có nội dung ...đi chợ mua gì', b'1', '12345678', b'0', NULL, NULL, '2019-11-22 03:40:23', '2019-11-22 03:40:23'),
(b'0', 11, 1, 5, 'đi chợ mua gì', 'Phiếu khảo  có nội dung ...đi chợ mua gì', b'1', '12345678', b'0', NULL, NULL, '2019-11-22 04:50:12', '2019-11-22 04:50:12'),
(b'0', 12, 1, 10, 'phiên chém gió xyz', 'Phiếu khảo  có nội dung chem gio xyz', b'0', NULL, b'0', NULL, NULL, '2019-11-22 19:04:27', '2019-11-22 19:04:27'),
(b'0', 13, 1, 10, 'phiên chém gió xyz', 'Phiếu khảo  có nội dung chem gio xyz', b'0', NULL, b'0', NULL, NULL, '2019-11-22 19:05:33', '2019-11-22 19:05:33'),
(b'0', 14, 1, 10, 'phiên chém gió', 'Phiếu khảo  có nội dung ...   sfdsdaf', b'0', NULL, b'0', NULL, NULL, '2019-11-22 19:10:23', '2019-11-22 19:10:23'),
(b'0', 15, 1, 5, 'phiên chém gió', 'Phiếu khảo  có nội dung ...   sfdsdaf', b'0', NULL, b'0', NULL, NULL, '2019-11-22 19:14:43', '2019-11-22 19:14:43'),
(b'0', 16, 1, 5, 'phiên chém gió xyz', 'Phiếu khảo  có nội dung ...chemsssssssssssssssssssssssssssss', b'0', NULL, b'0', NULL, NULL, '2019-11-22 19:18:50', '2019-11-22 19:18:50'),
(b'0', 17, 1, 10, 'khao sat linh tinh', 'Nội dung: khao sat', b'1', '12345678', b'0', NULL, NULL, '2019-11-23 20:32:12', '2019-11-23 20:32:12'),
(b'0', 18, 1, 10, 'khao sat test', 'Nội dung: test', b'0', NULL, b'0', NULL, NULL, '2019-11-23 20:33:36', '2019-11-23 20:33:36'),
(b'0', 19, 1, 10, '/// phiên chém gió xyz', '///', b'1', '12345678', b'1', '2019-11-23 17:00:00', '2019-11-28 18:01:00', '2019-11-24 07:17:04', '2019-11-24 07:17:04'),
(b'0', 20, 1, 10, 'phiên chém gió zzzz', 'Nội dung: zzzzzzzzzzzzz', b'0', NULL, b'1', '2019-11-25 18:01:00', '2019-11-27 18:01:00', '2019-11-24 07:18:13', '2019-11-24 07:18:13'),
(b'0', 21, 1, 10, 'phiên chém gió xyz thoi gian', 'Nội dung: thoi giannnnnnnnnnnnnnnnn', b'0', NULL, b'1', '2019-11-27 17:00:00', '2019-11-29 17:00:00', '2019-11-24 19:46:02', '2019-11-24 19:46:02'),
(b'0', 22, 1, 15, 'phiên chém gió', 'Nội dung: tri tesyt', b'0', NULL, b'0', NULL, NULL, '2019-11-25 09:12:32', '2019-11-25 09:12:32'),
(b'0', 23, 1, 10, 'HQT lop so 8', 'Nội dung: test', b'0', NULL, b'0', NULL, NULL, '2019-11-25 21:19:10', '2019-11-25 21:19:10'),
(b'0', 24, 1, 16, 'thich chơi không?', 'bạn thích học hay thích chơi?', b'0', NULL, b'0', NULL, NULL, '2019-11-25 21:29:29', '2019-11-25 21:29:29'),
(b'0', 25, 1, 16, 'Khảo sát về film', 'Nội dung: Phim online', b'0', NULL, b'0', NULL, NULL, '2019-11-25 21:37:32', '2019-11-25 21:37:32'),
(b'0', 26, 1, 5, 'phiếu khảo sát', 'Nội dung: khảo sát', b'0', NULL, b'0', NULL, NULL, '2019-11-26 01:53:19', '2019-11-26 01:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `thamgia_hd`
--

CREATE TABLE `thamgia_hd` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phien` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `thamgia_hd`
--

INSERT INTO `thamgia_hd` (`id`, `user_id`, `phien`, `created_at`, `updated_at`) VALUES
(1, 10, 26, '2019-11-24 18:44:04', '2019-11-24 18:44:04'),
(5, 10, 5, '2019-11-24 19:43:39', '2019-11-24 19:43:39'),
(7, 5, 27, '2019-11-25 00:37:48', '2019-11-25 00:37:48'),
(8, 5, 28, '2019-11-25 00:48:25', '2019-11-25 00:48:25'),
(9, 10, 28, '2019-11-25 03:28:09', '2019-11-25 03:28:09'),
(10, 15, 28, '2019-11-25 09:45:28', '2019-11-25 09:45:28'),
(11, 10, 30, '2019-11-25 21:14:43', '2019-11-25 21:14:43'),
(12, 1, 30, '2019-11-25 21:17:10', '2019-11-25 21:17:10'),
(13, 16, 30, '2019-11-25 21:26:20', '2019-11-25 21:26:20'),
(14, 16, 31, '2019-11-25 21:28:04', '2019-11-25 21:28:04'),
(15, 10, 31, '2019-11-25 21:32:24', '2019-11-25 21:32:24'),
(16, 16, 32, '2019-11-25 21:36:21', '2019-11-25 21:36:21'),
(17, 5, 32, '2019-11-26 00:49:26', '2019-11-26 00:49:26'),
(18, 16, 13, '2019-11-26 01:12:54', '2019-11-26 01:12:54'),
(19, 16, 28, '2019-11-26 01:15:22', '2019-11-26 01:15:22'),
(20, 17, 33, '2019-11-26 01:51:05', '2019-11-26 01:51:05'),
(21, 5, 33, '2019-11-26 01:51:54', '2019-11-26 01:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `thamgia_lc`
--

CREATE TABLE `thamgia_lc` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phien` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `thamgia_lc`
--

INSERT INTO `thamgia_lc` (`id`, `user_id`, `phien`, `created_at`, `updated_at`) VALUES
(2, 10, 18, '2019-11-24 19:34:11', '2019-11-24 19:34:11'),
(4, 10, 21, '2019-11-24 19:46:03', '2019-11-24 19:46:03'),
(5, 5, 18, '2019-11-25 00:48:32', '2019-11-25 00:48:32'),
(6, 15, 22, '2019-11-25 09:12:32', '2019-11-25 09:12:32'),
(7, 10, 22, '2019-11-25 18:37:47', '2019-11-25 18:37:47'),
(8, 10, 23, '2019-11-25 21:19:11', '2019-11-25 21:19:11'),
(9, 1, 23, '2019-11-25 21:20:25', '2019-11-25 21:20:25'),
(10, 10, 16, '2019-11-25 21:23:38', '2019-11-25 21:23:38'),
(11, 16, 24, '2019-11-25 21:29:29', '2019-11-25 21:29:29'),
(12, 10, 24, '2019-11-25 21:32:01', '2019-11-25 21:32:01'),
(13, 16, 25, '2019-11-25 21:37:32', '2019-11-25 21:37:32'),
(14, 5, 26, '2019-11-26 01:53:19', '2019-11-26 01:53:19'),
(15, 17, 26, '2019-11-26 01:54:41', '2019-11-26 01:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `traloi_hoidap`
--

CREATE TABLE `traloi_hoidap` (
  `id` int(11) NOT NULL,
  `cauhoi` int(11) NOT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL,
  `cautraloi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `traloi_hoidap`
--

INSERT INTO `traloi_hoidap` (`id`, `cauhoi`, `nguoitao`, `cautraloi`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'theo tớ thì không nên mang cặp, vì thế mới ngầu', '2019-11-11 08:07:03', NULL),
(2, 1, 1, 'có, cặp là thứ rất quan trọng để dựng sách vở mà bạn', '2019-11-11 08:07:03', NULL),
(3, 1, 5, 'mình thì thi thoảng mới mang cặp thôi', '2019-11-11 01:56:37', '2019-11-11 01:56:37'),
(4, 5, 5, 'no', '2019-11-14 21:47:13', '2019-11-14 21:47:13'),
(5, 6, 5, 'ok', '2019-11-19 02:56:16', '2019-11-19 02:56:16'),
(6, 5, 5, 'ứ ừ', '2019-11-19 21:16:37', '2019-11-19 21:16:37'),
(7, 7, 5, 'đồng nào mua bim, đồng nào mua chip', '2019-11-20 12:19:38', '2019-11-20 12:19:38'),
(8, 7, 5, 'mua gói bánh rán còn hơn', '2019-11-20 12:22:02', '2019-11-20 12:22:02'),
(9, 9, 5, 'ok ngầu', '2019-11-22 03:04:45', '2019-11-22 03:04:45'),
(12, 12, 10, 'tra loi ne', '2019-11-25 18:34:37', '2019-11-25 18:34:37'),
(15, 8, 10, 'ban that cute', '2019-11-25 21:22:15', '2019-11-25 21:22:15'),
(16, 13, 16, 'ko noi :)))))', '2019-11-25 21:26:54', '2019-11-25 21:26:54'),
(17, 15, 10, 'Bạn tao ăn cả thế giới', '2019-11-25 21:33:19', '2019-11-25 21:33:19'),
(19, 17, 17, 'xin trả lời', '2019-11-26 01:51:39', '2019-11-26 01:51:39'),
(20, 17, 5, 'trả lời', '2019-11-26 01:52:20', '2019-11-26 01:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `traloi_luachon`
--

CREATE TABLE `traloi_luachon` (
  `id` int(11) NOT NULL,
  `cauhoi` int(11) NOT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `cautraloi` varchar(255) NOT NULL DEFAULT 'Đáp án khác',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `traloi_luachon`
--

INSERT INTO `traloi_luachon` (`id`, `cauhoi`, `nguoitao`, `cautraloi`, `created_at`, `updated_at`) VALUES
(1, 2, 5, '1', '2019-11-22 06:52:27', '2019-11-22 06:52:27'),
(2, 2, 5, '2', '2019-11-22 06:52:27', '2019-11-22 06:52:27'),
(3, 2, 5, '3', '2019-11-22 06:52:27', '2019-11-22 06:52:27'),
(4, 2, 5, '4', '2019-11-22 06:52:27', '2019-11-22 06:52:27'),
(5, 3, 5, 'chuối', '2019-11-22 08:39:28', '2019-11-22 08:39:28'),
(6, 3, 5, 'cam', '2019-11-22 08:39:28', '2019-11-22 08:39:28'),
(7, 3, 5, 'ổi', '2019-11-22 08:39:28', '2019-11-22 08:39:28'),
(8, 3, 5, 'sung', '2019-11-22 08:39:28', '2019-11-22 08:39:28'),
(9, 4, 10, '1', '2019-11-23 20:40:44', '2019-11-23 20:40:44'),
(10, 4, 10, '2', '2019-11-23 20:40:44', '2019-11-23 20:40:44'),
(11, 4, 10, '3', '2019-11-23 20:40:44', '2019-11-23 20:40:44'),
(12, 4, 10, '4', '2019-11-23 20:40:44', '2019-11-23 20:40:44'),
(13, 5, 10, '1', '2019-11-24 01:42:34', '2019-11-24 01:42:34'),
(14, 5, 10, '2', '2019-11-24 01:42:34', '2019-11-24 01:42:34'),
(15, 5, 10, '3', '2019-11-24 01:42:34', '2019-11-24 01:42:34'),
(16, 5, 10, '4', '2019-11-24 01:42:34', '2019-11-24 01:42:34'),
(17, 6, 10, 'anhxtanh', '2019-11-24 06:57:11', '2019-11-24 06:57:11'),
(18, 6, 10, 'newton', '2019-11-24 06:57:11', '2019-11-24 06:57:11'),
(19, 6, 10, 'trí', '2019-11-24 06:57:11', '2019-11-24 06:57:11'),
(20, 6, 10, 'ronaldo', '2019-11-24 06:57:11', '2019-11-24 06:57:11'),
(21, 7, 10, 'xôi', '2019-11-24 06:59:08', '2019-11-24 06:59:08'),
(22, 7, 10, 'phở', '2019-11-24 06:59:08', '2019-11-24 06:59:08'),
(23, 8, 10, '1', '2019-11-24 07:08:01', '2019-11-24 07:08:01'),
(24, 8, 10, '2', '2019-11-24 07:08:01', '2019-11-24 07:08:01'),
(25, 9, 15, 'z', '2019-11-25 09:12:59', '2019-11-25 09:12:59'),
(26, 9, 15, 'z', '2019-11-25 09:12:59', '2019-11-25 09:12:59'),
(27, 9, 15, 'z', '2019-11-25 09:12:59', '2019-11-25 09:12:59'),
(28, 9, 15, 'z', '2019-11-25 09:12:59', '2019-11-25 09:12:59'),
(29, 10, 15, '1', '2019-11-25 09:13:32', '2019-11-25 09:13:32'),
(30, 11, 16, 'Không bao giờ', '2019-11-25 21:30:33', '2019-11-25 21:30:33'),
(31, 11, 16, '1 lần', '2019-11-25 21:30:33', '2019-11-25 21:30:33'),
(32, 11, 16, 'Nhiều quá', '2019-11-25 21:30:33', '2019-11-25 21:30:33'),
(33, 12, 16, 'Việt Nam', '2019-11-25 21:38:02', '2019-11-25 21:38:02'),
(34, 12, 16, 'Trung Quốc', '2019-11-25 21:38:02', '2019-11-25 21:38:02'),
(35, 12, 16, 'Hàn Quốc', '2019-11-25 21:38:02', '2019-11-25 21:38:02'),
(36, 12, 16, 'Mỹ', '2019-11-25 21:38:02', '2019-11-25 21:38:02'),
(37, 13, 16, 'Hành động', '2019-11-25 21:38:33', '2019-11-25 21:38:33'),
(38, 13, 16, 'Ngôn tình', '2019-11-25 21:38:33', '2019-11-25 21:38:33'),
(39, 13, 16, 'Thiếu nhi', '2019-11-25 21:38:33', '2019-11-25 21:38:33'),
(40, 14, 5, '1', '2019-11-26 01:53:47', '2019-11-26 01:53:47'),
(41, 14, 5, '2', '2019-11-26 01:53:47', '2019-11-26 01:53:47'),
(42, 14, 5, '4', '2019-11-26 01:53:47', '2019-11-26 01:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `traloi_luachon_txt`
--

CREATE TABLE `traloi_luachon_txt` (
  `id` int(11) NOT NULL,
  `cauhoi` int(11) NOT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL,
  `cautraloi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `traloi_luachon_txt`
--

INSERT INTO `traloi_luachon_txt` (`id`, `cauhoi`, `nguoitao`, `cautraloi`, `created_at`, `updated_at`) VALUES
(10, 11, 10, 'test chi', '2019-11-23 20:53:03', '2019-11-23 20:53:03'),
(11, 11, 10, 'xxx yyy zzz', '2019-11-24 02:24:03', '2019-11-24 02:24:03'),
(12, 11, 10, 'ccc', '2019-11-24 02:53:10', '2019-11-24 02:53:10'),
(13, 11, 10, 'ccc', '2019-11-24 02:55:41', '2019-11-24 02:55:41'),
(14, 11, 10, 'dddd', '2019-11-24 03:06:57', '2019-11-24 03:06:57'),
(15, 11, 10, 'mmm', '2019-11-24 03:07:38', '2019-11-24 03:07:38'),
(16, 11, 10, 'jijioj', '2019-11-24 03:37:11', '2019-11-24 03:37:11'),
(17, 11, 10, 'zzzz', '2019-11-24 06:55:40', '2019-11-24 06:55:40'),
(18, 13, 15, 'zxcxcsvfsfsfsd', '2019-11-25 09:31:21', '2019-11-25 09:31:21'),
(19, 13, 15, 'cxczx', '2019-11-25 09:31:56', '2019-11-25 09:31:56'),
(20, 13, 15, 'xzzx', '2019-11-25 09:32:25', '2019-11-25 09:32:25'),
(21, 13, 10, 'ban la ai?', '2019-11-25 21:15:18', '2019-11-25 21:15:18'),
(22, 14, 1, 'function, view', '2019-11-25 21:20:51', '2019-11-25 21:20:51'),
(23, 15, 10, 'Không', '2019-11-25 21:32:17', '2019-11-25 21:32:17'),
(24, 17, 17, 'ăn phở', '2019-11-26 01:55:02', '2019-11-26 01:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `traloi_luachon_yn`
--

CREATE TABLE `traloi_luachon_yn` (
  `id` int(11) NOT NULL,
  `cauhoi` int(11) DEFAULT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL,
  `yesno` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `traloi_luachon_yn`
--

INSERT INTO `traloi_luachon_yn` (`id`, `cauhoi`, `nguoitao`, `yesno`, `created_at`, `updated_at`) VALUES
(2, 10, 5, 0, '2019-11-22 09:34:25', '2019-11-22 09:34:25'),
(3, 10, 10, 1, '2019-11-22 19:03:25', '2019-11-22 19:03:25'),
(4, 11, 10, 1, '2019-11-23 20:53:03', '2019-11-23 20:53:03'),
(5, 11, 10, 1, '2019-11-24 02:24:03', '2019-11-24 02:24:03'),
(6, 11, 10, NULL, '2019-11-24 02:49:58', '2019-11-24 02:49:58'),
(7, 11, 10, NULL, '2019-11-24 02:53:10', '2019-11-24 02:53:10'),
(8, 11, 10, NULL, '2019-11-24 02:55:41', '2019-11-24 02:55:41'),
(9, 11, 10, 0, '2019-11-24 03:06:57', '2019-11-24 03:06:57'),
(10, 11, 10, NULL, '2019-11-24 03:07:38', '2019-11-24 03:07:38'),
(11, 11, 10, 1, '2019-11-24 03:37:11', '2019-11-24 03:37:11'),
(12, 11, 10, 1, '2019-11-24 06:55:40', '2019-11-24 06:55:40'),
(13, 13, 15, 1, '2019-11-25 09:29:06', '2019-11-25 09:29:06'),
(14, 14, 15, 1, '2019-11-25 09:29:06', '2019-11-25 09:29:06'),
(15, 13, 15, 1, '2019-11-25 09:29:20', '2019-11-25 09:29:20'),
(16, 14, 15, 1, '2019-11-25 09:29:20', '2019-11-25 09:29:20'),
(17, 13, 15, 1, '2019-11-25 09:31:21', '2019-11-25 09:31:21'),
(18, 14, 15, 1, '2019-11-25 09:31:21', '2019-11-25 09:31:21'),
(19, 13, 15, NULL, '2019-11-25 09:31:56', '2019-11-25 09:31:56'),
(20, 14, 15, NULL, '2019-11-25 09:31:56', '2019-11-25 09:31:56'),
(21, 13, 15, 0, '2019-11-25 09:32:25', '2019-11-25 09:32:25'),
(22, 14, 15, NULL, '2019-11-25 09:32:25', '2019-11-25 09:32:25'),
(23, 13, 15, NULL, '2019-11-25 09:34:16', '2019-11-25 09:34:16'),
(24, 14, 15, NULL, '2019-11-25 09:34:16', '2019-11-25 09:34:16'),
(25, 13, 15, NULL, '2019-11-25 09:36:03', '2019-11-25 09:36:03'),
(26, 14, 15, NULL, '2019-11-25 09:36:03', '2019-11-25 09:36:03'),
(27, 13, 10, 1, '2019-11-25 21:15:18', '2019-11-25 21:15:18'),
(28, 14, 10, 1, '2019-11-25 21:15:18', '2019-11-25 21:15:18'),
(29, 15, 10, NULL, '2019-11-25 21:19:56', '2019-11-25 21:19:56'),
(30, 15, 1, 1, '2019-11-25 21:20:51', '2019-11-25 21:20:51'),
(31, 16, 10, 1, '2019-11-25 21:32:17', '2019-11-25 21:32:17'),
(32, 17, 16, 1, '2019-11-26 01:13:34', '2019-11-26 01:13:34'),
(33, 18, 17, 0, '2019-11-26 01:55:02', '2019-11-26 01:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hữu Trí', 'huutri26697@gmail.com', NULL, '$2y$10$AvVw2jvBw2/la2ctUzvos.CZhRrL3K3TLkbnRBWV5BdzhvWJxsF/i', 1, NULL, '2019-11-10 00:35:06', '2019-11-10 00:35:06'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$VPpYcsLPqYIQhiE2pjwOf.ljDFGDjQO.Oyq1.Hqc8qF/o8PQbusmC', 0, NULL, '2019-11-10 00:39:50', '2019-11-10 00:39:50'),
(4, 'tris GV', 'tri@gmail.com', NULL, '$2y$10$Y3/fk8XEb/rOImCVniU4P.291Bne52SXjJAk1IK5EtMV0GwzvDZBO', 2, NULL, '2019-11-10 03:40:40', '2019-11-10 03:40:40'),
(5, 'lien GV', 'liencute@gmail.com', NULL, '$2y$10$9UE8ZmUeqbL5OrzIkN8I/eVZJ1ivh9amCbaqc5r9lV0BqcYsqW3lS', 2, NULL, '2019-11-10 03:41:45', '2019-11-10 03:41:45'),
(10, 'phuong xinh gai', 'phuong@gmail.com', NULL, '$2y$10$gaMEswCo4C4ncWggr/J/7OsSeps7vaf7l/tJioI6NIQ7EOrTbdiSG', 2, NULL, '2019-11-22 19:00:44', '2019-11-22 19:00:44'),
(12, 'Hữu Trí', 'huutri27@gmail.com', NULL, '$2y$10$DGQO9Muk9pdw4XM4eFZZ5.eAkHKaUt94DnBPQ9qXlnBej51R8te7G', 2, NULL, '2019-11-24 09:19:25', '2019-11-24 09:19:25'),
(15, 'Hữu Trí xmen', 'huutrix@gmail.com', NULL, '$2y$10$Hqj6jGjTb9yAC15fMjy53.Ljm8pet33v/ZlUjlnHPWpwX8YmEaHNK', 2, NULL, '2019-11-25 09:08:08', '2019-11-25 09:08:08'),
(16, 'nguyen nhi', 'nhi@gmail.com', NULL, '$2y$10$9CjEZ1JWMd3A92BB8JSxqu3mQARrVMV8al6xZpIGTy5N51BYN9KUy', 2, NULL, '2019-11-25 21:25:54', '2019-11-25 21:25:54'),
(17, 'tri', 'tri12345@gmail.com', NULL, '$2y$10$sMvtXdAvanrtomfChXhkne/CdPt2SJN2qogz6xdHUwvH7m4xi72A2', 1, NULL, '2019-11-26 01:50:54', '2019-11-26 01:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_chon`
--

CREATE TABLE `user_chon` (
  `id` int(11) NOT NULL,
  `cautraloi` int(11) NOT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `user_chon`
--

INSERT INTO `user_chon` (`id`, `cautraloi`, `nguoitao`, `created_at`, `updated_at`) VALUES
(1, 2, 5, '2019-11-22 08:28:18', '2019-11-22 08:28:18'),
(4, 2, 5, '2019-11-22 09:14:31', '2019-11-22 09:14:31'),
(5, 8, 5, '2019-11-22 09:14:31', '2019-11-22 09:14:31'),
(6, 2, 5, '2019-11-22 09:15:56', '2019-11-22 09:15:56'),
(7, 6, 5, '2019-11-22 09:15:56', '2019-11-22 09:15:56'),
(8, 2, 5, '2019-11-22 09:17:20', '2019-11-22 09:17:20'),
(9, 6, 5, '2019-11-22 09:17:20', '2019-11-22 09:17:20'),
(11, 1, 5, '2019-11-22 09:17:38', '2019-11-22 09:17:38'),
(12, 7, 5, '2019-11-22 09:17:38', '2019-11-22 09:17:38'),
(13, 4, 5, '2019-11-22 09:21:12', '2019-11-22 09:21:12'),
(14, 6, 5, '2019-11-22 09:21:12', '2019-11-22 09:21:12'),
(15, 4, 5, '2019-11-22 09:21:24', '2019-11-22 09:21:24'),
(16, 8, 5, '2019-11-22 09:21:24', '2019-11-22 09:21:24'),
(17, 2, 5, '2019-11-22 09:22:13', '2019-11-22 09:22:13'),
(18, 6, 5, '2019-11-22 09:22:13', '2019-11-22 09:22:13'),
(19, 1, 5, '2019-11-22 09:22:58', '2019-11-22 09:22:58'),
(20, 6, 5, '2019-11-22 09:22:58', '2019-11-22 09:22:58'),
(21, 1, 5, '2019-11-22 09:23:19', '2019-11-22 09:23:19'),
(22, 6, 5, '2019-11-22 09:23:19', '2019-11-22 09:23:19'),
(23, 1, 5, '2019-11-22 09:34:25', '2019-11-22 09:34:25'),
(24, 5, 5, '2019-11-22 09:34:25', '2019-11-22 09:34:25'),
(25, 1, 10, '2019-11-22 19:03:25', '2019-11-22 19:03:25'),
(26, 6, 10, '2019-11-22 19:03:25', '2019-11-22 19:03:25'),
(27, 10, 10, '2019-11-23 20:53:03', '2019-11-23 20:53:03'),
(28, 9, 10, '2019-11-24 02:24:03', '2019-11-24 02:24:03'),
(29, 10, 10, '2019-11-24 02:48:35', '2019-11-24 02:48:35'),
(31, 9, 10, '2019-11-24 02:49:58', '2019-11-24 02:49:58'),
(32, 10, 10, '2019-11-24 02:53:10', '2019-11-24 02:53:10'),
(33, 10, 10, '2019-11-24 02:55:41', '2019-11-24 02:55:41'),
(34, 12, 10, '2019-11-24 03:06:57', '2019-11-24 03:06:57'),
(35, 11, 10, '2019-11-24 03:07:38', '2019-11-24 03:07:38'),
(36, 9, 10, '2019-11-24 03:37:11', '2019-11-24 03:37:11'),
(37, 9, 10, '2019-11-24 06:55:40', '2019-11-24 06:55:40'),
(39, 27, 15, '2019-11-25 09:16:41', '2019-11-25 09:16:41'),
(40, 25, 15, '2019-11-25 09:29:20', '2019-11-25 09:29:20'),
(41, 29, 15, '2019-11-25 09:29:20', '2019-11-25 09:29:20'),
(42, 25, 15, '2019-11-25 09:31:21', '2019-11-25 09:31:21'),
(43, 29, 15, '2019-11-25 09:31:21', '2019-11-25 09:31:21'),
(44, 28, 15, '2019-11-25 09:31:56', '2019-11-25 09:31:56'),
(45, 29, 15, '2019-11-25 09:31:56', '2019-11-25 09:31:56'),
(46, 25, 10, '2019-11-25 21:15:18', '2019-11-25 21:15:18'),
(47, 29, 10, '2019-11-25 21:15:18', '2019-11-25 21:15:18'),
(48, 32, 10, '2019-11-25 21:32:17', '2019-11-25 21:32:17'),
(49, 33, 16, '2019-11-26 01:13:34', '2019-11-26 01:13:34'),
(50, 39, 16, '2019-11-26 01:13:34', '2019-11-26 01:13:34'),
(51, 41, 17, '2019-11-26 01:55:02', '2019-11-26 01:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_like`
--

CREATE TABLE `user_like` (
  `id` int(11) NOT NULL,
  `cautraloi` int(11) NOT NULL,
  `nguoitao` bigint(20) UNSIGNED NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoi_hoidap`
--
ALTER TABLE `hoi_hoidap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nguoi_dat_cauhoi_1` (`nguoitao`),
  ADD KEY `FK_thuoc_phien_1` (`phien`);

--
-- Indexes for table `hoi_luachon`
--
ALTER TABLE `hoi_luachon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nguoi_dat_cauhoi_2` (`nguoitao`),
  ADD KEY `FK_thuoc_phien_2` (`phien`);

--
-- Indexes for table `hoi_luachon_txt`
--
ALTER TABLE `hoi_luachon_txt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nguoi_dat_cauhoi_txt` (`nguoitao`),
  ADD KEY `FK_thuoc_phien_txt` (`phien`);

--
-- Indexes for table `hoi_luachon_yn`
--
ALTER TABLE `hoi_luachon_yn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nguoi_dat_cauhoi_yn` (`nguoitao`),
  ADD KEY `FK_thuoc_phien_yn` (`phien`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phien_hoidap`
--
ALTER TABLE `phien_hoidap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nguoitao_phien_1` (`nguoitao`),
  ADD KEY `FK_chude_phien_1` (`chude`);

--
-- Indexes for table `phien_luachon`
--
ALTER TABLE `phien_luachon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nguoitao_phien_2` (`nguoitao`),
  ADD KEY `FK_chude_phien_2` (`chude`);

--
-- Indexes for table `thamgia_hd`
--
ALTER TABLE `thamgia_hd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nguoi_thamgia_phien` (`user_id`),
  ADD KEY `FK_thamgia_phien_nao` (`phien`);

--
-- Indexes for table `thamgia_lc`
--
ALTER TABLE `thamgia_lc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nguoi_thamgia_phien_lc` (`user_id`),
  ADD KEY `FK_thamgia_phienlc_nao` (`phien`);

--
-- Indexes for table `traloi_hoidap`
--
ALTER TABLE `traloi_hoidap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nguoi_traloi_cauhoi_1` (`nguoitao`),
  ADD KEY `FK_thuoc_cauhoi_1` (`cauhoi`);

--
-- Indexes for table `traloi_luachon`
--
ALTER TABLE `traloi_luachon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nguoi_traloi_cauhoi_2` (`nguoitao`),
  ADD KEY `FK_thuoc_cauhoi_2` (`cauhoi`);

--
-- Indexes for table `traloi_luachon_txt`
--
ALTER TABLE `traloi_luachon_txt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nguoi_traloi_cauhoi_x` (`nguoitao`),
  ADD KEY `FK_thuoc_cauhoi_x` (`cauhoi`);

--
-- Indexes for table `traloi_luachon_yn`
--
ALTER TABLE `traloi_luachon_yn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ai_chon_x` (`nguoitao`),
  ADD KEY `FK_cauhoi_nao` (`cauhoi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_chon`
--
ALTER TABLE `user_chon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ai_chon` (`nguoitao`),
  ADD KEY `FK_chon_gi` (`cautraloi`);

--
-- Indexes for table `user_like`
--
ALTER TABLE `user_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ai_like` (`nguoitao`),
  ADD KEY `FK_like_gi` (`cautraloi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chude`
--
ALTER TABLE `chude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hoi_hoidap`
--
ALTER TABLE `hoi_hoidap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hoi_luachon`
--
ALTER TABLE `hoi_luachon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hoi_luachon_txt`
--
ALTER TABLE `hoi_luachon_txt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hoi_luachon_yn`
--
ALTER TABLE `hoi_luachon_yn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phien_hoidap`
--
ALTER TABLE `phien_hoidap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `phien_luachon`
--
ALTER TABLE `phien_luachon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `thamgia_hd`
--
ALTER TABLE `thamgia_hd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `thamgia_lc`
--
ALTER TABLE `thamgia_lc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `traloi_hoidap`
--
ALTER TABLE `traloi_hoidap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `traloi_luachon`
--
ALTER TABLE `traloi_luachon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `traloi_luachon_txt`
--
ALTER TABLE `traloi_luachon_txt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `traloi_luachon_yn`
--
ALTER TABLE `traloi_luachon_yn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_chon`
--
ALTER TABLE `user_chon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_like`
--
ALTER TABLE `user_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoi_hoidap`
--
ALTER TABLE `hoi_hoidap`
  ADD CONSTRAINT `FK_nguoi_dat_cauhoi_1` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_thuoc_phien_1` FOREIGN KEY (`phien`) REFERENCES `phien_hoidap` (`id`);

--
-- Constraints for table `hoi_luachon`
--
ALTER TABLE `hoi_luachon`
  ADD CONSTRAINT `FK_nguoi_dat_cauhoi_2` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_thuoc_phien_2` FOREIGN KEY (`phien`) REFERENCES `phien_luachon` (`id`);

--
-- Constraints for table `hoi_luachon_txt`
--
ALTER TABLE `hoi_luachon_txt`
  ADD CONSTRAINT `FK_nguoi_dat_cauhoi_txt` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_thuoc_phien_txt` FOREIGN KEY (`phien`) REFERENCES `phien_luachon` (`id`);

--
-- Constraints for table `hoi_luachon_yn`
--
ALTER TABLE `hoi_luachon_yn`
  ADD CONSTRAINT `FK_nguoi_dat_cauhoi_yn` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_thuoc_phien_yn` FOREIGN KEY (`phien`) REFERENCES `phien_luachon` (`id`);

--
-- Constraints for table `phien_hoidap`
--
ALTER TABLE `phien_hoidap`
  ADD CONSTRAINT `FK_chude_phien_1` FOREIGN KEY (`chude`) REFERENCES `chude` (`id`),
  ADD CONSTRAINT `FK_nguoitao_phien_1` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`);

--
-- Constraints for table `phien_luachon`
--
ALTER TABLE `phien_luachon`
  ADD CONSTRAINT `FK_chude_phien_2` FOREIGN KEY (`chude`) REFERENCES `chude` (`id`),
  ADD CONSTRAINT `FK_nguoitao_phien_2` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`);

--
-- Constraints for table `thamgia_hd`
--
ALTER TABLE `thamgia_hd`
  ADD CONSTRAINT `FK_nguoi_thamgia_phien` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_thamgia_phien_nao` FOREIGN KEY (`phien`) REFERENCES `phien_hoidap` (`id`);

--
-- Constraints for table `thamgia_lc`
--
ALTER TABLE `thamgia_lc`
  ADD CONSTRAINT `FK_nguoi_thamgia_phien_lc` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_thamgia_phienlc_nao` FOREIGN KEY (`phien`) REFERENCES `phien_luachon` (`id`);

--
-- Constraints for table `traloi_hoidap`
--
ALTER TABLE `traloi_hoidap`
  ADD CONSTRAINT `FK_nguoi_traloi_cauhoi_1` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_thuoc_cauhoi_1` FOREIGN KEY (`cauhoi`) REFERENCES `hoi_hoidap` (`id`);

--
-- Constraints for table `traloi_luachon`
--
ALTER TABLE `traloi_luachon`
  ADD CONSTRAINT `FK_nguoi_traloi_cauhoi_2` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_thuoc_cauhoi_2` FOREIGN KEY (`cauhoi`) REFERENCES `hoi_luachon` (`id`);

--
-- Constraints for table `traloi_luachon_txt`
--
ALTER TABLE `traloi_luachon_txt`
  ADD CONSTRAINT `FK_nguoi_traloi_cauhoi_1_x` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_thuoc_cauhoi_1_x` FOREIGN KEY (`cauhoi`) REFERENCES `hoi_luachon_txt` (`id`);

--
-- Constraints for table `traloi_luachon_yn`
--
ALTER TABLE `traloi_luachon_yn`
  ADD CONSTRAINT `FK_ai_chon_x` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_cauhoi_nao` FOREIGN KEY (`cauhoi`) REFERENCES `hoi_luachon_yn` (`id`);

--
-- Constraints for table `user_chon`
--
ALTER TABLE `user_chon`
  ADD CONSTRAINT `FK_ai_chon` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_chon_gi` FOREIGN KEY (`cautraloi`) REFERENCES `traloi_luachon` (`id`);

--
-- Constraints for table `user_like`
--
ALTER TABLE `user_like`
  ADD CONSTRAINT `FK_ai_like` FOREIGN KEY (`nguoitao`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_like_gi` FOREIGN KEY (`cautraloi`) REFERENCES `traloi_hoidap` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
