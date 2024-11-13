<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pesan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }
        .message-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .message-form h2 {
            margin-bottom: 20px;
            color: #6e42a1; /* Ubah warna judul */
        }
        .message-form .form-control,
        .message-form .btn {
            margin-bottom: 10px;
        }
        .btn-primary {
            background-color: #6e42a1; /* Ubah warna tombol primer */
            border-color: #6e42a1; /* Ubah warna border tombol primer */
        }
        .btn-primary:hover {
            background-color: #563d7c; /* Ubah warna tombol primer saat dihover */
            border-color: #563d7c; /* Ubah warna border tombol primer saat dihover */
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #6e42a1; /* Ubah warna tombol */
            border-color: #6e42a1; /* Ubah warna border tombol */
        }
        .back-button:hover {
            background-color: #563d7c; /* Ubah warna tombol saat dihover */
            border-color: #563d7c; /* Ubah warna border tombol saat dihover */
        }
    </style>
</head>
<body>
    <a href="index.php" class="btn btn-primary back-button">Kembali</a>

    <div class="message-form">
        <h2>Kirim Pesan</h2>
        <form id="contact-form" action="https://formspree.io/f/xzbnlroa" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Masalah</label>
                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
