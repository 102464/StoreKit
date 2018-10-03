<?php
/**
 * Created by PhpStorm.
 * User: Win8
 * Date: 2018/10/3
 * Time: 14:16
 */
require("VarAndFunc.php");
$authkey=$_GET['authkey'];
$oper=$_GET['oper'];
@$subscription=$_GET['subscription'];
if (empty($oper)) { die(false); }
if (empty($authkey)) { die(false); }
$con=VarAndFunc::ConnectMYSQL();

switch ($oper) {
    case "ShowSubscriptions":
        echo "free|personal|business|enterprise";
        return 0;
        break;
    case "Subscribe":
        $productid=VarAndFunc::GetProductId($con,$subscription);
        $username=VarAndFunc::GetUserNameFromAuthKey($con,$authkey);
        $price=VarAndFunc::GetProductPrice($con,$productid);
        VarAndFunc::StartPurchase($con,$username,$productid,$price);
        break;
    default:
        die(false);
        break;
}
