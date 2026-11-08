<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick-theme.css">

    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick.min.js"></script>

    <style>
        /* 1. Paksa semua item accordion untuk memiliki border-radius di semua sudutnya */
        .custom-accordion .accordion-item {
            border-radius: 8px !important; /* Ubah angka ini sesuai tingkat kebulatan yang diinginkan */
            margin-bottom: 10px; /* Memberi jarak antar item agar bentuk rounded-nya terlihat jelas */
            border: 1px solid rgba(0,0,0,.125) !important; /* Memastikan border bawah tetap muncul */
        }

        /* 2. Sesuaikan header/tombol accordion agar mengikuti kebulatan itemnya saat ditutup */
        .custom-accordion .accordion-button {
            border-top-left-radius: 8px !important;
            border-top-right-radius: 8px !important;
            border-bottom-left-radius: 8px !important;
            border-bottom-right-radius: 8px !important;
        }

        /* 3. Ketika accordion dibuka (active/expanded), kembalikan sudut bawah tombol menjadi siku-siku 
            agar menyatu dengan rapi dengan konten di bawahnya */
        .custom-accordion .accordion-button:not(.collapsed) {
            border-bottom-left-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
        }

        /* 4. Pastikan bagian konten bawah (body) juga memiliki rounded di sudut bawahnya */
        .custom-accordion .accordion-item:last-of-type .accordion-collapse {
            border-bottom-left-radius: 8px !important;
            border-bottom-right-radius: 8px !important;
        }
    </style>
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
        <img src="https://assets.loket.com/neo/production/images/banner/20260710180442_6a50d1ca9d9bd.jpeg" class="d-block w-100" alt="...">
    </div>

    <div class="container mt-3 mb-4">
        <div class="row mb-4">
            <div class="col-12 col-md-8">
                <h1>Judul Event</h1>
                <div class="card w-100">
                    <div class="card-header">
                        <b>Pengunjung</b>
                    </div>
                    <ul class="list-group list-group-flush d-flex flex-row flex-wrap pb-3">
                        <div class="col-12 p-3 pb-0 ">
                            <h5>Day 2 - 12 Desember 2026 - PRESALE</h5>
                        </div>
                        <li class="list-group-item col-6">
                            <label for="nama" class="form-label"><b>Nama Lengkap</b></label>
                            <input type="text" class="form-control" id="nama" style="border: 1px solid black;" placeholder="Masukkan Nama Lengkap">

                        </li>
                        <li class="list-group-item col-6">
                            <label for="email" class="form-label"><b>Email</b></label>
                            <input type="email" class="form-control" id="email" style="border: 1px solid black;" placeholder="Masukkan Email">
                        </li>
                        <li class="list-group-item col-6">
                            <label for="no_handphone" class="form-label"><b>No. Handphone</b></label>
                            <input type="text" class="form-control" id="no_handphone" style="border: 1px solid black;" placeholder="Masukkan No. Handphone">
                        </li>
                        <li class="list-group-item col-6">
                            <label for="nomor_identitas" class="form-label"><b>Nomor Identitas (KTP/SIM/Paspor)</b></label>
                            <input type="text" class="form-control" id="nomor_identitas" style="border: 1px solid black;" placeholder="Masukkan Nomor Identitas">
                        </li>
                        <li class="list-group-item col-6">
                            <label for="tanggal_lahir" class="form-label"><b>Tanggal Lahir</b></label>
                            <input type="date" style="border: 1px solid black;" class="form-control w-12" id="tanggal_lahir" data-bs-toggle="datepicker" autocomplete="off" placeholder="Tanggal Lahir">
                        </li>
                        <li class="list-group-item col-6">
                            <label for="jenis_kelamin" class="form-label"><b>Jenis Kelamin</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                                <label class="form-check-label" for="laki-laki">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>

                <h4>Metode Pembayaran</h4>
                <div class="accordion custom-accordion mb-5" id="accordionPanelsStayOpenExample">
                            
                    <!-- Metode Pembayaran -->
                    <div class="accordion-item mb-3">   
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                            Credit Card / Debit Card
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h5 class="">BCA</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-primary ms-2 choosePayment" data-payment="BCA">Pilih</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h5 class="">BNI</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-primary ms-2 choosePayment" data-payment="BNI">Pilih</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="">Mandiri</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-primary ms-2 choosePayment" data-payment="Mandiri">Pilih</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
    
                    <div class="accordion-item mb-3">   
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Virtual Account
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h5 class="">BCA</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-primary ms-2 choosePayment" data-payment="VA BCA">Pilih</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h5 class="">BNI</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-primary ms-2 choosePayment" data-payment="VA BNI">Pilih</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="">Mandiri</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-primary ms-2 choosePayment" data-payment="VA Mandiri">Pilih</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
    
                    <div class="accordion-item mb-3">   
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            E-Wallet
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h5 class="">Gopay</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-primary ms-2 choosePayment" data-payment="Gopay">Pilih</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h5 class="">ShopeePay</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-primary ms-2 choosePayment" data-payment="ShopeePay">Pilih</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="">Ovo</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-primary ms-2 choosePayment" data-payment="Ovo">Pilih</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
    
                    <div class="accordion-item mb-3">   
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            QR
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h5 class="">QRIS</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-primary ms-2 choosePayment" data-payment="QRIS">Pilih</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
    
    
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card w-100" style="position: sticky; top: 20px; z-index: 1020;">
                    <div class="card-header text-center" style="background-color: #ff29db;color:white;">
                        <b style="font-size: 14px;">10:00</b>
                        <b style="font-size: 14px;">|</b>
                        <b style="font-size: 14px;font-weight:normal;">Waktu Pemesanan Tersisa</b>
                    </div>
                    <ul class="list-group list-group-flush pb-3">
                        <div class="col-12 p-3 pb-0 ">
                            <h5>Ringkasan Pesanan</h5>
                        </div>
                        <li class="list-group-item col-12 pb-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <figure>
                                    <blockquote class="blockquote" style="font-size: 14px;">
                                        <p>Day 2 - 12 Desember 2026 - PRESALE</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        Rp. 79.000 x 1
                                    </figcaption>
                                </figure>

                                <h5 style="font-size: 14px;">Rp. 79.000</h5>
                            </div>
                        </li>
                        <li class="list-group-item col-12 p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-muted" style="font-size: 14px;">Subtotal (1 tiket)</h5>

                                <h5 style="font-size: 14px;">Rp. 79.000</h5>
                            </div>
                        </li>
                        <li class="list-group-item col-12 p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5  class="text-bold" style="font-size: 14px;"><b>Grand Total</b></h5>

                                <h5 style="font-size: 14px;"><b>Rp. 79.000</b></h5>
                            </div>
                        </li>
                        <li class="list-group-item col-12 p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5  class="text-bold" style="font-size: 14px;"><b>Metode Pembayaran:</b></h5>

                                <h5 style="font-size: 14px;"><b id="paymentMethod"></b></h5>
                            </div>
                        </li>
                        <li class="list-group-item col-12 p-3">
                            <div class="d-flex flex-column justify-content-between">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 1px solid black;">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Saya setuju dengan Syarat dan Ketentuan yang berlaku di EventKuy
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="border: 1px solid black;">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Saya setuju dengan Kebijakan Privasi & Pemrosesan data di EventKuy
                                </label>
                                </div>

                                <a href="/Bayar" class="btn btn-secondary mt-3" >Bayar Sekarang</a> <!-- style="background-color: #ff29db;color:white;" -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.choosePayment').click(function() {
                var paymentMethod = $(this).data('payment');
                $('#paymentMethod').text(paymentMethod);
            });
        });

        $('#flexCheckDefault, #flexCheckChecked').change(function() {
            if ($('#flexCheckDefault').is(':checked') && $('#flexCheckChecked').is(':checked') && $('#paymentMethod').text() !== '') {
                $('a:contains("Bayar Sekarang")').removeClass('btn-secondary').addClass('btn-primary').css('background-color', '#ff29db');
            } else {
                $('a:contains("Bayar Sekarang")').removeClass('btn-primary').addClass('btn-secondary').css('background-color', '');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>