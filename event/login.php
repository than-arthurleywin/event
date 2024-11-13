<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode {
            background-color: #42494f;
            color: #ffffff;
        }
        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode .login-container {
            background-color: #343a40;
            color: #ffffff;
        }
        .login-container h2 {
            margin-bottom: 1.5rem;
        }
        .login-container .btn-back {
            margin-top: 1rem;
        }
        .mode-toggle {
            position: fixed;
            bottom: 10px;
            left: 10px;
            cursor: pointer;
        }
        .mode-toggle i {
            transition: transform 0.3s;
        }
    </style>
</head>
<body>
    <div class="mode-toggle">
        <button class="btn btn-secondary" id="modeToggle">
            <i class="fas fa-sun"></i>
        </button>
    </div>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="logikalogin.php">
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <button onclick="location.href='../index.php'" class="btn btn-secondary btn-back w-100">Kembali ke Halaman</button>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        const modeToggle = document.getElementById('modeToggle');
        const modeIcon = modeToggle.querySelector('i');

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
