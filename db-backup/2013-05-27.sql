#
# TABLE STRUCTURE FOR: about
#

DROP TABLE IF EXISTS about;

CREATE TABLE `about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO about (`id`, `title`, `keywords`, `description`) VALUES (1, '1', 'asas2', '<p style=\"text-align: center;\">dfdsfrff fffffffff fff fffffff fff fffffffff ffffffffffff ffffff&nbsp; ffffffffffff fff fffffffffff fffffffffffffffffffffff&nbsp; ffffffffffffffffffffffff fffffffffffffffffffffffffffffff sdfsdfsdf sdf sdfsdfsdf s sdf sdf sdf sdf sdf sdf sdf sdf <br></p><p style=\"\"><br></p>\r\n');


#
# TABLE STRUCTURE FOR: admin_user
#

DROP TABLE IF EXISTS admin_user;

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LoginName` varchar(255) NOT NULL,
  `LoginPass` varchar(255) NOT NULL,
  `UserEmail` varchar(500) NOT NULL,
  `UserAvatar` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO admin_user (`id`, `LoginName`, `LoginPass`, `UserEmail`, `UserAvatar`) VALUES (1, 'afshin', '8f83749255531d677e0d9de33d2aa487bafe4543', 'afshin.nj@gmail.com', '');


#
# TABLE STRUCTURE FOR: advertisement
#

DROP TABLE IF EXISTS advertisement;

CREATE TABLE `advertisement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code_melk` varchar(30) NOT NULL,
  `id_user` int(10) NOT NULL,
  `ads_type` int(1) NOT NULL,
  `save_date` varchar(50) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO advertisement (`id`, `code_melk`, `id_user`, `ads_type`, `save_date`, `active`) VALUES (1, '1878', 1, 2, '13920405', 1);


#
# TABLE STRUCTURE FOR: autopopulate
#

DROP TABLE IF EXISTS autopopulate;

CREATE TABLE `autopopulate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `ostan` int(11) DEFAULT NULL,
  `shahrestan` int(11) DEFAULT NULL,
  `mantage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (1, 'اردبیل', NULL, 1, NULL, NULL);
INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (3, 'سرعین', 1, NULL, 1, NULL);
INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (4, 'منطقه1', 3, NULL, NULL, 1);
INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (5, 'تهران', NULL, 1, NULL, NULL);
INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (6, 'گیلان', NULL, 1, NULL, NULL);
INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (7, 'کرج', 5, NULL, 1, NULL);
INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (8, 'رشت', 6, NULL, 1, NULL);
INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (9, 'آستارا', 6, NULL, 1, NULL);
INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (10, 'ونک', 7, NULL, NULL, 1);
INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (11, 'گلسار', 8, NULL, NULL, 1);
INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (12, 'صاحلی', 9, NULL, NULL, 1);
INSERT INTO autopopulate (`id`, `name`, `parent_id`, `ostan`, `shahrestan`, `mantage`) VALUES (13, 'چهار راه امام', 9, NULL, NULL, 1);


#
# TABLE STRUCTURE FOR: banner
#

DROP TABLE IF EXISTS banner;

CREATE TABLE `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(50) NOT NULL,
  `show` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO banner (`id`, `title`, `date`, `description`, `image`, `show`) VALUES (1, 'تست', '1392/02/26', '<p style=\"text-align: right;\">تست<br></p>', 'shofazh.png', 0);
INSERT INTO banner (`id`, `title`, `date`, `description`, `image`, `show`) VALUES (2, 'تست11', '1392/02/31', '<p style=\"text-align: center;\">تست شماره 2<br></p>', 'shofazh1.png', 0);


#
# TABLE STRUCTURE FOR: captcha
#

DROP TABLE IF EXISTS captcha;

CREATE TABLE `captcha` (
  `time` int(10) unsigned NOT NULL,
  `captcha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO captcha (`time`, `captcha`) VALUES (1369559302, '873107');
INSERT INTO captcha (`time`, `captcha`) VALUES (1369559527, '354800');
INSERT INTO captcha (`time`, `captcha`) VALUES (1369559548, '654425');


#
# TABLE STRUCTURE FOR: cartbank
#

DROP TABLE IF EXISTS cartbank;

CREATE TABLE `cartbank` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code_melk` varchar(30) NOT NULL,
  `id_user` int(10) NOT NULL,
  `TNumber` varchar(50) NOT NULL,
  `PayerName` varchar(50) NOT NULL,
  `Dateofpayment` varchar(50) NOT NULL,
  `Theamountpaid` varchar(50) NOT NULL,
  `save_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (1, '1761', 1, '125489652522', 'عشق علی', '2013/05/31', '1.000.00', 'سه شنبه ۳۱ اردیبهشت ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (2, '1793', 1, '125489652522', 'عشق علی', '1392/02/31', '2,000,000', 'سه شنبه ۳۱ اردیبهشت ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (3, '1908', 1, '15487777', 'عشق علی', '1392/02/31', '2.000.00', 'سه شنبه ۳۱ اردیبهشت ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (4, '1870', 1, '125489652522', 'عشق علی', '1392/02/31', '1,000,000', 'سه شنبه ۳۱ اردیبهشت ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (5, '1259', 1, '15487777', 'زکرایی رازی', '1392/03/27', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (6, '1761', 1, '125489652522', 'زکرایی رازی', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (7, '1761', 1, '125489652522', 'زکرایی رازی', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (8, '1761', 1, '125489652522', 'عشق علی', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (9, '1761', 1, '125489652522', 'عشق علی', '1392/03/31', '1.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (10, '1944', 1, '125489652522', 'زکرایی رازی', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (11, '1341', 1, '15487777', 'زکرایی رازی', '1392/03/31', '2,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (12, '1641', 1, '1365485', 'عشق علی', '1392/03/31', '1,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (13, '1739', 1, '1', 'عشق علی', '1392/03/31', '2,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (14, '1984', 1, '125489652522', 'زکرایی رازی', '1392/03/31', '2,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (15, '1234', 1, '125489652522', 'عشق علی میرژا', '1392/03/31', '2,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (16, '1819', 1, '125489652522', 'عشق علی', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (17, '1653', 1, '125489652522', 'افشین', '1392/03/31', '1,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (18, '1781', 1, '15487777', 'زکرایی رازی', '1392/03/31', '1,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (19, '1367', 1, '1365485', 'عشق علی میرژا', '1392/03/31', '1,000,000', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (20, '1326', 1, '125489652522', 'عشق علی میرژا', '1392/03/31', '2.000.00', 'پنجشنبه ۲ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (21, '1928', 1, '125489652522', 'زکرایی رازی', '1392/03/31', '0.00', 'جمعه ۳ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (22, '1983', 1, '15487777', 'زکرایی رازی', '1392/03/31', '2,000,000', 'جمعه ۳ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (23, '1664', 1, '125489652522', 'زکرایی رازی', '1392/03/31', '2,000,000', 'جمعه ۳ خرداد ۱۳۹۲');
INSERT INTO cartbank (`id`, `code_melk`, `id_user`, `TNumber`, `PayerName`, `Dateofpayment`, `Theamountpaid`, `save_date`) VALUES (24, '1878', 1, '125489652522', 'زکرایی رازی', '1392/03/31', '2.000.00', 'یکشنبه ۵ خرداد ۱۳۹۲');


#
# TABLE STRUCTURE FOR: contact
#

DROP TABLE IF EXISTS contact;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `keywords` varchar(500) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO contact (`id`, `title`, `keywords`, `description`) VALUES (1, 'تماس با ما', 'تماس با ما', 'تست');


#
# TABLE STRUCTURE FOR: darkhast
#

DROP TABLE IF EXISTS darkhast;

CREATE TABLE `darkhast` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO darkhast (`id`, `code`, `id_user`, `id_ostan`, `id_shahrestan`, `id_mantage`, `id_noeMelk`, `sen_bana`, `tedad_khab`, `metraj`, `etbar`, `sharh_darkhast`, `save_date`, `active`) VALUES (1, 19853, 1, 1, 3, 4, 2, '0', '', '0', '1392/03/31', 'سیبسیب', 'دوشنبه ۶ خرداد ۱۳۹۲', 1);


#
# TABLE STRUCTURE FOR: email_template
#

DROP TABLE IF EXISTS email_template;

CREATE TABLE `email_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `template` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO email_template (`id`, `title`, `template`) VALUES (1, 'فراموشی رمز عبور', '<div style=\"width:400px; height:200px; margin:auto; border:1px dashed #CCC; position:relative; background:#EEE;\">\r\n  <h3 style=\"margin:0; padding:10px 10px 10px 0; border-bottom:1px dashed #CCC; text-align:right;\">%title%</h3>\r\n  <p style=\"text-align:right; direction:rtl; padding:10px;\">کلمه عبور جدید شما\r\n   : %pass%\r\n   \r\n   </p>\r\n  \r\n  <div style=\"position:absolute;bottom:0; border-top:1px dashed #CCC; width:385px; direction:rtl; padding:5px 10px 5px 5px;\">\r\n  \r\n%webName% \r\n \r\n  </div>\r\n</div>\r\n<div style=\"direction:rtl; text-align:center\">قدرت گرفته با سیستم مدیریت محتوای a cms</div>');
INSERT INTO email_template (`id`, `title`, `template`) VALUES (2, 'نظرات کاربران', '<div style=\"width:400px; height:200px; margin:auto; border:1px dashed #CCC; position:relative; background:#EEE;\">\r\n  <h3 style=\"margin:0; padding:10px 10px 10px 0; border-bottom:1px dashed #CCC; text-align:right;\">%title%</h3>\r\n  <p style=\"text-align:right; direction:rtl; padding:10px;\">\r\n    %message%\r\n   \r\n   </p>\r\n  \r\n  <div style=\"position:absolute;bottom:0; border-top:1px dashed #CCC; width:385px; direction:rtl; padding:5px 10px 5px 5px;\">\r\n  \r\n%webName% \r\n \r\n  </div>\r\n</div>\r\n<div style=\"direction:rtl; text-align:center\">قدرت گرفته با سیستم مدیریت محتوای a cms</div>');
INSERT INTO email_template (`id`, `title`, `template`) VALUES (3, 'جواب مدیر', '<div style=\"width:400px; height:200px; margin:auto; border:1px dashed #CCC; position:relative; background:#EEE;\">\n  <h3 style=\"margin:0; padding:10px 10px 10px 0; border-bottom:1px dashed #CCC; text-align:right;\">%title%</h3>\n  <p style=\"text-align:right; direction:rtl; padding:10px;\">\n   %message%\n   \n   </p>\n  \n  <div style=\"position:absolute;bottom:0; border-top:1px dashed #CCC; width:385px; direction:rtl; padding:5px 10px 5px 5px;\">\n  \n%webName% \n \n  </div>\n</div>\n<div style=\"direction:rtl; text-align:center\">قدرت گرفته با سیستم مدیریت محتوای a cms</div>');
INSERT INTO email_template (`id`, `title`, `template`) VALUES (4, 'تماس با ما', '');
INSERT INTO email_template (`id`, `title`, `template`) VALUES (5, 'ارسال به دوستان', '<style>\r\n body{\r\n	  font-family:Tahoma, Geneva, sans-serif;\r\n	  font-size:14px;\r\n	  background:#EEE;\r\n	  }\r\n\r\n</style>\r\n<table width=\'600\' border=\'0\' align=\'center\' dir=\'rtl\' style=\"background:#FFF; border:1px solid #CCC;\" >\r\n    <tr>\r\n      <td colspan=\'2\' align=\'center\'><a href=\"%base_url%\" style=\"text-decoration:none;\">%webName%</a></td>\r\n    </tr>\r\n    <tr>\r\n      <td style=\"border:1px solid #CCC; border-radius:5px; padding:5px; font-family:Tahoma, Geneva, sans-serif; font-size:12px;width:280px;\">فرستنده : %YourName%</td>\r\n      <td style=\"border:1px solid #CCC; border-radius:5px; padding:5px; font-family:Tahoma, Geneva, sans-serif; font-size:12px;width:280px;\">نویسنده :  %author%</td>\r\n    </tr>\r\n    <tr>\r\n      <td style=\"border:1px solid #CCC; border-radius:5px; padding:5px; font-family:Tahoma, Geneva, sans-serif; font-size:12px;width:280px;\" colspan=\'2\' >عنوان : %title%</td>\r\n    </tr>\r\n    <tr>\r\n      <td colspan=\'2\' style=\" border:1px solid #CCC; border-radius:5px; padding:5px;\">%message%</td>\r\n    </tr>\r\n    <tr>\r\n      <td colspan=\'2\'></td>\r\n</tr>\r\n</table>');


#
# TABLE STRUCTURE FOR: emkanat
#

DROP TABLE IF EXISTS emkanat;

CREATE TABLE `emkanat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_emkanat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (1, 'آشپزخانه اپن');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (2, 'پارکینگ');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (3, 'انباری');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (4, 'شومینه');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (5, 'کولر');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (6, 'حیاط');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (7, 'شوفاژ');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (8, 'چیلر');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (9, 'پکیج');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (10, 'جکوزی');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (11, 'فن کوئل');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (12, 'آبگرمکن');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (13, 'چوب کاری');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (14, 'نور مخفی');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (15, 'ریموت کنترل');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (16, 'جارو مرکزی');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (17, ' آنتن مرکزی');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (18, 'آیفون تصویری');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (19, 'سیستم ایمنی');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (20, 'شوتینگ زباله');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (21, 'آسانسور');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (22, 'سرایداری');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (23, 'لابی');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (24, 'استخر');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (25, 'سونا');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (26, 'باربیکیو');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (27, 'گچ بری');
INSERT INTO emkanat (`id`, `title_emkanat`) VALUES (28, 'نقاشی');


#
# TABLE STRUCTURE FOR: emkanat_khane
#

DROP TABLE IF EXISTS emkanat_khane;

CREATE TABLE `emkanat_khane` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_khane` int(10) unsigned NOT NULL,
  `emkanat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: home
#

DROP TABLE IF EXISTS home;

CREATE TABLE `home` (
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO home (`id`, `id_User`, `id_ostan`, `id_shahrestan`, `id_mantage`, `address`, `noe_melk`, `mogheyat`, `masahat`, `zirbana`, `tool_bar`, `eslahi`, `t_metraj`, `tarakom`, `karbari`, `mabar`, `sanad`, `mojavez`, `nama`, `sokoonat`, `emtiyaz`, `tabagheh`, `sen_bana`, `vahedha`, `tabaghat`, `khab`, `teras`, `kafpoosh`, `telefon`, `service_ashpazkhaneh`, `service_behdashti`, `bazdid`, `tozihat`, `save_date`, `code_melk`, `active`, `etbar`) VALUES (4, 1, 1, 3, 4, 'اردبیل کارشناسان', 1, '', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '0', ',,,', '', '0', 0, '', 0, 0, '', '', '', '', 54, '', 'یکشنبه ۵ خرداد ۱۳۹۲', 1878, 0, '0');


#
# TABLE STRUCTURE FOR: home_status
#

DROP TABLE IF EXISTS home_status;

CREATE TABLE `home_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

INSERT INTO home_status (`id`, `code`, `status_id`) VALUES (39, 1878, 1);
INSERT INTO home_status (`id`, `code`, `status_id`) VALUES (40, 1878, 2);
INSERT INTO home_status (`id`, `code`, `status_id`) VALUES (41, 19853, 1);


#
# TABLE STRUCTURE FOR: home_vam
#

DROP TABLE IF EXISTS home_vam;

CREATE TABLE `home_vam` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `max_vam` varchar(30) NOT NULL,
  `min_vam` varchar(30) NOT NULL,
  `max_price_vam` varchar(30) NOT NULL,
  `min_price_vam` varchar(30) NOT NULL,
  `tap` varchar(30) NOT NULL,
  `tab` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO home_vam (`id`, `code`, `max_vam`, `min_vam`, `max_price_vam`, `min_price_vam`, `tap`, `tab`) VALUES (30, 1878, '1', '0', '0', '2', '3', '4');


#
# TABLE STRUCTURE FOR: homeimage
#

DROP TABLE IF EXISTS homeimage;

CREATE TABLE `homeimage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_home` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO homeimage (`id`, `id_home`, `name`) VALUES (2, 1878, '404.png');


#
# TABLE STRUCTURE FOR: ip_banned
#

DROP TABLE IF EXISTS ip_banned;

CREATE TABLE `ip_banned` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) NOT NULL,
  `quant` int(2) NOT NULL,
  `timestamp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO ip_banned (`id`, `ip`, `quant`, `timestamp`) VALUES (1, '::1', 1, '1369638803');


#
# TABLE STRUCTURE FOR: kabinet
#

DROP TABLE IF EXISTS kabinet;

CREATE TABLE `kabinet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_kabinet` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO kabinet (`id`, `title_kabinet`) VALUES (1, 'MDF');


#
# TABLE STRUCTURE FOR: kafpoosh
#

DROP TABLE IF EXISTS kafpoosh;

CREATE TABLE `kafpoosh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_kafpoosh` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO kafpoosh (`id`, `title_kafpoosh`) VALUES (1, 'سرامیک');


#
# TABLE STRUCTURE FOR: karbary
#

DROP TABLE IF EXISTS karbary;

CREATE TABLE `karbary` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_karbary` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO karbary (`id`, `title_karbary`) VALUES (1, 'اوقافی');
INSERT INTO karbary (`id`, `title_karbary`) VALUES (2, 'مسکونی');


#
# TABLE STRUCTURE FOR: max_price
#

DROP TABLE IF EXISTS max_price;

CREATE TABLE `max_price` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO max_price (`id`, `code`, `status`, `min_rahn`, `min_ejare`, `min_geymat`, `max_rahn`, `max_ejare`, `max_geymat`) VALUES (4, 1878, 2, 10, 20, 0, 0, 0, 0);
INSERT INTO max_price (`id`, `code`, `status`, `min_rahn`, `min_ejare`, `min_geymat`, `max_rahn`, `max_ejare`, `max_geymat`) VALUES (5, 19853, 1, 0, 0, 0, 0, 0, 0);


#
# TABLE STRUCTURE FOR: min_price
#

DROP TABLE IF EXISTS min_price;

CREATE TABLE `min_price` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO min_price (`id`, `code`, `status`, `min_rahn`, `min_ejare`, `min_geymat`, `max_rahn`, `max_ejare`, `max_geymat`) VALUES (4, 1878, 2, 0, 0, 0, 0, 0, 0);
INSERT INTO min_price (`id`, `code`, `status`, `min_rahn`, `min_ejare`, `min_geymat`, `max_rahn`, `max_ejare`, `max_geymat`) VALUES (5, 19853, 1, 0, 0, 0, 0, 0, 0);


#
# TABLE STRUCTURE FOR: nama
#

DROP TABLE IF EXISTS nama;

CREATE TABLE `nama` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO nama (`id`, `title_nama`) VALUES (2, 'سرامیک');


#
# TABLE STRUCTURE FOR: noe_melk
#

DROP TABLE IF EXISTS noe_melk;

CREATE TABLE `noe_melk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_noe_melk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO noe_melk (`id`, `title_noe_melk`) VALUES (1, 'آپارتمان');
INSERT INTO noe_melk (`id`, `title_noe_melk`) VALUES (2, 'ویلا');
INSERT INTO noe_melk (`id`, `title_noe_melk`) VALUES (3, 'گاو داری');


#
# TABLE STRUCTURE FOR: sanad
#

DROP TABLE IF EXISTS sanad;

CREATE TABLE `sanad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_sanad` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO sanad (`id`, `title_sanad`) VALUES (1, 'اوقافی');


#
# TABLE STRUCTURE FOR: sessions
#

DROP TABLE IF EXISTS sessions;

CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO sessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('0bf29dd3253e859ab4f9006aff904e06', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0', 1369643553, 'a:2:{s:4:\"name\";s:6:\"afshin\";s:12:\"is_logged_in\";i:1;}');


#
# TABLE STRUCTURE FOR: site_user
#

DROP TABLE IF EXISTS site_user;

CREATE TABLE `site_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(80) NOT NULL,
  `homeTell` varchar(50) NOT NULL,
  `mobileTell` varchar(50) NOT NULL,
  `userAdd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO site_user (`id`, `userName`, `userEmail`, `userPass`, `homeTell`, `mobileTell`, `userAdd`) VALUES (1, 'افشین', 'af69.00@gmail.com', '8f83749255531d677e0d9de33d2aa487bafe4543', '', '09144540742', 'اردبیل کارشناسان');


#
# TABLE STRUCTURE FOR: status
#

DROP TABLE IF EXISTS status;

CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_vagozary` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO status (`id`, `title_vagozary`) VALUES (1, 'رهن');
INSERT INTO status (`id`, `title_vagozary`) VALUES (2, 'اجاره');
INSERT INTO status (`id`, `title_vagozary`) VALUES (3, 'خرید');
INSERT INTO status (`id`, `title_vagozary`) VALUES (4, 'پیش فروش');
INSERT INTO status (`id`, `title_vagozary`) VALUES (5, 'معاوضه');
INSERT INTO status (`id`, `title_vagozary`) VALUES (6, 'فروش');


#
# TABLE STRUCTURE FOR: web_config
#

DROP TABLE IF EXISTS web_config;

CREATE TABLE `web_config` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO web_config (`id`, `Web_Title`, `Admin_Email`, `Keywords`, `Description`, `WebOff`, `OffDescription`, `Days`, `month`, `Year`, `Hours`, `Minutes`, `Seconds`) VALUES (1, 'نوشته های یک مبتدی', 'afshin@a-vitrin.ir', 'php,css', 'چطوری تو', 1, 'در حال یروز رسانی', '', 'January', '2010', 1, 1, 1);


