<?php
$db_host = "URL of your database "; //your host Database address
$db_username = "Your database username"; //your account username
$db_pass = "your database password"; //your account password
$db_name = "your database name"; //your database name
@mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
@mysql_select_db("$db_name") or die ("no database");
?>
