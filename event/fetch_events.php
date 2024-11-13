<?php
include("koneksi.php");

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT * FROM events";
if ($search) {
    $sql .= " WHERE judul LIKE '%" . $conn->real_escape_string($search) . "%' OR deskripsi LIKE '%" . $conn->real_escape_string($search) . "%' OR tingkat LIKE '%" . $conn->real_escape_string($search) . "%'";
}

$result = $conn->query($sql);

$events = array();
while ($row = $result->fetch_assoc()) {
    $events[] = $row;
}

echo json_encode($events);

$conn->close();
?>
