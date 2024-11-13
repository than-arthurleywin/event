<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light mode background color */
            color: #000; /* Light mode text color */
            scroll-behavior: smooth; /* Smooth scrolling */
        }
        a {
            text-decoration: none;
        }
        .dark-mode {
            background-color: #121212; /* Dark mode background color */
            color: #e0e0e0; /* Dark mode text color */
        }
        .dark-mode .card {
            background-color: gray;
        }
        .dark-mode .navbar,
        .dark-mode .footer {
            background-color: #1f1f1f; /* Dark mode navbar and footer background color */
        }
        .dark-mode .navbar-brand,
        .dark-mode .navbar-nav .nav-link,
        .dark-mode .footer {
            color: #e0e0e0; /* Dark mode text color for navbar and footer */
        }
        .dark-mode .event-card .card-title,
        .dark-mode .event-card .card-text {
            color: #e0e0e0; /* Dark mode text color for event card text */
        }
        .dark-mode .textmuted {
            color: #b0b0b0; /* Light gray color for muted text in dark mode */
        }
        .navbar {
            background-color: rgb(136, 125, 250); /* Navbar background color */
        }
        .navbar-toggler-icon {
            color: #fff; /* Navbar toggler icon color */
        }
        .navbar-nav .nav-link {
            color: #fff; /* Navbar link text color */
        }
        .toggle-icon {
            position: fixed;
            bottom: 20px;
            left: 20px;
            cursor: pointer;
            font-size: 1.5rem;
            z-index: 1000;
            color: rgb(136, 125, 250); /* Toggle icon color */
        }
        .herosection {
            padding: 100px 0;
            color: rgb(119, 119, 222); /* Hero section text color */
            text-align: center;
            height: 100vh;
            background-image: url('event/uploads/12062447_4866685.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            filter: brightness(80%); /* Menambahkan filter brightness dan contrast */
        }
        .dark-mode .herosection {
            background-color: #121212; /* Dark mode hero section background color */
        }
        .search-filter-section {
            padding: 20px;
            position: relative;
        }
        .search-filter-section form {
            display: inline-flex; /* Make form inline */
            width: auto; /* Remove fixed width */
            position: absolute;
            right: 20px;
            top: 20px;
        }
        .search-filter-section .form-control,
        .search-filter-section .form-select,
        .search-filter-section .btn {
            margin-left: 10px; /* Spacing between elements */
        }
        .event-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
            border-bottom: 1px solid #ccc;
        }
        .textmuted {
            color:lightslategray;
        }
        .event-header span {
            font-size: 1rem;
            padding-bottom: 5px;
        }
        .rotate-icon {
            transition: transform 0.5s ease;
        }
        .rotate-icon.rotated {
            transform: rotate(360deg);
        }
        .footer {
            background-color: rgb(136, 125, 250); /* Footer background color */
            color: white; /* Footer text color */
        }
        .card {
            margin-bottom: 20px;
            height: 100%;
            display: flex; /* Use flexbox for height adjustment */
            flex-direction: column; /* Arrange content in column */
        }
        .card-body {
            flex: 1; /* Allow content to fill available space */
        }
        .event-card {
            margin-bottom: 20px; /* Spacing between event cards */
        }
        .event-img {
            width: 100%; /* Image width 100% of container */
            height: 200px; /* Image height */
            object-fit: cover; /* Adjust image to cover container proportionately */
        }
        .btn-primary {
            background-color: rgb(126, 114, 255); /* Custom button color */
            border-color: rgb(126, 114, 255); /* Custom border color */
        }
        .btn-primary:hover {
            background-color: rgb(100, 90, 210); /* Darker shade for hover */
            border-color: rgb(100, 90, 210); /* Darker border color for hover */
        }
        .buttonmulai {
            background-color: white;
            box-shadow: 1.3px 1.3px 3px 1px #77c7de;
            width: 200px;
            color: rgb(119, 119, 222);
        }
        .buttonmulai:hover {
            color: rgb(119, 119, 222);
            background-color: white;
            box-shadow: none;
            position: relative;
            top: 1px;
            left: 1px;
        }
    .border-boxs {
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 10px;
        margin-top: 20px;
        background-color: #fff;
        display: flex;
        flex-wrap: nowrap;
        align-items: stretch;
    }
    .image-containers {
        width: 55%;
        height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .event-imgs {
        border: 1px solid #ccc;
        border-radius: 10px;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .content-boxs {
        padding-left: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
      @media (max-width: 768px) {
            #card {
                flex-direction: column;
                width: 100%;
            }
            #card .image-containers {
                width: 100%;
            }
        }
.footer a {
    color: white; /* Warna teks default */
    transition: color 0.3s ease; /* Transisi warna saat hover */
}

.footer div a:hover {
    color: #ccc; /* Warna teks saat hover */
}

    </style>
</head>
<body>
    <?php include('event/koneksi.php'); ?>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white;" href="#">Web Event</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="btn btn-primary" type="button" onclick="location.href='event/login.php'">Login</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="herosection">
        <div class="container">
            <h1>Selamat Datang di Web Event</h1>
            <p>Temukan berbagai event menarik di sini</p>
            <a href="#search-filter-section" class="btn buttonmulai mt-4">Mulai</a> <!-- Added Start Button -->
        </div>
    </div>

    <div class="event-header">
        <span>Event Terbaru</span>
        <button class="btn btn-link" id="refresh-btn"><i class="fas fa-redo-alt rotate-icon"></i></button>
    </div>

    <div id="search-filter-section" class="search-filter-section"> <!-- Added ID to section -->
        <div class="container">
            <form class="d-flex" method="GET" action="">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <select class="form-select me-2" id="filter" name="filter">
                    <option selected value="">Semua Tingkat</option>
                    <option value="kabupaten_kota">Kabupaten/Kota</option>
                    <option value="provinsi">Provinsi</option>
                    <option value="nasional">Nasional</option>
                    <option value="internasional">Internasional</option>
                </select>
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="hero-section">
        <div class="m-4">
            <div class="row">
                <?php
                // Pagination configuration
                $items_per_page = 8;
                $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $offset = ($current_page - 1) * $items_per_page;

                // Search and filter parameters
                $search = isset($_GET['search']) ? $_GET['search'] : '';
                $filter = isset($_GET['filter']) ? $_GET['filter'] : '';

                // Base SQL query
                $sql = "SELECT id, img, judul, deskripsi, waktu_awal, tingkat, alamat, hingga FROM events WHERE 1=1";

                // Modify SQL query based on search and filter
                if (!empty($search)) {
                    $sql .= " AND judul LIKE '%$search%'";
                }
                if (!empty($filter)) {
                    $sql .= " AND tingkat = '$filter'";
                }

                // Add sorting and pagination to the query
                $sql .= " ORDER BY waktu_awal DESC LIMIT $items_per_page OFFSET $offset";
                $result = $conn->query($sql);

                // Calculate total pages
                $total_items_sql = "SELECT COUNT(*) as count FROM events WHERE 1=1";

                // Modify total items query based on search and filter
                if (!empty($search)) {
                    $total_items_sql .= " AND judul LIKE '%$search%'";
                }
                if (!empty($filter)) {
                    $total_items_sql .= " AND tingkat = '$filter'";
                }

                $total_items_result = $conn->query($total_items_sql);
                $total_items_row = $total_items_result->fetch_assoc();
                $total_items = $total_items_row['count'];
                $total_pages = ceil($total_items / $items_per_page);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $deskripsi = strlen($row['deskripsi']) > 20 ? substr($row['deskripsi'], 0, 20) . '...' : $row['deskripsi'];
                        $tanggal = date('d M Y', strtotime($row['waktu_awal'])); // Format tanggal
                        echo '<div class="col-md-3 event-card">
                        <div class="card">
                        <img src="event/' . $row['img'] . '" class="card-img-top event-img" alt="' . htmlspecialchars($row['judul']) . '">
                        <div class="card-body">
                        <h5 class="card-title">' . htmlspecialchars($row['judul']) . '</h5>
                        <p class="card-text"> <b>' . htmlspecialchars($row['tingkat']) . '</b></p> 
                        <p class="card-text"><small class="textmuted">Deskripsi:</small><br> ' . htmlspecialchars($deskripsi) . '</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <p class="card-text"><small class="textmuted">Tanggal pelaksanaan:<br> </small><i>' . htmlspecialchars($tanggal) . '</i></p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eventModal" data-id="' . $row['id'] . '">Lihat</button>
                        </div>
                        </div>
                        </div>
                        </div>';
                    }
                } else {
                    echo '<p class="text-center">Tidak ada event tersedia</p>';
                }
                ?>
            </div>

            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mt-4">
                    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                        <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>&search=<?php echo $search; ?>&filter=<?php echo $filter; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Detail Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi dari modal akan dimasukkan di sini -->
                </div>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
            </div>
        </div>
    </div>
    
    <!-- Updated Footer -->
  <!-- Updated Footer -->
<footer class="footer mt-auto py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h5>Contact Us</h5>
                <p>Alamat: Zelat Gg.Bm, kel. Pataruman Kec. Pataruman,
                    Rt/Rw 03/01, Kota Banjar, Jawa Barat 4632</p>
                <p>No.Hp: +62 896 6812 8184</p>
                <p><a href="mailto:ramdanfathir015@gmail.com" style="color: #fff;">ramdanfathir015@gmail.com</a></p>
            </div>
            <div class="col-md-6 mb-4">
                <h5>Follow Us</h5>
                <p>
                    <a href="https://github.com/than-arthurleywin" target="_blank" style="color: #fff;"><i class="fab fa-github"></i> GitHub</a><br>
                    <a href="https://web.facebook.com/fathir.ramdan" target="_blank" style="color: #fff;"><i class="fab fa-facebook"></i> Facebook</a><br>
                    <a href="https://www.instagram.com/fathirramdanmlni" target="_blank" style="color: #fff;"><i class="fab fa-instagram"></i> Instagram</a><br>
                    <a href="https://www.tiktok.com/@than_arthurleywin" target="_blank" style="color: #fff;"><i class="fab fa-tiktok"></i> TikTok</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="event/contact_form.php" style="color: #fff;">Web bermasalah? klik ini untuk mengirim pesan</a>
            </div>
        </div>
    </div>
</footer>


    <i class="fas fa-moon toggle-icon" id="toggle-dark-mode"></i>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        document.getElementById('toggle-dark-mode').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            this.classList.toggle('fa-moon');
            this.classList.toggle('fa-sun');
        });

        document.getElementById('refresh-btn').addEventListener('click', function() {
            var icon = this.querySelector('.rotate-icon');
            icon.classList.add('rotated');
            icon.addEventListener('transitionend', function() {
                icon.classList.remove('rotated');
                window.location.reload(); // Reload the page after animation ends
            });
        });

        // Event listener untuk membuka modal dan mengambil data dari server
        var eventModal = document.getElementById('eventModal');
        eventModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var eventId = button.getAttribute('data-id');

            // Gunakan AJAX untuk mengambil data event dari PHP
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'event/get_event_detail.php?id=' + eventId, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) { 
                    var response = xhr.responseText;
                    var modalBody = document.querySelector('.modal-body');
                    modalBody.innerHTML = response; // Isi modal dengan response dari server
                }
            };
            xhr.send();
        });
    </script>
</body>
</html>
