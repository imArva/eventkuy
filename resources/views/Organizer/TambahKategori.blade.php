<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Organizer</title>

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
                <h5 class="offcanvas-title" id="sidebarLabel">Dashboard Organizer</h5>
                <button type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="offcanvas" data-bs-target="#sidebar" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body d-flex flex-column p-3">
                <ul class="nav nav-pills flex-column gap-1 mb-auto">
                    <li class="nav-item">
                        <a href="/Dashboard" class="nav-link active" aria-current="page">
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
                        <a href="/Moderasi" class="nav-link">
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

        <div class="flex-grow-1 min-vw-0">

            <nav class="navbar bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-outline-secondary" type="button"
                            id="sidebarToggle" aria-controls="sidebar" aria-label="Toggle menu">
                        <i class="bi bi-list fs-5"></i>
                    </button>
                    <span class="navbar-brand mb-0 h1 ms-2 me-auto">Dashboard Organizer</span>
                </div>
            </nav>

            <main class="container-fluid p-3 p-lg-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h1>Tambah Kategori: Besok Konser</h1>
                    <a href="/KelolaEvent" class="btn btn-primary">Kembali</a>
                </div>
                <div class="px-5 py-4 rounded" style="background-color: #FFC0CB;">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="nama_kategori" class="form-label"><b>Nama Kategori</b></label>
                            <input type="text" class="form-control" id="nama_kategori" placeholder="Kategori Tiket">
                        </div>
                        <div class="mb-3">
                            <label for="harga_tiket" class="form-label"><b>Harga Tiket</b></label>
                            <input type="number" class="form-control" id="harga_tiket" placeholder="Harga Tiket" min="1">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi-benefit" class="form-label"><b>Deskripsi/Benefit</b></label>
                            <textarea class="form-control" id="deskripsi-benefit" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kuota" class="form-label"><b>Kuota</b></label>
                            <input type="number" class="form-control" id="kuota" placeholder="Kuota Tiket" min="1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="status_kategori"><b>Status kategori</b></label>
                            <select class="form-select" id="status_kategori">
                                <option selected disabled>Pilih Status Kategori...</option>
                                <option value="Non Active">Non Active</option>
                                <option value="Active">Active</option>
                            </select>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <p>Status yang dipilih:</p>
                                <p id="status-terpilih" class="ms-2"></p>
                            </div>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary w-100"/>
                        </div>
                    </form>
                    
                </div>
            </main>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#status_kategori').on('change', function() {
                var selectedStatus = $(this).val();
                $('#status-terpilih').text(selectedStatus);
            });
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