<?php
/**
 * Created by PhpStorm.
 * User: Win8
 * Date: 2018/10/1
 * Time: 13:15
 */
require("VarAndFunc.php");
@$username=$_GET["username"];
@$pw=$_GET["password"];
//echo $username;
//echo $pw;
if (empty($username)) { die(false); }
if (empty($pw)) { die(false); }
$con=/*mysqli_connect("127.0.0.1","root","root");*/VarAndFunc::ConnectMYSQL();
/*if (empty($con)) {
    //echo 1;
    die(false);
}
mysqli_select_db($con,"StoreKit");*/
//验证用户名密码
$results=mysqli_query($con,"select password from accounts where username='" . $pw . "'");
$password=mysqli_fetch_array($results);
if (empty($password[0])) {/* echo 2; */die(false);}
if ($password[0]=$pw) {
    //生成验证密钥
    $authkey=rand(0,100000000);
    mysqli_query($con,"insert into authkey values('" . $username . "','" . $authkey . "')");
    echo $authkey;
    return 0;
}else{
    //echo 3;
    die(false);
}
