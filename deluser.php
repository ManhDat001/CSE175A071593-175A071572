<?php
    error_reporting(0); //tắt tất cả thông báo lỗi
    require_once('connect.php');
    $userid = $_SERVER['QUERY_STRING'];
    $userid = explode("=", $userid);//phá vỡ một chuỗi thành một mảng
    $sql1 = "UPDATE users SET deleted_at = now() WHERE userid = " . $userid[1];
    $conn->query($sql1);
    header('Location: admin.php');
?>