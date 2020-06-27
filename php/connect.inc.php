<?php
$conn = new PDO("mysql:host=localhost;dbname=bestpharma_dev;charset=utf8", 'bestpharma_user', 'bestpharma_developer', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
?>