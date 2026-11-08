<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderasi Event</title>

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
                        <a href="/ModerasiEvent" class="nav-link active" aria-current="page">
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

    <!-- Judul Halaman -->
    <div class="mb-4">
        <h3 class="fw-bold">Moderasi Event</h3>
        <p class="text-muted mb-0">
            Periksa dan kelola event yang diajukan oleh organizer.
        </p>
    </div>

    <!-- Ringkasan -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1">Menunggu Review</p>
                    <h3 class="fw-bold text-warning" id="pendingCount">2</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1">Disetujui</p>
                    <h3 class="fw-bold text-success" id="approvedCount">1</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1">Ditolak</p>
                    <h3 class="fw-bold text-danger" id="rejectedCount">0</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Event -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
                <h5 class="fw-bold mb-0">Daftar Pengajuan Event</h5>

                <div class="d-flex gap-2">
                    <input type="text"
                           class="form-control"
                           id="searchEvent"
                           placeholder="Cari nama event..."
                           style="max-width: 220px;">

                    <select class="form-select" id="filterStatus">
                        <option value="all">Semua Status</option>
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                        <option value="Revision">Revision</option>
                    </select>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Event</th>
                            <th>Organizer</th>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody id="eventTable">

                        <tr data-status="Pending">
                            <td>1</td>
                            <td class="event-name fw-semibold">Music Festival 2027</td>
                            <td>Rika Organizer</td>
                            <td>20 Januari 2027</td>
                            <td>Jakarta</td>
                            <td>
                                <span class="badge bg-warning text-dark status-badge">Pending</span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary"
                                    onclick="reviewEvent(this)"
                                    data-name="Music Festival 2027"
                                    data-organizer="Rika Organizer"
                                    data-date="20 Januari 2027"
                                    data-location="Jakarta"
                                    data-description="Festival musik yang menghadirkan berbagai penyanyi dan musisi lokal."
                                    data-category="Musik"
                                    data-price="Rp750.000">
                                    Review
                                </button>
                            </td>
                        </tr>

                        <tr data-status="Pending">
                            <td>2</td>
                            <td class="event-name fw-semibold">Tech Conference 2027</td>
                            <td>Tech Community</td>
                            <td>15 Februari 2027</td>
                            <td>Bandung</td>
                            <td>
                                <span class="badge bg-warning text-dark status-badge">Pending</span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary"
                                    onclick="reviewEvent(this)"
                                    data-name="Tech Conference 2027"
                                    data-organizer="Tech Community"
                                    data-date="15 Februari 2027"
                                    data-location="Bandung"
                                    data-description="Seminar teknologi yang membahas perkembangan teknologi digital dan inovasi."
                                    data-category="Seminar"
                                    data-price="Rp150.000">
                                    Review
                                </button>
                            </td>
                        </tr>

                        <tr data-status="Approved">
                            <td>3</td>
                            <td class="event-name fw-semibold">Art Exhibition</td>
                            <td>Art Space</td>
                            <td>10 Maret 2027</td>
                            <td>Jakarta</td>
                            <td>
                                <span class="badge bg-success status-badge">Approved</span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary"
                                    onclick="reviewEvent(this)"
                                    data-name="Art Exhibition"
                                    data-organizer="Art Space"
                                    data-date="10 Maret 2027"
                                    data-location="Jakarta"
                                    data-description="Pameran karya seni dari berbagai seniman lokal."
                                    data-category="Pameran"
                                    data-price="Rp50.000">
                                    Detail
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<!-- Modal Review Event -->
<div class="modal fade" id="reviewModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title fw-bold">Detail Event</h5>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <h4 class="fw-bold mb-3" id="detailName"></h4>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Organizer</small>
                        <p class="fw-semibold mb-0" id="detailOrganizer"></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Tanggal Event</small>
                        <p class="fw-semibold mb-0" id="detailDate"></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Lokasi</small>
                        <p class="fw-semibold mb-0" id="detailLocation"></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Kategori</small>
                        <p class="fw-semibold mb-0" id="detailCategory"></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Harga Tiket</small>
                        <p class="fw-semibold mb-0" id="detailPrice"></p>
                    </div>
                </div>

                <hr>

                <h6 class="fw-bold">Deskripsi Event</h6>
                <p class="text-muted" id="detailDescription"></p>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Catatan Admin
                    </label>
                    <textarea class="form-control" id="adminNote"
                        rows="3"
                        placeholder="Isi alasan penolakan atau revisi jika diperlukan..."></textarea>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary"
                    data-bs-dismiss="modal">
                    Tutup
                </button>

                <button type="button" class="btn btn-warning"
                    onclick="updateStatus('Revision')">
                    Request Revision
                </button>

                <button type="button" class="btn btn-danger"
                    onclick="updateStatus('Rejected')">
                    Reject
                </button>

                <button type="button" class="btn btn-success"
                    onclick="updateStatus('Approved')">
                    Approve
                </button>
            </div>

        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    let selectedRow = null;

    function reviewEvent(button) {
        selectedRow = button.closest('tr');

        document.getElementById('detailName').textContent = button.dataset.name;
        document.getElementById('detailOrganizer').textContent = button.dataset.organizer;
        document.getElementById('detailDate').textContent = button.dataset.date;
        document.getElementById('detailLocation').textContent = button.dataset.location;
        document.getElementById('detailDescription').textContent = button.dataset.description;
        document.getElementById('detailCategory').textContent = button.dataset.category;
        document.getElementById('detailPrice').textContent = button.dataset.price;

        document.getElementById('adminNote').value = '';

        const modal = new bootstrap.Modal(document.getElementById('reviewModal'));
        modal.show();
    }

    function updateStatus(status) {
        if (!selectedRow) return;

        const note = document.getElementById('adminNote').value.trim();

        if ((status === 'Rejected' || status === 'Revision') && note === '') {
            alert('Silakan isi catatan admin terlebih dahulu!');
            return;
        }

        const badge = selectedRow.querySelector('.status-badge');

        badge.textContent = status;
        selectedRow.dataset.status = status;

        badge.className = 'badge status-badge';

        if (status === 'Approved') {
            badge.classList.add('bg-success');
        } else if (status === 'Rejected') {
            badge.classList.add('bg-danger');
        } else if (status === 'Revision') {
            badge.classList.add('bg-info', 'text-dark');
        }

        updateCounts();

        bootstrap.Modal.getInstance(
            document.getElementById('reviewModal')
        ).hide();

        alert('Status event berhasil diperbarui menjadi ' + status);
    }

    function updateCounts() {
        const rows = document.querySelectorAll('#eventTable tr');

        let pending = 0;
        let approved = 0;
        let rejected = 0;

        rows.forEach(row => {
            const status = row.dataset.status;

            if (status === 'Pending') pending++;
            if (status === 'Approved') approved++;
            if (status === 'Rejected') rejected++;
        });

        document.getElementById('pendingCount').textContent = pending;
        document.getElementById('approvedCount').textContent = approved;
        document.getElementById('rejectedCount').textContent = rejected;
    }

    // Pencarian event
    document.getElementById('searchEvent').addEventListener('input', function() {
        filterEvents();
    });

    // Filter status
    document.getElementById('filterStatus').addEventListener('change', function() {
        filterEvents();
    });

    function filterEvents() {
        const keyword = document.getElementById('searchEvent').value.toLowerCase();
        const statusFilter = document.getElementById('filterStatus').value;

        document.querySelectorAll('#eventTable tr').forEach(row => {
            const name = row.querySelector('.event-name').textContent.toLowerCase();
            const status = row.dataset.status;

            const matchName = name.includes(keyword);
            const matchStatus = statusFilter === 'all' || status === statusFilter;

            row.style.display = matchName && matchStatus ? '' : 'none';
        });
    }
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