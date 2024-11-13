<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM events WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script> window.location.href='admin.php';</script>";
        } else {
            echo "Error deleting event: " . $conn->error;
        }
    $stmt->close();
} else {
    echo "Invalid request";
}
$conn->close();
?>
