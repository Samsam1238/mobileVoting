<?php
require "MVDB.php";
$pdo= Database::letsconnect();

$sql = "select * from position"; 
$data = Database::GetAllData($pdo, $sql);
echo json_encode($data);
?>