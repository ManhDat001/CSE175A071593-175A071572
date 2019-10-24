<?php
    session_save_path('tmp/');
    session_start();
    error_reporting(0);

	unset($_SESSION['uid']);
	unset($_SESSION['admin']);
	echo '<script>
	location.href="index.php";
	</script>';
?>