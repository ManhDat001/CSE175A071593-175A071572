<?php
    error_reporting(0); 
    require_once('connect.php');
    if ($_POST) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql = sprintf("SELECT * FROM users WHERE email = '%s' AND deleted_at = '1970-01-01 00:00:00' LIMIT 1;", $email);
        if (mysqli_num_rows(mysqli_query($conn, $sql))) {
            echo '<script>
            alert("Email đã tồn tại");
            </script>';
        } else {
            $sql = sprintf("INSERT INTO users(first_name, last_name, email, password, registration_date)
                    VALUES('%s', '%s', '%s', '%s', now());", $firstname, $lastname, $email, $password);
            if ($conn->query($sql) !== TRUE) {
                echo '<script>
                alert("Hệ thống đang lỗi. Mời bạn quay lại sau.");
                location.href("index.php");
                </script>';
            }
            header('Location: admin.php');
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Trường Đại Học Nguyễn Tất Thành </title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <!-- Add the new slick-theme.css if you want the default styling -->
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    
    <body>
    <?php require_once('elements/header.php'); ?>
        <div class="container">
            <h1 class="title">Add users</h1>
            <div style="margin-top: 40px;">
                <div class="frm">
                    <form action="adduser.php" method="post">
                        <p>First name</p>
                        <input type="text" name="firstname" placeholder="First name ..." required />
                        <p>Last name</p>
                        <input type="text" name="lastname" placeholder="Last name ..." required />
                        <p>Email</p>
                        <input type="text" name="email" placeholder="Email ..." required />
                        <p>Password</p>
                        <input type="text" name="password" placeholder="Password ..." required />
                        <div><button class="button primary">Create user</button></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>