<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "SELECT img, judul, deskripsi, waktu_awal, tingkat, alamat, hingga FROM events WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $event = $result->fetch_assoc();
        echo '<div class="d-flex border-boxs" id="card">
                <div class="me-3 image-containers">
                    <img src="event/' . $event['img'] . '" class="img-fluid event-imgs" alt="' . htmlspecialchars($event['judul']) . '">
                </div>
                <div class="content-boxs">
                    <h5 class="card-title">' . htmlspecialchars($event['judul']) . '</h5> <br>
                    <p class="card-text"><small class="text-muted">Tingkat: <br></small><b>' . htmlspecialchars($event['tingkat']) . '</b></p>
                    <p class="card-text"><small class="text-muted">Deskripsi:</small><br>' . htmlspecialchars($event['deskripsi']) . '</p>
                    <p class="card-text"><small class="text-muted">Alamat:</small><br>' . htmlspecialchars($event['alamat']) . '</p>
                    <p class="card-text"><small class="text-muted">Tanggal pelaksanaan:</small><br><i>' . htmlspecialchars(date('d M Y', strtotime($event['waktu_awal']))) . '</i></p>
                    <p class="card-text"><small class="text-muted">Hingga:</small><br><i>' . htmlspecialchars(date('d M Y', strtotime($event['hingga']))) . '</i></p>
                </div>
            </div>';
    } else {
        echo '<p class="text-center">Event tidak ditemukan.</p>';
    }
} else {
    echo '<p class="text-center">ID tidak valid.</p>';
}
?>
