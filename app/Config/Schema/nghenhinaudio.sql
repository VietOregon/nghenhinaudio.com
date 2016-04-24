-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 09:27 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15
--
  -- This file is …….
  -- Developed by PHP language program, use Framework Cakephp.
  -- Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  -- Short name: OREGON CO.,LTD
  -- Website: http://vietoregon-tech.com/?lang=eng 
  -- Email: vietoregon.tech.com@gmail.com
  -- Thanks and best regard !
  -- —————————————————————————————————————
  -- Đây là file dùng để ……. 
  -- Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  -- Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  -- Tên ngắn giao dịch: OREGON CO.,LTD
  -- Website: http://vietoregon-tech.com/?lang=vn
  -- Địa chỉ Email: vietoregon.tech.com@gmail.com
  -- Cám ơn quý đối tác !
--

SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS `nghenhinaudio` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `nghenhinaudio`;


SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users ussing password: 12345678
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_flag` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'N' COMMENT 'N',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', null, '$2a$10$ZVwNAWPw4t0Lq8sMB1KWN.TZLWkKnCm2EzODpQIWRDLJptZCOuYci', 'admin', 'N', '2016-04-15 13:26:26', '2016-04-24 09:38:33');
INSERT INTO `users` VALUES ('2', 'hungnup', null, '$2a$10$UtXg1CAHw3CDzVjbSP298.FoW7J5GHS3ZGDzUeqa4sUVoPnvH8dfS', 'admin', 'N', '2016-04-22 11:37:16', '2016-04-24 09:38:44');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `product_type` int(10) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `seo_description` text COLLATE utf8_unicode_ci,
  `is_parent` set('0','1') COLLATE utf8_unicode_ci DEFAULT '0',
  `parent_category` int(10) DEFAULT NULL,
  `seo_keyword` text COLLATE utf8_unicode_ci,
  `del_flag` set('N','Y') COLLATE utf8_unicode_ci DEFAULT 'N' COMMENT 'DEFAULT N',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Nhà sản xuất ', '1', '<p>Danh mục sản phẩm theo nh&agrave; sản xuất.</p>\r\n', '<p>Danh mục sản phẩm theo nh&agrave; sản xuất.</p>\r\n', '1', null, 'nhà sản xuất', 'N', '2016-04-23 08:45:19', '2016-04-23 08:45:19');
INSERT INTO `categories` VALUES ('2', 'Plantronics', '1', '<p>Danh mục&nbsp;Plantronics</p>\r\n', '<p>Danh mục&nbsp;Plantronics</p>\r\n', '0', '1', 'tai nghe plantronics', 'N', '2016-04-23 08:48:26', '2016-04-23 08:48:26');
INSERT INTO `categories` VALUES ('3', 'Jabra', '1', '<p>Jabra</p>\r\n', '<p>Jabra</p>\r\n', '0', '1', 'Jabra', 'N', '2016-04-23 08:48:59', '2016-04-23 08:48:59');
INSERT INTO `categories` VALUES ('4', 'Sony', '1', '<p>Sony</p>\r\n', '<p>Sony</p>\r\n', '0', '1', 'tai nghe Sony, tai nghe hịn', 'N', '2016-04-23 08:54:34', '2016-04-23 08:54:34');
INSERT INTO `categories` VALUES ('5', 'Bludio', '1', '<p>Bludio</p>\r\n', '<p>Bludio</p>\r\n', '0', '1', 'Bludio', 'N', '2016-04-23 08:55:24', '2016-04-23 08:55:24');
INSERT INTO `categories` VALUES ('6', 'Beats', '1', '<p>Beats</p>\r\n', '<p>Beats</p>\r\n', '0', '1', 'Beats', 'N', '2016-04-23 08:55:49', '2016-04-23 08:55:49');
INSERT INTO `categories` VALUES ('7', 'Thương Hiệu Khác', '1', '<p>Thương Hiệu Kh&aacute;c</p>\r\n', '<p>Thương Hiệu Kh&aacute;c</p>\r\n', '0', '1', 'tai nghe thương hiệu, tai nghe thương hiệu khác', 'N', '2016-04-23 08:56:36', '2016-04-23 08:56:36');
INSERT INTO `categories` VALUES ('8', 'Theo kiểu', '1', '<p>Theo kiểu</p>\r\n', '<p>Theo kiểu</p>\r\n', '1', null, 'Theo kiểu', 'N', '2016-04-23 08:57:56', '2016-04-23 08:57:56');
INSERT INTO `categories` VALUES ('9', 'IN-EARS', '1', '<p>IN-EARS</p>\r\n', '<p>IN-EARS</p>\r\n', '0', '8', 'IN-EARS', 'N', '2016-04-23 08:58:10', '2016-04-23 08:58:10');
INSERT INTO `categories` VALUES ('10', 'EARS-BUDS', '1', '<p>EARS-BUDS</p>\r\n', '<p>EARS-BUDS</p>\r\n', '0', '8', 'EARS-BUDS', 'N', '2016-04-23 08:58:26', '2016-04-23 08:58:26');
INSERT INTO `categories` VALUES ('11', 'ON-EARS', '1', '<p>ON-EARS</p>\r\n', '<p>ON-EARS</p>\r\n', '0', '8', '', 'N', '2016-04-23 08:58:40', '2016-04-23 08:58:40');
INSERT INTO `categories` VALUES ('12', 'OVER_EARS', '1', '<p>OVER_EARS</p>\r\n', '<p>OVER_EARS</p>\r\n', '0', '8', 'OVER_EARS', 'N', '2016-04-23 08:59:06', '2016-04-23 08:59:06');
INSERT INTO `categories` VALUES ('13', 'CLIP ON', '1', '<p>CLIP ON</p>\r\n', '<p>CLIP ON</p>\r\n', '0', '8', 'CLIP ON', 'N', '2016-04-23 08:59:21', '2016-04-23 08:59:21');
INSERT INTO `categories` VALUES ('14', 'Tính năng', '1', '<p>T&iacute;nh năng</p>\r\n', '<p>T&iacute;nh năng</p>\r\n', '1', null, 'tai nghe theo tính năng', 'N', '2016-04-23 08:59:44', '2016-04-23 08:59:44');
INSERT INTO `categories` VALUES ('15', 'MICRO', '1', '<p>MICRO</p>\r\n', '<p>MICRO</p>\r\n', '0', '14', '', 'N', '2016-04-23 08:59:59', '2016-04-23 08:59:59');
INSERT INTO `categories` VALUES ('16', 'Chống Ồn', '1', '<p>Chống Ồn</p>\r\n', '<p>Chống Ồn</p>\r\n', '0', '14', 'Chống Ồn', 'N', '2016-04-23 09:00:12', '2016-04-23 09:00:12');
INSERT INTO `categories` VALUES ('17', 'Chống Nước', '1', '<p>Chống Nước</p>\r\n', '<p>Chống Nước</p>\r\n', '0', '14', 'Chống Nước', 'N', '2016-04-23 09:00:29', '2016-04-23 09:00:29');
INSERT INTO `categories` VALUES ('18', 'Blutooth', '1', '<p>Blutooth</p>\r\n', '<p>Blutooth</p>\r\n', '0', '14', '', 'N', '2016-04-23 09:00:45', '2016-04-23 09:00:45');
INSERT INTO `categories` VALUES ('19', 'Wireless', '1', '<p>Wireless</p>\r\n', '<p><strong><em>Wireless</em></strong></p>\r\n', '0', '14', '', 'N', '2016-04-23 09:01:01', '2016-04-23 09:01:01');
INSERT INTO `categories` VALUES ('20', 'Theo Nhu Cầu', '1', '<p>Theo Nhu Cầu</p>\r\n', '<p>Theo Nhu Cầu</p>\r\n', '1', null, '', 'N', '2016-04-23 09:04:42', '2016-04-23 09:04:42');
INSERT INTO `categories` VALUES ('21', 'DJ', '1', '<p>DJ</p>\r\n', '<p>DJ</p>\r\n', '0', '20', '', 'N', '2016-04-23 09:04:55', '2016-04-23 09:04:55');
INSERT INTO `categories` VALUES ('22', 'BASS', '1', '<p>BASS</p>\r\n', '<p>BASS</p>\r\n', '0', '20', '', 'N', '2016-04-23 09:05:08', '2016-04-23 09:05:08');
INSERT INTO `categories` VALUES ('23', 'Làm Việc', '1', '<p>L&agrave;m Việc</p>\r\n', '<p>L&agrave;m Việc</p>\r\n', '0', '20', '', 'N', '2016-04-23 09:05:22', '2016-04-23 09:05:22');
INSERT INTO `categories` VALUES ('24', 'Thể Thao', '1', '<p>Thể Thao</p>\r\n', '<p>Thể Thao</p>\r\n', '0', '20', '', 'N', '2016-04-23 09:05:34', '2016-04-23 09:05:34');
INSERT INTO `categories` VALUES ('25', 'Chơi Game', '1', '<p>Chơi Game</p>\r\n', '<p>Chơi Game</p>\r\n', '0', '20', '', 'N', '2016-04-23 09:05:47', '2016-04-23 09:05:47');
INSERT INTO `categories` VALUES ('26', 'Phòng Thu', '1', '<p>Ph&ograve;ng Thu</p>\r\n', '<p>Ph&ograve;ng Thu</p>\r\n', '0', '20', '', 'N', '2016-04-23 09:06:06', '2016-04-23 09:06:06');
INSERT INTO `categories` VALUES ('27', 'TV / Xem Phim', '1', '<p>TV / Xem Phim</p>\r\n', '<p>TV / Xem Phim</p>\r\n', '0', '20', '', 'N', '2016-04-23 09:07:17', '2016-04-23 09:07:17');
INSERT INTO `categories` VALUES ('28', 'High end', '1', '<p>High end</p>\r\n', '<p>High end</p>\r\n', '1', null, '', 'N', '2016-04-23 09:07:34', '2016-04-23 09:07:34');
INSERT INTO `categories` VALUES ('29', 'IN-EARS MONITOR', '1', '<p>IN-EARS MONITOR</p>\r\n', '<p>IN-EARS MONITOR</p>\r\n', '0', '28', '', 'N', '2016-04-23 09:07:51', '2016-04-23 09:07:51');
INSERT INTO `categories` VALUES ('30', 'HEAD PHONE', '1', '<p>HEAD PHONE</p>\r\n', '<p>HEAD PHONE</p>\r\n', '0', '28', 'HEAD PHONE', 'N', '2016-04-23 09:08:08', '2016-04-23 09:08:08');
INSERT INTO `categories` VALUES ('31', 'MONITORS', '1', '<p>MONITORS</p>\r\n', '<p>MONITORS</p>\r\n', '0', '28', 'MONITORS', 'N', '2016-04-23 09:08:22', '2016-04-24 09:52:50');
INSERT INTO `categories` VALUES ('32', 'AUDIOPHILE', '1', '<p><strong>AUDIOPHILE</strong></p>\r\n', '<p><em>AUDIOPHILE</em></p>\r\n', '0', '28', '', 'N', '2016-04-23 09:08:37', '2016-04-24 09:54:05');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `product_type` int(10) NOT NULL,
  `product_price` varchar(20) COLLATE utf8_unicode_ci DEFAULT '0',
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `warranty_time` date DEFAULT NULL,
  `product_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `note` text COLLATE utf8_unicode_ci,
  `seo_description` text COLLATE utf8_unicode_ci,
  `seo_keyword` text COLLATE utf8_unicode_ci,
  `del_flag` set('N','Y') COLLATE utf8_unicode_ci DEFAULT 'N' COMMENT 'DEFAULT N',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Shure KSE 1500', 'Shure KSE 1500', '1', '68.500.000 ₫', 'Nhà sản xuất ', '2019-07-17', 'Còn hàng', '<h3><strong>Electrostatic Earphone System</strong></h3>\r\n\r\n<p><strong>Experience a premium listening environment anywhere</strong></p>\r\n\r\n<p>Whether you&rsquo;re on an international flight or an undisturbed mountaintop, your ears will be enveloped by luxurious audio in a sleek system designed for the most discerning audiophile.<br />\r\n<br />\r\nFeaturing unprecedented Sound Isolating&trade; electrostatic earphones and a matched digital-to-analog amplifier, the KSE1500 means that high-fidelity portable audio is at last a reality.<br />\r\n<br />\r\nSimply luxurious sound, wherever you are.</p>\r\n', '<p>Bảo h&agrave;nh 24 th&aacute;ng.</p>\r\n', '<h3><strong>Electrostatic Earphone System</strong></h3>\r\n\r\n<p><strong>Experience a premium listening environment anywhere</strong></p>\r\n\r\n<p>Whether you&rsquo;re on an international flight or an undisturbed mountaintop, your ears will be enveloped by luxurious audio in a sleek system designed for the most discerning audiophile.<br />\r\n<br />\r\nFeaturing unprecedented Sound Isolating&trade; electrostatic earphones and a matched digital-to-analog amplifier, the KSE1500 means that high-fidelity portable audio is at last a reality.<br />\r\n<br />\r\nSimply luxurious sound, wherever you are.</p>\r\n', 'tai nghe urbeats, tai nghe rose gold, tai nghe xịn', 'N', '2016-04-24 09:39:56', '2016-04-24 09:52:27');
INSERT INTO `products` VALUES ('2', 'FiiO Q1', 'FiiO Q1', '5', '1.900.000 ₫', '', '2017-07-19', 'Còn hàng', '<p>Mẫu portable dac/amp mới nhất của FiiO, c&oacute; thể d&ugrave;ng l&agrave;m DAC cho iphone ,ipad v&agrave; c&aacute;c thiết bị android</p>\r\n', '<ul>\r\n <li><strong>Bảo h&agrave;nh: 12 th&aacute;ng</strong></li>\r\n</ul>\r\n', '<p>Mẫu portable dac/amp mới nhất của FiiO, c&oacute; thể d&ugrave;ng l&agrave;m DAC cho iphone ,ipad v&agrave; c&aacute;c thiết bị android</p>\r\n', 'FiiO Q1, PORTABLE AMP&DAC', 'N', '2016-04-24 09:56:37', '2016-04-24 09:56:37');
INSERT INTO `products` VALUES ('3', 'Cowon Plenue S', 'Cowon Plenue S', '3', '44.000.000 ₫', '', '2017-04-24', 'Còn hàng', '<h3><strong>The Supremacy, Better Than Any Other Sound</strong></h3>\r\n\r\n<blockquote>\r\n<p>No conversion Native DSD 256, high fidelity Burr-Brown PCM1792A DAC, high quality balanced output, high precision dual TCXO clock, and the powerful 3Vrms driving performance for perfect sound reproduction. The PLENUE S delivers indescribably perfect sound fidelity. PLENUE S has taken a giant step towards true sound reproduction. Check out the PLENUE S for the latest in sound reproduction technology. Get a PLENUE S for a totally new audio experience.</p>\r\n</blockquote>\r\n', '<h3>Support Native DSD up to DSD256</h3>\r\n\r\n<p>The PLENUE S supports Native DSD standard for high definition DSD sound without PCM conversion. The PLENUE S power performance options: DSD256 (1bit, 11.2MHz), DSD64 and DSD128. By supporting Native DSD, the PLENUE S delivers the fidelity true audiophiles demand.</p>\r\n\r\n<h3>Industry best Response Rate with 3Vrms High Performance Amp</h3>\r\n\r\n<p>For optimum sound reproduction, the amp must deliv&hellip;</p>\r\n', '<h3>The Supremacy, Better Than Any Other Sound</h3>\r\n\r\n<p>No conversion Native DSD 256, high fidelity Burr-Brown PCM1792A DAC, high quality balanced output, high precision dual TCXO clock, and the powerful 3Vrms driving performance for perfect sound reproduction. The PLENUE S delivers indescribably perfect sound fidelity. PLENUE S has taken a giant step towards true sound reproduction. Check out the PLENUE S for the latest in sound reproduction technology. Get a PLENUE S for a totally new audio experience.</p>\r\n', 'The Supremacy, Better Than Any Other Sound, high fidelity Burr-Brown', 'N', '2016-04-24 09:59:16', '2016-04-24 09:59:16');
INSERT INTO `products` VALUES ('4', 'Jamo P102', 'Jamo P102', '2', '7.230.000 ₫', '', '2018-04-24', 'Còn hàng', '<ul>\r\n <li><strong>Design</strong>\r\n <p>Much more than just a computer speaker system, the Jamo P 102 can handle all of your Home Theater options from music to movies to television in one compact, easy to use system. Beautiful Danish design is emanated with a unique flowing pattern of the satellites and matching subwoofer, both available in rich, high-gloss black or white. Placement options are abundant with the included satellite table stands and wall-mount brackets. The long range RF remote lets you control the P 102 from anywhere in your home.</p>\r\n <strong>Technology</strong>\r\n\r\n <p>Each small, high-tech satellite speaker houses a .75&quot; tweeter and a 3&quot; woofer/midrange in a unique coaxial configuration for balanced, refined and highly detailed sound. The 6.5&quot; subwoofer can easily be positioned out of sight, but it will still provide ground-shaking bass you can feel. Two digital and two analog inputs can handle your TV, DVD player, computer or your music-server with ease. An optional wireless transmitter/receiver, the Jamo WK 200, can be connected to the P 102 and your sound source for wireless audio streaming. Stand-by-circuitry automatically turns the system off after 10 minutes with no signal.</p>\r\n </li>\r\n</ul>\r\n', '<p>Bảo h&agrave;nh 14 th&aacute;ng</p>\r\n', '<ul>\r\n  <li>Compact, yet powerful 100 watt system for true sonic realism</li>\r\n <li>Expertly crafted Danish design</li>\r\n <li>Multiple inputs for connection to TVs, computers and other sound sources</li>\r\n <li>Speaker table stands and wall brackets included</li>\r\n</ul>\r\n', 'speaker, COMPUTER SPEAKER, Jamo', 'N', '2016-04-24 10:01:45', '2016-04-24 10:01:45');
INSERT INTO `products` VALUES ('5', 'Turbo X Travel Bag', 'Turbo X Travel Bag', '4', '600.000 ₫', '', '2016-07-06', 'Còn hàng', '<p>Carry your RIVA Turbo X with you anywhere you go! Our travel bag is made of a durable nylon exterior and soft velvet lined interior with a layer of protective padding to keep your Turbo X safe. The clean design features an exterior pocket for cables, a soft ergonomic carrying handle and embroidered RIVA logo. Available in black on black.</p>\r\n', '<p>Carry your RIVA Turbo X with you anywhere you go! Our travel bag is made of a durable nylon exterior and soft velvet lined interior with a layer of protective padding to keep your Turbo X safe. The clean design features an exterior pocket for cables, a soft ergonomic carrying handle and embroidered RIVA logo. Available in black on black.</p>\r\n', '<p>Carry your RIVA Turbo X with you anywhere you go! Our travel bag is made of a durable nylon exterior and soft velvet lined interior with a layer of protective padding to keep your Turbo X safe. The clean design features an exterior pocket for cables, a soft ergonomic carrying handle and embroidered RIVA logo. Available in black on black.</p>\r\n', '', 'N', '2016-04-24 10:03:17', '2016-04-24 10:03:17');

-- ----------------------------
-- Table structure for products_copy
-- ----------------------------
DROP TABLE IF EXISTS `products_copy`;
CREATE TABLE `products_copy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `product_type` int(10) NOT NULL,
  `product_price` varchar(20) COLLATE utf8_unicode_ci DEFAULT '0',
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `warranty_time` date DEFAULT NULL,
  `product_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `note` text COLLATE utf8_unicode_ci,
  `seo_description` text COLLATE utf8_unicode_ci,
  `seo_keyword` text COLLATE utf8_unicode_ci,
  `img_url_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url_5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_flag` set('N','Y') COLLATE utf8_unicode_ci DEFAULT 'N' COMMENT 'DEFAULT N',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products_copy
-- ----------------------------
INSERT INTO `products_copy` VALUES ('1', 'urBeats Rose Gold Edition', 'urBeats Rose Gold Edition', '1', '2.700.000 ₫', 'Nhà sản xuất ,Sony,EARS-BUDS,CLIP ON,MICRO,TV / Xem Phim,High end', '2016-04-29', 'Còn hàng', '<p>urBeats Rose Gold Edition</p>\r\n', '<p>urBeats Rose Gold Edition</p>\r\n', '<p>urBeats Rose Gold Edition</p>\r\n', 'tai nghe urbeats, tai nghe rose gold, tai nghe xịn', '', null, null, null, null, 'N', '2016-04-23 14:21:01', '2016-04-23 15:28:06');
INSERT INTO `products_copy` VALUES ('2', 'AKG K420 (Light Blue)', 'AKG K420 (Light Blue)', '1', ' 990.000 ₫', 'Nhà sản xuất ,Theo kiểu,ON-EARS,CLIP ON,Phòng Thu', '2018-10-25', 'Còn hàng', '<p>AKG K420 (Light Blue)</p>\r\n', '<p>AKG K420 (Light Blue)</p>\r\n', '<p>AKG K420 (Light Blue)</p>\r\n', 'AKG K420 (Light Blue)', '', null, null, null, null, 'N', '2016-04-23 15:28:41', '2016-04-23 15:28:41');
INSERT INTO `products_copy` VALUES ('3', 'Audio Technica ATH AD900X', 'Audio Technica ATH AD900X', '1', '4.900.000 ₫', 'CLIP ON,Chống Ồn', '2018-11-20', 'Còn hàng', '<p>Audio Technica ATH AD900X</p>\r\n', '<p>Audio Technica ATH AD900X</p>\r\n', '<p>Audio Technica ATH AD900X</p>\r\n', 'Audio Technica ATH AD900X', '', null, null, null, null, 'N', '2016-04-23 15:29:37', '2016-04-23 16:18:35');
INSERT INTO `products_copy` VALUES ('14', 'Shure KSE 1500', 'Shure KSE 1500', '1', '4.900.000 ₫', 'Nhà sản xuất ,Chơi Game', '2016-04-30', 'Còn hàng', '<h3><strong>Electrostatic Earphone System</strong></h3>\r\n\r\n<p><strong>Experience a premium listening environment anywhere</strong></p>\r\n\r\n<p>Whether you&rsquo;re on an international flight or an undisturbed mountaintop, your ears will be enveloped by luxurious audio in a sleek system designed for the most discerning audiophile.<br />\r\n<br />\r\nFeaturing unprecedented Sound Isolating&trade; electrostatic earphones and a matched digital-to-analog amplifier, the KSE1500 means that high-fidelity portable audio is at last a reality.</p>\r\n', '<p>Simply luxurious sound, wherever you are.</p>\r\n\r\n<ul>\r\n  <li><strong>Bảo h&agrave;nh: 12 th&aacute;ng</strong></li>\r\n</ul>\r\n', '<h3><strong>Electrostatic Earphone System</strong></h3>\r\n\r\n<p><strong>Experience a premium listening environment anywhere</strong></p>\r\n\r\n<p>Whether you&rsquo;re on an international flight or an undisturbed mountaintop, your ears will be enveloped by luxurious audio in a sleek system designed for the most discerning audiophile.<br />\r\n<br />\r\nFeaturing unprecedented Sound Isolating&trade; electrostatic earphones and a matched digital-to-analog amplifier, the KSE1500 means that high-fidelity portable audio is at last a reality.</p>\r\n', '', null, null, null, null, null, 'N', '2016-04-24 05:28:51', '2016-04-24 05:28:51');
INSERT INTO `products_copy` VALUES ('15', 'Shure KSE 1500', 'Shure KSE 1500', '1', '4.900.000 ₫', 'Nhà sản xuất ,Chơi Game', '2016-04-30', 'Còn hàng', '<h3><strong>Electrostatic Earphone System</strong></h3>\r\n\r\n<p><strong>Experience a premium listening environment anywhere</strong></p>\r\n\r\n<p>Whether you&rsquo;re on an international flight or an undisturbed mountaintop, your ears will be enveloped by luxurious audio in a sleek system designed for the most discerning audiophile.<br />\r\n<br />\r\nFeaturing unprecedented Sound Isolating&trade; electrostatic earphones and a matched digital-to-analog amplifier, the KSE1500 means that high-fidelity portable audio is at last a reality.</p>\r\n', '<p>Simply luxurious sound, wherever you are.</p>\r\n\r\n<ul>\r\n  <li><strong>Bảo h&agrave;nh: 12 th&aacute;ng</strong></li>\r\n</ul>\r\n', '<h3><strong>Electrostatic Earphone System</strong></h3>\r\n\r\n<p><strong>Experience a premium listening environment anywhere</strong></p>\r\n\r\n<p>Whether you&rsquo;re on an international flight or an undisturbed mountaintop, your ears will be enveloped by luxurious audio in a sleek system designed for the most discerning audiophile.<br />\r\n<br />\r\nFeaturing unprecedented Sound Isolating&trade; electrostatic earphones and a matched digital-to-analog amplifier, the KSE1500 means that high-fidelity portable audio is at last a reality.</p>\r\n', '', null, null, null, null, null, 'N', '2016-04-24 05:29:35', '2016-04-24 05:29:35');
INSERT INTO `products_copy` VALUES ('16', 'Shure KSE 1500', 'Shure KSE 1500', '1', '4.900.000 ₫', 'Nhà sản xuất ,Chơi Game', '2016-04-30', 'Còn hàng', '<h3><strong>Electrostatic Earphone System</strong></h3>\r\n\r\n<p><strong>Experience a premium listening environment anywhere</strong></p>\r\n\r\n<p>Whether you&rsquo;re on an international flight or an undisturbed mountaintop, your ears will be enveloped by luxurious audio in a sleek system designed for the most discerning audiophile.<br />\r\n<br />\r\nFeaturing unprecedented Sound Isolating&trade; electrostatic earphones and a matched digital-to-analog amplifier, the KSE1500 means that high-fidelity portable audio is at last a reality.</p>\r\n', '<p>Simply luxurious sound, wherever you are.</p>\r\n\r\n<ul>\r\n  <li><strong>Bảo h&agrave;nh: 12 th&aacute;ng</strong></li>\r\n</ul>\r\n', '<h3><strong>Electrostatic Earphone System</strong></h3>\r\n\r\n<p><strong>Experience a premium listening environment anywhere</strong></p>\r\n\r\n<p>Whether you&rsquo;re on an international flight or an undisturbed mountaintop, your ears will be enveloped by luxurious audio in a sleek system designed for the most discerning audiophile.<br />\r\n<br />\r\nFeaturing unprecedented Sound Isolating&trade; electrostatic earphones and a matched digital-to-analog amplifier, the KSE1500 means that high-fidelity portable audio is at last a reality.</p>\r\n', '', null, null, null, null, null, 'N', '2016-04-24 05:29:48', '2016-04-24 05:29:48');

-- ----------------------------
-- Table structure for product_images
-- ----------------------------
DROP TABLE IF EXISTS `product_images`;
CREATE TABLE `product_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of product_images
-- ----------------------------
INSERT INTO `product_images` VALUES ('20', '1', '042016\\3kshop-shure-kse1500-2.png', '2016-04-24 09:51:07', '2016-04-24 09:51:07');
INSERT INTO `product_images` VALUES ('21', '1', '042016\\3kshop-shure-kse1500-3.png', '2016-04-24 09:51:07', '2016-04-24 09:51:07');
INSERT INTO `product_images` VALUES ('22', '1', '042016\\3kshop-shure-kse1500-5.jpg', '2016-04-24 09:51:07', '2016-04-24 09:51:07');
INSERT INTO `product_images` VALUES ('23', '1', '042016\\3kshop-shure-kse1500-product-frame-1.gif', '2016-04-24 09:51:07', '2016-04-24 09:51:07');
INSERT INTO `product_images` VALUES ('24', '2', '042016\\3kshop-fiio-q1-1.png', '2016-04-24 09:56:37', '2016-04-24 09:56:37');
INSERT INTO `product_images` VALUES ('25', '2', '042016\\3kshop-fiio-q1-2.png', '2016-04-24 09:56:37', '2016-04-24 09:56:37');
INSERT INTO `product_images` VALUES ('26', '2', '042016\\3kshop-fiio-q1-3 (1).png', '2016-04-24 09:56:37', '2016-04-24 09:56:37');
INSERT INTO `product_images` VALUES ('27', '2', '042016\\3kshop-fiio-q1-3.png', '2016-04-24 09:56:37', '2016-04-24 09:56:37');
INSERT INTO `product_images` VALUES ('28', '2', '042016\\3kshop-fiio-q1-4.png', '2016-04-24 09:56:37', '2016-04-24 09:56:37');
INSERT INTO `product_images` VALUES ('29', '3', '042016\\3kshop-cowon-plenue-s-spec-2.jpg', '2016-04-24 09:59:16', '2016-04-24 09:59:16');
INSERT INTO `product_images` VALUES ('30', '3', '042016\\3kshop-cowon-plenue-s-spec-3.jpg', '2016-04-24 09:59:16', '2016-04-24 09:59:16');
INSERT INTO `product_images` VALUES ('31', '3', '042016\\3kshop-cowon-plenue-s-spec-8.jpg', '2016-04-24 09:59:16', '2016-04-24 09:59:16');
INSERT INTO `product_images` VALUES ('32', '3', '042016\\3kshop-cowon-plenue-s-spec-10.jpg', '2016-04-24 09:59:16', '2016-04-24 09:59:16');
INSERT INTO `product_images` VALUES ('33', '3', '042016\\3kshop-cowon-plenue-s-spec-11.jpg', '2016-04-24 09:59:16', '2016-04-24 09:59:16');
INSERT INTO `product_images` VALUES ('34', '4', '042016\\3kshop-jamo-p102-1.jpg', '2016-04-24 10:01:45', '2016-04-24 10:01:45');
INSERT INTO `product_images` VALUES ('35', '4', '042016\\3kshop-jamo-p102-2.jpg', '2016-04-24 10:01:45', '2016-04-24 10:01:45');
INSERT INTO `product_images` VALUES ('36', '4', '042016\\3kshop-jamo-p102-3.jpg', '2016-04-24 10:01:45', '2016-04-24 10:01:45');
INSERT INTO `product_images` VALUES ('37', '4', '042016\\3kshop-jamo-p102-4.jpg', '2016-04-24 10:01:45', '2016-04-24 10:01:45');
INSERT INTO `product_images` VALUES ('38', '4', '042016\\3kshop-jamo-p102-7.jpg', '2016-04-24 10:01:45', '2016-04-24 10:01:45');
INSERT INTO `product_images` VALUES ('39', '5', '042016\\3kshop-riva-turbo-x-travel-bag.jpg', '2016-04-24 10:03:18', '2016-04-24 10:03:18');

-- ----------------------------
-- Table structure for select_options
-- ----------------------------
DROP TABLE IF EXISTS `select_options`;
CREATE TABLE `select_options` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `column_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `select_code` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(4) NOT NULL,
  `memo` text COLLATE utf8_unicode_ci,
  `del_flag` varchar(1) COLLATE utf8_unicode_ci DEFAULT 'N',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uni_key` (`column_name`,`select_code`,`display_name`),
  KEY `idx_column_name` (`column_name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of select_options
-- ----------------------------
INSERT INTO `select_options` VALUES ('1', 'product_type', '1', 'Tai nghe', '1', 'Tai nghe', 'N', null, null);
INSERT INTO `select_options` VALUES ('2', 'product_type', '2', 'Speaker', '2', 'Speaker', 'N', null, null);
INSERT INTO `select_options` VALUES ('3', 'product_type', '3', 'Máy nghe nhạc', '3', 'Máy nghe nhạc', 'N', null, null);
INSERT INTO `select_options` VALUES ('4', 'product_type', '4', 'Phụ kiện', '4', 'Phụ kiện', 'N', null, null);
INSERT INTO `select_options` VALUES ('5', 'product_type', '5', 'AMP&DAC', '5', 'AMP&DAC', 'N', null, null);