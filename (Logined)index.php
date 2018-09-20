<?php
	session_start();
    $ReJson = $_SESSION['SaveJsonDemo'];
    //读取Session
    $ReadLoginS=json_decode($ReJson);
    //解析JSON
    $Dname = $ReadLoginS->Sname;
    //解析名字
    $Dmail = $ReadLoginS->Smail;
    //解析邮箱
    $Dsid = $ReadLoginS->Ssid;
    //解析Sid
    $Ddata = $ReadLoginS->Sdata;
    //解析注册时间
?>
<html>
<head>

    <title>登录<?php if($Dname == ""){echo "失败";}else{echo "成功";}?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
  <h1><?php echo $Dname;?>, 登陆成功,即将返回主页...</h1>
	<br>
	<a href="http://132.232.125.139/">如果您的浏览器没有响应，请点我 :D</a>
  
  <?php if($Dname == ""){echo '<script>alert(\'登录失败！\');window.location.href = \'/\';</script>';} ?>
</body>
</html>