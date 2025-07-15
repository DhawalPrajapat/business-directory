<?php
include "config.php";
include "cors.php";

$sql = "SELECT * FROM businesses ORDER BY created_at DESC";
$result = $conn->query($sql);

$businesses = [];

while ($row = $result->fetch_assoc()) {
    $businesses[] = $row;
}

echo json_encode($businesses);
?>
