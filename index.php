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

<html lang="ch" xmlns="https://www.baidu.com">
<head>
	<meta name="baidu-site-verification" content="Va1WFM6qQK" />
    <meta charset="utf-8" />
    <title>水果文档|欢迎您使用超简洁可爱的水果文档哦~</title>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8107298037067569",
    enable_page_level_ads: true
  });
</script>
</head>
<body>
	<center>
    <img src="icon.png" alt="LOGO ICON">
    <!--<img src="https://upload.cc/i1/2018/08/24/tDA47u.pn" alt="icon.png" width="400" height="385">-->
    <h1>欢迎您使用又简洁，又可爱的水果文档！:D</h1>
	<font size="1" face="arial" color="green">Beta-8.283</font>
    <p>注册或者登陆可以获得更好的效果哦！</p>
  	<?php if ($Dname == ""){echo '<a class="btn btn-medium btn-red btn-radius" id="Login">点我登录</button><a class="btn btn-medium btn-red btn-radius" id="Reg">点我注册</button>';}else{echo '<h3>'.$Dname.',您已登录,您可以:</h3><a class="btn btn-medium btn-gray btn-radius" id="LoginOut">登出</button>';}?>
	<!--<button type="button" <a href="PublicUpload.html">前往公共上传区</button>
	<a href="PublicUpload.php"><button>前往公共上传区</button></a>-->
	<a class="btn btn-medium btn-blue btn-radius" href="PublicUpload.php">前往公共上传区</a>
	<a class="btn btn-medium btn-orange  btn-radius" href="BoradCast.html">公告</a>
	<!--<button type="button" onclick="alert('公告:什么公告也没有哦！')">公告</button>
	<a href="FriendLinks.html"><button>友链 OwO</button></a> -->
	<a class="btn btn-medium btn-green btn-radius" href="FriendLinks.html">友链了解一下咩?</a>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $("#Login").click(function () {
            $.post("api.php", {
                type: "login", //这里填调用的类型 [注册填: reg 登录填: login]
                Mname: "HandsomeSheep", //这里填你的在LOF的用户名 #1
                MSid: "9l244455q35n8HPa3Wk9CMDl685A9mdp6K", //这里填写系统提供的Sid  #2
                Plist: 1
            },
                function (a) {
                    var Tr = "https://lof.lf112.net/core/RuMe.php?json=" + a;
                    window.location.href = Tr;
                });
        });

        $("#Reg").click(function () {
            $.post("api.php", {
                type: "reg", //这里填调用的类型 [注册填: reg 登录填: login]
                Mname: "HandsomeSheep", //这里填你的在LOF的用户名  #4
                MSid: "9l244455q35n8HPa3Wk9CMDl685A9mdp6K", //这里填写系统提供的Sid   #3
                Plist: 1 //这里默认1即可
            },
                function (a) {
                    var Tr = "https://lof.lf112.net/core/RuMe.php?json=" + a;
                    window.location.href = Tr;
                });
        });
      	$("#LoginOut").click(function () {
            $.post("api.php", {
                type: "loginout"
            },
                function (a) {
                    alert(a);
              		location.reload(true);
                });
        });
    </script>
    <address>
        Plugin Programmed by <a href="LFblog.html">LF112</a><br>
		Website Helped by <a href="lss233.html">lss233</a><br>
		Copyright &copy; 2018-Forever CuteSheep All Right resevered.</a><br>
		<br>
		<br>
		<a href="DL.jpg">Domain name registration certificate</a>.<br>
    </address>
	</center>
</body>
</html>
