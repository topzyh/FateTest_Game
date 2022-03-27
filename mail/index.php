<?php
/**
 *
 * API公共端口：
 *
 * 该程序用于发送邮件
 *
 * 该程序需要用到 SMTP 、域名邮箱
 *
 * @package Mail API
 * @author Yihan Zhang <i@Topsts.cn>
 * 
 */
header("Content-Type:text/html;charset=UTF-8");
$mailkey = "topswanttosendmail";
if($_GET['key'] == $mailkey)
{
	$mail_to = $_GET['sendto'];
	$mail_subject = $_GET['subject'];
	$mail_message = $_GET['message']."\r\n<br /><br />感谢您使用Topsts服务！<br />该邮件通过系统自动发出,如有疑问，请咨询<i@topsts.cn>,谢谢!<br /><br />——来自 http://www.topsts.cn";
	
	if(empty($mail_to) ||empty($mail_subject) ||empty($mail_message))
	{
    	echo '发送内容不全';
    	exit;
	}
	$mail = Array (
		'state' => 1,
		'server' => 'smtp.qq.com',
		'port' => 25,
		'auth' => 1,
		'username' => '365303345@qq.com',
		'password' => 'password',
		'charset' => 'utf8',
		'mailfrom' => 'admin@topsts.cn'
	);
	include "mail.php";
	if(sendmail($mail_to, $mail_subject, $mail_message))
	{
		echo "发送成功";
	}
	else
	{
		echo "发送失败";
	}
}
else
{
	?>
	<!doctype html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>TopsApi - Mail</title>
	</head>
	<body>
			<p>&nbsp;</p>
		    <h1>欢迎，这是一个邮件发送程序</h1>
			<p>&nbsp;</p>
		    <p>通过GET key(邮件密钥)、sendto(收信人email)、subject(主题)、message(内容)给此页面，收信人可以收到一封由admin@topsts.cn发送的邮件</p>
		    <p>&nbsp;</p>
		    <p>测试地址：<a href="test.htm">test.htm</a></p>
		    <p>&nbsp;</p>
			<p>$key未填写或错误！<br />请向Tops管理员索要该KEY</p>
	</body>
	</html>
	<?php
}
?>