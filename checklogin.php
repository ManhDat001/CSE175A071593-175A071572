<?php
    session_save_path('tmp/');//đặt đường dẫn lưu phiên hiện tại
    session_start();
    require_once('connect.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "Select * from users where email = '" . $email . "' and password = '" . md5($password) . "' and deleted_at = '1970-01-01 00:00:00' limit 1";//md5 mã hóa một chuỗi sang một chuỗi mới theo tiêu chuẩn md5
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    if($row) {
        $_SESSION['uid'] = $row['userid'];
        $_SESSION['uname'] = $row['first_name'] . ' ' . $row['last_name'];
        echo '<script>
        alert("Dang nhap thanh cong");
        location.href="index.php";
        </script>';
    } else {
        echo '<script>
        alert("Email hoac Password khong dung");
        location.href="login.php";
        </script>';
    }