<?php
/**
 * Created by PhpStorm.
 * User: Win8
 * Date: 2018/10/1
 * Time: 13:15
 */
$oper=$_GET['oper'];
$authkey=$_GET['authkey'];
@$productid=$_GET['productid'];
if (empty($oper)) { die(false); }
if (empty($authkey)) { die(false); }
$con=/*mysqli_connect("127.0.0.1","root","root");*/VarAndFunc::ConnectMYSQL();
/*if (empty($con)) {
    //echo 1;
    die(false);
}
mysqli_select_db($con,"StoreKit");*/
switch ($oper) {
    case "GetTotalDeposit" :
        $username=VarAndFunc::GetUserNameFromAuthKey($con,$authkey);
        //$query=mysqli_query($con,"select deposit from deposits where username='" . $username(0) . "'");
        $deposit=/*mysqli_fetch_array($query);*/VarAndFunc::GetAccountDeposit($con,$username);
        echo $deposit;
        return 0;
        break;
    case "CheckPurchased" :
        if (empty($authkey)) { die(false); }
        //$query=mysqli_query($con,"select username from authkey where authkey='" . $authkey . "'");
        $username=/*mysqli_fetch_array($query);*/VarAndFunc::GetUserNameFromAuthKey($con,$authkey);
        /*if (empty($username)) { die(false); }
        $query=mysqli_query($con,"select * from payments where username=" . $username .
            "and productid='" . $authkey ."'");
        $data=mysqli_fetch_array($query);
        if (empty($data)) { die(false); }else{ echo "Purchased"; return 0; }*/
        if (VarAndFunc::CheckPurchased($con,$username,$productid) == false) { die(false); }
        return 0;
        break;
    default:
        die(false);
        break;
}


