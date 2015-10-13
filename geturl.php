<?php
/**
 *
 * 游戏：一个姓名缘分测试系统，生成你的代码发送给别人，别人填写以后你就会收到一封邮件，告诉你他填写的是谁。
 *
 * 该程序用于收集填写数据并 保存至数据库 和 发送到指定邮箱。
 *
 * 该程序需要用到Topsts API mail
 *
 * @package Fatetest
 * @author Yihan Zhang (i@Topsts.cn)
 * @version 2.3
 * 
 */

include_once("config.php");

$c = (empty($_GET['c'])) ? 0 : intval($_GET['c']); //获取GET C

// 获取MAIL 否则跳到首页
if(!empty($_POST['email'])){
	$email = mysql_real_escape_string($_POST['email']);
} elseif(!empty($_POST['qq'])){
	$qq = mysql_real_escape_string($_POST['qq']);
	$email = $qq.'@qq.com';
} else {
	echo '<meta http-equiv="refresh" content="0;url=index.php?c='.$c.'">';
}

// 获取姓名
if(empty($_POST['name5'])){
	header("javascript:history.back(-1);");
	exit();
}
$name = mysql_real_escape_string($_POST['name5']);

//写入数据库
$table = $et.'test';
$ip = $_SERVER["REMOTE_ADDR"];
$sql = "SELECT id FROM `$table` WHERE email='$email'";
$result = mysql_query($sql);
if ($num = mysql_num_rows($result)) {
	//如果找到相同邮件
	$row = mysql_fetch_assoc($result);
	//获取新id
	$newid = $row['id'];
	//更新姓名
	$sql = "UPDATE `$table` SET name='$name' WHERE id='$newid' AND email='$email' ";
	mysql_query($sql) OR die(mysql_error().$sql);
} else {
	//没有找到相同邮件
	//添加信息
	$sql = "INSERT INTO `$table` SET name='$name', email='$email',ip='$ip',time=NOW()";
	mysql_query($sql);
	//返回id
	$sql = "SELECT id FROM `$table` WHERE name='$name' AND email='$email'";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result) OR die(mysql_error().$sql);
	$newid = $row['id'];
}
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>缘分测试 -- Tops.</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript"> 
    function jsCopy(){ 
        var copy=document.getElementById("url");//对象是content 
        copy.select(); //选择对象 
        document.execCommand("Copy"); //执行浏览器复制命令
        //alert("浏览器不支持，请右击以复制链接。"); 
    } 
</script> 
</head>

<body>
<div id="header"></div>
<div id="main">
	<div id="content">
		<p>&nbsp;</p>
		<div class="u1">
			<h2>您的链接：</h2>
			<p>&nbsp;</p>
			<p>请长按选中后复制以下链接，发送给您的好友。</p>
			<p>当您的好友填写后，他填写的内容将发送到您的QQ邮箱中，请注意查收</p>
			<p>&nbsp;</p>
			<textarea class="u2" id="url" name="url"><?php echo $url.'?c='.$newid;?></textarea>
            <p>&nbsp;<button onClick="jsCopy()">单击复制链接</button></p>
		 	<p class="u3"><br>一定要记得把链接发给好友哦！</p>
		</div>
		<p>&nbsp;</p>
	</div>
</div>
<div id="footer">&copy;Topsts.||<?php echo "$cnzz";?></div>
</body>
</html>
