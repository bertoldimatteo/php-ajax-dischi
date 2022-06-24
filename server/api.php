<?php 

require_once __DIR__ . '/database.php';

header('Content-type: application/json');

$response = $database;

echo json_encode($database);
?>