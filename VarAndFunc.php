<?php
/**
 * Created by PhpStorm.
 * User: Win8
 * Date: 2018/10/2
 * Time: 10:23
 */

class VarAndFunc
{
    public static function ConnectMYSQL(){
        $sqlcon=mysqli_connect("127.0.0.1","root","root");
        if (empty($sqlcon)) {
            //echo 1;
            die(false);
        }
        mysqli_select_db($sqlcon,"StoreKit");
        return $sqlcon;
    }

    public static function GetUserNameFromAuthKey($sqlcon,$authkey){
        $query=mysqli_query($sqlcon,"select username from authkey where authkey='" . $authkey . "'");
        $username=mysqli_fetch_array($query);
        if (empty($username)) { die(false); }
        return $username[0];
    }

    public static function GetAccountDeposit($sqlcon,$account){
        $query=mysqli_query($sqlcon,"select deposit from deposits where username='" . $account . "'");
        $deposit=mysqli_fetch_array($query);
        return $deposit[0];
    }

    public static function GetProductName($sqlcon,$productid){
        $query=mysqli_query($sqlcon,"select productname from products where productid='" . $productid . "'");
        $productname=mysqli_fetch_array($query);
        if (empty($productname)) { die(false); }
        return $productname[0];
    }

    public static function GetProductId($sqlcon,$productname){
        $query=mysqli_query($sqlcon,"select productid from products where productname='"
            . $productname . "'");
        $productid=mysqli_fetch_array($query);
        if (empty($productid)) { die(false); }
        return $productid[0];
    }

    public static function GetProductPrice($sqlcon,$productid){
        $query=mysqli_query($sqlcon,"select price from products where productid='" . $productid . "'");
        $price=mysqli_fetch_array($query);
        if (empty($price)) { die(false); }
        return $price[0];
    }

    public static function AddProduct($sqlcon,$productname,$price){
    $productid=rand(0,100000000);
    mysqli_query($sqlcon,"insert into products values('" . $productname . "','" . $productid . "','"
       . $price . "')");
    return $productid;
    }

    public static function StartPurchase($sqlcon,$account,$productid,$price){
        $deposit=VarAndFunc::GetAccountDeposit($sqlcon,$account);
        $purchasedDeposit=$deposit-$price;
        if ( $purchasedDeposit >= 0 ) {
            mysqli_query($sqlcon,"update Deposits set deposit='"
                . $purchasedDeposit . "' where username='" . $account . "'");
            mysqli_query($sqlcon,"insert into payments values ('"
                . $account . "','" . $productid . "')");
            return 0;
        }else{
            die(false);
        }
    }

    public static function CheckPurchased($sqlcon,$account,$productid){
        if (empty($username)) { die(false); }
        $query=mysqli_query($sqlcon,"select * from payments where username=" . $account .
            "and productid='" . $productid ."'");
        $data=mysqli_fetch_array($query);
        if (empty($data)) { return false; }else{ return true; }
    }

}