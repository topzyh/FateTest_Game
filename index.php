<?php
$c = (isset($_GET['c'])) ? intval($_GET['c']) : 1 ;
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>缘分测试 -- Tops.</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script language=javascript>
function aa()
{
	if(form1.name0.value=="") {
		alert("请输入您自己的姓名！");
		form1.name0.focus();
		return false;
	}
	if((form1.name1.value=="")&&(form1.name2.value=="")&&(form1.name3.value=="")) {
		alert("请至少输入一个意中人的姓名！");
		form1.name1.focus();
		return false;
	}
}
</script>
</head>

<body>
<div id="header"></div>
<div id="main">
	<div id="content">
    	<h2>项目说明</h2>
    	<p>&nbsp;&nbsp;&nbsp;&nbsp;这是一个非常奇妙的测试，它能通过姓名计算出您与她的缘分，<font color="#FF0000">请一定按照提示上说的回答，不要乱写，否则会让该测试不准确的！</font></p>
    	<p>&nbsp;&nbsp;&nbsp;&nbsp;记住，写的时候应该完全是你的第一直觉，最好没有旁观者！是的，他非常准确！</p>
    	<p>&nbsp;</p>
    	<h2>测试内容</h2>
        <p>&nbsp;</p>
        <form name="form1" onsubmit="return aa()" action="result.php?c=<?php echo $c;?>" method="post">
        <p><table width="450" border="0">
  				<tr>
    				<td colspan="2"><b>请认真填写表格(填全名、中文和英文均可，但务必真实)</b></td>
	 	  </tr>
 				 <tr>
 				 	<td>&nbsp;您的姓名：</td>
  				 	<td>&nbsp;<input name="name0"></td>
 				</tr>
  				<tr>
  				 	<td>&nbsp;请填写异性好友名字：</td>
  				 	<td>&nbsp;(填写1~3个，按你在意的程度排序)</td>
				</tr>
 				<tr>
  				 	<td>1.</td>
  				 	<td>&nbsp;<input name="name1"></td>
 				</tr>
  				<tr>
    				<td>2.</td>
    				<td>&nbsp;<input name="name2"></td>
  				</tr>
  				<tr>
    				<td>3.</td>
    				<td>&nbsp;<input name="name3"></td>
  				</tr>
  				<tr>
    				<td colspan="2">让我去看看我和她（他）的缘分指数：&nbsp;<input id=gvSubmit type=submit value="开始测试" name=gvSubmit></td>
				</tr>
				</table>
      </form>
        <p>&nbsp;</p>
    	<h2>关于测试</h2>
    	<p>&nbsp;&nbsp;&nbsp;&nbsp;LVC研究小组是由数名心理学家和电脑专家组成的非盈利性组织，经过长达 5年的时间，对 8693 对情侣进行了跟踪调查，该小组已经总结出一套精准的姓名缘分指数测试方法。本站经LVC小组授权，推出此项完全匿名和免费的服务以饷网友。在这里，你可以知道你与她

的姓名缘分。从以往统计来看，超过 96.56% 的推算正确。</p>
    	<p>&nbsp;</p>
	</div>
</div>
<div id="footer">&copy;Topsts.||<script src="http://s6.cnzz.com/stat.php?id=5278810&web_id=5278810" language="JavaScript"></script>||<?php require_once 'cs.php';echo '<img src="'._cnzzTrackPageView(5278810).'" width="0" height="0"/>';?></div>
</body>
</html>
