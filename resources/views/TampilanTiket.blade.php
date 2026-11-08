<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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


    <div class="container p-3">
        <div class="card w-100">
            <div class="row g-0">

                <div class="col-12 col-md-8">
                    <ul class="list-group list-group-flush w-100">

                        <li class="list-group-item py-3">
                            <h5 class="card-title">Besok Konser</h5>
                            <p class="card-text mb-0">02 May 2026, 14:00 - 23:00</p>
                            <p class="card-text text-muted">Stadion Gelora Bung Karno, Jakarta</p>
                        </li>

                        <li class="list-group-item py-3 pb-0">
                            <p class="mb-0 text-muted">Ticket Type</p>
                            <h4>[VIP] VIP Ticket</h4>
                            <p class="mb-0 text-muted">Customer Name</p>
                            <h4>John Doe</h4>
                            <p class="mb-0 text-muted">Price</p>
                            <h4>Rp 500.000</h4>

                            <div class="py-5"></div>

                            <p>Disclaimer: This is a digital ticket. Please present it at the entrance.</p>
                            
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4">
                    <div style="background-color: #f8f9fa; border-left: 1px solid #dee2e6; height: 100%;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h5 class="card-title text-center">EventKuy</h5>
                            <img src="/img/qr.webp" alt="" srcset="">
                            
                            <div class="d-flex justify-content-between gap-5 px-5">
                                <div class="d-block">
                                    <p class="mb-0 text-muted">Entrant code</p>
                                    <h6>1GV-87H-39V</h6>
                                </div>
                                <div class="d-block">
                                    <p class="mb-0 text-muted">Order No.</p>
                                    <h6>C123456789</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="w-100 mt-3 p-3">
            <h4>Refund Disclaimer</h4>
            <ul>
                <li>Refunds are only available for events that have been canceled or postponed.</li>
                <li>Refund requests must be submitted within 7 days of the event's cancellation or postponement announcement.</li>
                <li>Refunds will be processed using the original payment method.</li>
                <li>Processing time for refunds may take up to 14 business days.</li>
                <li>EventKuy reserves the right to deny refund requests that do not meet the above criteria.</li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>