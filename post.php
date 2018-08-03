<?php
// Allow from any origin
header('Access-Control-Allow-Credentials: true');

ini_set('display_errers','on');
error_reporting(E_ALLE|E_STRICt);
$payload = file_get_contents('php://input');
$data = json_decode($payload);

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo json_encode($data);

?>