<?php
$q = $_GET["q"];
list($table, $db) = explode("$", $q);
$con = mysql_connect("192.168.1.90", "data", "data2123");
//$con = mysql_connect("localhost", "root", "root");
if(!$con)
{
    die('Could not connect: '. mysql_error() );
}
mysql_select_db($db, $con) or die('Can not use '.$db. mysql_error());
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM {$table}");
$numfields = mysql_num_fields($result);
$str = "";
for($i = 0;$i < $numfields; $i++)
{
    $str .= mysql_field_name($result, $i);
    if($i < $numfields - 1)
        $str .= ",";
}
$str .= "\n";
while($row=mysql_fetch_array($result)){
    for($i = 0;$i < $numfields; $i++)
    {
        $str .=$row[mysql_field_name($result, $i)];
        if($i < $numfields -1)
            $str .= ",";
    }
    $str .= "\n";
}
echo $str;
?>