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
USE `lachong_data`;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_flag` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'N' COMMENT 'N',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
