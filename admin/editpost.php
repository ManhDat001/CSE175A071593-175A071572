<?php
    error_reporting(0); //tắt tất cả các thông báo lỗi
    require_once('connect.php');
    if ($_POST) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql = sprintf("UPDATE posts SET
                    title = '%s',
                    content = '%s',
                    updatedate = now()
                    WHERE id = %d;",
                    $title, $content, $id);
        $conn->query($sql);
        $sql = "SELECT * FROM posts WHERE id = " . $id . " AND deleted_at = '1970-01-01 00:00:00' LIMIT 1";
        $result = $conn->query($sql);
        header('Location: showpost.php?uid=' . $result->fetch_assoc()['user_id']);
    } else {
        $id = $_SERVER['QUERY_STRING'];
        $id = explode("=", $id);
        $sql1 = "Select * from posts where id = " . $id[1] . " limit 1";
        $result1 = $conn->query($sql1);
        $row = $result1->fetch_assoc();
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
        <div class="container">
            <h1 class="title">Edit post</h1>
            <div style="margin-top: 40px;">
                <div class="frm">
                    <form action="editpost.php" method="post">
                        <p>Title</p>
                        <input type="text" name="title" value="<?php echo $row['title']; ?>" required />
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                        <p>Content</p>
                        <input type="text" name="content" value="<?php echo $row['content']; ?>" required />
                        <div><button class="button primary" >Update post</button></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>