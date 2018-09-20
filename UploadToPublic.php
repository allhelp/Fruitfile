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
    <title>水果文档|公共上传区-上传文件</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <center>
    <?php if ($Dname == ""){echo '您没有登录，请登录后刷新，谢谢。';}else{echo '您已登录！欢迎使用公共上传区~';}?>
    <div class="g-recaptcha" data-sitekey="6LeoYXAUAAAAAEQaRWEsYxRaLwONIkPNudh8cX-V" data-callback="callback"></div>
         <form action="upload_file.php" method="post"
    enctype="multipart/form-data">
    <label for="file">文件名:</label>
    <input type="file" name="file" id="file" /> 
    <br />
    <input type="submit" name="submit" value="Submit" />
    </form>
    <address>
            Copyright &copy; 2018-Forever CuteSheep All Right resevered.
        </address>
    </center>
</body>
</html>