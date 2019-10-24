<?php
    error_reporting(0); //tắt tất cả các báo cáo lỗi
    require_once('connect.php');
    $id = $_SERVER['QUERY_STRING'];
    $id = explode("=", $id);
    $sql1 = "SELECT * FROM posts WHERE id = " . $id[1] . " LIMIT 1";
    $result = $conn->query($sql1);
    $uid = $result->fetch_assoc()['user_id'];
    $sql = "UPDATE posts SET deleted_at = now() WHERE id = " . $id[1];
    $conn->query($sql);
    header('Location: showpost.php?uid=' . $uid);
?>