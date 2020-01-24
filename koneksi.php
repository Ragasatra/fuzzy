<?php
date_default_timezone_set("Asia/Jakarta");

$username = "bc333fd767a143";
$password =  "f52688f1";
$database = "heroku_c294b4b804b8fb4";
$host = "us-cdbr-iron-east-05.cleardb.net";

$con = mysqli_connect($host , $username , $password );
mysqli_select_db($con, $database);

if($con  && mysqli_select_db($con, $database)) {
}
else{
    echo "<script>alert('Failed connect to database!');</script>";
}?>