<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HistoryUser</title>

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


    <div class="container py-3">
        <h4>History User</h4>
        <div class="accordion custom-accordion mb-5" id="accordionPanelsStayOpenExample">              
            <!-- Metode Pembayaran -->
            <div class="accordion-item mb-3">   
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                    Besok Konser - 02 May 2026, 14:00 - 23:00
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">Kategori Tiket</h5>
                            <p class="mb-0">VIP Ticket</p>
                            <p class="mb-0">Quantity:1</p>
                            <p class="mb-0">Price: Rp 500.000</p>
                            <p class="mb-0">Payment Method: Credit Card</p>
                            <p class="mb-0">Order Date: 01 May 2026</p>
                            <div class="d-flex gap-3">
                                        <a class="text-primary text-decoration-none" href="/TampilanTiket">my ticket</a>
                                    </div>                            
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>
</html>