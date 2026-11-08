<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>

    <script src="https://code.jquery.com/jquery-4.0.0.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U=" crossorigin="anonymous"></script>
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
                        <a href="/DashboardAdmin" class="nav-link active" aria-current="page">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/ModerasiEvent" class="nav-link">
                            Moderasi Event
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/KelolaPenggunaAdmin" class="nav-link">
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
                <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4">
                    <div>
                        <h1 class="h2 mb-1">Pantau Transaksi</h1>
                        <p class="text-muted mb-0">Kelola pembayaran tiket dan pantau status transaksi event.</p>
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-6 col-md-3">
                        <div class="card w-100 text-decoration-none">
                            <div class="card-header">
                                <h5 class="card-title">Total Transaksi</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">1.248</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card w-100 text-decoration-none">
                            <div class="card-header">
                                <h5 class="card-title">Pendapatan</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rp248,6 jt</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card w-100 text-decoration-none">
                            <div class="card-header">
                                <h5 class="card-title">Menunggu Pembayaran</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">36</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card w-100 text-decoration-none">
                            <div class="card-header">
                                <h5 class="card-title">Refund</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">14</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3 mb-3">
                            <div>
                                <h2 class="h5 mb-1">Daftar Transaksi</h2>
                                <p class="text-muted small mb-0">Transaksi terbaru dari seluruh event.</p>
                            </div>
                            <form class="row g-2" action="#" method="get">
                                <div class="col-12 col-md-auto">
                                    <label class="visually-hidden" for="transactionSearch">Cari transaksi</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                                        <input type="search" class="form-control" id="transactionSearch" placeholder="Cari ID atau nama">
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <label class="visually-hidden" for="transactionStatus">Filter status</label>
                                    <select class="form-select" id="transactionStatus">
                                        <option selected>Semua status</option>
                                        <option>Berhasil</option>
                                        <option>Menunggu</option>
                                        <option>Dibatalkan</option>
                                        <option>Refund</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">ID Transaksi</th>
                                        <th scope="col">Pembeli</th>
                                        <th scope="col">Event</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"><span class="visually-hidden">Aksi</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">#TRX-10248</th>
                                        <td><strong>Rika Siti Haliza</strong><br><small class="text-muted">rika@gmail.com</small></td>
                                        <td>Besok Konser<br><small class="text-muted">VIP • 2 tiket</small></td>
                                        <td>07 Nov 2026<br><small class="text-muted">10:24 WIB</small></td>
                                        <td>Rp1.500.000</td>
                                        <td><span class="badge text-bg-success">Berhasil</span></td>
                                        <td><button type="button" class="btn btn-sm btn-outline-secondary">Detail</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#TRX-10247</th>
                                        <td><strong>Rika Siti Haliza</strong><br><small class="text-muted">rika@gmail.com</small></td>
                                        <td>Besok Konser<br><small class="text-muted">Festival • 3 tiket</small></td>
                                        <td>07 Nov 2026<br><small class="text-muted">09:51 WIB</small></td>
                                        <td>Rp1.125.000</td>
                                        <td><span class="badge text-bg-warning">Menunggu</span></td>
                                        <td><button type="button" class="btn btn-sm btn-outline-secondary">Detail</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#TRX-10246</th>
                                        <td><strong>Rika Siti Haliza</strong><br><small class="text-muted">rika@gmail.com</small></td>
                                        <td>Jazz di Taman<br><small class="text-muted">Regular • 1 tiket</small></td>
                                        <td>06 Nov 2026<br><small class="text-muted">20:16 WIB</small></td>
                                        <td>Rp250.000</td>
                                        <td><span class="badge text-bg-danger">Dibatalkan</span></td>
                                        <td><button type="button" class="btn btn-sm btn-outline-secondary">Detail</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#TRX-10245</th>
                                        <td><strong>Rika Siti Haliza</strong><br><small class="text-muted">rika@gmail.com</small></td>
                                        <td>Workshop Kreatif<br><small class="text-muted">Early Bird • 2 tiket</small></td>
                                        <td>06 Nov 2026<br><small class="text-muted">18:40 WIB</small></td>
                                        <td>Rp400.000</td>
                                        <td><span class="badge text-bg-info">Refund</span></td>
                                        <td><button type="button" class="btn btn-sm btn-outline-secondary">Detail</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2 mt-4">
                            <small class="text-muted">Menampilkan 4 dari 1.248 transaksi</small>
                            <nav aria-label="Navigasi transaksi">
                                <ul class="pagination pagination-sm mb-0">
                                    <li class="page-item disabled"><span class="page-link">Sebelumnya</span></li>
                                    <li class="page-item active"><span class="page-link">1</span></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Berikutnya</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qr-scanner/1.4.2/qr-scanner.min.js"></script>

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