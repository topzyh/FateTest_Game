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
       alert("浏览器不支持，请右击以复制链接。"); 
    } 
</script> 
</head>

<body>
<?php

if(empty($_POST['name5'])){
	header("javascript:history.back(-1);");
	exit();
}
$name = $_POST['name5'];

if(!empty($_POST['email'])){
	$email = $_POST['email'];
} else{
	$qq = intval($_POST['qq']);
	$email = $qq.'@qq.com';
}
include_once("config.php");
$table = $et.'test';
$sql = "INSERT INTO $table SET name='$name', email='$email' ";
mysql_query($sql) OR die("错误!<br>".mysql_error()."<br>产生问题的数据库：<br>".$sql); //通过$sql语句获取数组结果（或返回错误）

$sql = "SELECT id FROM $table WHERE email='$email'";
$result = mysql_query($sql) OR die("错误!<br>".mysql_error()."<br>产生问题的数据库：<br>".$sql); //通过$sql语句获取数组结果（或返回错误）
$arr = mysql_fetch_assoc($result);
$userurl = $url.'?c='.$arr['id'];

?>
<div id="header"></div>
<div id="main">
	<div id="content">
		<p>&nbsp;</p>
		<div class="u1">
			<h2>您的链接：</h2>
			<p>&nbsp;</p>
			<textarea class="u2" id="url" name="url"><?php echo $userurl;?></textarea>
            <p>&nbsp;<button onClick="jsCopy()">单击复制链接</button></p>
		 	<p class="u3"><br>一定要记得把链接发给好友哦！</p>
		</div>
		<p>&nbsp;</p>
	</div>
</div>
<div id="footer"></div>
</body>
</html>
