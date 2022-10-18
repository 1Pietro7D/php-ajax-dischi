<?php 
include __DIR__ . '/../data/data.php';

header("Content-Type: application/json");

echo json_encode($disks);
?>