<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelola Pengguna Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        @media (min-width: 992px) {
            .sidebar {
                width: 250px;
                min-height: 100vh;
                transition: margin-left .3s ease;
            }

            .sidebar-collapsed .sidebar {
                margin-left: -250px;
            }
        }
        .layout { overflow-x: hidden; }
        .sidebar .nav-link { color: #adb5bd; border-radius: .5rem; }
        .sidebar .nav-link:hover { color: #fff; background: rgba(255,255,255,.08); }
        .sidebar .nav-link.active { color: #fff; background: #0d6efd; }
    </style>
</head>
<body>

    <div class="layout d-lg-flex">

        <aside class="sidebar offcanvas-lg offcanvas-start bg-dark text-white flex-shrink-0"
               tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">

            <div class="offcanvas-header border-bottom border-secondary">
                <h5 class="offcanvas-title" id="sidebarLabel">Dashboard Admin</h5>
                <button type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="offcanvas" data-bs-target="#sidebar" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body d-flex flex-column p-3">
                <ul class="nav nav-pills flex-column gap-1 mb-auto">
                    <li class="nav-item">
                        <a href="/DashboardAdmin" class="nav-link">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/ModerasiEvent" class="nav-link">
                            Moderasi Event
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/KelolaPenggunaAdmin" class="nav-link active" aria-current="page">
                            Kelola Pengguna
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/PantauTransaksiAdmin" class="nav-link">
                            Pantau Transaksi
                        </a>
                    </li>
                </ul>

                <hr class="border-secondary">
                <a href="/Logout" class="nav-link">
                    <i class="bi bi-box-arrow-left me-2"></i>Logout
                </a>
            </div>
        </aside>

        <div class="flex-grow-1 min-vw-0">

            <nav class="navbar bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-outline-secondary" type="button"
                            id="sidebarToggle" aria-controls="sidebar" aria-label="Toggle menu">
                        <i class="bi bi-list fs-5"></i>
                    </button>
                    <span class="navbar-brand mb-0 h1 ms-2 me-auto">Dashboard Admin</span>
                </div>
            </nav>

            <main class="container-fluid p-3 p-lg-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h1>Daftar Pengguna</h1>
<!--                     <a href="/TambahPenggunaAdmin" class="btn btn-primary">Tambah Pengguna</a>
 -->                </div>

                <div class="table-responsive">
                    <table class="table table-danger">
                        <thead>
                            <tr>
                                <th scope="col">Nama Pengguna</th>
                                <th scope="col">Email</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Role</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Rika Siti Haliza</th>
                                <td>rika@example.com</td>
                                <td>08123456789</td>
                                <td><span class="badge bg-primary">customer</span></td>
                                <td>
                                    <div class="d-flex gap-3">
                                        <a class="text-primary text-decoration-none" href="/EditPengguna">Edit</a>
                                        <a class="text-danger text-decoration-none" href="">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
        const toggleBtn = document.getElementById('sidebarToggle');
        const sidebarEl = document.getElementById('sidebar');

        toggleBtn.addEventListener('click', () => {
            if (window.innerWidth >= 992) {
                document.documentElement.classList.toggle('sidebar-collapsed');
            } else {
                bootstrap.Offcanvas.getOrCreateInstance(sidebarEl).toggle();
            }
        });
    </script>
</body>
</html>