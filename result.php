<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>缘分测试 -- Tops.</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script language=javascript>
function bb()
{
	if(form2.name5.value=="") {
		alert("请输入您自己的姓名！");
		form2.name5.focus();
		return false;
	}
    if((form2.email.value=="")&&(form1.qq.value=="")) {
        alert("请输入邮箱或企鹅（QQ号）");
        form2.qq.focus();
        return false;
    }
}
</script>
</head>

<body>
<?php

if(!isset($_GET['c'])){
    header("location:index.php");
    exit();
}
$c = intval($_GET['c']);
if(!empty($_POST['name0'])){
    $name0 = $_POST['name0'];
    $inbd_name0 = ",name0='".$name0."'";
}
$inbd_name1 = "";
if(!empty($_POST['name1'])){
    $name1 = $_POST['name1'];
    $inbd_name1 = ",name1='".$name1."'";
}
$inbd_name2 = "";
if(!empty($_POST['name2'])){
    $name2 = $_POST['name2'];
    $inbd_name2 = ",name2='".$name2."'";
}
$inbd_name3 = "";
if(!empty($_POST['name3'])){
    $name3 = $_POST['name3'];
    $inbd_name3 = ",name3='".$name3."'";
}

include_once("config.php");
# 从数据库中读取介绍人信息
$table = $et.'test';
$sql = "SELECT id,name,email FROM $table WHERE id=$c";
$result = mysql_query($sql) OR die("错误!<br>".mysql_error()."<br>产生问题的数据库：<br>".$sql); //通过$sql语句获取数组结果（或返回错误）
if(mysql_num_rows($result)){
    $arr = mysql_fetch_assoc($result);
}
# 写入用户填写信息
$table = $et.'info';
$sql = "INSERT INTO $table SET id=$c $inbd_name0 $inbd_name1 $inbd_name2 $inbd_name3";
mysql_query($sql) OR die("错误!<br>".mysql_error()."<br>产生问题的数据库：<br>".$sql); //通过$sql语句获取数组结果（或返回错误）

?>
<div id="header"></div>
<div id="main">
	<div id="content">
    	<div class="ri"><img src="image/haha.gif" width="140" height="157" alt="haha"></div>
		<div class="r1"><h3><center>
		天哪，刚刚有人和你开了个玩笑！
		</center></h3>
        <p>&nbsp;</p>
        <div class="r2">
        	<p>您刚刚所写的内容已被发送到邮箱：</p>
            <p><b><?php if(isset($arr)){echo $arr['email'];}else{echo"i@topsts.cn";}?></b></p>
            <p>这下&nbsp;<b><?php if(isset($arr)){echo $arr['name'];}else{echo"人佐人佑";}?></b>&nbsp;知道你的秘密了</p>
        </div>
        </div>
        <p>&nbsp;</p>
        <p class="r3">&nbsp;&nbsp;放心，这只是一个游戏，我们绝不会向其他人透露您的信息</p>
        <div class="r4">
        	<p>&nbsp;&nbsp;现在，您还可以通过游戏，看看您的朋友暗恋谁。您只需填写一下您的姓名和邮箱，生成一个连接，您的朋友点开链接填写以后，您会收到邮件，知道他写的是谁。</p>
		<div class="r5">
            <form name="form2" onsubmit="return bb()" action="geturl.php" method="post">
            <p>您的姓名：<input name="name5" type="text"></p>
            <p>您的邮箱：<input name="email" type="email"></p>
            <p style="font-size:16px;">（不知道邮箱的可以直接填写QQ，邮件将发送到您的QQ邮箱中）</p>
            <p>您的企鹅：<input name="qq" type="number"></p>
            <input class="submit" type="submit" value="生成链接">
            </form>
        </div>
        <p class="r6">特别提示：该游戏仅供娱乐，<i>topZYH</i>以及所在<i>Tops团队</i>不承担任何责任。</p>
        <?php 
            echo '<iframe src="http://www.topsts.cn/api/mail/?key=topswanttosendmail&sendto='.$arr['email'].'&subject=秘密：告诉你'.$name0.'喜欢TA&message='.$name0.'喜欢'.$name1.'，'.$name2.'，'.$name3.'感谢您使用Topsts产品！" width="0px" height="0px"></iframe>';
        ?>
        </div>
        <p>&nbsp;</p>
  </div>
</div>
<div id="footer">&copy;Topsts.</div>

</body>
</html>
