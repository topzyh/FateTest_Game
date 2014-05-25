-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 05 月 25 日 14:55
-- 服务器版本: 5.5.36
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lovetest`
--

-- --------------------------------------------------------

--
-- 表的结构 `lovetest_info`
--

CREATE TABLE IF NOT EXISTS `lovetest_info` (
  `1` int(11) NOT NULL,
  `id` int(255) DEFAULT NULL COMMENT '介绍人id',
  `name0` varchar(16) DEFAULT NULL COMMENT '填写人姓名',
  `name1` varchar(16) DEFAULT NULL COMMENT '喜欢的人1',
  `name2` varchar(16) DEFAULT NULL COMMENT '喜欢的人2',
  `name3` varchar(16) DEFAULT NULL COMMENT '喜欢的人3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `lovetest_test`
--

CREATE TABLE IF NOT EXISTS `lovetest_test` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `email` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `lovetest_test`
--

INSERT INTO `lovetest_test` (`id`, `name`, `email`) VALUES
(1, '人佐人佑', 'admin@topsts.cn');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
