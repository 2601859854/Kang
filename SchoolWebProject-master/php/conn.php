<?php
header("Content-Type: text/html; charset=utf-8");//防止界面乱码
$con = mysqli_connect('localhost','root','root');//数据库用户名，密码
if(!$con){
    die('connect failed!');
}
mysqli_select_db($con, "school");
mysqli_query($con,"SET NAMES utf8");//解决数据库中有汉字时显示在前台出现乱码问题
?>