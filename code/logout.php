<?php
session_start();
session_destroy();
    echo "<script>";
    echo "window.alert('logout sucessful completed');";
    echo 'window.location.href="index2.php";';
	echo "</script>";

?>