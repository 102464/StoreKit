<?php
/**
 * Created by PhpStorm.
 * User: Win8
 * Date: 2018/10/1
 * Time: 14:34
 */
echo "<div align=\"center\"><h1>RegisterResell StoreKit System</h1></hr>";
echo "<h4>Reset Module</h4>";
echo "<h3>dangerous to execute this module!!!</h3>";
echo "<br>";
echo "<br>Connecting to the database...</br>";
echo "<br>Selecting database...</br>";
$con=VarAndFunc::ConnectMYSQL();
echo "<br>Truncating tables...</br>";
mysqli_query($con,"truncate table accounts");
mysqli_query($con,"truncate table authkey");
echo "<br>Defaulting account...</br>";
mysqli_query($con,"insert into accounts values ('admin','admin')");
echo "<br>Success</br>";