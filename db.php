<?php

$link = mysql_pconnect("localhost", "root", "secret") or die("Could not connect");
mysql_select_db("mhealth") or die("Could not select database");
 
$arr = array();
 
$rs = mysql_query("SELECT * FROM users");
 
while($obj = mysql_fetch_object($rs)) {
$arr[] = $obj;
}
echo '{"members":'.json_encode($arr).'}';

?>