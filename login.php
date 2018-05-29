<?php
/**
 * Created by PhpStorm.
 * User: My
 * Date: 2018/5/29
 * Time: 15:05
 */
if(!isset($_POST['submit'])){
    header("Refersh:3;url=login.php");
    exit('非法访问');
}
$username=$_POST['username'];
$password=$_POST['password'];

if($username==null||$password==null){
    header("Refersh:3;url=login.php");
    exit('用户名和密码不能为空');
}
header("Refersh:1;url=index.php");
include_once 'conn.php';
$sql="select userid from user where username='$username' AND password='$password'";
$res=sql_execute($sql);
$row=mysqli_fetch_assoc($res);
session_start();
$_SESSION['username']=$username;
$_SESSION['userid']=$row['userid'];
echo '登录成功，正在跳转至主页';
