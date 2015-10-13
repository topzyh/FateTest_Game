# SQL-Front 5.1  (Build 4.16)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;


# Host: localhost    Database: fatetest
# ------------------------------------------------------
# Server version 5.5.36

#
# Source for table fatetest_info
#

DROP TABLE IF EXISTS `fatetest_info`;
CREATE TABLE `fatetest_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT '0' COMMENT '介绍人id',
  `cname` varchar(255) DEFAULT NULL,
  `name0` varchar(16) DEFAULT NULL COMMENT '填写人姓名',
  `name1` varchar(16) DEFAULT NULL COMMENT '喜欢的人1',
  `name2` varchar(16) DEFAULT NULL COMMENT '喜欢的人2',
  `name3` varchar(16) DEFAULT NULL COMMENT '喜欢的人3',
  `time` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' COMMENT '填写时间',
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8 COMMENT='填写者信息';

#
# Dumping data for table fatetest_info
#


#
# Source for table fatetest_test
#

DROP TABLE IF EXISTS `fatetest_test`;
CREATE TABLE `fatetest_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `email` varchar(64) NOT NULL,
  `time` datetime DEFAULT '2000-01-01 00:00:00' COMMENT '填写时间',
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8 COMMENT='介绍人信息';

#
# Dumping data for table fatetest_test
#

INSERT INTO `fatetest_test` VALUES (1,'人佐人佑','admin@topsts.cn','2000-01-01','');

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
