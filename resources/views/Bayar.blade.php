<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick-theme.css">

    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick.min.js"></script>

</head>
<body>
    
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/img/EventKuy-Logo.png" height="50px" width="auto" alt="EventKuy Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Dashboardcus">Home</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/HistoryUser">My History</a>
                        </li>
                    @endauth

                    <li class="nav-item">
                        <a class="nav-link" href="/AllEvent">Eksplor Event</a>
                    </li>

                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                @guest
                    <div class="d-flex align-items-center ms-3">
                        <a class="btn btn-outline-primary me-2" href="/SignIn">Sign in</a>
                    </div>
                @endguest

                @auth
                    <div class="d-flex align-items-center ms-3">
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger me-2">Logout</button>
                        </form>
                    </div>
                @endauth
            </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card w-100 text-center">
                        <div class="card-body">
                        <h5 class="card-title"><b>Pembayaran</b></h5>
                        <h6 id="status">BELUM BAYAR</h6>
                        <h6 id="bayarKe">Metode: Transfer Bank</h6>
                        <h6 id="Nomor">Nomor Rekening: 1234567890</h6>
                        <table class="table p-5">
                            <thead>
                                <tr>
                                    <th>Judul Konser</th>
                                    <th>Quantity</th>
                                    <th>Tanggal</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Besok Konser</td>
                                    <td>2</td>
                                    <td>2023-10-15</td>
                                    <td>Rp 200.000</td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="/TampilanTiket" class="btn btn-primary w-100 d-none" id="lihatTiket">Lihat Tiket</a>
                        <button class="btn btn-primary w-100 mt-2" id="bayarSekarang">Bayar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Kalau tombol "Bayar Sekarang" diklik, ubah status menjadi "SUDAH BAYAR" dan tampilkan tombol "Lihat Tiket", hilangkan metode pebayaran dan nomor rekening
        $('#bayarSekarang').click(function() {
            $('#status').text('SUDAH BAYAR');
            $('#bayarKe').hide();
            $('#Nomor').hide();
            $('#lihatTiket').removeClass('d-none');
            $(this).hide();
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>