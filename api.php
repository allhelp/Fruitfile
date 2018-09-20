<?php
//这个文件默认不动
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

$type = $_POST["type"];
$Mname = $_POST["Mname"];
$MSid = $_POST["MSid"];
$Plist = $_POST["Plist"];

if($type == "loginout"){
	
  	session_start();
    $_SESSION["SaveJsonDemo"] = "";

    die("已登出");
  
}else{

//echo curlPost("https://lof.lf112.net/core/Gmd.php",array('type'=>$type,'Mname'=>$Mname,'MSid'=>$MSid,'Plist'=>$Plist));
$data = curl_post("https://lof.lf112.net/core/Gmd.php",array('type'=>$type,'Mname'=>$Mname,'MSid'=>$MSid,'Plist'=>$Plist));
echo $data;
//var_dump($data);

}
?>