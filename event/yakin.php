<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Logout</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .confirmation-box {
            margin-top: 100px;
            text-align: center;
        }
        .confirmation-box h1 {
            margin-bottom: 30px;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="confirmation-box">
            <h1>Anda yakin ingin logout sebagai admin?</h1>
            <div class="btn-container">
                <a href="logikalogout.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Ya</a>
                <a href="admin.php" class="btn btn-secondary"><i class="fas fa-times"></i> Tidak</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q/8rhJlhy9lfGpJ4y7K3W4k5uoRa5KfqPA1u/cXh7u0Dq4K4c9U1Gm2iICujdpkp" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIqX6zjtJ6/gKqxCI1nq52Sk5rFXikBl8U9A8KLvn+eGp0XsoM1" crossorigin="anonymous"></script>
</body>
</html>
