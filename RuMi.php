<?php

function curl_post($url, $post){
    $options = array(
        CURLOPT_RETURNTRANSFER =>true,
        CURLOPT_HEADER =>false,
        CURLOPT_POST =>true,
        CURLOPT_POSTFIELDS => $post,
    );
    $ch = curl_init($url);
    curl_setopt_array($ch, $options);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$Code = $_GET["json"];

$MSid = '9l244455q35n8HPa3Wk9CMDl685A9mdp6K';
//这里填写系统提供的Sid

$Mname = 'HandsomeSheep';
//这里填你的在LOF的商户用户名

$uPwd = '20071205Abc';
//这里填你的在LOF的商户密码

$AccessToken = curl_post("https://lof.lf112.net/core/Gmd.php",array('type'=>'login','Mname'=>$Mname,'MSid'=>$MSid,'Plist'=>'1','Code'=>$Code));
//获取AccessToken
$IAKey = curl_post("https://lof.lf112.net/core/iAuth.php",array('mod'=>'AccessToken','MSid'=>$MSid,'MeuPwd'=>$uPwd,'AccessToken'=>$AccessToken));
//获取IAKey
$UserJson = curl_post("https://lof.lf112.net/core/iAuth.php",array('mod'=>'IAKey','IAKey'=>$IAKey));

session_start();
$_SESSION['SaveJsonDemo'] = $UserJson;
//写入JSON
header("location:http://132.232.125.139/i");
?>