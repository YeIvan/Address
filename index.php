<?php
/**
 * Created by PhpStorm.
 * User: My
 * Date: 2018/5/29
 * Time: 18:57
 */
session_start();
if(empty($_SESSION['userid'])){
    header('Refresh:1;url=login.html');
    exit('请先登录');
}
echo '欢迎你'.$_SESSION['username'];