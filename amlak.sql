-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2013 at 08:07 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amlak`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `keywords`, `description`) VALUES
(1, '1', 'asas2', '<p style="text-align: center;">dfdsfrff fffffffff fff fffffff fff fffffffff ffffffffffff ffffff&nbsp; ffffffffffff fff fffffffffff fffffffffffffffffffffff&nbsp; ffffffffffffffffffffffff fffffffffffffffffffffffffffffff sdfsdfsdf sdf sdfsdfsdf s sdf sdf sdf sdf sdf sdf sdf sdf <br></p><p style=""><br></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LoginName` varchar(255) NOT NULL,
  `LoginPass` varchar(255) NOT NULL,
  `UserEmail` varchar(500) NOT NULL,
  `UserAvatar` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `LoginName`, `LoginPass`, `UserEmail`, `UserAvatar`) VALUES
(1, 'afshin', '8f83749255531d677e0d9de33d2aa487bafe4543', 'afshin.nj@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code_melk` varchar(30) NOT NULL,
  `id_user` int(10) NOT NULL,
  `ads_type` int(1) NOT NULL,
  `save_date` varchar(50) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `code_melk`, `id_user`, `ads_type`, `save_date`, `active`) VALUES
(11, '1819', 1, 2, '13920402', 1),
(12, '1653', 1, 1, '13920402', 1),
(13, '1781', 1, 1, '13920402', 1),
(14, '1367', 1, 1, '13920401', 1),
(15, '1326', 1, 2, '13920402', 1);

-- --------------------------------------------------------

--
-- Table structure for table `autopopulate`
--

CREATE TABLE IF NOT EXISTS `autopopulate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `ostan` int(11) DEFAULT NULL,
  `shahrestan` int(11) DEFAULT NULL,
  `mantage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `autopopulate`
--

INSERT INTO `autopopulate` (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES
(1, 'اردبیل', NULL, 1, NULL, NULL),
(3, 'سرعین', 1, NULL, 1, NULL),
(4, 'منطقه1', 3, NULL, NULL, 1),
(5, 'تهران', NULL, 1, NULL, NULL),
(6, 'گیلان', NULL, 1, NULL, NULL),
(7, 'کرج', 5, NULL, 1, NULL),
(8, 'رشت', 6, NULL, 1, NULL),
(9, 'آستارا', 6, NULL, 1, NULL),
(10, 'ونک', 7, NULL, NULL, 1),
(11, 'گلسار', 8, NULL, NULL, 1),
(12, 'صاحلی', 9, NULL, NULL, 1),
(13, 'چهار راه امام', 9, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(50) NOT NULL,
  `show` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `date`, `description`, `image`, `show`) VALUES
(1, 'تست', '1392/02/26', '<p style="text-align: right;">تست<br></p>', 'shofazh.png', 0),
(2, 'تست11', '1392/02/31', '<p style="text-align: center;">تست شماره 2<br></p>', 'shofazh1.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `time` int(10) unsigned NOT NULL,
  `captcha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`time`, `captcha`) VALUES
(1369336674, '252490');

-- --------------------------------------------------------

--
-- Table structure for table `cartbank`
--

CREATE TABLE IF NOT EXISTS `cartbank` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code_melk` varchar(30) NOT NULL,
  `id_user` int(10) NOT NULL,
  `TNumber` varchar(50) NOT NULL,
  `PayerName` varchar(50) NOT NULL,
  `Dateofpayment` varchar(50) NOT NULL,
  `Theamountpaid` varchar(50) NOT NULL,
  `save_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `cartbank`
--

INSERT INTO `cartbank` (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES
(1, '1761', 1, '125489652522', 'عشق علی', '2013/05/31', '1.000.00', 'سه شنبه ۳۱ اردیبهشت ۱۳۹۲'),
(2, '1793', 1, '125489652522', 'عشق علی', '1392/02/31', '2,000,000', 'سه شنبه ۳۱ اردیبهشت ۱۳۹۲'),
(3, '1908', 1, '15487777', 'عشق علی', '1392/02/31', '2.000.00', 'سه شنبه ۳۱ اردیبهشت ۱۳۹۲'),
(4, '1870', 1, '125489652522', 'عشق علی', '1392/02/31', '1,000,000', 'سه شنبه ۳۱ اردیبهشت ۱۳۹۲'),
(5, '1259', 1, '15487777', 'زکرایی رازی', '1392/03/27', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(6, '1761', 1, '125489652522', 'زکرایی رازی', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(7, '1761', 1, '125489652522', 'زکرایی رازی', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(8, '1761', 1, '125489652522', 'عشق علی', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(9, '1761', 1, '125489652522', 'عشق علی', '1392/03/31', '1.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(10, '1944', 1, '125489652522', 'زکرایی رازی', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(11, '1341', 1, '15487777', 'زکرایی رازی', '1392/03/31', '2,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(12, '1641', 1, '1365485', 'عشق علی', '1392/03/31', '1,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(13, '1739', 1, '1', 'عشق علی', '1392/03/31', '2,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(14, '1984', 1, '125489652522', 'زکرایی رازی', '1392/03/31', '2,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(15, '1234', 1, '125489652522', 'عشق علی میرژا', '1392/03/31', '2,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(16, '1819', 1, '125489652522', 'عشق علی', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(17, '1653', 1, '125489652522', 'افشین', '1392/03/31', '1,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(18, '1781', 1, '15487777', 'زکرایی رازی', '1392/03/31', '1,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(19, '1367', 1, '1365485', 'عشق علی میرژا', '1392/03/31', '1,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲'),
(20, '1326', 1, '125489652522', 'عشق علی میرژا', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `keywords` varchar(500) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `keywords`, `description`) VALUES
(1, 'تماس با ما', 'تماس با ما', 'تست');

-- --------------------------------------------------------

--
-- Table structure for table `darkhast`
--

CREATE TABLE IF NOT EXISTS `darkhast` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` int(10) unsigned NOT NULL,
  `id_user` int(11) unsigned NOT NULL,
  `id_ostan` int(10) unsigned NOT NULL,
  `id_shahrestan` int(10) unsigned NOT NULL,
  `id_mantage` int(10) unsigned NOT NULL,
  `id_noeMelk` int(10) unsigned NOT NULL,
  `sen_bana` varchar(30) NOT NULL,
  `tedad_khab` varchar(30) NOT NULL,
  `metraj` varchar(30) NOT NULL,
  `etbar` varchar(30) NOT NULL,
  `sharh_darkhast` varchar(255) NOT NULL,
  `save_date` varchar(50) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `darkhast`
--

INSERT INTO `darkhast` (`id`, `code`, `id_user`, `id_ostan`, `id_shahrestan`, `id_mantage`, `id_noeMelk`, `sen_bana`, `tedad_khab`, `metraj`, `etbar`, `sharh_darkhast`, `save_date`, `active`) VALUES
(2, 16695, 1, 5, 7, 10, 2, '0', '', '0', '1392/03/31', 'sdfsdfsdfsdf', 'پنجشنبه ۲ خرداد ۱۳۹۲', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE IF NOT EXISTS `email_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `template` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`id`, `title`, `template`) VALUES
(1, 'فراموشی رمز عبور', '<div style="width:400px; height:200px; margin:auto; border:1px dashed #CCC; position:relative; background:#EEE;">\r\n  <h3 style="margin:0; padding:10px 10px 10px 0; border-bottom:1px dashed #CCC; text-align:right;">%title%</h3>\r\n  <p style="text-align:right; direction:rtl; padding:10px;">کلمه عبور جدید شما\r\n   : %pass%\r\n   \r\n   </p>\r\n  \r\n  <div style="position:absolute;bottom:0; border-top:1px dashed #CCC; width:385px; direction:rtl; padding:5px 10px 5px 5px;">\r\n  \r\n%webName% \r\n \r\n  </div>\r\n</div>\r\n<div style="direction:rtl; text-align:center">قدرت گرفته با سیستم مدیریت محتوای a cms</div>'),
(2, 'نظرات کاربران', '<div style="width:400px; height:200px; margin:auto; border:1px dashed #CCC; position:relative; background:#EEE;">\r\n  <h3 style="margin:0; padding:10px 10px 10px 0; border-bottom:1px dashed #CCC; text-align:right;">%title%</h3>\r\n  <p style="text-align:right; direction:rtl; padding:10px;">\r\n    %message%\r\n   \r\n   </p>\r\n  \r\n  <div style="position:absolute;bottom:0; border-top:1px dashed #CCC; width:385px; direction:rtl; padding:5px 10px 5px 5px;">\r\n  \r\n%webName% \r\n \r\n  </div>\r\n</div>\r\n<div style="direction:rtl; text-align:center">قدرت گرفته با سیستم مدیریت محتوای a cms</div>'),
(3, 'جواب مدیر', '<div style="width:400px; height:200px; margin:auto; border:1px dashed #CCC; position:relative; background:#EEE;">\n  <h3 style="margin:0; padding:10px 10px 10px 0; border-bottom:1px dashed #CCC; text-align:right;">%title%</h3>\n  <p style="text-align:right; direction:rtl; padding:10px;">\n   %message%\n   \n   </p>\n  \n  <div style="position:absolute;bottom:0; border-top:1px dashed #CCC; width:385px; direction:rtl; padding:5px 10px 5px 5px;">\n  \n%webName% \n \n  </div>\n</div>\n<div style="direction:rtl; text-align:center">قدرت گرفته با سیستم مدیریت محتوای a cms</div>'),
(4, 'تماس با ما', ''),
(5, 'ارسال به دوستان', '<style>\r\n body{\r\n	  font-family:Tahoma, Geneva, sans-serif;\r\n	  font-size:14px;\r\n	  background:#EEE;\r\n	  }\r\n\r\n</style>\r\n<table width=''600'' border=''0'' align=''center'' dir=''rtl'' style="background:#FFF; border:1px solid #CCC;" >\r\n    <tr>\r\n      <td colspan=''2'' align=''center''><a href="%base_url%" style="text-decoration:none;">%webName%</a></td>\r\n    </tr>\r\n    <tr>\r\n      <td style="border:1px solid #CCC; border-radius:5px; padding:5px; font-family:Tahoma, Geneva, sans-serif; font-size:12px;width:280px;">فرستنده : %YourName%</td>\r\n      <td style="border:1px solid #CCC; border-radius:5px; padding:5px; font-family:Tahoma, Geneva, sans-serif; font-size:12px;width:280px;">نویسنده :  %author%</td>\r\n    </tr>\r\n    <tr>\r\n      <td style="border:1px solid #CCC; border-radius:5px; padding:5px; font-family:Tahoma, Geneva, sans-serif; font-size:12px;width:280px;" colspan=''2'' >عنوان : %title%</td>\r\n    </tr>\r\n    <tr>\r\n      <td colspan=''2'' style=" border:1px solid #CCC; border-radius:5px; padding:5px;">%message%</td>\r\n    </tr>\r\n    <tr>\r\n      <td colspan=''2''></td>\r\n</tr>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `emkanat`
--

CREATE TABLE IF NOT EXISTS `emkanat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_emkanat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `emkanat`
--

INSERT INTO `emkanat` (`id`, `title_emkanat`) VALUES
(1, 'آشپزخانه اپن'),
(2, 'پارکینگ'),
(3, 'انباری'),
(4, 'شومینه'),
(5, 'کولر'),
(6, 'حیاط'),
(7, 'شوفاژ'),
(8, 'چیلر'),
(9, 'پکیج'),
(10, 'جکوزی'),
(11, 'فن کوئل'),
(12, 'آبگرمکن'),
(13, 'چوب کاری'),
(14, 'نور مخفی'),
(15, 'ریموت کنترل'),
(16, 'جارو مرکزی'),
(17, ' آنتن مرکزی'),
(18, 'آیفون تصویری'),
(19, 'سیستم ایمنی'),
(20, 'شوتینگ زباله'),
(21, 'آسانسور'),
(22, 'سرایداری'),
(23, 'لابی'),
(24, 'استخر'),
(25, 'سونا'),
(26, 'باربیکیو'),
(27, 'گچ بری'),
(28, 'نقاشی');

-- --------------------------------------------------------

--
-- Table structure for table `emkanat_khane`
--

CREATE TABLE IF NOT EXISTS `emkanat_khane` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_khane` int(10) unsigned NOT NULL,
  `emkanat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_User` int(10) unsigned NOT NULL,
  `id_ostan` int(10) unsigned NOT NULL,
  `id_shahrestan` int(10) unsigned NOT NULL,
  `id_mantage` int(10) unsigned NOT NULL,
  `address` varchar(255) NOT NULL,
  `noe_melk` int(11) NOT NULL,
  `mogheyat` varchar(100) NOT NULL,
  `masahat` int(11) NOT NULL,
  `zirbana` int(11) NOT NULL,
  `tool_bar` int(11) NOT NULL,
  `eslahi` int(11) NOT NULL,
  `t_metraj` int(11) NOT NULL,
  `tarakom` varchar(100) NOT NULL,
  `karbari` int(11) NOT NULL,
  `mabar` varchar(100) NOT NULL,
  `sanad` varchar(100) NOT NULL,
  `mojavez` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sokoonat` varchar(100) NOT NULL,
  `emtiyaz` varchar(100) NOT NULL,
  `tabagheh` varchar(100) NOT NULL,
  `sen_bana` varchar(30) NOT NULL,
  `vahedha` int(11) NOT NULL,
  `tabaghat` varchar(100) NOT NULL,
  `khab` int(11) NOT NULL,
  `teras` int(11) NOT NULL,
  `kafpoosh` varchar(100) NOT NULL,
  `telefon` varchar(10) NOT NULL,
  `service_ashpazkhaneh` varchar(100) NOT NULL,
  `service_behdashti` varchar(100) NOT NULL,
  `bazdid` int(11) NOT NULL,
  `tozihat` varchar(500) NOT NULL,
  `save_date` varchar(100) NOT NULL,
  `code_melk` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `etbar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `id_User`, `id_ostan`, `id_shahrestan`, `id_mantage`, `address`, `noe_melk`, `mogheyat`, `masahat`, `zirbana`, `tool_bar`, `eslahi`, `t_metraj`, `tarakom`, `karbari`, `mabar`, `sanad`, `mojavez`, `nama`, `sokoonat`, `emtiyaz`, `tabagheh`, `sen_bana`, `vahedha`, `tabaghat`, `khab`, `teras`, `kafpoosh`, `telefon`, `service_ashpazkhaneh`, `service_behdashti`, `bazdid`, `tozihat`, `save_date`, `code_melk`, `active`, `etbar`) VALUES
(22, 1, 1, 3, 4, 'ardabil', 1, 'شمالی', 0, 0, 0, 0, 0, '', 0, '', '', '', '-1', '0', 'آب,برق,گاز,تلفن', '', '', 0, '', 0, 0, '', '', '', '', 2, 'kkkkkkkkkkkkkkkk', 'پنجشنبه ۲ خرداد ۱۳۹۲', 1819, 1, '13920402'),
(23, 1, 1, 3, 4, 'اردبیل کارشناسان', 2, 'شمالی', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '0', ',,,', '', '0', 0, '', 0, 0, '', '', '', '', 0, '45454545', 'پنجشنبه ۲ خرداد ۱۳۹۲', 1359, 1, '1392/03/31'),
(24, 1, 5, 7, 10, 'اردبیل کارشناسان', 2, 'دو نبش شمالی', 0, 0, 0, 0, 0, '', 0, '', '', '', '', 'تخلیه', 'آب,برق,,', '', '', 0, '', 0, 0, '', '', '', '', 0, '4545456', 'پنجشنبه ۲ خرداد ۱۳۹۲', 1653, 1, '13920402'),
(25, 1, 6, 9, 13, 'رشت', 2, 'شمالی جنوبی دو کله', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '0', ',,,', '', '', 0, '', 0, 0, '', '', '', '', 0, 'شماره 2222', 'پنجشنبه ۲ خرداد ۱۳۹۲', 1781, 1, '13920402'),
(26, 1, 5, 7, 10, 'اردبیل کارشناسان', 1, 'دو نبش جنوبی', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '0', 'آب,برق,گاز,تلفن', '', '', 0, '', 0, 0, '', '', '', '', 2, 'شماره 33', 'پنجشنبه ۲ خرداد ۱۳۹۲', 1367, 1, '13920402'),
(27, 1, 6, 9, 13, 'رشت', 3, '', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '0', ',,,', '', '0', 0, '', 0, 0, '', '', '', '', 44, 'یببببببببببببببببببببببببببببببببببببببببببببببببببب', 'پنجشنبه ۲ خرداد ۱۳۹۲', 1326, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `homeimage`
--

CREATE TABLE IF NOT EXISTS `homeimage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_home` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `homeimage`
--

INSERT INTO `homeimage` (`id`, `id_home`, `name`) VALUES
(32, 1819, 'striped_bottom__by_junee28-d64oso4.jpg'),
(33, 1359, 'boobs_women_bikini_desktop_1634x1200_hd-wallpaper-1111676.jpg'),
(35, 1653, 'red_1970_dodge_charger_r_t_by_americanmuscle-d64oa1b.jpg'),
(36, 1781, 'colza_field_by_norbertkocsis-d64paqd.jpg'),
(37, 1367, 'women_irina_shayk_desktop_1600x1200_hd-wallpaper-1111672.jpg'),
(38, 1326, 'red_1970_dodge_charger_r_t_by_americanmuscle-d64oa1b1.jpg'),
(39, 1326, 'colza_field_by_norbertkocsis-d64paqd1.jpg'),
(40, 1326, 'striped_bottom__by_junee28-d64oso41.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_status`
--

CREATE TABLE IF NOT EXISTS `home_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `home_status`
--

INSERT INTO `home_status` (`id`, `code`, `status_id`) VALUES
(38, 1819, 1),
(39, 1819, 2),
(41, 16695, 3),
(43, 1359, 6),
(44, 1653, 1),
(45, 1653, 2),
(46, 1781, 6),
(47, 1367, 6),
(48, 1367, 4),
(50, 1326, 6);

-- --------------------------------------------------------

--
-- Table structure for table `home_vam`
--

CREATE TABLE IF NOT EXISTS `home_vam` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `max_vam` varchar(30) NOT NULL,
  `min_vam` varchar(30) NOT NULL,
  `max_price_vam` varchar(30) NOT NULL,
  `min_price_vam` varchar(30) NOT NULL,
  `tap` varchar(30) NOT NULL,
  `tab` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `home_vam`
--

INSERT INTO `home_vam` (`id`, `code`, `max_vam`, `min_vam`, `max_price_vam`, `min_price_vam`, `tap`, `tab`) VALUES
(26, 1819, '10', '0', '0', '', '', ''),
(29, 1359, '0', '0', '0', '0', '0', '0'),
(30, 1653, '', '0', '0', '', '', ''),
(31, 1781, '', '0', '0', '', '', ''),
(32, 1367, '', '0', '0', '', '', ''),
(34, 1326, '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ip_banned`
--

CREATE TABLE IF NOT EXISTS `ip_banned` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) NOT NULL,
  `quant` int(2) NOT NULL,
  `timestamp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `kabinet`
--

CREATE TABLE IF NOT EXISTS `kabinet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_kabinet` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kabinet`
--

INSERT INTO `kabinet` (`id`, `title_kabinet`) VALUES
(1, 'MDF');

-- --------------------------------------------------------

--
-- Table structure for table `kafpoosh`
--

CREATE TABLE IF NOT EXISTS `kafpoosh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_kafpoosh` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kafpoosh`
--

INSERT INTO `kafpoosh` (`id`, `title_kafpoosh`) VALUES
(1, 'سرامیک');

-- --------------------------------------------------------

--
-- Table structure for table `karbary`
--

CREATE TABLE IF NOT EXISTS `karbary` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_karbary` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `karbary`
--

INSERT INTO `karbary` (`id`, `title_karbary`) VALUES
(1, 'اوقافی'),
(2, 'مسکونی');

-- --------------------------------------------------------

--
-- Table structure for table `max_price`
--

CREATE TABLE IF NOT EXISTS `max_price` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `min_rahn` int(11) NOT NULL,
  `min_ejare` int(11) NOT NULL,
  `min_geymat` int(11) NOT NULL,
  `max_rahn` int(11) NOT NULL,
  `max_ejare` int(11) NOT NULL,
  `max_geymat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `max_price`
--

INSERT INTO `max_price` (`id`, `code`, `status`, `min_rahn`, `min_ejare`, `min_geymat`, `max_rahn`, `max_ejare`, `max_geymat`) VALUES
(22, 1819, 2, 3, 0, 0, 0, 0, 0),
(23, 1359, 2, 0, 0, 1, 0, 0, 200),
(24, 16695, 1, 100, 0, 0, 1, 0, 0),
(25, 1653, 2, 1, 1, 0, 0, 0, 0),
(26, 1781, 2, 0, 0, 11, 0, 0, 0),
(27, 1367, 2, 0, 0, 1, 0, 0, 1),
(28, 1326, 2, 0, 0, 1, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `min_price`
--

CREATE TABLE IF NOT EXISTS `min_price` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `min_rahn` int(11) NOT NULL,
  `min_ejare` int(11) NOT NULL,
  `min_geymat` int(11) NOT NULL,
  `max_rahn` int(11) NOT NULL,
  `max_ejare` int(11) NOT NULL,
  `max_geymat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `min_price`
--

INSERT INTO `min_price` (`id`, `code`, `status`, `min_rahn`, `min_ejare`, `min_geymat`, `max_rahn`, `max_ejare`, `max_geymat`) VALUES
(22, 1819, 2, 0, 0, 0, 0, 0, 0),
(23, 1359, 2, 0, 0, 0, 0, 0, 0),
(24, 16695, 1, 0, 0, 0, 0, 0, 0),
(25, 1653, 2, 0, 0, 0, 0, 0, 0),
(26, 1781, 2, 0, 0, 0, 0, 0, 0),
(27, 1367, 2, 0, 0, 0, 0, 0, 0),
(28, 1326, 2, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nama`
--

CREATE TABLE IF NOT EXISTS `nama` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nama`
--

INSERT INTO `nama` (`id`, `title_nama`) VALUES
(2, 'سرامیک');

-- --------------------------------------------------------

--
-- Table structure for table `noe_melk`
--

CREATE TABLE IF NOT EXISTS `noe_melk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_noe_melk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `noe_melk`
--

INSERT INTO `noe_melk` (`id`, `title_noe_melk`) VALUES
(1, 'آپارتمان'),
(2, 'ویلا'),
(3, 'گاو داری');

-- --------------------------------------------------------

--
-- Table structure for table `sanad`
--

CREATE TABLE IF NOT EXISTS `sanad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_sanad` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sanad`
--

INSERT INTO `sanad` (`id`, `title_sanad`) VALUES
(1, 'اوقافی');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('85c02bee364b103ff7dcec9f67644518', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0', 1369370751, 'a:4:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:8:"UserName";s:17:"af69.00@gmail.com";s:17:"user_is_logged_in";i:1;}'),
('afa56366715d9ee1ed68d2bac01d92bc', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0', 1369342044, 'a:3:{s:2:"id";s:1:"1";s:8:"UserName";s:17:"af69.00@gmail.com";s:17:"user_is_logged_in";i:1;}'),
('da1ca19d822380338ee3e6c471360826', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', 1369342164, '');

-- --------------------------------------------------------

--
-- Table structure for table `site_user`
--

CREATE TABLE IF NOT EXISTS `site_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(80) NOT NULL,
  `homeTell` varchar(50) NOT NULL,
  `mobileTell` varchar(50) NOT NULL,
  `userAdd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `site_user`
--

INSERT INTO `site_user` (`id`, `userName`, `userEmail`, `userPass`, `homeTell`, `mobileTell`, `userAdd`) VALUES
(1, 'افشین', 'af69.00@gmail.com', '8f83749255531d677e0d9de33d2aa487bafe4543', '', '09144540742', 'اردبیل کارشناسان'),
(2, 'بیل گیتس', 'a@a.com', '8f83749255531d677e0d9de33d2aa487bafe4543', '', '09144540742', 'اردبیل کارشناسان');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_vagozary` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `title_vagozary`) VALUES
(1, 'رهن'),
(2, 'اجاره'),
(3, 'خرید'),
(4, 'پیش فروش'),
(5, 'معاوضه'),
(6, 'فروش');

-- --------------------------------------------------------

--
-- Table structure for table `web_config`
--

CREATE TABLE IF NOT EXISTS `web_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Web_Title` varchar(255) NOT NULL,
  `Admin_Email` varchar(255) NOT NULL,
  `Keywords` text NOT NULL,
  `Description` text NOT NULL,
  `WebOff` int(1) NOT NULL,
  `OffDescription` text NOT NULL,
  `Days` varchar(20) NOT NULL,
  `month` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Hours` int(11) NOT NULL,
  `Minutes` int(11) NOT NULL,
  `Seconds` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `web_config`
--

INSERT INTO `web_config` (`id`, `Web_Title`, `Admin_Email`, `Keywords`, `Description`, `WebOff`, `OffDescription`, `Days`, `month`, `Year`, `Hours`, `Minutes`, `Seconds`) VALUES
(1, 'نوشته های یک مبتدی', 'afshin@a-vitrin.ir', 'php,css', 'چطوری تو', 1, 'در حال یروز رسانی', '', 'January', '2010', 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
