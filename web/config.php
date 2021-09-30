<?php

session_start();

$db_host = "mysql392.mysql.database.azure.com";
$db_user = "sharma@mysql392";
$db_pass = "yatin@yatin1";
$db_name = "secondsql";

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysql->set_charset("utf8");

?>
