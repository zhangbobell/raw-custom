<?php
$con = mysql_connect("192.168.1.90", "data", "data2123");
if(!$con)
{
    die('Could not connect: '. mysql_error() );
}
$list = mysql_list_dbs($con);
$str = "";
while($row = mysql_fetch_object($list)){
	$str .= $row->Database ."\n";
}
echo $str;
?>