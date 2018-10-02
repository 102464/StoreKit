<?php
/**
 * Created by PhpStorm.
 * User: Win8
 * Date: 2018/10/1
 * Time: 15:36
 */
require("VarAndFunc.php");
@$authkey=$_GET["authkey"];
if (empty($authkey)) { die(false); }
$con=/*mysqli_connect("127.0.0.1","root","root");*/VarAndFunc::ConnectMYSQL();
/*if (empty($con)) {
    //echo 1;
    die(false);
}
mysqli_select_db($con,"StoreKit");*/
mysqli_query($con,"delete from authkey where authkey='" . $authkey . "'");
echo "Success";
return 0;