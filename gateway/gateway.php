<?php

echo "this is the response<br>";
echo $_SERVER["QUERY_STRING"];


$cmd = $_GET["Cmd"];

$hostname = "10.96.10.222:8080";
$url = "http://".$hostname."/$cmd?".$_SERVER["QUERY_STRING"];

echo "Gateway response<br>";

$fp = fopen($url, "rb");
fpassthru($fp);

?>
