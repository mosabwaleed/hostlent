<?php
include ("hostlent.php");
header('Content-type: text/html; charset=utf-8');
$result = mssql_query("SELECT * FROM admin ");
$stu = array();
while ($row=mysql_fetch_array($result)){
	$stu[]=$row;
}
print "{allhostlent:".json_encode($stu,JSON_UNESCAPED_UNICODE)."}";
?>