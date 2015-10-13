<?php
/**
 *
 * 游戏：一个姓名缘分测试系统，生成你的代码发送给别人，别人填写以后你就会收到一封邮件，告诉你他填写的是谁。
 *
 * 该程序用于连接数据库
 *
 * 该程序需要用到 MySQL
 *
 * @package Fatetest
 * @author Yihan Zhang (i@Topsts.cn)
 * @version 2.0
 * 
 */

// 当前URL(用于生成链接)
$url = 'http://www.topsts.cn/app/fatetest/';
// 统计代码(可以使用CNZZ)
$cnzz = '<script src="http://s6.cnzz.com/stat.php?id=5278810&web_id=5278810" language="JavaScript"></script>';
// Topsts API Mail Key
$topsmailkey = '*******';

// 数据库信息
$db['host'] = "localhost"; // 数据库主机
$db['user'] = "root"; // 数据库用户名
$db['pwd'] = "topsts"; // 数据库密码
$dbbase = "fatetest"; // 数据库名称
$et = "fatetest_"; // 数据库表前缀

// mysql连接
$connsql = mysql_connect($db['host'],$db['user'],$db['pwd']); // 连接数据库

if(!$connsql){
	die('数据库故障，请联系QQ：11939440，谢谢<br />'.mysql_error());
}

$connbase = mysql_select_db($dbbase,$connsql); // 连接表
mysql_query("SET NAMES utf8"); // 设置字符集为UTF8
date_default_timezone_set('PRC'); // 设置时间区域为中国时区

?>
