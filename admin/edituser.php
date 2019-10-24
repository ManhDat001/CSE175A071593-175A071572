<?php
    error_reporting(0); 
    require_once('connect.php');
    if ($_POST) {
        $userid = $_POST['userid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $password = md5($password);
        $sql = sprintf("UPDATE users SET
                    first_name = '%s',
                    last_name = '%s',
                    password = '%s'
                    WHERE userid = %d;",
                    $firstname, $lastname, $newPassword, $userid);
        $conn->query($sql); 
        header('Location: admin.php');
    } else {
        $userid = $_SERVER['QUERY_STRING'];
        $userid = explode("=", $userid);
        $sql1 = "SELECT * FROM users WHERE userid = " . $userid[1] . " AND deleted_at = '1970-01-01 00:00:00' limit 1";
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
            <h1 class="title">Edit users</h1>
            <div style="margin-top: 40px;">
                <div class="frm">
                    <form action="edituser.php" method="post">
                        <p>First name</p>
                        <input type="text" name="firstname" value="<?php echo $row['first_name']; ?>" required />
                        <input type="hidden" name="userid" value="<?php echo $row['userid']; ?>" />
                        <p>Last name</p>
                        <input type="text" name="lastname" value="<?php echo $row['last_name']; ?>" required />
                        <p>New Password</p>
                        <input type="text" name="oldpassword" value="" required />
                        <div><button class="button primary" >Update user</button></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>