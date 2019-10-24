<?php
    session_save_path('tmp/');//đặt đường dẫn lưu phiên hiện tại
    session_start();
    error_reporting(0); //tắt tất cả các báo cáo lỗi
    require_once('connect.php');
    if (! isset($_SESSION['uid']) || ! isset($_SESSION['admin'])) {
        echo '<script>
        location.href="admin.login.php";
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
                <h1 class="title">Quản trị users</h1>
                <div style="margin-top: 40px;">
                    <button style="margin-bottom: 15px;" onclick="javascript:location.href='adduser.php'"><i class="fa fa-plus"></i> Thêm mới</button>
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <tr>
                            <th>STT</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Register date</th>
                            <th></th>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM users WHERE deleted_at = '1970-01-01 00:00:00'";
                            $result = $conn->query($sql);
                            $i = 1;
                            while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><a href="showpost.php?uid=<?php echo $row['userid'] ?>"><?php echo $i ?></a"> </td>
                            <td><?php echo $row['first_name']?></td>
                            <td><?php echo $row['last_name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['registration_date']?></td>
                            <td><a href="edituser.php?uid=<?php echo $row['userid']?>">Edit</a> &nbsp;|&nbsp; <a href="deluser.php?uid=<?php echo $row['userid']?>">Delete</a></td>
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