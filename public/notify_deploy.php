<?php

// turn on error reporting
ini_set('display_errors', 1);
ini_set('ignore_repeated_errors', TRUE);
ini_set('error_log', '/var/www/logs/php.log');
ini_set('log_errors', TRUE);
error_reporting(E_ALL);


// open log file
$log = fopen("/var/www/logs/log.txt", "a");


// get post data
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

// parse as content-type: application/x-www-form-urlencoded
$params = array();
parse_str($postdata, $params);

//fwrite($log, date("Y-m-d H:i:s") . $postdata . "\r\n");

// run bash script
$output = shell_exec('(cd /var/www/repos/ && /usr/bin/bash /home/pi/homepage/deploy.sh &>> /var/www/logs/log.txt) &');

fwrite($log, date("Y-m-d H:i:s") . $output . "\r\n");
fclose($log);

echo "Deployed";

?>
