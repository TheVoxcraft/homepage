<?php
// get post data
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

// log data to file
$log = fopen('/var/www/html/deploy.log', 'a');
fwrite($log, date('Y-m-d H:i:s') . ' ' . $postdata . "\n");
fclose($log);

?>
