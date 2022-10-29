<?php
    $con = mysqli_connect("localhost", "root", "", "quiz") or die("PC_ERROR_1: MYSQL CONNECT ERROR!");
    date_default_timezone_set("Asia/Yangon");
    $timestamp = date('Y-m-d H:i:s');
?>