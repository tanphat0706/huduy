-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 09:38 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huduy`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `title`, `description`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'day chi la test', 'img_test_1484385920.png', 'http://huduy.dev/balo-laptop', 1, '2017-01-14 02:25:21', '2017-01-14 02:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `alias`, `description`, `image`, `created_at`, `updated_at`) VALUES
(12, 'Balo du lịch', 'balo-du-lich', '', 'product-4.jpg', '2017-01-12 13:11:28', '2016-12-18 16:29:35'),
(13, 'Cặp táp', 'cap-tap', '', 'product-5.jpg', '2017-01-12 13:11:23', '2016-12-18 16:32:16'),
(9, 'Vali kéo', 'vali-keo', '', 'product-1.jpg', '2017-01-12 13:10:46', '2016-12-18 15:37:13'),
(10, 'Balo laptop', 'balo-laptop', '', 'product-2.jpg', '2017-01-12 13:10:56', '2016-12-18 16:26:30'),
(11, 'Balo học sinh', 'balo-hoc-sinh', '', 'product-3.jpg', '2017-01-12 13:11:05', '2016-12-18 16:33:22'),
(14, 'Túi du lịch', 'tui-du-lich', '', 'product-6.jpg', '2017-01-12 13:11:19', '2016-12-18 16:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `groups_roles`
--

CREATE TABLE `groups_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups_roles`
--

INSERT INTO `groups_roles` (`id`, `group_id`, `role_id`, `created_at`, `updated_at`) VALUES
(103, 1, 54, '2016-07-10 23:46:38', '2016-07-10 23:46:38'),
(104, 1, 55, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(105, 1, 56, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(106, 1, 57, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(107, 1, 58, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(108, 1, 59, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(109, 1, 60, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(110, 1, 61, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(111, 1, 1, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(112, 1, 2, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(113, 1, 3, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(114, 1, 4, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(115, 1, 5, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(116, 1, 6, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(117, 1, 7, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(118, 1, 8, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(142, 6, 54, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(143, 6, 55, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(144, 6, 56, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(145, 6, 57, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(146, 6, 58, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(147, 6, 59, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(148, 6, 60, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(149, 6, 61, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(150, 5, 54, '2017-01-14 01:00:04', '2017-01-14 01:00:04'),
(151, 5, 55, '2017-01-14 01:00:04', '2017-01-14 01:00:04'),
(152, 5, 56, '2017-01-14 01:00:04', '2017-01-14 01:00:04'),
(153, 5, 57, '2017-01-14 01:00:04', '2017-01-14 01:00:04'),
(154, 5, 58, '2017-01-14 01:00:04', '2017-01-14 01:00:04'),
(155, 5, 59, '2017-01-14 01:00:04', '2017-01-14 01:00:04'),
(156, 5, 60, '2017-01-14 01:00:04', '2017-01-14 01:00:04'),
(157, 5, 61, '2017-01-14 01:00:04', '2017-01-14 01:00:04'),
(158, 5, 1, '2017-01-14 01:00:04', '2017-01-14 01:00:04'),
(159, 5, 2, '2017-01-14 01:00:04', '2017-01-14 01:00:04'),
(160, 5, 3, '2017-01-14 01:00:04', '2017-01-14 01:00:04'),
(161, 5, 4, '2017-01-14 01:00:04', '2017-01-14 01:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `meta_description` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(10) NOT NULL,
  `alias` varchar(1000) NOT NULL,
  `description` longtext NOT NULL,
  `short_description` text NOT NULL,
  `image_1` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `image_2` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `image_3` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `image_4` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `image_5` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `image_6` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `bestseller` tinyint(1) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `meta_description`, `name`, `code`, `alias`, `description`, `short_description`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `highlight`, `bestseller`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '', 'Vali kéo mẫu màu xanh', '', 'vali-keo-mau-mau-xanh', '<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12px"><span style="color:#404040"><span style="font-family:arial,helvetica,"><span style="background-color:#ffffff"><span style="color:#000000">- Với chất liệu 100% nhựa PC si&ecirc;u bền, si&ecirc;u nhẹ gi&uacute;p cho vali c&oacute; độ đ&agrave;n hồi tốt, chịu được nhiệt độ cao, chống va đập v&agrave; chống thấm nước.</span></span></span></span></span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12px"><span style="color:#404040"><span style="font-family:arial,helvetica,"><span style="background-color:#ffffff"><span style="color:#000000"><span style="font-family:arial,helvetica,DejaVu Sans,Arial Unicode MS,Lucida Sans Unicode,sans-serif">- D&acirc;y k&eacute;o tr&ecirc;n vali được trang bị kết hợp với k</span>h&oacute;a số TSA được cục an ninh H&ograve;a Kỳ chứng nhận v&igrave; vậy bạn c&oacute; thể y&ecirc;n t&acirc;m h&agrave;nh l&yacute; sẽ lu&ocirc;n được đảm bảo an to&agrave;n.</span></span></span></span></span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12px"><span style="color:#404040"><span style="font-family:arial,helvetica,"><span style="background-color:#ffffff"><span style="color:#000000"><span style="font-family:arial,helvetica,DejaVu Sans,Arial Unicode MS,Lucida Sans Unicode,sans-serif">- Cần k&eacute;o của vali Rovigo được l&agrave;m từ hợp kim nh&ocirc;m với trọng lượng nhẹ nhưng đem lại sự chắc chắn cho cần k&eacute;o của vali. Cần k&eacute;o c&oacute; thể thay đổi chiều d&agrave;i ph&ugrave; hợp với người d&ugrave;ng.&nbsp;</span>Vali c&oacute; tay x&aacute;ch v&agrave; tay k&eacute;o hỗ trợ tốt cho việc di chuyển vali dưới mọi địa h&igrave;nh.</span></span></span></span></span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12px"><span style="color:#404040"><span style="font-family:arial,helvetica,"><span style="background-color:#ffffff"><span style="color:#000000">- B&ecirc;n trong vali với d&acirc;y đai h&igrave;nh chữ X cho ph&eacute;p giữ chặt h&agrave;nh l&yacute; của bạn trong suốt h&agrave;nh tr&igrave;nh.</span></span></span></span></span></p>\r\n\r\n<ul>\r\n	<li>Chất liệu: 100% Nhựa PC</li>\r\n	<li>K&iacute;ch thước: 55 x 37 x 23 cm</li>\r\n	<li>Trọng lượng: 2,9 Kg</li>\r\n	<li>Thể t&iacute;ch: 47 L</li>\r\n	<li>Kh&oacute;a: TSA</li>\r\n	<li>B&aacute;nh xe: 8</li>\r\n</ul>\r\n', 'Vali kéo mẫu màu xanh', 'img_vali_keo_mau_mau_xanh_1.jpg', 'img_vali_keo_mau_mau_xanh_2.jpg', 'img_vali_keo_mau_mau_xanh_3.jpg', 'img_vali_keo_mau_mau_xanh_4.jpg', 'img_vali_keo_mau_mau_xanh_5.jpg', 'no-image.png', 1, 0, 9, '2017-01-12 06:25:28', '2017-01-12 07:58:43'),
(2, '', 'Vali kéo mẫu màu hong', '', 'vali-keo-mau-mau-hong', '<p>- Với chất liệu 100% nhựa PC si&ecirc;u bền, si&ecirc;u nhẹ gi&uacute;p cho vali c&oacute; độ đ&agrave;n hồi tốt, chịu được nhiệt độ cao, chống va đập v&agrave; chống thấm nước.</p>\r\n\r\n<p>- D&acirc;y k&eacute;o tr&ecirc;n vali được trang bị kết hợp với kh&oacute;a số TSA được cục an ninh H&ograve;a Kỳ chứng nhận v&igrave; vậy bạn c&oacute; thể y&ecirc;n t&acirc;m h&agrave;nh l&yacute; sẽ lu&ocirc;n được đảm bảo an to&agrave;n.</p>\r\n\r\n<p>- Cần k&eacute;o của vali Rovigo được l&agrave;m từ hợp kim nh&ocirc;m với trọng lượng nhẹ nhưng đem lại sự chắc chắn cho cần k&eacute;o của vali. Cần k&eacute;o c&oacute; thể thay đổi chiều d&agrave;i ph&ugrave; hợp với người d&ugrave;ng.&nbsp;Vali c&oacute; tay x&aacute;ch v&agrave; tay k&eacute;o hỗ trợ tốt cho việc di chuyển vali dưới mọi địa h&igrave;nh.</p>\r\n\r\n<p>- B&ecirc;n trong vali với d&acirc;y đai h&igrave;nh chữ X cho ph&eacute;p giữ chặt h&agrave;nh l&yacute; của bạn trong suốt h&agrave;nh tr&igrave;nh.</p>\r\n\r\n<ul>\r\n	<li>Chất liệu: 100% Nhựa PC</li>\r\n	<li>K&iacute;ch thước: 55 x 37 x 23 cm</li>\r\n	<li>Trọng lượng: 2,9 Kg</li>\r\n	<li>Thể t&iacute;ch: 47 L</li>\r\n	<li>Kh&oacute;a: TSA</li>\r\n	<li>B&aacute;nh xe: 8</li>\r\n</ul>\r\n', 'Vali kéo mẫu màu hong', 'img_vali_keo_mau_mau_hong_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 0, 9, '2017-01-13 08:36:24', '2017-01-13 08:36:24'),
(3, '', 'Vali kéo mẫu màu xam', '', 'vali-keo-mau-mau-xam', '<p>- Với chất liệu 100% nhựa PC si&ecirc;u bền, si&ecirc;u nhẹ gi&uacute;p cho vali c&oacute; độ đ&agrave;n hồi tốt, chịu được nhiệt độ cao, chống va đập v&agrave; chống thấm nước.</p>\r\n\r\n<p>- D&acirc;y k&eacute;o tr&ecirc;n vali được trang bị kết hợp với kh&oacute;a số TSA được cục an ninh H&ograve;a Kỳ chứng nhận v&igrave; vậy bạn c&oacute; thể y&ecirc;n t&acirc;m h&agrave;nh l&yacute; sẽ lu&ocirc;n được đảm bảo an to&agrave;n.</p>\r\n\r\n<p>- Cần k&eacute;o của vali Rovigo được l&agrave;m từ hợp kim nh&ocirc;m với trọng lượng nhẹ nhưng đem lại sự chắc chắn cho cần k&eacute;o của vali. Cần k&eacute;o c&oacute; thể thay đổi chiều d&agrave;i ph&ugrave; hợp với người d&ugrave;ng.&nbsp;Vali c&oacute; tay x&aacute;ch v&agrave; tay k&eacute;o hỗ trợ tốt cho việc di chuyển vali dưới mọi địa h&igrave;nh.</p>\r\n\r\n<p>- B&ecirc;n trong vali với d&acirc;y đai h&igrave;nh chữ X cho ph&eacute;p giữ chặt h&agrave;nh l&yacute; của bạn trong suốt h&agrave;nh tr&igrave;nh.</p>\r\n\r\n<ul>\r\n	<li>Chất liệu: 100% Nhựa PC</li>\r\n	<li>K&iacute;ch thước: 55 x 37 x 23 cm</li>\r\n	<li>Trọng lượng: 2,9 Kg</li>\r\n	<li>Thể t&iacute;ch: 47 L</li>\r\n	<li>Kh&oacute;a: TSA</li>\r\n	<li>B&aacute;nh xe: 8</li>\r\n</ul>\r\n', 'Vali kéo mẫu màu xam', 'img_vali_keo_mau_mau_xam_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 0, 9, '2017-01-13 08:37:05', '2017-01-13 08:37:05'),
(4, '', 'Balo laptop xanh', '', 'balo-laptop-xanh', '<p>Repudiandae purus minim diam convallis id corrupti leo anim magni porro dolorum neque ullam, urna, fugiat perferendis wisi eaque scelerisque, optio! Fugiat vehicula integer quos a eiusmod ullamcorper ea placeat, nunc maxime lobortis fugiat imperdiet aspernatur tempus natus voluptas quo, convallis ipsam ornare dictumst, eu adi</p>\r\n\r\n<p>Repudiandae purus minim diam convallis id corrupti leo anim magni porro dolorum neque ullam, urna, fugiat perferendis wisi eaque scelerisque, optio! Fugiat vehicula integer quos a eiusmod ullamcorper ea placeat, nunc maxime lobortis fugiat imperdiet aspernatur tempus natus voluptas quo, convallis ipsam ornare dictumst, eu adi</p>\r\n\r\n<p>Repudiandae purus minim diam convallis id corrupti leo anim magni porro dolorum neque ullam, urna, fugiat perferendis wisi eaque scelerisque, optio! Fugiat vehicula integer quos a eiusmod ullamcorper ea placeat, nunc maxime lobortis fugiat imperdiet aspernatur tempus natus voluptas quo, convallis ipsam ornare dictumst, eu adi</p>\r\n', 'Balo laptop xanh', 'img_balo_laptop_xanh_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 1, 10, '2017-01-13 08:37:38', '2017-01-13 20:57:29'),
(5, '', 'Cap tap da 1', '', 'cap-tap-da-1', '<p>Montes debitis, pede maiores potenti, rhoncus convallis porta, fugiat ac. Dapibus, dolor? Explicabo suscipit, iure. Earum. Repellat inceptos! Parturient dapibus, facere illo! Magna quos platea architecto aliquam dictum nemo diamlorem fringilla delectus officiis laborum tenetur asperiores. Mollitia, varius? Praesent veritatis,</p>\r\n\r\n<p>Montes debitis, pede maiores potenti, rhoncus convallis porta, fugiat ac. Dapibus, dolor? Explicabo suscipit, iure. Earum. Repellat inceptos! Parturient dapibus, facere illo! Magna quos platea architecto aliquam dictum nemo diamlorem fringilla delectus officiis laborum tenetur asperiores. Mollitia, varius? Praesent veritatis,</p>\r\n', 'Cap tap da 1', 'img_cap_tap_da_1_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 0, 13, '2017-01-13 08:38:12', '2017-01-13 08:38:12'),
(6, '', 'ABCD', '', 'abcd', '<p>ugiat aliquam mattis ridiculus? Occaecat impedit, quas facere consequatur penatibus, turpis quisque eaque, maecenas aliquid earum voluptatibus mi ducimus dictumst! Eligendi! Imperdiet ad doloremque dictumst aute pellentesque deleniti eveniet magnam tristique omnis ullamcorper eiusm</p>\r\n\r\n<p>ugiat aliquam mattis ridiculus? Occaecat impedit, quas facere consequatur penatibus, turpis quisque eaque, maecenas aliquid earum voluptatibus mi ducimus dictumst! Eligendi! Imperdiet ad doloremque dictumst aute pellentesque deleniti eveniet magnam tristique omnis ullamcorper eiusm</p>\r\n', '', 'img_abcd_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 1, 11, '2017-01-14 00:21:54', '2017-01-14 00:21:54'),
(7, '', 'YOOOyyyyyy', '', 'yoooyyyyyy', '<p>ravida, lacus? Exercitationem? Autem numquam! Consequatur alias tristique lacus, vehicula, justo nunc habitasse, senectus penatibus? Veritatis accusantium adipisci, inventore accusamus veniam, error cubilia eleifend suspendisse! Venenatis dis ab sed, at, curabitur sit ipsam? Quam aliquam ea quam, euismod hic, habitant</p>\r\n\r\n<p>ravida, lacus? Exercitationem? Autem numquam! Consequatur alias tristique lacus, vehicula, justo nunc habitasse, senectus penatibus? Veritatis accusantium adipisci, inventore accusamus veniam, error cubilia eleifend suspendisse! Venenatis dis ab sed, at, curabitur sit ipsam? Quam aliquam ea quam, euismod hic, habitant</p>\r\n', '', 'img_yoooyyyyyy_1.jpg', 'no-image.png', 'img_yoooyyyyyy_3.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 0, 0, 14, '2017-01-14 01:20:17', '2017-01-14 01:20:17'),
(8, '', 'abcdikủie', 'GHUT123', 'abcdikuie', '<p>vag &aacute;df &aacute;df sadf&aacute; df</p>\r\n', '', 'img_abcdikuie_1.jpg', 'no-image.png', 'img_abcdikuie_3.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 0, 0, 12, '2017-01-14 01:24:51', '2017-01-14 01:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `group_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@admin.com', '$2y$10$qa2bOR8o5Jn8aOuJIP339u7GerZ1r.vXkJKmqLbtBeJHUHOwKk2qm', 1, 'aSirVfteQCrSenprlmSAHzkUnPLH3ZRn9U3bIVTvqv2gYHGZlIk8n9yphDF6', '2016-12-18 04:05:16', '2017-01-14 01:32:23'),
(2, 'Admin', 'admin@huduy.com', '$2y$10$Du7eTzeI3bOZnIwkryRQWuhRaASLtRxfQnapLFwTEZsZPgvWnqnG6', 5, 'Ye1vGhEQf7PBeJ2yyKWeB9ySCxZOs6UfIKZ8gNBRPBKx5iTqJLofHuNxNDcz', NULL, '2017-01-14 01:31:46'),
(6, 'Content user', 'content@content.com', '$2y$10$Iitwt4sYEmlCRq7DWkoXHOQwmoqDjMC6NasPghAVsTeRq2./wo1cu', 6, NULL, '2016-12-15 05:39:39', '2016-12-15 05:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `name`, `note`, `created_at`, `updated_at`) VALUES
(1, 'System Admin', '', NULL, '2016-07-23 23:02:05'),
(5, 'Admin', '', '2016-12-15 05:44:14', '2017-01-14 01:00:04'),
(6, 'Sub Admin', '', '2016-12-15 05:48:34', '2016-12-15 05:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_parent` int(11) DEFAULT NULL,
  `role_group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`id`, `code`, `note`, `role_parent`, `role_group`, `created_at`, `updated_at`) VALUES
(1, 'viewUsersList', NULL, NULL, 'user', NULL, NULL),
(2, 'addUser', NULL, NULL, 'user', NULL, NULL),
(3, 'editUser', NULL, NULL, 'user', NULL, NULL),
(4, 'deleteUser', NULL, NULL, 'user', NULL, NULL),
(5, 'viewUserGroupList', NULL, NULL, 'user', NULL, NULL),
(6, 'addUserGroup', NULL, NULL, 'user', NULL, NULL),
(7, 'editUserGroup', NULL, NULL, 'user', NULL, NULL),
(8, 'deleteUserGroup', NULL, NULL, 'user', NULL, NULL),
(54, 'viewCategoryList', NULL, NULL, 'category', NULL, NULL),
(55, 'addCategory', NULL, NULL, 'category', NULL, NULL),
(56, 'editCategory', NULL, NULL, 'category', NULL, NULL),
(57, 'deleteCategory', NULL, NULL, 'category', NULL, NULL),
(58, 'viewProductList', NULL, NULL, 'image', NULL, NULL),
(59, 'addProduct', NULL, NULL, 'image', NULL, NULL),
(60, 'editProduct', NULL, NULL, 'image', NULL, NULL),
(61, 'deleteProduct', NULL, NULL, 'image', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups_roles`
--
ALTER TABLE `groups_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_roles_code_unique` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `groups_roles`
--
ALTER TABLE `groups_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
