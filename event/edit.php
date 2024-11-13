<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM events WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $event = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $tingkat = $_POST['tingkat'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];
    $waktu_awal = $_POST['waktu_awal'];
    $hingga = $_POST['hingga'];
    
    $image = $_FILES['image']['name'];
    $target = "uploads/".basename($image);
    
    if ($image) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $query = "UPDATE events SET judul='$judul', tingkat='$tingkat', alamat='$alamat', deskripsi='$deskripsi', waktu_awal='$waktu_awal', hingga='$hingga', img='$target' WHERE id=$id";
    } else {
        $query = "UPDATE events SET judul='$judul', tingkat='$tingkat', alamat='$alamat', deskripsi='$deskripsi', waktu_awal='$waktu_awal', hingga='$hingga' WHERE id=$id";
    }

    if (mysqli_query($conn, $query)) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body class="white-mode">
<div class="container mt-5">
    <h2 class="mb-4">Edit Event</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <img id="current-image" src="<?php echo $event['img']; ?>" alt="Current Image" class="img-fluid mt-2" width="150">
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $event['judul']; ?>" required>
        </div>
        <div class="form-group">
            <label for="tingkat">Tingkat</label>
            <input type="text" class="form-control" id="tingkat" name="tingkat" value="<?php echo $event['tingkat']; ?>" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $event['alamat']; ?>" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?php echo $event['deskripsi']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="waktu_awal">Waktu Awal</label>
            <input type="datetime-local" class="form-control" id="waktu_awal" name="waktu_awal" value="<?php echo date('Y-m-d\TH:i', strtotime($event['waktu_awal'])); ?>" required>
        </div>
        <div class="form-group">
            <label for="hingga">Hingga</label>
            <input type="datetime-local" class="form-control" id="hingga" name="hingga" value="<?php echo date('Y-m-d\TH:i', strtotime($event['hingga'])); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="admin.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
