<?php
/**
 * Created by PhpStorm.
 * User: Win8
 * Date: 2018/10/1
 * Time: 13:16
 */
@$productid=$_GET["productid"];

if (empty($productid)) {
    die(false);
}
$con=VarAndFunc::ConnectMYSQL();


$txt=fopen("products/" . $productid . "/productname.text","r");
if (empty($txt)) {
    die(false);
}else{
    echo $txt;
    return 0;
}