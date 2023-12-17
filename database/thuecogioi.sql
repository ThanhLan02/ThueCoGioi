-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2023 lúc 04:09 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuecogioi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_tb`
--

CREATE TABLE `anh_tb` (
  `id` int(11) NOT NULL,
  `ThietBi_ID` int(11) NOT NULL,
  `anh` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anh_tb`
--

INSERT INTO `anh_tb` (`id`, `ThietBi_ID`, `anh`, `created_at`, `updated_at`) VALUES
(1, 3, 'user.jpg', '2023-12-17 04:52:19', '2023-12-17 04:52:19'),
(2, 3, 'product005.png', '2023-12-17 04:52:40', '2023-12-17 04:52:40'),
(3, 3, 'product003.png', '2023-12-17 04:52:43', '2023-12-17 04:52:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_tx`
--

CREATE TABLE `anh_tx` (
  `id` int(11) NOT NULL,
  `TaiXe_ID` int(11) NOT NULL,
  `anh` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anh_tx`
--

INSERT INTO `anh_tx` (`id`, `TaiXe_ID`, `anh`, `created_at`, `updated_at`) VALUES
(1, 6, 'user_icon_149329.png', '2023-12-17 06:21:08', '2023-12-17 06:21:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd_taixe`
--

CREATE TABLE `chitiethd_taixe` (
  `id` int(11) NOT NULL,
  `HoaDon_ID` int(11) NOT NULL,
  `TaiXe_ID` int(11) NOT NULL,
  `NCT_ID` bigint(20) UNSIGNED NOT NULL,
  `dongia` int(11) NOT NULL,
  `TinhTrang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethd_taixe`
--

INSERT INTO `chitiethd_taixe` (`id`, `HoaDon_ID`, `TaiXe_ID`, `NCT_ID`, `dongia`, `TinhTrang`, `created_at`, `updated_at`) VALUES
(3, 19, 3, 2, 200000, 1, '2023-12-17 08:02:58', '2023-12-17 08:04:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd_thietbi`
--

CREATE TABLE `chitiethd_thietbi` (
  `id` int(11) NOT NULL,
  `HoaDon_ID` int(11) NOT NULL,
  `ThietBi_ID` int(11) NOT NULL,
  `NCT_ID` bigint(20) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `TinhTrang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethd_thietbi`
--

INSERT INTO `chitiethd_thietbi` (`id`, `HoaDon_ID`, `ThietBi_ID`, `NCT_ID`, `soluong`, `dongia`, `TinhTrang`, `created_at`, `updated_at`) VALUES
(13, 17, 3, 11, 1, 200000, -1, '2023-12-17 02:24:33', '2023-12-17 03:50:26'),
(14, 17, 4, 11, 1, 200000, -1, '2023-12-17 02:24:33', '2023-12-17 03:50:26'),
(15, 18, 1, 2, 1, 200000, 1, '2023-12-17 03:36:18', '2023-12-17 03:37:41'),
(16, 18, 4, 11, 1, 200000, 1, '2023-12-17 03:36:18', '2023-12-17 03:36:50'),
(17, 19, 1, 2, 1, 200000, 1, '2023-12-17 08:02:58', '2023-12-17 08:04:33'),
(18, 19, 2, 2, 1, 200000, 1, '2023-12-17 08:02:58', '2023-12-17 08:04:34'),
(19, 19, 3, 11, 1, 200000, 1, '2023-12-17 08:02:58', '2023-12-17 08:05:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(11) NOT NULL,
  `NguoiDung_ID` bigint(20) UNSIGNED NOT NULL,
  `SoSao` int(11) NOT NULL,
  `BinhLuan` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NgayLap` datetime NOT NULL,
  `ThietBi_ID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`id`, `NguoiDung_ID`, `SoSao`, `BinhLuan`, `NgayLap`, `ThietBi_ID`, `created_at`, `updated_at`) VALUES
(1, 11, 5, 'hay', '2023-12-17 00:00:00', 3, '2023-12-17 05:52:28', '2023-12-17 05:52:28'),
(2, 11, 3, 'hay quá trời', '2023-12-17 00:00:00', 3, '2023-12-17 05:54:35', '2023-12-17 05:54:35'),
(3, 11, 1, 'tuyệt vời quá', '2023-12-17 00:00:00', 1, '2023-12-17 06:43:25', '2023-12-17 06:43:25'),
(4, 11, 4, 'tuyệt vời', '2023-12-17 00:00:00', 4, '2023-12-17 06:47:41', '2023-12-17 06:47:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia_taixe`
--

CREATE TABLE `danhgia_taixe` (
  `id` int(11) NOT NULL,
  `SoSao` int(11) NOT NULL,
  `BinhLuan` text NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiDung_ID` bigint(20) UNSIGNED NOT NULL,
  `TaiXe_ID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia_taixe`
--

INSERT INTO `danhgia_taixe` (`id`, `SoSao`, `BinhLuan`, `NgayLap`, `NguoiDung_ID`, `TaiXe_ID`, `created_at`, `updated_at`) VALUES
(1, 4, 'good', '2023-12-17 00:00:00', 11, 3, '2023-12-17 05:59:26', '2023-12-17 05:59:26'),
(2, 5, 'adadada', '2023-12-17 00:00:00', 11, 4, '2023-12-17 06:45:59', '2023-12-17 06:45:59'),
(3, 5, '12121', '2023-12-17 00:00:00', 11, 4, '2023-12-17 06:46:31', '2023-12-17 06:46:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang_taixe`
--

CREATE TABLE `giohang_taixe` (
  `id` int(11) NOT NULL,
  `TaiXe_ID` int(11) NOT NULL,
  `TaiXe_Ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TaiXe_Gia` int(11) NOT NULL,
  `TaiXe_Anh` varchar(100) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `NguoiDung_ID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang_thietbi`
--

CREATE TABLE `giohang_thietbi` (
  `id` int(11) NOT NULL,
  `ThietBi_ID` int(11) DEFAULT NULL,
  `ThietBi_Ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ThietBi_Gia` int(11) NOT NULL,
  `ThietBi_Anh` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `NguoiDung_ID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `id` int(11) NOT NULL,
  `TenHang` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`id`, `TenHang`, `created_at`, `updated_at`) VALUES
(1, 'Hitachi', NULL, NULL),
(2, 'Komatsu', NULL, NULL),
(3, 'Hamm', NULL, NULL),
(4, 'Sony', '2023-11-09 11:39:17', '2023-11-09 11:39:17'),
(6, 'aloalo11', '2023-11-09 12:14:39', '2023-11-09 12:14:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiNhan` bigint(20) UNSIGNED NOT NULL,
  `SDT` varchar(12) NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PhuongThucTT` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TongTien` int(11) NOT NULL,
  `TinhTrang` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `NgayLap`, `NguoiNhan`, `SDT`, `DiaChi`, `PhuongThucTT`, `TongTien`, `TinhTrang`, `created_at`, `updated_at`) VALUES
(17, '2023-12-17 00:00:00', 11, '0123456789', 'Tỉnh Tuyên Quang , Huyện Na Hang , Xã Thượng Nông', NULL, 400000, -1, '2023-12-17 02:24:33', '2023-12-17 03:50:26'),
(18, '2023-12-17 00:00:00', 11, '0123456789', 'Tỉnh Sơn La , Huyện Bắc Yên , Xã Xím Vàng', NULL, 400000, 1, '2023-12-17 03:36:18', '2023-12-17 03:37:41'),
(19, '2023-12-17 00:00:00', 2, '0123456789', 'Tỉnh Tuyên Quang , Huyện Chiêm Hóa , Xã Hùng Mỹ', NULL, 800000, 1, '2023-12-17 08:02:58', '2023-12-17 08:05:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdomg`
--

CREATE TABLE `hopdomg` (
  `NguoiChoThue` int(11) NOT NULL,
  `HoaDon_ID` int(11) NOT NULL,
  `NguoiThue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` int(11) NOT NULL,
  `TenKM` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GiaTriKM` int(11) NOT NULL,
  `NgayBD` date NOT NULL,
  `NgayKT` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `TenKM`, `GiaTriKM`, `NgayBD`, `NgayKT`, `created_at`, `updated_at`) VALUES
(1, '9/9', 50, '2023-10-11', '2023-10-15', '2023-11-09 17:13:03', '2023-11-09 17:13:03'),
(2, '9/10', 20, '2023-11-10', '2023-11-19', '2023-11-09 17:21:10', '2023-11-09 17:23:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaixe`
--

CREATE TABLE `loaixe` (
  `id` int(11) NOT NULL,
  `TenLoai` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaixe`
--

INSERT INTO `loaixe` (`id`, `TenLoai`, `created_at`, `updated_at`) VALUES
(1, 'xe cẩu', '2023-11-09 12:14:46', '2023-11-09 12:14:46'),
(2, 'Xe công', '2023-11-09 12:14:55', '2023-11-09 12:14:55'),
(3, 'xe cẩu 23', '2023-11-09 12:15:08', '2023-11-09 12:16:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_nguoidung_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `HoTen` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GioiTinh` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SDT` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TaiKhoan` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `Quyen_ID` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenquyen` varchar(100) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`id`, `tenquyen`, `mota`) VALUES
(1, 'admin', 'admin'),
(2, 'nguoichothue', 'Người cho thuê'),
(3, 'nguoithue', 'Người thuê');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taixe`
--

CREATE TABLE `taixe` (
  `id` int(11) NOT NULL,
  `TenTX` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GioiTinh` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SDT` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Anh` text NOT NULL,
  `MoTa` text NOT NULL,
  `GiaThue` int(11) NOT NULL,
  `GiaKM` int(11) DEFAULT NULL,
  `KhuyenMai_ID` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `SoSao` int(11) DEFAULT NULL,
  `SoDanhGia` int(11) DEFAULT NULL,
  `NguoiDung_ID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taixe`
--

INSERT INTO `taixe` (`id`, `TenTX`, `GioiTinh`, `SDT`, `DiaChi`, `Email`, `Anh`, `MoTa`, `GiaThue`, `GiaKM`, `KhuyenMai_ID`, `TrangThai`, `SoSao`, `SoDanhGia`, `NguoiDung_ID`, `created_at`, `updated_at`) VALUES
(1, 'lan', 'Nam', '0123456789', '75 to hieu', 'lanpro@gmail.com', 'product005.png', 'hay', 500000, 2000002, 1, 1, 0, 0, 2, '2023-11-16 06:05:52', '2023-11-16 06:29:37'),
(2, 'lan2', 'Nam', '0123456789', '75 to hieu', 'lanpro2@gmail.com', 'product004.png', 'hay', 500000, 200000, 1, 1, 0, 0, 2, '2023-11-16 06:10:59', '2023-11-16 06:10:59'),
(3, 'lan3', 'Nam', '0123456789', '75 to hieu', 'lanpro5@gmail.com', 'product004.png', 'hay', 500000, 200000, 1, 1, 0, 0, 2, '2023-11-16 06:12:04', '2023-11-16 06:12:04'),
(4, 'lan4', 'Nam', '0123456789', '75 to hieu', 'Nd@gmail.com', 'product04.png', 'hay', 500000, 200000, 1, 1, 10, 2, 2, '2023-11-16 06:15:31', '2023-12-17 06:46:31'),
(6, 'lan', 'Nam', '0123456789', 'Thành phố Hà Nội , Quận Hoàn Kiếm , Phường Phúc Tân', 'Nd@gmail.com', 'product004.png', 'Tôi lái được xe ben , xe cẩu', 500000, 350000, 1, 1, 0, 0, 11, '2023-12-17 04:20:02', '2023-12-17 07:24:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thietbi`
--

CREATE TABLE `thietbi` (
  `id` int(11) NOT NULL,
  `TenTB` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MoTa` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `File` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Anh` text NOT NULL,
  `GiaThue` int(11) NOT NULL,
  `GiaKM` int(11) NOT NULL,
  `TinhTrang` int(11) NOT NULL,
  `Loai_ID` int(11) NOT NULL,
  `Hang_ID` int(11) NOT NULL,
  `KhuyenMai_ID` int(11) NOT NULL,
  `SoSao` int(11) DEFAULT NULL,
  `SoDanhGIa` int(11) DEFAULT NULL,
  `NguoiDung_ID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thietbi`
--

INSERT INTO `thietbi` (`id`, `TenTB`, `MoTa`, `File`, `Anh`, `GiaThue`, `GiaKM`, `TinhTrang`, `Loai_ID`, `Hang_ID`, `KhuyenMai_ID`, `SoSao`, `SoDanhGIa`, `NguoiDung_ID`, `created_at`, `updated_at`) VALUES
(1, 'Xe cẩu', 'xe mạnh', 'SCC550A单行本-英文-20180507.pdf', 'product003.png', 500000, 200000, 1, 1, 1, 1, 1, 1, 2, '2023-11-16 07:14:56', '2023-12-17 06:43:25'),
(2, 'CẨU TRỤC BÁNH LỐP 25 TẤN', 'Cẩu trục bánh lốp 25 Tấn siêu xịn', 'SCC550A单行本-英文-20180507.pdf', 'product001.png', 500000, 200000, 1, 1, 1, 1, 0, 0, 2, '2023-11-16 07:23:59', '2023-11-16 07:23:59'),
(3, 'CẨU TRỤC BÁNH LỐP 25 TẤN', 'Cẩu trục bánh lốp 25 Tấn siêu xịn', 'SCC550A单行本-英文-20180507.pdf', 'product003.png', 50000022, 200000, 1, 1, 1, 1, 0, 0, 11, '2023-12-07 09:36:41', '2023-12-07 10:04:26'),
(4, 'Xe cẩu', 'hay', 'SCC550A单行本-英文-20180507.pdf', 'product002.png', 500000, 200000, 1, 1, 1, 1, 4, 1, 11, '2023-12-07 10:00:06', '2023-12-17 06:47:42'),
(5, 'CẨU TRỤC BÁNH LỐP 25 TẤN', 'Cẩu trục bánh lốp 25 Tấn siêu xịn', 'SCC550A单行本-英文-20180507.pdf', 'shop001.png', 500000, 200000, 1, 1, 3, 1, 0, 0, 11, '2023-12-07 10:01:19', '2023-12-14 07:53:10'),
(6, 'CẨU TRỤC BÁNH LỐP 25 TẤN', 'Cẩu trục bánh lốp 25 Tấn siêu xịn', 'SCC550A单行本-英文-20180507.pdf', 'product005.png', 500000, 200000, 1, 2, 1, 2, 0, 0, 11, '2023-12-07 10:02:49', '2023-12-14 07:53:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hoten` varchar(255) DEFAULT NULL,
  `gioitinh` varchar(255) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `sdt` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `congty` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `quyen_id` int(10) UNSIGNED DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `hoten`, `gioitinh`, `ngaysinh`, `sdt`, `anh`, `congty`, `email`, `diachi`, `email_verified_at`, `password`, `quyen_id`, `trangthai`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'newbie', 'Nam', '2002-06-26', '0904613293', 'user_icon_149329.png', 'Unicorn', 'lanthanh@gmail.com', 'hoaiNhon', NULL, '$2y$10$PujrcNDYpeFvO0ovYAcYoewzdDAdR.vm7CnGDcV7JJOEQfIFX95Vi', 1, NULL, NULL, NULL, '2023-11-09 18:53:57'),
(6, 'Huy', 'Nam', '2002-11-26', '0904613293', 'product004.png', 'ccc', 'ddaaru14@gmail.com', '75 tô hiệu', NULL, '$2y$10$T0NNlbShbKeEswYWuYVnEOZsiVyuhpN8GnLp6eJdrldjcSfNQUNHG', 1, NULL, NULL, '2023-11-09 07:58:48', '2023-11-09 18:51:45'),
(7, 'Lân', 'Nam', '2002-11-26', '0904613293', 'product004.png', 'ccc1', 'Nghihack022@gmail.com', 'auhdlsadlkasmlk', NULL, '$2y$10$uHGeOA6GO/kTKqybhuSHY.PZID6eKKlYdS1he2zNoeAvz3x.ptYMC', 1, NULL, NULL, '2023-11-09 08:02:11', '2023-11-09 18:52:08'),
(8, 'ngợi', 'Nam', '2002-11-26', '0904613293', 'shop01.png', 'ccc1', 'lanthanh2@gmail.com', 'hoaiNhon', NULL, '$2y$10$bKDEjy.LSb0zhLBZjrrjjezMkQN7pqXo6J0YEUa7NEJuTwK/Cdjyy', 1, NULL, NULL, '2023-11-09 08:05:16', '2023-11-09 09:47:16'),
(10, 'Hồ Hoàng Huy', 'Nam', '2002-11-11', '0904613293', 'product004.png', 'Huy', 'huy@gmail.com', '75 tô hiệu', NULL, '$2y$10$oIau6IEMXdBh.KyMiTGNeOXegtFj0YpaphM.fAHX9GObv5b3rk7hS', 2, NULL, NULL, '2023-11-30 06:14:06', '2023-11-30 06:14:06'),
(11, 'Lân', 'Nam', '2002-11-26', '0904613293', 'user.jpg', 'ccc1', 'Unicorn@gmail.com', '75 tô hiệu', NULL, '$2y$10$VBRLhvNRFa9mBKKU7T9p6ew6W0/g04MpMa.uaTDjau16HOAbpTjde', 2, 0, NULL, '2023-12-07 07:01:06', '2023-12-07 07:01:06');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_tb`
--
ALTER TABLE `anh_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_anh_tb` (`ThietBi_ID`);

--
-- Chỉ mục cho bảng `anh_tx`
--
ALTER TABLE `anh_tx`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_anh_tx` (`TaiXe_ID`);

--
-- Chỉ mục cho bảng `chitiethd_taixe`
--
ALTER TABLE `chitiethd_taixe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CTTX_HD` (`HoaDon_ID`),
  ADD KEY `FK_CTTX_TX` (`TaiXe_ID`),
  ADD KEY `FK_CTTX_ND` (`NCT_ID`);

--
-- Chỉ mục cho bảng `chitiethd_thietbi`
--
ALTER TABLE `chitiethd_thietbi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CT_HD` (`HoaDon_ID`),
  ADD KEY `FK_CT_TB` (`ThietBi_ID`),
  ADD KEY `FK_CT_ND` (`NCT_ID`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_DG_ND` (`NguoiDung_ID`),
  ADD KEY `FK_DG_TB` (`ThietBi_ID`);

--
-- Chỉ mục cho bảng `danhgia_taixe`
--
ALTER TABLE `danhgia_taixe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_DGTX_ND` (`NguoiDung_ID`),
  ADD KEY `FK_DGTX_TX` (`TaiXe_ID`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `giohang_taixe`
--
ALTER TABLE `giohang_taixe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_GHTX_TX` (`TaiXe_ID`),
  ADD KEY `FK_GHTX_ND` (`NguoiDung_ID`);

--
-- Chỉ mục cho bảng `giohang_thietbi`
--
ALTER TABLE `giohang_thietbi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_GHTB_TB` (`ThietBi_ID`),
  ADD KEY `FK_GHTB_ND` (`NguoiDung_ID`);

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_HD_NN` (`NguoiNhan`);

--
-- Chỉ mục cho bảng `hopdomg`
--
ALTER TABLE `hopdomg`
  ADD PRIMARY KEY (`NguoiChoThue`,`NguoiThue`,`HoaDon_ID`),
  ADD KEY `FK_HD_NT` (`NguoiThue`),
  ADD KEY `FK_HD_HD` (`HoaDon_ID`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`),
  ADD UNIQUE KEY `SDT` (`SDT`),
  ADD KEY `FK_ND_QUYEN` (`Quyen_ID`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taixe`
--
ALTER TABLE `taixe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_TX_Anh` (`Anh`(768)),
  ADD KEY `FK_TX_KM` (`KhuyenMai_ID`),
  ADD KEY `FK_TX_ND` (`NguoiDung_ID`);

--
-- Chỉ mục cho bảng `thietbi`
--
ALTER TABLE `thietbi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_TB_Anh` (`Anh`(768)),
  ADD KEY `FK_TB_KM` (`KhuyenMai_ID`),
  ADD KEY `FK_TB_Loai` (`Loai_ID`),
  ADD KEY `FK_TB_Hang` (`Hang_ID`),
  ADD KEY `FK_TB_ND` (`NguoiDung_ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nguoidung_email_unique` (`email`),
  ADD KEY `FK_ND_QUYEN` (`quyen_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_tb`
--
ALTER TABLE `anh_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `anh_tx`
--
ALTER TABLE `anh_tx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chitiethd_taixe`
--
ALTER TABLE `chitiethd_taixe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `chitiethd_thietbi`
--
ALTER TABLE `chitiethd_thietbi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `danhgia_taixe`
--
ALTER TABLE `danhgia_taixe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang_taixe`
--
ALTER TABLE `giohang_taixe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `giohang_thietbi`
--
ALTER TABLE `giohang_thietbi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `taixe`
--
ALTER TABLE `taixe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `thietbi`
--
ALTER TABLE `thietbi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anh_tb`
--
ALTER TABLE `anh_tb`
  ADD CONSTRAINT `FK_anh_tb` FOREIGN KEY (`ThietBi_ID`) REFERENCES `thietbi` (`id`);

--
-- Các ràng buộc cho bảng `anh_tx`
--
ALTER TABLE `anh_tx`
  ADD CONSTRAINT `FK_anh_tx` FOREIGN KEY (`TaiXe_ID`) REFERENCES `taixe` (`id`);

--
-- Các ràng buộc cho bảng `chitiethd_taixe`
--
ALTER TABLE `chitiethd_taixe`
  ADD CONSTRAINT `FK_CTTX_HD` FOREIGN KEY (`HoaDon_ID`) REFERENCES `hoadon` (`id`),
  ADD CONSTRAINT `FK_CTTX_ND` FOREIGN KEY (`NCT_ID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_CTTX_TX` FOREIGN KEY (`TaiXe_ID`) REFERENCES `taixe` (`id`);

--
-- Các ràng buộc cho bảng `chitiethd_thietbi`
--
ALTER TABLE `chitiethd_thietbi`
  ADD CONSTRAINT `FK_CT_HD` FOREIGN KEY (`HoaDon_ID`) REFERENCES `hoadon` (`id`),
  ADD CONSTRAINT `FK_CT_ND` FOREIGN KEY (`NCT_ID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_CT_TB` FOREIGN KEY (`ThietBi_ID`) REFERENCES `thietbi` (`id`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `FK_DG_ND` FOREIGN KEY (`NguoiDung_ID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_DG_TB` FOREIGN KEY (`ThietBi_ID`) REFERENCES `thietbi` (`id`);

--
-- Các ràng buộc cho bảng `danhgia_taixe`
--
ALTER TABLE `danhgia_taixe`
  ADD CONSTRAINT `FK_DGTX_TX` FOREIGN KEY (`TaiXe_ID`) REFERENCES `taixe` (`id`);

--
-- Các ràng buộc cho bảng `giohang_taixe`
--
ALTER TABLE `giohang_taixe`
  ADD CONSTRAINT `FK_GHTX_ND` FOREIGN KEY (`NguoiDung_ID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_GHTX_TX` FOREIGN KEY (`TaiXe_ID`) REFERENCES `taixe` (`id`);

--
-- Các ràng buộc cho bảng `giohang_thietbi`
--
ALTER TABLE `giohang_thietbi`
  ADD CONSTRAINT `FK_GHTB_ND` FOREIGN KEY (`NguoiDung_ID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_GHTB_TB` FOREIGN KEY (`ThietBi_ID`) REFERENCES `thietbi` (`id`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_HD_NN` FOREIGN KEY (`NguoiNhan`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `hopdomg`
--
ALTER TABLE `hopdomg`
  ADD CONSTRAINT `FK_HD_HD` FOREIGN KEY (`HoaDon_ID`) REFERENCES `hoadon` (`id`),
  ADD CONSTRAINT `FK_HD_NCT` FOREIGN KEY (`NguoiChoThue`) REFERENCES `nguoidung` (`MaND`),
  ADD CONSTRAINT `FK_HD_NT` FOREIGN KEY (`NguoiThue`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `taixe`
--
ALTER TABLE `taixe`
  ADD CONSTRAINT `FK_TX_KM` FOREIGN KEY (`KhuyenMai_ID`) REFERENCES `khuyenmai` (`id`),
  ADD CONSTRAINT `FK_TX_ND` FOREIGN KEY (`NguoiDung_ID`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `thietbi`
--
ALTER TABLE `thietbi`
  ADD CONSTRAINT `FK_TB_H` FOREIGN KEY (`Hang_ID`) REFERENCES `hang` (`id`),
  ADD CONSTRAINT `FK_TB_KM` FOREIGN KEY (`KhuyenMai_ID`) REFERENCES `khuyenmai` (`id`),
  ADD CONSTRAINT `FK_TB_L` FOREIGN KEY (`Loai_ID`) REFERENCES `loaixe` (`id`),
  ADD CONSTRAINT `FK_TB_ND` FOREIGN KEY (`NguoiDung_ID`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_ND_QUYEN` FOREIGN KEY (`quyen_id`) REFERENCES `quyen` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
