<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

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


<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="mb-4">
        <h3 class="fw-bold mb-1">Dashboard Admin</h3>
        <p class="text-muted mb-0">
            Selamat datang kembali! Berikut ringkasan aktivitas website kamu.
        </p>
    </div>

    {{-- STATISTIK --}}
    <div class="row g-3 mb-4">

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-2">Total Pengguna</p>
                            <h3 class="fw-bold mb-1">1.250</h3>
                            <small class="text-success">
                                <i class="bi bi-arrow-up"></i> 12% bulan ini
                            </small>
                        </div>
                        <div class="bg-primary-subtle text-primary rounded-3 p-3">
                            <i class="bi bi-people fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-2">Total Event</p>
                            <h3 class="fw-bold mb-1">85</h3>
                            <small class="text-success">
                                <i class="bi bi-arrow-up"></i> 8 event baru
                            </small>
                        </div>
                        <div class="bg-success-subtle text-success rounded-3 p-3">
                            <i class="bi bi-calendar-event fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-2">Total Transaksi</p>
                            <h3 class="fw-bold mb-1">2.430</h3>
                            <small class="text-success">
                                <i class="bi bi-arrow-up"></i> 15% bulan ini
                            </small>
                        </div>
                        <div class="bg-warning-subtle text-warning rounded-3 p-3">
                            <i class="bi bi-receipt fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-2">Total Pendapatan</p>
                            <h3 class="fw-bold mb-1">Rp125 jt</h3>
                            <small class="text-success">
                                <i class="bi bi-arrow-up"></i> 10% bulan ini
                            </small>
                        </div>
                        <div class="bg-info-subtle text-info rounded-3 p-3">
                            <i class="bi bi-wallet2 fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- PENDING INFORMATION --}}
    <div class="row g-3 mb-4">

        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Event Menunggu Persetujuan</p>
                        <h4 class="fw-bold mb-0">12 Event</h4>
                        <small class="text-muted">Perlu diperiksa oleh admin</small>
                    </div>
                    <a href="{{ url('ModerasiEvent') }}"
                       class="btn btn-outline-primary btn-sm">
                        Lihat Event
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Transaksi Menunggu Pembayaran</p>
                        <h4 class="fw-bold mb-0">24 Transaksi</h4>
                        <small class="text-muted">Perlu dipantau</small>
                    </div>
                    <a href="{{ url('/PantauTransaksiAdmin') }}"
                       class="btn btn-outline-primary btn-sm">
                        Lihat Transaksi
                    </a>
                </div>
            </div>
        </div>

    </div>

    {{-- GRAFIK --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="fw-bold mb-1">Statistik Pendapatan</h5>
                    <p class="text-muted small mb-0">
                        Ringkasan pendapatan selama 6 bulan terakhir
                    </p>
                </div>
                <span class="badge bg-light text-dark">2026</span>
            </div>

            <div style="height: 300px;">
                <canvas id="revenueChart"></canvas>
            </div>
        </div>
    </div>

    {{-- EVENT TERBARU --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="fw-bold mb-1">Pengajuan Event Terbaru</h5>
                    <p class="text-muted small mb-0">
                        Daftar event yang baru diajukan organizer
                    </p>
                </div>

                <a href="{{ url('/ModerasiEvent') }}"
                   class="btn btn-outline-primary btn-sm">
                    Lihat Semua
                </a>
            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Event</th>
                            <th>Organizer</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="fw-semibold">Music Festival 2027</td>
                            <td>Sound Production</td>
                            <td>06 Nov 2026</td>
                            <td>
                                <span class="badge bg-warning-subtle text-warning">
                                    Pending
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="fw-semibold">Jakarta Food Festival</td>
                            <td>Foodies Community</td>
                            <td>05 Nov 2026</td>
                            <td>
                                <span class="badge bg-warning-subtle text-warning">
                                    Pending
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="fw-semibold">Tech Innovation Expo</td>
                            <td>Tech Community</td>
                            <td>04 Nov 2026</td>
                            <td>
                                <span class="badge bg-success-subtle text-success">
                                    Approved
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="fw-semibold">Art & Creative Day</td>
                            <td>Creative Space</td>
                            <td>03 Nov 2026</td>
                            <td>
                                <span class="badge bg-danger-subtle text-danger">
                                    Rejected
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    {{-- TRANSAKSI TERBARU --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="fw-bold mb-1">Transaksi Terbaru</h5>
                    <p class="text-muted small mb-0">
                        Ringkasan transaksi pembelian tiket
                    </p>
                </div>

                <a href="{{ url('/PantauTransaksiAdmin') }}"
                   class="btn btn-outline-primary btn-sm">
                    Lihat Semua
                </a>
            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Customer</th>
                            <th>Nama Event</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>ORD-2027-001</td>
                            <td>Rika Haliza</td>
                            <td>Music Festival 2027</td>
                            <td>Rp500.000</td>
                            <td>
                                <span class="badge bg-success-subtle text-success">
                                    Paid
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>ORD-2027-002</td>
                            <td>Andi Pratama</td>
                            <td>Tech Innovation Expo</td>
                            <td>Rp250.000</td>
                            <td>
                                <span class="badge bg-warning-subtle text-warning">
                                    Pending
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>ORD-2027-003</td>
                            <td>Siti Amelia</td>
                            <td>Jakarta Food Festival</td>
                            <td>Rp150.000</td>
                            <td>
                                <span class="badge bg-success-subtle text-success">
                                    Paid
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('revenueChart');

    new Chart(ctx, {
        type: 'line',

        data: {
            labels: [
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November'
            ],

            datasets: [{
                label: 'Pendapatan (Juta Rupiah)',

                data: [15, 22, 18, 30, 25, 40],

                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13, 110, 253, 0.1)',

                borderWidth: 2,
                fill: true,
                tension: 0.4,

                pointRadius: 4,
                pointBackgroundColor: '#0d6efd'
            }]
        },

        options: {
            responsive: true,
            maintainAspectRatio: false,

            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            },

            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Pendapatan (Juta Rupiah)'
                    }
                }
            }
        }
    });
</script>

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