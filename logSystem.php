<?php
//simple log system
$logFile = fopen("visits.log", "a") or die("enable to opne file");

$logEntry = "visits from IP: " . $_SERVER['REMOTE_ADDR'] . "on" . date("Y-m-d H:i:s") . "\n";

fwrite($logFile, $logEntry);

fclose($logFile);

?>