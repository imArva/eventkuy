<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Organizer</title>
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
                        <a href="/Penjualan" class="nav-link active" aria-current="page">
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
                <main class="container-fluid px-5">
                    <div class="row mb-2">
                        <div class="col">
                            <h1>Your Event</h1>
                        </div>
                    </div>
                    <div class="row gy-4 justify-content-center">
                        <div class="col-12 col-md-3">
                            <a href="/PenjualanEvent" class="card h-100 text-decoration-none">
                                <img src="https://i.pinimg.com/1200x/18/31/a3/1831a310d6a8536b7eaf1777b2ab8d3e.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Billie Eilish</h5>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                                </div>
                                <div class="card-footer">
                                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                                    <h5 class="card-title">Rp850.000</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-3">
                            <a href="/PenjualanEvent" class="card h-100 text-decoration-none">
                                <img src="https://i.pinimg.com/1200x/18/31/a3/1831a310d6a8536b7eaf1777b2ab8d3e.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Billie Eilish</h5>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                                </div>
                                <div class="card-footer">
                                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                                    <h5 class="card-title">Rp850.000</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-3">
                            <a href="/PenjualanEvent" class="card h-100 text-decoration-none">
                                <img src="https://i.pinimg.com/1200x/18/31/a3/1831a310d6a8536b7eaf1777b2ab8d3e.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Billie Eilish</h5>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                                </div>
                                <div class="card-footer">
                                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                                    <h5 class="card-title">Rp850.000</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-3">
                            <a href="/PenjualanEvent" class="card h-100 text-decoration-none">
                                <img src="https://i.pinimg.com/1200x/18/31/a3/1831a310d6a8536b7eaf1777b2ab8d3e.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Billie Eilish</h5>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                                </div>
                                <div class="card-footer">
                                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                                    <h5 class="card-title">Rp850.000</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-3">
                            <a href="/PenjualanEvent" class="card h-100 text-decoration-none">
                                <img src="https://i.pinimg.com/1200x/18/31/a3/1831a310d6a8536b7eaf1777b2ab8d3e.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Billie Eilish</h5>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                                </div>
                                <div class="card-footer">
                                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                                    <h5 class="card-title">Rp850.000</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-3">
                            <a href="/PenjualanEvent" class="card h-100 text-decoration-none">
                                <img src="https://i.pinimg.com/1200x/18/31/a3/1831a310d6a8536b7eaf1777b2ab8d3e.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Billie Eilish</h5>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                                </div>
                                <div class="card-footer">
                                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                                    <h5 class="card-title">Rp850.000</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-3">
                            <a href="/PenjualanEvent" class="card h-100 text-decoration-none">
                                <img src="https://i.pinimg.com/1200x/18/31/a3/1831a310d6a8536b7eaf1777b2ab8d3e.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Billie Eilish</h5>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                                </div>
                                <div class="card-footer">
                                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                                    <h5 class="card-title">Rp850.000</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-3">
                            <a href="/PenjualanEvent" class="card h-100 text-decoration-none">
                                <img src="https://i.pinimg.com/1200x/18/31/a3/1831a310d6a8536b7eaf1777b2ab8d3e.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Billie Eilish</h5>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                                </div>
                                <div class="card-footer">
                                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                                    <h5 class="card-title">Rp850.000</h5>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center my-5">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </main>
            </main>
        </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>