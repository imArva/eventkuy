<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Kuy</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick-theme.css">

    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick.min.js"></script>

    <style>
        /* ===== HERO ===== */
        .hero-wrap { position: relative; }

        .hero {
            position: relative;
            color: #fff;
            padding: 2rem 0 5.5rem;          /* ruang bawah untuk poster yang menimpa (mobile) */
        }
        .hero-bg {
            position: absolute;
            inset: 0;
            overflow: hidden;                /* blur tidak bocor keluar */
            background: #222;
        }
        .hero-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: blur(10px);
            transform: scale(1.1);           /* tutup tepi blur */
        }
        .hero-bg::after {                    /* overlay gelap supaya teks terbaca */
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, .45);
        }
        .hero-info { position: relative; z-index: 1; }
        .hero-info h1 { font-size: clamp(1.6rem, 5vw, 2.5rem); }
        .hero-info p { margin: 0; }
        .hero-info svg { flex-shrink: 0; }

        /* Poster: mobile = kartu yang menimpa bawah banner */
        .hero-poster {
            position: relative;
            z-index: 2;
            display: block;
            width: calc(100% - 2rem);
            max-width: 520px;
            margin: -4rem auto 0;
            border-radius: .75rem;
            box-shadow: 0 .5rem 1.25rem rgba(0, 0, 0, .3);
        }

        /* ===== BAR HARGA ===== */
        /* Mobile: menempel di bawah layar */
        .buy-bar {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1030;
            background: #fff;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, .12);
            padding: .75rem 1rem;
            padding-bottom: calc(.75rem + env(safe-area-inset-bottom, 0px));
        }
        .buy-bar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }
        .buy-bar p { font-size: .8rem; margin: 0; }
        .buy-bar h3 { font-size: 1.25rem; margin: 0; }
        body { padding-bottom: 5rem; }       /* supaya konten tidak tertutup bar */

        /* ===== DESKTOP ===== */
        @media (min-width: 992px) {
            body { padding-bottom: 0; }

            .hero {
                height: 320px;
                padding: 0;
                display: flex;
                align-items: center;
            }
            .hero-info { width: 55%; }

            /* poster menempel di dasar banner, sisi kanan */
            .hero-poster {
                position: absolute;
                bottom: 0;
                right: 10%;
                width: 30%;
                max-width: none;
                max-height: 100%;
                margin: 0;
                object-fit: cover;
                border-radius: .5rem .5rem 0 0;
                box-shadow: none;
            }

            .buy-bar {
                position: static;
                box-shadow: 0 2px 6px rgba(0, 0, 0, .1);
                padding: .75rem 0;
            }
            /* lebar & posisi disamakan dengan poster di atasnya */
            .buy-bar-inner {
                width: 30%;
                margin-left: auto;
                margin-right: 10%;
            }
        }

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


    <!-- HERO -->
    <div class="hero-wrap">
        <section class="hero">
            <div class="hero-bg">
                <img src="https://assets.loket.com/neo/production/images/banner/20260710180442_6a50d1ca9d9bd.jpeg" alt="">
            </div>

            <div class="container-fluid px-3 px-lg-5">
                <div class="hero-info ps-lg-5">
                    <h1 class="text-white mb-3">Event Kuy</h1>

                    <div class="d-flex align-items-start gap-2 my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <p class="text-white">ELDORADO SPORT &amp; CONVENTION HALL, BANDUNG, Bandung</p>
                    </div>
                    <div class="d-flex align-items-start gap-2 my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                        <p class="text-white">31 Okt 2026, 14:00 - 22:00 WIB</p>
                    </div>
                    <div class="d-flex align-items-start gap-2 my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.3 10a.7.7 0 0 1-.626-1.079L11.4 3a.7.7 0 0 1 1.198-.043L16.3 8.9a.7.7 0 0 1-.572 1.1Z"></path><rect x="3" y="14" width="7" height="7" rx="1"></rect><circle cx="17.5" cy="17.5" r="3.5"></circle></svg>
                        <p class="text-white">Konser • Musik • Rock</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Poster: desktop menempel di dasar banner (kanan), mobile jadi kartu di bawah banner -->
        <img src="https://assets.loket.com/neo/production/images/banner/20260710180442_6a50d1ca9d9bd.jpeg" class="hero-poster" alt="Poster Event Kuy">
    </div>

    <!-- HARGA + TOMBOL: desktop di bawah poster, mobile menempel di bawah layar -->
    <div class="buy-bar">
        <div class="buy-bar-inner">
            <div>
                <p>Harga Mulai Dari</p>
                <h3>Rp 150.000</h3>
            </div>
            <a href="/Pembayaran" class="btn btn-primary">Beli Tiket</a>
        </div>
    </div>

    <!-- KONTEN -->
    <div class="container-fluid px-3 px-lg-5 mt-4">
        <div class="row">
            <div class="col-12 col-lg-8">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="tab" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Deskripsi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="tab" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Ticket</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="tab" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">S&amp;K</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active py-3" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <p>Menginjak dua dekade,&nbsp;<strong>Titik Sadrah</strong> hadir sebagai pelabuhan terakhir bagi mereka yang lelah berlari dari kehilangan. Ini bukan sekadar panggung bagi&nbsp;<strong>for Revenge</strong>, melainkan ruang sakral yang merangkum gelombang emosi band,&nbsp;<strong>Archims Pribadi (Chimot)&nbsp;</strong>secara personal, dan&nbsp;<strong>for Revenge Family</strong>. Sebuah memoar bersama untuk berhenti memaksakan apa yang telah karam dan mulai berdamai dengan kenyataan yang mematahkan arah.</p>
                        <p>Kita semua pernah tersapu arus emosi liar hingga tenggelam di palung terendah. Bagi&nbsp;<strong>Chimot</strong>, palung itu adalah penerimaan pahit bahwa di tahun ke-20 ini ia tidak bisa lagi berdiri di balik set drumnya. Bagi&nbsp;<strong>for Revenge</strong>, ini adalah patah hati terdalam karena kehilangan detak jantung keseharian mereka. Sementara bagi&nbsp;<strong>for Revenge Family</strong>, ini adalah fase transisi berat untuk menerima keadaan dan formasi yang baru.</p>
                        <p>Namun, kita disadarkan bahwa di setiap arus deras, selalu ada muara yang menanti. Di titik ini kita belajar bahwa tidak semua hal harus dipaksa untuk tetap tinggal, karena beberapa hal justru baru menemukan makna sejatinya saat kita memilih ikhlas melepaskan. Di muara inilah kita bertemu untuk saling menguatkan.</p>
                        <p>Mari rayakan ruang penerimaan ini di Titik Sadrah<strong> Bandung, Eldorado Sport &amp; Convention Hall&nbsp;</strong>pada<strong> 31 Oktober 2026</strong>, dan Titik Sadrah&nbsp;<strong>Kuala Lumpur</strong>. Datanglah untuk melarung segala yang menyesakkan, biarkan semuanya usai di titik ini, dan pulanglah membawa awal yang baru.</p>
                    </div>
                    <div class="tab-pane fade py-3" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="accordion custom-accordion mb-5" id="accordionPanelsStayOpenExample">
                        
            <!-- Tiket keranjang -->
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Accordion Item #1
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">Tiket VIP</h5>
                            <p class="mb-0">Akses ke area VIP, termasuk minuman dan makanan ringan.</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <button class="btn btn-sm btn-primary ms-2 subBtn" data-quantityID="1">-</button>
                            <span class="text-muted quantity" data-quantityID="1">0</span>
                            <button class="btn btn-sm btn-primary addBtn" data-quantityID="1">+</button>
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Accordion Item #1
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">Tiket VIP</h5>
                            <p class="mb-0">Akses ke area VIP, termasuk minuman dan makanan ringan.</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <button class="btn btn-sm btn-primary ms-2 subBtn" data-quantityID="2">-</button>
                            <span class="text-muted quantity" data-quantityID="2">0</span>
                            <button class="btn btn-sm btn-primary addBtn" data-quantityID="2">+</button>
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
            
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Accordion Item #3
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">Tiket VIP</h5>
                            <p class="mb-0">Akses ke area VIP, termasuk minuman dan makanan ringan.</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <button class="btn btn-sm btn-primary ms-2 subBtn" data-quantityID="3">-</button>
                            <span class="text-muted quantity" data-quantityID="3">0</span>
                            <button class="btn btn-sm btn-primary addBtn" data-quantityID="3">+</button>
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
</div>
                    </div>
                    <div class="tab-pane fade py-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                        <p>This is some placeholder content the <strong>Contact tab’s</strong> associated content.</p>
                    </div>
                </div>
            </div>

            <!-- Kolom kanan (opsional, misal info tambahan / event lain) -->
            <div class="col-12 col-lg-4"></div>
        </div>
    </div>

    <script>
        // Fungsi untuk menambahkan tiket
        function addTicket(quantityID) {
            const quantityElement = document.querySelector(`.quantity[data-quantityID="${quantityID}"]`);
            let currentQuantity = parseInt(quantityElement.textContent);
            quantityElement.textContent = currentQuantity + 1;
        }

        // Fungsi untuk mengurangi tiket
        function subtractTicket(quantityID) {
            const quantityElement = document.querySelector(`.quantity[data-quantityID="${quantityID}"]`);
            let currentQuantity = parseInt(quantityElement.textContent);
            if (currentQuantity > 0) {
                quantityElement.textContent = currentQuantity - 1;
            }
        }

        // Menambahkan event listener ke tombol tambah
        document.querySelectorAll('.addBtn').forEach(button => {
            button.addEventListener('click', () => {
                const quantityID = button.getAttribute('data-quantityID');
                addTicket(quantityID);
            });
        });

        // Menambahkan event listener ke tombol kurang
        document.querySelectorAll('.subBtn').forEach(button => {
            button.addEventListener('click', () => {
                const quantityID = button.getAttribute('data-quantityID');
                subtractTicket(quantityID);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>