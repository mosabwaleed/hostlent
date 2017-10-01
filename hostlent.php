<?php
$dbhost="localhost";
$dbusername="id3100406_mosabwaleed";
$dbpassword="02t5kgbt5";
$dbname="id3100406_hostlent";

$db = mysql_connect($dbhost,$dbusername,$dbpassword) or die (mysql_error());
    @mysql_select_db($dbname) or die (mysql_error());
mysql_query("set character_set_server='utf8'");
mysql_query("set names 'utf8'");
?>	