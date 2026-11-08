<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    
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

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://assets.loket.com/images/ss/1793172547_WZh70P.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://store.oliviarodrigo.com/cdn/shop/files/Static_LNPR-Newsroom_1720x720_OliviaRodrigo_2026_National.jpg?v=1777545417&width=1600" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://assets.loket.com/images/ss/1791789351_f0wcxi.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <main class="container-fluid px-5 mt-4 mb-5">
        <div class="row mb-2">
            <div class="col">
                <h1>Recommended Event</h1>
            </div>
        </div>
        <div class="d-flex gap-x-4 recommended-event-carousel">
            

        
            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
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
            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
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
            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
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
            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
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
            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
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
            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
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

    </main>

    <main class="container-fluid px-5 mb-5">
        <div class="row mb-2">
            <div class="col">
                <h1>Event Terdekat</h1>
            </div>
        </div>
        <div class="d-flex event-terdekat-carousel">

            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
                <img src="https://assets.loket.com/neo/production/images/banner/20260905133216_6a9bb770a1705.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">DWP 2026</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                </div>
                <div class="card-footer">
                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                    <h5 class="card-title">Rp850.000</h5>
                </div>
            </a>
            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
                <img src="https://assets.loket.com/neo/production/images/banner/20260905133216_6a9bb770a1705.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">DWP 2026</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                </div>
                <div class="card-footer">
                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                    <h5 class="card-title">Rp850.000</h5>
                </div>
            </a>
            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
                <img src="https://assets.loket.com/neo/production/images/banner/20260905133216_6a9bb770a1705.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">DWP 2026</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                </div>
                <div class="card-footer">
                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                    <h5 class="card-title">Rp850.000</h5>
                </div>
            </a>
            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
                <img src="https://assets.loket.com/neo/production/images/banner/20260905133216_6a9bb770a1705.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">DWP 2026</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                </div>
                <div class="card-footer">
                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                    <h5 class="card-title">Rp850.000</h5>
                </div>
            </a>
            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
                <img src="https://assets.loket.com/neo/production/images/banner/20260905133216_6a9bb770a1705.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">DWP 2026</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                </div>
                <div class="card-footer">
                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                    <h5 class="card-title">Rp850.000</h5>
                </div>
            </a>
            <a href="/CardClick" class="card text-decoration-none" style="width: 18rem;">
                <img src="https://assets.loket.com/neo/production/images/banner/20260905133216_6a9bb770a1705.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">DWP 2026</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, vitae?</p>
                </div>
                <div class="card-footer">
                    <p class="text-body-secondary mb-0">Mulai Dari</p>
                    <h5 class="card-title">Rp850.000</h5>
                </div>
            </a>

        </div>
    </main>

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

    <div class="container">
        <footer class="py-5">
            <div class="row justify-content-between"> 
                <div class="col-6 col-md-2 mb-3"> 
                    <h5>Section</h5> 
                    <ul class="nav flex-column"> 
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                        </li> 
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                        </li> 
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                        </li> 
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                        </li> 
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">About</a>
                        </li> 
                    </ul> 
                </div>
                <div class="col-md-5 offset-md-1 mb-3"> 
                    <form> 
                        <h5>Subscribe to our newsletter</h5> 
                        <p>Monthly digest of what's new and exciting from us.</p> 
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2"> 
                            <label for="newsletter1" class="visually-hidden">Email address</label> 
                            <input id="newsletter1" type="email" class="form-control" placeholder="Email address"> 
                            <button class="btn btn-primary" type="button">Subscribe</button> 
                        </div> 
                    </form> 
                </div> 
            </div> 
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top"> 
                <p>© 2026 EventKuy, Inc. All rights reserved.</p> 
                <ul class="list-unstyled d-flex"> 
                    <li class="ms-3">
                        <a class="link-body-emphasis" href="#" aria-label="Instagram">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram"></use>
                            </svg>
                        </a>
                    </li> 
                    <li class="ms-3">
                        <a class="link-body-emphasis" href="#" aria-label="Facebook">
                            <svg class="bi" width="24" height="24" aria-hidden="true">
                                <use xlink:href="#facebook"></use>
                            </svg>
                        </a>
                    </li> 
                </ul> 
            </div> 
        </footer> 
    </div>



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