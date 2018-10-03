<?php
/**
 * Created by PhpStorm.
 * User: Win8
 * Date: 2018/10/3
 * Time: 14:16
 */
require("VarAndFunc.php");
$productname=$_GET["productname"];
if (empty($productname)) { die(false); }

$con=VarAndFunc::ConnectMYSQL();
//TODO: 在此处插入订阅项目的代码。
// Now Unfinished

return 0;
