<?php
/**
 * Created by PhpStorm.
 * User: Shawn
 * Date: 2017/11/30
 * Time: 16:27
 */


$servername="acadmysql.duc.auburn.edu";
$username="gzl0034";
$password="Lgx2017!";
$dbname = "gzl0034db";
//$port="22";
//$charset="utf8";

$conn =  mysqli_connect($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("connect failed " . $conn->connect_error);
}

