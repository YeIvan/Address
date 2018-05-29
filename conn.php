<?php
/**
 * Created by PhpStorm.
 * User: My
 * Date: 2018/5/29
 * Time: 18:41
 */
$con=mysqli_connect('localhost','root','','address')or die('数据库连接失败');
function sql_execute($sql){
    global $con;
    $res=mysqli_query($con,$sql);
    if(!$res){
        echo '执行错误，错误信息为：'.mysqli_error($con);
    }
    else {
        return $res;
    }

}
mysqli_close($con);