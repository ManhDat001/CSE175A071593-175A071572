<?php
    error_reporting(0);//tắt tất cả các báo cáo lỗi
    require_once('connect.php');
    if ($_POST) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $uid = $_POST['userid'];
        $sql = sprintf("INSERT INTO posts(title, content, user_id, createdate, updatedate)
                    VALUES('%s', '%s', %d, now(), now());", $title, $content, $uid);
        if ($conn->query($sql) !== TRUE) {
            echo '<script>
            alert("Hệ thống đang lỗi. Mời bạn quay lại sau.");
            location.href("index.php");
            </script>';
        } else {
            header('Location: showpost.php?uid=' . $uid);
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
    <?php require_once("header.php")?>
        <div class="container">
            <h1 class="title">Add post</h1>
            <div style="margin-top: 40px;">
                <div class="frm">
                    <form action="addpost.php" method="post">
                        <p>Title</p>
                        <input type="text" name="title" placeholder="First name ..." required />
                        <p>Content</p>
                        <input type="text" name="content" placeholder="Last name ..." required />
                        <input type="hidden" name="userid" value="<?php echo $_GET['uid']; ?>" />
                        <div><button class="button primary">Create post</button></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>