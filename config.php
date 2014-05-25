<?php

$url = "http://www.topsts.cn/app/fatetest/";
//数据库信息
$dbhost = "localhost";//数据库主机
$dbuser = "a0323200424";//数据库用户名
$dbpass = "topsts09";//数据库密码
$dbbase = "a0323200424";//数据库名称
$et = "lovetest_";//数据库表前缀
$mailkey = "topswanttosendmail";//使用Tops mail api需要的KEY
//mysql连接
$connsql = mysql_connect($dbhost,$dbuser,$dbpass);//连接数据库

if(!$connsql){
	die('数据库连接失败：'.mysql_error());
}

$connbase = mysql_select_db($dbbase,$connsql);//连接表
mysql_query("SET NAMES utf8");//设置字符集为UTF8
date_default_timezone_set('PRC');//设置时间区域为中国时区

/*
	$table = $et.'123';
	$sql = "SELECT * FROM $table WHERE name='$username' AND password='$password'";
	$result = mysql_query($sql) OR die("错误!<br>".mysql_error()."<br>产生问题的数据库：<br>".$sql); //通过$sql语句获取数组结果（或返回错误）
    $arr = mysql_fetch_assoc($result);
    $num = mysql_num_rows($result);
*/
?>