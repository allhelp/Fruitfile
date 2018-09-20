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

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>水果文档|公共上传区</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <center>
        <?php if ($Dname == ""){echo '您没有登录，请登录后刷新，谢谢。';}else{echo '您已登录！欢迎使用公共上传区~';}?>
        <h1>欢迎来到公共上传区!</h1><br>
        <p>请不要上传违规文件，请记住:您在该区发布的任何内容别人是可以下载并查看的，但是不能删除，删除需要寻求管理员的帮助，谢谢合作。</p><br>
        <a href="UploadToPublic.php"><button type="button">上传</button></a>
        <button type="button" onclick="alert('请联系管理员！')">删除</button>
        <button type="button" onclick="alert('请选择要举报的文件')">举报</button>
        <a href="index.php"><button>返回到主页</button></a>

        <p>文件名&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 上传日期&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 操作</p>
        <br />
        <br />
        <br />
        <address>
            Copyright &copy; 2018-Forever CuteSheep All Right Resevered.<br>
        </address>
    </center>
</body>
</html>