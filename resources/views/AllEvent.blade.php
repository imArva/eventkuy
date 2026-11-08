<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Event</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick-theme.css">

    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@v2.0.1/slick/slick.min.js"></script>
    <style>
        /* the slides */
        .slick-slide {
            margin: 0 27px;
        }

        /* the parent */
        .slick-list {
            margin: 0 -27px;
        }

        .slick-prev::before,
        .slick-next::before {
            color: rgba(0, 0, 0, 0.2);
            font-size: 2.5rem;
        }

        .slick-prev,
        .slick-next {
            width: 2.5rem;
            height: 2.5rem;
            z-index: 2;
        }

        .slick-list {
            width: 95%;
            margin: 0 auto;
        }

        .slick-prev {
            left: 0;
        }

        .slick-next {
            right: 0;
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


  <main class="container-fluid px-5">
        <div class="row mb-2">
            <div class="col">
                <h1>All Event</h1>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-12 col-md-3">
                <a href="/CardClick" class="card h-100 text-decoration-none">
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
                <a href="/CardClick" class="card h-100 text-decoration-none">
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
                <a href="/CardClick" class="card h-100 text-decoration-none">
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
                <a href="/CardClick" class="card h-100 text-decoration-none">
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
                <a href="/CardClick" class="card h-100 text-decoration-none">
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
                <a href="/CardClick" class="card h-100 text-decoration-none">
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
                <a href="/CardClick" class="card h-100 text-decoration-none">
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
                <a href="/CardClick" class="card h-100 text-decoration-none">
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

<script>
        $(function() {
            $('.recommended-event-carousel').slick({
                dots: false,
                arrows: true,
                slidesToShow: 4,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    },
                ]
            });
            $('.event-terdekat-carousel').slick({
                dots: false,
                arrows: true,
                slidesToShow: 4,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    },
                ]
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  

</body>
</html>