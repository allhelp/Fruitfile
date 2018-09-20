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
    <title>水果文档|Upload Managing</title>
</head>
<body>
    <?php

    if ($_FILES["file"]["error"] > 0)
    {
    echo "错误代码: " . $_FILES["file"]["error"] . "<br />";
    }
    else
    {
    echo "文件名: " . $_FILES["file"]["name"] . "<br />";
    echo "种类: " . $_FILES["file"]["type"] . "<br />";
    echo "大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp名: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
    {
    echo $_FILES["file"]["name"] . " 文件已经存在！ ";
    }
    else
    {
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "PublicUploads/" . $_FILES["file"]["name"]);
    echo "已经上传在: " . "PublicUploads/" . $_FILES["file"]["name"];
    }
    }
    ?>
</body>
</html>