<?php
session_start();

// Include database connection file
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["gambar"]["size"] > 50000000) { // Adjust the size limit as needed
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["gambar"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Get form data
    $kategori = $_POST['kategori'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];
    $waktu = $_POST['waktu'];
    $hapus_otomatis = $_POST['hapus_otomatis'];
    $judul = $_POST['judul'];

    // Insert data into the database
    $sql = "INSERT INTO `events` (`judul`, `img`, `tingkat`, `alamat`, `deskripsi`, `waktu_awal`, `hingga`) 
            VALUES ('$judul','$target_file', '$kategori', '$alamat', '$deskripsi', '$waktu', '$hapus_otomatis')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: admin.php"); 
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
