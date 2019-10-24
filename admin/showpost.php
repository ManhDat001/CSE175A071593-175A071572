<?php
    session_save_path('tmp/');
    session_start();
    error_reporting(0); 
    require_once('connect.php');
    if (! isset($_SESSION['uid'])) {
        echo '<script>
        location.href="index.php";
        </script>';
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
        <div class="home">
            <?php require_once('elements/header.php'); ?>
            <div class="container">
                <h1 class="title">Quản trị posts</h1>
                <div style="margin-top: 40px;">
                    <?php if (!$_SESSION['admin']) { ?>
                    <button style="margin-bottom: 15px;" onclick="javascript:location.href='addpost.php?uid=<?php echo $_SESSION['uid'] ?>'"><i class="fa fa-plus"></i> Thêm mới</button>
                    <?php } ?>
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <tr>
                            <th>STT</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Create date</th>
                            <th></th>
                        </tr>
                        <?php
                            $uid = $_SESSION['uid'];
                            if (isset($_SESSION['admin'])) $uid = $_GET['uid'];
                            $sql = sprintf("SELECT * FROM posts WHERE user_id = %d AND deleted_at = '1970-01-01 00:00:00';", $uid);
                            $result = $conn->query($sql);
                            $i = 1;
                            while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['title']?></td>
                            <td><?php echo $row['content']?></td>
                            <td><?php echo $row['createdate']?></td>
                            <td><a href="editpost.php?id=<?php echo $row['id']?>">Edit</a> <?php if ($_SESSION['admin']) { ?>&nbsp;|&nbsp; <a href="delpost.php?id=<?php echo $row['id']?>">Delete</a></td>
                            <?php } ?>
                        </tr>
                        <?php $i++; } ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>