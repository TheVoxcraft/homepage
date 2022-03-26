<?php
// get post data
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

// parse as content-type: application/x-www-form-urlencoded
$params = array();
parse_str($postdata, $params);

// run bash script and return output
$output = shell_exec('/usr/bin/bash /home/pi/homepage/deploy.sh');

echo $output;


?>
