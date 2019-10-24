<?php error_reporting(0); //tắt tất cả các báo cáo lỗi ?> 
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
        <script type="text/javascript">
            
        </script>
    </head>
    
    <body>
        <div class="home">
            <div class="tintuc">
                <div class="wrapper">
                    <h2 class="title">Đăng nhập</h2>
                    <div class="frm">
                        <form action="checklogin.php" method="post">
                            <p>Email</p>
                            <input type="text" name="email" placeholder="Email ..." required />
                            <p>Password</p>
                            <input type="password" name="password" placeholder="Password ..." required />
                            <div><button class="button primary">Login</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>