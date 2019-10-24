<?php
    session_save_path('tmp/');
    session_start();
    require_once('connect.php');
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    if ($email && $password) {
        $sql = sprintf("SELECT id, fullname FROM admin WHERE (username = '%s' OR email = '%s') AND password = '%s' AND deleted_at = '1970-01-01 00:00:00' LIMIT 1;", $email, $email, $password);
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($row) {
            $_SESSION['uid'] = $row['id'];
            $_SESSION['uname'] = $row['fullname'];
            $_SESSION['admin'] = 1;
            echo '<script>
            alert("Admin dang nhap thanh cong");
            location.href="dashboard.php";
            </script>';
        }
    }
    echo '<script>
    alert("Email hoac Password khong dung");
    location.href="admin.login.php";
    </script>';