<?php
$sql_host = "localhost";
$sql_user = "user";
$sql_password = "password";
$sql_db = "blog";
$link = mysqli_connect($sql_host, $sql_user, $sql_password, $sql_db);
mysqli_query($link, "SET NAMES 'UTF8'");
?>
