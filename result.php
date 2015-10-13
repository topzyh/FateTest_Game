<?php
/**
 *
 * 游戏：一个姓名缘分测试系统，生成你的代码发送给别人，别人填写以后你就会收到一封邮件，告诉你他填写的是谁。
 *
 * 该程序用于收集填写数据并 保存至数据库 和 发送到指定邮箱。
 *
 * 该程序需要用到 Topsts API mail
 *
 * @package Fatetest
 * @author Yihan Zhang (i@Topsts.cn)
 * @version 2.3
 * 
 */

include_once("config.php");

$c = (empty($_GET['c'])) ? 0 : intval($_GET['c']); //获取GET C

//自己姓名
if (empty($_POST['name0'])) {
    // 如果空，则跳转重新填写
    echo '<meta http-equiv="refresh" content="0;url=index.php?c='.$c.'">';
    exit();
} else {
    $name0 = mysql_real_escape_string($_POST['name0']);
    $inbd_name0 = ",name0='".$name0."'";
}

//name1
$name1 = ' ';
if(!empty($_POST['name1'])){
    $name1 = mysql_real_escape_string($_POST['name1']);
}
//name2
$name2 = ' ';
if(!empty($_POST['name2'])){
    $name2 = mysql_real_escape_string($_POST['name2']);
}
//name3
$name3 = ' ';
if(!empty($_POST['name3'])){
    $name3 = mysql_real_escape_string($_POST['name3']);
}

//介绍人信息
if ($c) {
    // 从数据库中读取介绍人信息
    $table = $et.'test';
    $sql = "SELECT id,name,email FROM $table WHERE id=$c";
    $result = mysql_query($sql); //通过$sql语句获取数组结果（或返回错误）

    // 如果没有找到(C值乱填者)
    if (!mysql_num_rows($result)) {
        $carr = array('id' => 0, 'name' => '人佐人佑', 'email' => 'admin@topsts.cn' );
    } else {
        $carr = mysql_fetch_assoc($result);
    }
} else {
    $carr = array('id' => 0, 'name' => '人佐人佑', 'email' => 'admin@topsts.cn' );
}

// 写入用户填写信息
$table = $et.'info';
$ip = $_SERVER["REMOTE_ADDR"];
$sql = "INSERT INTO `$table` (cid,cname,name0,name1,name2,name3,time,ip) VALUES ('$carr[id]','$carr[name]','$name0','$name1','$name2','$name3',NOW(),'$ip')";
mysql_query($sql); //通过$sql语句获取数组结果

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>缘分测试 -- Topsts.</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script language="javascript">
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
<div id="header"></div>
<div id="main">
	<div id="content">
    	<div class="ri"><img src="image/haha.gif" width="140" height="157" alt="haha"></div>
		<div class="r1"><h3><center>天哪，刚刚有人和你开了个玩笑！</center></h3>
        <p>&nbsp;</p>
        <div class="r2">
        	<p>您刚刚所写的内容已被发送到邮箱：</p>
            <p><b><?php echo $carr['email'];?></b></p>
            <p>这下&nbsp;<b><?php echo $carr['name'];?></b>&nbsp;知道你的秘密了</p>
        </div>
        </div>
        <p>&nbsp;</p>
        <p class="r3">&nbsp;&nbsp;放心，这只是一个游戏，我们绝不会向其他人透露您的信息</p>
        <p>&nbsp;</p>
        <div class="r4">
        	<p>&nbsp;&nbsp;现在，您还可以通过游戏，看看您的朋友暗恋谁。您只需填写一下您的姓名和QQ，生成一个连接，您的朋友点开链接填写以后，您的QQ邮箱会收到邮件，知道他写的是谁。</p>
		<div class="r5">
            <form name="form2" onsubmit="return bb()" action="geturl.php" method="post">
            <p>您的姓名：<input name="name5" type="text" value="<?php echo "$name0"; ?>">(必填)</p>
            <p>您的&nbsp;QQ：<input name="qq" type="number">(必填)</p>
            <p style="font-size:16px;">（我们优先将邮件发送到您的QQ邮箱中，如果您不使用QQ邮箱，请填写：）</p> 
            <p>您的邮箱：<input name="email" type="email">(一般不需要填写)</p>
            <input class="submit" type="submit" value="生成链接">
            </form>
        </div>
        <p class="r6">特别提示：该游戏仅供娱乐，<i>topZYH</i>以及所在<i>Tops团队</i>不承担任何责任。</p>
        <?php 
            echo '<iframe src="http://www.topsts.cn/api/mail/?key='.$topsmailkey.'&sendto='.$carr['email'].'&subject=秘密：告诉你'.$name0.'喜欢的TA&message=你知道吗？'.$name0.'一直喜欢着：<br />'.$name1.'，'.$name2.'，'.$name3.'<br />结果仅供娱乐,Topsts及成员不承担任何责任！<br />免费-开源-topsts" width="0px" height="0px"></iframe>';
        ?>
        </div>
        <p>&nbsp;</p>
  </div>
</div>
<div id="footer">&copy;Topsts.||<?php echo "$cnzz";?></div>
</body>
</html>
