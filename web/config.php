<?php

session_start();

$db_host = "yatin sharma";
$db_user = "username";
$db_pass = "password";
$db_name = "database";

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysql->set_charset("utf8");

?>
