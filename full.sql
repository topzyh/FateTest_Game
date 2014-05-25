-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 05 月 25 日 15:00
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
  `id` int(255) DEFAULT NULL COMMENT '介绍人id',
  `name0` varchar(16) DEFAULT NULL COMMENT '填写人姓名',
  `name1` varchar(16) DEFAULT NULL COMMENT '喜欢的人1',
  `name2` varchar(16) DEFAULT NULL COMMENT '喜欢的人2',
  `name3` varchar(16) DEFAULT NULL COMMENT '喜欢的人3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lovetest_info`
--

INSERT INTO `lovetest_info` (`id`, `name0`, `name1`, `name2`, `name3`) VALUES
(1, '我的名字', '他的名字1', '他的名字2', '他的名字3'),
(12, '高敏栋', '孙小华', NULL, NULL),
(12, '彭仁霞', '郭丽', '孙小华', '王艳梅'),
(12, '郭莉', '张逸涵', NULL, NULL),
(12, 'ietest', 'ietest1', 'ietest2', 'ietest3'),
(12, '高敏栋', '孙小华', NULL, NULL),
(16, 'guoli', '彭仁霞', NULL, NULL),
(12, '黄坚', '张逸涵', '王烨', '徐嘉'),
(16, '章洁', '彭仁霞', '蒋玲红', NULL),
(12, '温天泽', '马小钦', '陈美齐', '高祝星飘'),
(12, 'zhangjie ', 'guoli', 'zhangjie', NULL),
(12, '王罗霞', '沈晓晨', '徐超', '唐祥'),
(21, '李肃', '刘燕', '王罗霞', '周芸'),
(21, '唐祥', '柳青', '高亮', '潘娜'),
(21, '苏舟', '王罗霞', NULL, NULL),
(12, '朱小红', '李嘉仪', '闵彩霞', '卢诗怡');

-- --------------------------------------------------------

--
-- 表的结构 `lovetest_test`
--

CREATE TABLE IF NOT EXISTS `lovetest_test` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `email` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `lovetest_test`
--

INSERT INTO `lovetest_test` (`id`, `name`, `email`) VALUES
(1, '人佐人佑', 'admin@topsts.cn'),
(16, '彭仁霞', '1210501518@qq.com'),
(15, '郭莉', '1525740252@qq.com'),
(12, '张逸涵', 'i@topsts.cn'),
(17, '黄坚', '1033945688@qq.com'),
(19, '温天泽', '2507399088@qq.com'),
(20, ' 孙浩', '0@qq.com'),
(21, '王罗霞', '1253297836@qq.com'),
(22, '朱小红', '1297970349@qq.com'),
(23, '余叙涛', 'yu@topsts.cn'),
(24, '一样', '377473611@qq.com'),
(26, '发的', '377473611@qq.com'),
(27, '唐可垚', '364837898@qq.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
