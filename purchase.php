<?php
/**
 * Created by PhpStorm.
 * User: Win8
 * Date: 2018/10/1
 * Time: 13:15
 */
require("VarAndFunc.php");
$productid=$_GET["productid"];
$con=mysqli_connect("127.0.0.1","root","root");
if (empty($con)) {
    die(false);
}
