<?php
$q = $_GET["q"];
$con = mysql_connect("192.168.1.90", "data", "data2123");
if(!$con)
{
    die('Could not connect: '. mysql_error() );
}
$tables = array();
$qry = "SHOW TABLES FROM {$q};";
$result = mysql_query($qry);
$str = "";
while($table = mysql_fetch_row($result))
{
	$str .= $table[0]."\n";
}
echo $str;
?>