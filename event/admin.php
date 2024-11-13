<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <style>
        * {
            scroll-behavior: smooth;
        }
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            overflow-y: auto;
            transition: transform 0.3s ease-in-out;
        }
        .sidebar-hidden {
            transform: translateX(-100%);
        }
        .main-content {
            margin-left: 250px;
            padding-top: 20px;
            transition: margin-left 0.3s ease-in-out;
        }
        .dark-mode {
            background-color: #343a40;
            color: white;
        }
        .sidebar-dark {
            background-color: #343a40;
        }
        .sidebar-light {
            background-color: #f8f9fa;
        }
        .table-dark {
            background-color: dark;
            color: #ffffff;
        }
        .table-light {
            background-color: #ffffff;
            color: #000000;
        }
        .table-bordered {
            border: 1px solid #dee2e6;
        }
        .table-bordered th, .table-bordered td {
            border: 1px solid #dee2e6;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0,0,0,.05);
        }
        .table-striped.table-dark tbody tr:nth-of-type(odd) {
            background-color: rgba(255,255,255,.05);
        }
        .table td, .table th {
            font-size: 0.85rem;
        }
        .pagination {
            justify-content: center;
        }
        .table td {
            height: 80px;
            vertical-align: middle;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .table td img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        .hamburger-menu {
            position: fixed;
            z-index: 9999;
            top: 10px;
            left: 10px;
        }
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
            .hamburger-menu {
                display: block;
            }
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar-visible {
                transform: translateX(0);
            }
        }
        @media (min-width: 769px) {
            .hamburger-menu {
                display: none;
            }
        }

        /* Prevent horizontal overflow */
        body {
            overflow-x: hidden;
        }

        /* Ensure table fits within the container */
        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="hamburger-menu d-md-none">
        <button class="btn" id="sidebar-toggle"><i class="fas fa-bars" id="menu-icon"></i></button>
    </div>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block sidebar sidebar-light">
                <div class="sidebar-sticky">
                    <h3 class="text-center border-bottom pb-3">Web Event</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#dashboard">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link" id="mode-toggle">
                                <i class="fas fa-adjust"></i>
                                Mode
                            </div>
                            <form id="theme-options" class="mt-2" style="display: none;">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="theme" id="dark" value="dark">
                                    <label class="form-check-label" for="dark">Dark</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="theme" id="white" value="white" checked>
                                    <label class="form-check-label" for="white">Light</label>
                                </div>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="yakin.php">
                                <i class="fas fa-user"></i>
                                Log Out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="main-content col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div id="dashboard" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Admin Page</h1>
                    <div class="input-wrapper">
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="search" class="form-control" id="search" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="btn">
                                        <i class="fa-solid fa-magnifying-glass"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-start mb-3">
                    <button class="btn btn-success" id="add-button" onclick="tambah()"><i class="fa fa-plus"></i> Tambah</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-light table-bordered" id="event-table">
                        <thead>
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Tingkat</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Waktu Awal</th>
                                <th scope="col">Hingga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <!-- Data will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item" id="prev-button"><a class="page-link" href="#" onclick="prevPage()">Prev</a></li>
                        <li class="page-item" id="next-button"><a class="page-link" href="#" onclick="nextPage()">Next</a></li>
                    </ul>
                </nav>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q/8rhJlhy9lfGpJ4y7K3W4k5uoRa5KfqPA1u/cXh7u0Dq4K4c9U1Gm2iICujdpkp" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TI1nq52Sk5rFXikBl8U9A8KLvn+eGp0XsoM1" crossorigin="anonymous"></script>
    <script>
    document.getElementById('mode-toggle').addEventListener('click', function() {
        var themeOptions = document.getElementById('theme-options');
        if (themeOptions.style.display === 'none' || themeOptions.style.display === '') {
            themeOptions.style.display = 'block';
        } else {
            themeOptions.style.display = 'none';
        }
    });

    document.getElementById('sidebar-toggle').addEventListener('click', function() {
        var sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('sidebar-visible');
    });

    document.querySelectorAll('input[name="theme"]').forEach(function(themeRadio) {
        themeRadio.addEventListener('change', function() {
            if (this.value === 'dark') {
                document.body.classList.add('dark-mode');
                document.querySelector('.sidebar').classList.add('sidebar-dark');
                document.querySelector('.sidebar').classList.remove('sidebar-light');
                document.querySelector('#event-table').classList.add('table-dark');
                document.querySelector('#event-table').classList.remove('table-light');
            } else {
                document.body.classList.remove('dark-mode');
                document.querySelector('.sidebar').classList.add('sidebar-light');
                document.querySelector('.sidebar').classList.remove('sidebar-dark');
                document.querySelector('#event-table').classList.add('table-light');
                document.querySelector('#event-table').classList.remove('table-dark');
            }
        });
    });

    // Pagination variables
    const itemsPerPage = 10;
    let currentPage = 1;
    let totalPages = 1;

    // Fetch events and populate the table
    function fetchEvents(searchQuery = '') {
        const url = `fetch_events.php?search=${encodeURIComponent(searchQuery)}`;

        fetch(url)
            .then(response => response.json())
            .then(events => {
                const tableBody = document.getElementById('table-body');
                tableBody.innerHTML = ''; // Clear existing rows

                if (events.length === 0) {
                    const noDataRow = document.createElement('tr');
                    noDataRow.innerHTML = '<td colspan="8" class="text-center">No data available</td>';
                    tableBody.appendChild(noDataRow);
                    document.getElementById('prev-button').style.display = 'none';
                    document.getElementById('next-button').style.display = 'none';
                    return;
                }

                totalPages = Math.ceil(events.length / itemsPerPage);
                const startIndex = (currentPage - 1) * itemsPerPage;
                const endIndex = startIndex + itemsPerPage;
                const paginatedEvents = events.slice(startIndex, endIndex);

                paginatedEvents.forEach(event => {
                    const row = document.createElement('tr');

                    row.innerHTML = `
                        <td><img src="${event.img}" alt="Event Image"></td>
                        <td>${event.judul}</td>
                        <td>${event.tingkat}</td>
                        <td>${event.alamat}</td>
                        <td>${truncateDescription(event.deskripsi)}</td>
                        <td>${event.waktu_awal}</td>
                        <td>${event.hingga}</td>
                        <td>
                            <td>
    <button class="btn btn-warning" onclick="editEvent(${event.id})"><i class="fa fa-edit"></i> Edit</button>
    <button class="btn btn-danger" onclick="confirmDelete(${event.id})"><i class="fa fa-trash"></i> Delete</button>
</td>

                        </td>
                    `;
                    tableBody.appendChild(row);
                });

                updatePaginationButtons();
            })
            .catch(error => console.error('Error fetching events:', error));
    }

    function truncateDescription(description) {
        if (description.length > 50) {
            return description.substring(0, 50) + '...';
        }
        return description;
    }

    // Update pagination buttons visibility
    function updatePaginationButtons() {
        document.getElementById('prev-button').style.display = currentPage > 1 ? 'block' : 'none';
        document.getElementById('next-button').style.display = currentPage < totalPages ? 'block' : 'none';
    }

    // Go to the previous page
    function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            fetchEvents(document.getElementById('search').value);
        }
    }

    // Go to the next page
    function nextPage() {
        if (currentPage < totalPages) {
            currentPage++;
            fetchEvents(document.getElementById('search').value);
        }
    }

    // Call fetchEvents on page load
    document.addEventListener('DOMContentLoaded', () => fetchEvents());

    document.getElementById('btn').addEventListener('click', function() {
        currentPage = 1; // Reset to first page on new search
        const searchQuery = document.getElementById('search').value;
        fetchEvents(searchQuery);
    });

    function tambah(){
        window.location.href="tambah.php";
    }

function editEvent(eventId) {
    window.location.href = `edit.php?id=${eventId}`;
}

function confirmDelete(eventId) {
    if (confirm('Are you sure you want to delete this event?')) {
        window.location.href = `delete.php?id=${eventId}`;
    }
}

    </script>
</body>
</html>
