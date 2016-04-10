

DROP TABLE IF EXISTS `company_page`.`recruit_categories`;
DROP TABLE IF EXISTS `company_page`.`recruits`;
DROP TABLE IF EXISTS `company_page`.`staffs`;
DROP TABLE IF EXISTS `company_page`.`users`;


CREATE TABLE `company_page`.`recruit_categories` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=MyISAM;

CREATE TABLE `company_page`.`recruits` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`category_id` int(11) NOT NULL,
	`quantity` int(11) NOT NULL,
	`message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`requirement` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`expire_time` date NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=MyISAM;

CREATE TABLE `company_page`.`staffs` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`image-larger` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`message` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`facebook` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`twitter` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`birthday` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`graduate` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`htmlcss` int(11) NOT NULL,
	`javascript` int(11) NOT NULL,
	`php` int(11) NOT NULL,
	`nodejs` int(11) NOT NULL,
	`linux` int(11) NOT NULL,
	`japanese` int(11) NOT NULL,
	`english` int(11) NOT NULL,
	`vietnamese` int(11) NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `company_page`.`users` (
	`id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`role` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

