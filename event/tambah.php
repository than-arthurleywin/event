<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Event</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
            color: #000000;
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode {
            background-color: #343a40;
            color: #ffffff;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode .container {
            background-color: #42494f;
            color: #ffffff;
        }
        .form-control {
            background-color: #ffffff;
            color: #000000;
            border: 1px solid #ced4da;
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode .form-control {
            background-color: #495057;
            color: #ffffff;
            border: 1px solid #6c757d;
        }
        .form-control:focus {
            background-color: #ffffff;
            color: #000000;
            border-color: #80bdff;
        }
        .dark-mode .form-control:focus {
            background-color: #495057;
            color: #ffffff;
            border-color: #80bdff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .form-group label {
            color: #000000;
        }
        .dark-mode .form-group label {
            color: #ffffff;
        }
        .mode-toggle {
            position: fixed;
            bottom: 10px;
            left: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="mode-toggle">
    <button class="btn btn-secondary" id="modeToggle">
        <i id="modeIcon" class="fas fa-sun"></i>
    </button>
</div>
<div class="container">
    <h1 class="mb-4">Tambah Event</h1>
    <form action="proses_tambah_event.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="gambar">Masukkan Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori" required>
                <option value="kabupaten/kota">Kabupaten/Kota</option>
                <option value="provinsi">Provinsi</option>
                <option value="nasional">Nasional</option>
                <option value="internasional">Internasional</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="waktu">Waktu Event</label>
            <input type="datetime-local" class="form-control" id="waktu" name="waktu" required>
        </div>
        <div class="form-group">
            <label for="hapus_otomatis">Sampai</label>
            <input type="datetime-local" class="form-control" id="hapus_otomatis" name="hapus_otomatis" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <a href="admin.php" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q/8rhJlhy9lfGpJ4y7K3W4k5uoRa5KfqPA1u/cXh7u0Dq4K4c9U1Gm2iICujdpkp" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIqX6zjtJ6/gKqxCI1nq52Sk5rFXikBl8U9A8KLvn+eGp0XsoM1" crossorigin="anonymous"></script>
<script>
    const modeToggle = document.getElementById('modeToggle');
    const modeIcon = document.getElementById('modeIcon');
    
    modeToggle.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
        if (document.body.classList.contains('dark-mode')) {
            modeIcon.classList.remove('fa-sun');
            modeIcon.classList.add('fa-moon');
        } else {
            modeIcon.classList.remove('fa-moon');
            modeIcon.classList.add('fa-sun');
        }
    });
</script>
</body>
</html>
