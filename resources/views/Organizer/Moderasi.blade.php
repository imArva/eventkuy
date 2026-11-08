<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .layout {
            overflow-x: hidden;
        }

        .sidebar .nav-link {
            color: #adb5bd;
            border-radius: .5rem;
        }

        .sidebar .nav-link:hover {
            color: #fff;
            background: rgba(255, 255, 255, .08);
        }

        .sidebar .nav-link.active {
            color: #fff;
            background: #0d6efd;
        }
    </style>
</head>

<body>

    <div class="layout d-lg-flex">

        <!-- SIDEBAR -->
      <aside class="sidebar offcanvas-lg offcanvas-start bg-dark text-white flex-shrink-0"
               tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">

            <div class="offcanvas-header border-bottom border-secondary">
                <h5 class="offcanvas-title" id="sidebarLabel">Dashboard Organizer</h5>
                <button type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="offcanvas" data-bs-target="#sidebar" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body d-flex flex-column p-3">
                <ul class="nav nav-pills flex-column gap-1 mb-auto">
                    <li class="nav-item">
                        <a href="/Dashboard" class="nav-link">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/KelolaEvent" class="nav-link">
                            Kelola Event
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/KelolaKategori" class="nav-link">
                            Kelola Kategori
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Moderasi" class="nav-link active" aria-current="page">
                            Moderasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/DaftarPeserta" class="nav-link">
                            Daftar Peserta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Penjualan" class="nav-link">
                            Penjualan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/ValidasiTiket" class="nav-link">
                            Validasi Tiket
                        </a>
                    </li>
                </ul>

                <hr class="border-secondary">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger w-100">
                        <i class="bi bi-box-arrow-left me-2"></i>Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- KONTEN UTAMA -->
<div class="flex-grow-1 min-vw-0">

            <!-- NAVBAR -->
            <nav class="navbar bg-light border-bottom">
                <div class="container-fluid">

                    <button class="btn btn-outline-secondary" type="button"
                        id="sidebarToggle" aria-controls="sidebar"
                        aria-label="Toggle menu">
                        <i class="bi bi-list fs-5"></i>
                    </button>

                    <span class="navbar-brand mb-0 h1 ms-2 me-auto">
                        Moderasi Event
                    </span>

                </div>
            </nav>


            <main class="container-fluid p-3 p-lg-4">

                <!-- DASHBOARD -->
                <section class="container-fluid px-3 px-lg-4 mb-4">

                    <div class="row mb-3">
                        <div class="col">
                            <h2>Selamat datang, Organizer</h2>
                            <p class="text-muted">
                                Kelola event dan pantau aktivitas penjualan tiket kamu.
                            </p>
                        </div>
                    </div>

                    <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <p class="text-muted mb-1">Total Event</p>
                                <h3 class="fw-bold text-warning" id="pendingCount">2</h3>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- AKSES CEPAT -->
                <section class="container px-3 px-lg-4 mt-4 mb-5">

                    <div class="row mb-3">
                        <div class="col">
                            <h2>Tambah Event</h2>
                        </div>
                    </div>

                    <div class="row gy-3">

                        <a class="col-6 col-md-4 text-decoration-none"
                            href="/KelolaEvent">
                            <div class="card w-100 h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-plus-circle fs-2"></i>
                                    <h5 class="card-title mt-2">Tambah Event</h5>
                                </div>
                            </div>
                        </a>

                    </div>
                </section>


                <!-- STATUS MODERASI EVENT -->
                @php
                    $events = $events ?? collect();

                    $pendingEvents = $events->where('status_moderasi', 'Pending')->count();
                    $approvedEvents = $events->where('status_moderasi', 'Approved')->count();
                    $revisionRejectedEvents = $events
                        ->whereIn('status_moderasi', ['Revision', 'Rejected'])
                        ->count();
                @endphp

                <section class="container-fluid px-3 px-lg-4 mt-5">

                    <!-- JUDUL -->
                    <div class="mb-4">
                        <h3 class="fw-bold">Status Moderasi Event</h3>
                        <p class="text-muted mb-0">
                            Pantau status pengajuan event yang telah kamu buat.
                        </p>
                    </div>


                    <!-- RINGKASAN STATUS -->
                    <div class="row g-3 mb-4">

                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <p class="text-muted mb-1">Menunggu Review</p>
                                    <h3 class="fw-bold text-warning">
                                        {{ $pendingEvents }}
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <p class="text-muted mb-1">Disetujui</p>
                                    <h3 class="fw-bold text-success">
                                        {{ $approvedEvents }}
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <p class="text-muted mb-1">
                                        Perlu Revisi / Ditolak
                                    </p>
                                    <h3 class="fw-bold text-danger">
                                        {{ $revisionRejectedEvents }}
                                    </h3>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- TABEL PENGAJUAN EVENT -->
                    <div class="card border-0 shadow-sm">

                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="fw-bold mb-0">
                                    Pengajuan Event Saya
                                </h5>
                            </div>

                            <div class="table-responsive">

                                <table class="table table-hover align-middle">

                                    <thead class="table-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Event</th>
                                            <th>Tanggal Event</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @forelse ($events as $index => $event)

                                            <tr>
                                                <td>{{ $index + 1 }}</td>

                                                <td class="fw-semibold">
                                                    {{ $event->nama_event }}
                                                </td>

                                                <td>
                                                    @if ($event->tanggal_event)
                                                        {{ \Carbon\Carbon::parse($event->tanggal_event)->format('d M Y') }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>

                                                <td>
                                                    {{ $event->created_at
                                                        ? $event->created_at->format('d M Y')
                                                        : '-' }}
                                                </td>

                                                <td>
                                                    @if ($event->status_moderasi == 'Pending')
                                                        <span class="badge bg-warning text-dark">
                                                            Menunggu Review
                                                        </span>

                                                    @elseif ($event->status_moderasi == 'Approved')
                                                        <span class="badge bg-success">
                                                            Disetujui
                                                        </span>

                                                    @elseif ($event->status_moderasi == 'Rejected')
                                                        <span class="badge bg-danger">
                                                            Ditolak
                                                        </span>

                                                    @elseif ($event->status_moderasi == 'Revision')
                                                        <span class="badge bg-info text-dark">
                                                            Perlu Revisi
                                                        </span>

                                                    @else
                                                        <span class="badge bg-secondary">
                                                            Belum Ada Status
                                                        </span>
                                                    @endif
                                                </td>

                                                <td>
                                                    <button
                                                        class="btn btn-sm btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detail{{ $event->id }}">
                                                        Detail
                                                    </button>
                                                </td>
                                            </tr>

                                        @empty

                                            <tr>
                                                <td colspan="6" class="text-center py-5">
                                                    <i class="bi bi-calendar-x fs-1 text-muted"></i>

                                                    <h6 class="fw-semibold mt-2">
                                                        Belum Ada Pengajuan Event
                                                    </h6>

                                                    <p class="text-muted mb-0">
                                                        Event yang kamu ajukan akan muncul di halaman ini.
                                                    </p>
                                                </td>
                                            </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>

                </section>


                <!-- MODAL DETAIL EVENT -->
                @foreach ($events as $event)

                    <div class="modal fade"
                        id="detail{{ $event->id }}"
                        tabindex="-1"
                        aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered">

                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold">
                                        Detail Status Event
                                    </h5>

                                    <button type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </button>
                                </div>


                                <div class="modal-body">

                                    <h5 class="fw-bold">
                                        {{ $event->nama_event }}
                                    </h5>

                                    <hr>

                                    <p class="mb-2">
                                        <strong>Tanggal Event:</strong>

                                        @if ($event->tanggal_event)
                                            {{ \Carbon\Carbon::parse($event->tanggal_event)->format('d M Y') }}
                                        @else
                                            -
                                        @endif
                                    </p>


                                    <p class="mb-2">
                                        <strong>Status:</strong>

                                        @if ($event->status_moderasi == 'Pending')
                                            <span class="badge bg-warning text-dark">
                                                Menunggu Review
                                            </span>

                                        @elseif ($event->status_moderasi == 'Approved')
                                            <span class="badge bg-success">
                                                Disetujui
                                            </span>

                                        @elseif ($event->status_moderasi == 'Rejected')
                                            <span class="badge bg-danger">
                                                Ditolak
                                            </span>

                                        @elseif ($event->status_moderasi == 'Revision')
                                            <span class="badge bg-info text-dark">
                                                Perlu Revisi
                                            </span>

                                        @else
                                            <span class="badge bg-secondary">
                                                Belum Ada Status
                                            </span>
                                        @endif
                                    </p>


                                    <div class="mt-3">
                                        <strong>Catatan Admin:</strong>

                                        <div class="bg-light rounded p-3 mt-2">
                                            {{ $event->catatan_admin ?: 'Belum ada catatan dari Admin.' }}
                                        </div>
                                    </div>


                                    @if ($event->status_moderasi == 'Approved')

                                        <div class="alert alert-success mt-3 mb-0">
                                            Event kamu telah disetujui oleh Admin
                                            dan dapat dipublikasikan.
                                        </div>

                                    @elseif ($event->status_moderasi == 'Pending')

                                        <div class="alert alert-warning mt-3 mb-0">
                                            Event kamu sedang diperiksa oleh Admin.
                                            Silakan tunggu hasil moderasi.
                                        </div>

                                    @elseif ($event->status_moderasi == 'Rejected')

                                        <div class="alert alert-danger mt-3 mb-0">
                                            Pengajuan event kamu ditolak oleh Admin.
                                        </div>

                                    @elseif ($event->status_moderasi == 'Revision')

                                        <div class="alert alert-info mt-3 mb-0">
                                            Silakan perbaiki informasi event
                                            sesuai catatan dari Admin.
                                        </div>

                                    @endif

                                </div>


                                <div class="modal-footer">
                                    <button type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal">
                                        Tutup
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach

            </main>

        </div>
    </div>


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SIDEBAR TOGGLE -->
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