<?php
/**
 * Created by PhpStorm.
 * User: Win8
 * Date: 2018/10/3
 * Time: 14:17
 */
require("VarAndFunc.php");
$productname=$_GET["productname"];
if (empty($productname)) { die(false); }

$con=VarAndFunc::ConnectMYSQL();
$productid=VarAndFunc::AddProduct($con,$productname);
echo $productid;
return 0;