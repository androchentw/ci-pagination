-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2013 年 04 月 15 日 08:56
-- 伺服器版本: 5.5.24-log
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `ci_pagination`
--

-- --------------------------------------------------------

--
-- 表的結構 `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `PostID` bigint(20) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Content` text,
  `Category` bigint(20) DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyDate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`PostID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- 轉存資料表中的資料 `post`
--

INSERT INTO `post` (`PostID`, `UserName`, `UserEmail`, `Content`, `Category`, `CreateDate`, `ModifyDate`) VALUES
(27, '123dsaf', 'sdfasdf', '456dsfaasdf', 1, '2013-03-06 05:50:36', '2013-03-30 23:50:36'),
(10, 'haha11', 'ha@gmail.com', 'OKOK', 1, '2013-03-04 22:40:45', '2013-03-28 14:40:45'),
(13, 'OK', '', 'sdfasfsf', 1, '2013-03-18 22:50:39', '2013-03-28 14:50:39'),
(25, 'hello', '', 'test', 1, '2013-03-19 22:15:55', '2013-03-31 14:15:55'),
(23, '123', '', '456', 1, '2013-03-05 21:50:36', '2013-03-31 13:50:36'),
(24, '1567', '', '890', 2, '2013-03-11 21:50:47', '2013-03-31 14:15:47'),
(26, '1567df', 'sadfas', '890sdf', 2, '2013-03-12 05:50:57', '2013-03-31 14:32:47'),
(53, 'OasdK', '', 'sdfasdfsfsf', 1, '2013-03-18 22:50:39', '2013-03-28 14:20:39'),
(55, 'a', '', 'tesdfst', 1, '2013-03-19 22:15:55', '2013-03-31 14:25:55'),
(56, '12sd3', '', '45sd6', 1, '2013-03-05 21:50:36', '2013-03-31 13:20:36'),
(54, '1ddd5a67', '', '89ds0', 2, '2013-03-11 21:50:47', '2013-03-31 14:25:47'),
(57, '1a567df', 'sadffasaas', '890sdf', 2, '2013-03-12 05:50:57', '2013-03-31 14:22:47'),
(33, 'OaK', '', 'sdfasdfsfsf', 1, '2013-03-18 22:50:39', '2013-03-28 14:51:39'),
(35, 'healdlo', '', 'taest', 1, '2013-03-19 22:15:55', '2013-03-31 14:11:55'),
(37, '12as3', '', '45asd6', 1, '2013-03-05 21:50:36', '2013-03-31 13:51:36'),
(34, '15sdsd67', '', '89s0', 2, '2013-03-11 21:50:47', '2013-03-31 14:11:47'),
(36, '15a67df', 'sadfasdas', '890sdf', 2, '2013-03-12 05:50:57', '2013-03-31 14:31:47'),
(28, 'haha1122', 'ha@gmail.com', 'OKOKsdad', 1, '2013-03-05 01:40:45', '2013-03-28 14:28:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
