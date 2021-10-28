<?php
header('Content-Type: text/plain');

if (!function_exists('sqlsrv_connect')) {
    echo 'Missing method `sqlsrv_connect`, did you install the client?';
    die(2);
}

$serverName = 'db, 1433';
$connectionInfo = [
    'Database' => 'product-db',
    'UID' => 'sa',
    'PWD' => 'secret!123',
    'CharacterSet' => 'UTF-8',
];
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    echo "Connection established.\n";
} else {
    echo "Connection could not be established.\n";
    print_r(sqlsrv_errors(), true);
    die(1);
}
