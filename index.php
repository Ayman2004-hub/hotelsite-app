<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LuxeStay</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <style>
        .section-2 {
            position: relative;
            padding-bottom: 0.5rem;
            text-decoration: none;
            color: #ffffff;
            font-family: 'Playfair Display', serif;
            font-weight: 700; /* Bold for headings */
        }

        .section-2::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%; /* Full width by default */
            height: 2px;
            background-color: #ffffff;
            transition: width 0.3s ease; /* This can be kept or removed */
        }

        .section::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%; /* Full width by default */
            height: 2px;
            background-color: #000;
            transition: width 0.3s ease; /* This can be kept or removed */
        }

        .btn-light {
            border-radius: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-weight: bold;
        }

        .btn-light:hover {
            background-color: #000000;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        iframe {
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

    </style>
</head>
<body>

<div class="header">
    <div class="container-fluid">
        <div class="row bg-dark bg-opacity-50 p-4 fixed-top">
            <div class="col-2 d-flex justify-content-start align-items-center">
                <h2 class="text-white">LuxeStay</h2>
            </div>
            <div class="col-9">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button class="navbar-toggler ms-auto bg-white" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav d-flex justify-content-around align-items-center w-100">
                                <li class="nav-item fs-6 mt-2">
                                    <a class="nav-link text-opacity-100 text-white" aria-current="page"
                                       href="#">HOME</a>
                                </li>
                                <li class="nav-item fs-6 mt-2">
                                    <a class="nav-link text-opacity-100 text-white" href="#season">SEASON</a>
                                </li>
                                <li class="nav-item fs-6 mt-2">
                                    <a class="nav-link text-opacity-100 text-white" href="#rooms">ROOMS</a>
                                </li>
                                <li class="nav-item fs-6 mt-2">
                                    <a class="nav-link text-opacity-100 text-white" href="#location">LOCATION</a>
                                </li>
                                <li class="nav-item fs-6 mt-2">
                                    <a class="nav-link text-opacity-100 text-white" href="#activities">ACTIVITIES</a>
                                </li>
                                <li class="nav-item fs-6 mt-2">
                                    <a class="nav-link text-opacity-100 text-white" href="#restaurant">RESTAURANT</a>
                                </li>
                                <li class="nav-item fs-6 mt-2">
                                    <a class="nav-link text-opacity-100 text-white" href="#contact">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="main">
    <!-- start-carousel -->
    <div class="container-fluid bg-dark">
        <div class="row no-gutters">
            <div class="col-xs-12 p-0 position-relative">
                <div id="carouselExampleDark" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="https://www.welcome-hotels.com/site/assets/files/84580/welcome_hotel_darmstadt_musterziimmer_1.2560x1600.jpg"
                                 class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://www.primalstrength.com/cdn/shop/files/gymdesign_render_Two_collumn_grid_cb1b5850-fa8e-4a7b-a2b3-190c2e45facd.jpg?v=1680719688&width=1500"
                                 class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://static11.com-hotel.com/uploads/hotel/304387/photo/hotel-sb-bcn-events-4-sup_15805635281.jpg"
                                 class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="position-absolute d-flex justify-content-center align-items-center">
                    <div class="cont">
                        <h5 class="text-opacity-100 typewriter">Discover Your Perfect Escape</h5>
                        <h2 class="p-2 text-opacity-100 typewriter mt-2">Experience Unmatched Comfort and Elegance<br>in
                            the
                            Heart of Luxury</h2>
                        <div class="card-body d-flex justify-content-center pr-3 mt-2">
                            <button type="button" class="btn btn-dark text-white w-25 p-3 rounded-pill">Get Started
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end-carousel -->

    <div class="container">
        <div class="row">
            <div class="col-12 p-5">

            </div>
        </div>
    </div>

    <!-- start-section-season -->
    <div class="container-fluid py-5 bg-dark" id="season">
        <div class="row align-items-center">
            <!-- Left Column (Image) -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="img-fluid rounded shadow-lg">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/19/a2/e4/33/the-winery-hotel-at-autumn.jpg"
                         class="w-100 h-auto rounded" alt="Autumn at Westinhotel">
                </div>
            </div>
            <!-- Right Column (Text & Button) -->
            <div class="col-lg-6">
                <h2 class="display-4 text-white mb-3">Enjoy the Autumn Vibes at Westinhotel!</h2>
                <p class="lead text-white mb-4">Autumn is the perfect season to get away. At Westinhotel, you'll find
                    the ideal place to relax and enjoy the crisp air and beautiful autumn colors. Whether you want to
                    walk in nature, explore a city, or simply unwind, we offer a warm and comfortable atmosphere. Book
                    your autumn getaway today!</p>
                <a href="#" class="btn btn-lg btn-light text-dark px-4 py-2 rounded-pill shadow-lg">Book Your Autumn
                    Getaway
                    Now</a>
            </div>
        </div>
    </div>
    <!-- end-section-season -->

    <div class="container">
        <div class="row">
            <div class="col-12 p-3">

            </div>
        </div>
    </div>

    <!-- start-section-Rooms -->
    <section class="container py-5" id="rooms">
        <!-- Title Section -->
        <div class="row text-center mb-5">
            <div class="col-12">
                <h1 class="section-title display-4 text-uppercase fw-bold">Our Rooms</h1>
                <p class="lead text-muted">Explore our luxurious rooms designed for comfort and elegance.</p>
            </div>
        </div>

        <!-- Promotion Section: Discount Offer on a Room -->
        <div class="row text-center mb-5">
            <div class="col-12">
                <!-- Offer Card -->
                <div class="offer-card p-4 bg-danger text-white rounded-3 shadow-lg">
                    <h2 class="display-4 fw-bold">🎉 Special Offer! 🎉</h2>
                    <p class="fs-4"><strong>Ivory Suite</strong> now available for only <span
                                class="text-decoration-line-through">€160</span> <strong>€120</strong> per night!</p>
                    <p class="fs-5">That's a whopping <strong>25% discount</strong> off the regular price! 🏨</p>
                    <p class="lead">This limited-time offer is available until <strong>November 30th</strong>, so don’t
                        wait! ⏰</p>
                </div>
            </div>
        </div>

        <!-- Room 1: Ivory Suite -->
        <div class="row room-section align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://cdn.prod.website-files.com/5c6d6c45eaa55f57c6367749/65045f093c166fdddb4a94a5_x-65045f0266217.webp"
                     class="img-fluid rounded-3 shadow" alt="Ivory Suite">
            </div>
            <div class="col-lg-6">
                <h2 class="h1 mb-4">Ivory Suite</h2>
                <ul class="list-unstyled text-muted fs-5">
                    <li class="mb-3"><i class="bi bi-palette-fill me-2 text-dark"></i><strong>Design:</strong> Crisp,
                        minimalist design with soft white walls and light wood accents.
                    </li>
                    <li class="mb-3"><i class="bi bi-brightness-high-fill me-2 text-dark"></i><strong>Lighting:</strong>
                        Natural light floods through large windows, complemented by soft, warm LED lighting.
                    </li>
                    <li class="mb-3"><i class="bi bi-lamp me-2"></i><strong>Furniture:</strong> Scandinavian-inspired
                        furniture in pale wood and cream-colored upholstery.
                    </li>
                    <li class="mb-3"><i class="bi bi-window me-2 text-dark"></i><strong>Features:</strong>
                        Floor-to-ceiling sheer curtains that diffuse sunlight gently across the room.
                    </li>
                    <li class="mb-3"><i class="bi bi-droplet-half me-2 text-dark"></i><strong>Bathroom:</strong>
                        Spa-like en-suite bathroom with white marble finishes and a glass-enclosed rain shower.
                    </li>
                </ul>
            </div>
        </div>

        <!-- Room 2: Obsidian Loft -->
        <div class="row room-section align-items-center mb-5 flex-lg-row-reverse">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/034/861/172/original/3d-interior-of-dark-bedroom-black-walls-luxury-room-apartment-hotel-idea-for-design-large-bed-and-plants-panoramic-windows-with-city-view-video.jpg"
                     class="img-fluid rounded-3 shadow" alt="Obsidian Loft">
            </div>
            <div class="col-lg-6">
                <h2 class="h1 mb-4">Obsidian Loft</h2>
                <ul class="list-unstyled text-muted fs-5">
                    <li class="mb-3"><i class="bi bi-building me-2 text-dark"></i><strong>Design:</strong>
                        Industrial-inspired loft with exposed black brick walls and sleek metal fixtures.
                    </li>
                    <li class="mb-3"><i class="bi bi-lightbulb-fill me-2 text-dark"></i><strong>Lighting:</strong>
                        Pendant lights with exposed bulbs, creating a moody atmosphere.
                    </li>
                    <li class="mb-3"><i class="bi bi-lamp me-2"></i><strong>Furniture:</strong> Black leather sofa,
                        reclaimed wood coffee table, and minimalist bed frame.
                    </li>
                    <li class="mb-3"><i class="bi bi-app-indicator me-2 text-dark"></i><strong>Features:</strong>
                        Open-concept layout with a separate lounge area and large workspace.
                    </li>
                    <li class="mb-3"><i class="bi bi-droplet-fill me-2 text-dark"></i><strong>Bathroom:</strong> Luxe
                        bathroom with a freestanding bathtub, matte black finishes, and a rainfall shower.
                    </li>
                </ul>
            </div>
        </div>

        <!-- Room 3: Noir Deluxe Room -->
        <div class="row room-section align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://img.pikbest.com/wp/202346/luxury-hotel-bedroom-decor-modern-black-suite-in-a-and-resort-rendered-3d_9622423.jpg!sw800"
                     class="img-fluid rounded-3 shadow" alt="Noir Deluxe Room">
            </div>
            <div class="col-lg-6">
                <h2 class="h1 mb-4">Noir Deluxe Room</h2>
                <ul class="list-unstyled text-muted fs-5">
                    <li class="mb-3"><i class="bi bi-brush-fill me-2 text-dark"></i><strong>Design:</strong> Deep, moody
                        tones with textured black wallpaper and dark wood flooring.
                    </li>
                    <li class="mb-3"><i class="bi bi-lightbulb me-2 text-dark"></i><strong>Lighting:</strong> Adjustable
                        dim lights with a warm glow to enhance the cozy ambiance.
                    </li>
                    <li class="mb-3"><i class="bi bi-lamp me-2"></i><strong>Furniture:</strong> Plush, dark grey velvet
                        armchairs and a king-sized bed with a black headboard.
                    </li>
                    <li class="mb-3"><i class="bi bi-tv-fill me-2 text-dark"></i><strong>Features:</strong> A large,
                        wall-mounted flat-screen TV with a hidden sound system.
                    </li>
                    <li class="mb-3"><i class="bi bi-droplet-fill me-2 text-dark"></i><strong>Bathroom:</strong> Elegant
                        bathroom with black granite countertops and a deep soaking tub.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end-section-Rooms -->


    <!--  start-section-Location  -->
    <div class="container-fluid" id="location">
        <div class="row bg-dark">
            <div class="col-12 p-4 d-flex justify-content-center align-items-center fs-3">
                <a class="section-2" href="#">LOCATION</a>
            </div>
            <div class="col-12 d-flex flex-column justify-content-start align-items-center p-3 text-white">
                <div class="card bg-light text-white shadow-lg" style="border-radius: 20px;">
                    <div class="card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2452.468409063926!2d4.317085776522056!3d52.071202471946975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b6d2706c57d3%3A0xb5c3a03e1587c780!2sThe%20Social%20Hub%20The%20Hague!5e0!3m2!1sen!2snl!4v1728551520671!5m2!1sen!2snl"
                                width="1245" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="card-text text-dark text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-map" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/>
                            </svg>
                            The Social Hub, The Hague<br>
                            Address: Hoefkade 9, 2526 BN The Hague, Netherlands
                        </p>
                        <p class="card-text text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-bus-front" viewBox="0 0 16 16">
                                <path d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0m8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9s3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44 44 0 0 0 8 4m0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44 44 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43 43 0 0 0 8 3"/>
                                <path d="M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A44 44 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2zM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A43 43 0 0 1 8 1"/>
                            </svg>
                            Located in the heart of The Hague, close to public transport, and just a short
                            walk from popular attractions like the Peace Palace and Binnenhof.
                        </p>
                        <a href="https://www.google.com/maps/dir//The+Social+Hub,+The+Hague" target="_blank"
                           class="btn btn-dark mt-2 w-100">
                            Get Directions
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--  end-section-Location   -->

    <!-- start-section-activities -->
    <div class="container" id="activities">
        <div class="row text-center mb-2">
            <div class="col-12 p-5">
                <h1 class="section-title display-4 text-uppercase fw-bold">Our Activities</h1>
                <p class="lead text-muted">Discover a range of activities designed for relaxation, adventure, and
                    unforgettable experiences.</p>
            </div>
        </div>
        <div class="row">
            <!-- Activity Card: Swimming Pool -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card bg-dark text-white">
                    <img src="https://colossal-caracara.transforms.svdcdn.com/staging/blog/kid-friendly-hotel-activities.jpg?w=1472&h=828&auto=compress%2Cformat&fit=clip&dm=1683639504&s=b32096d5bfc9637568424e9e27127cbb"
                         class="card-img-top" alt="Swimming Pool" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Swimming Pool</h5>
                    </div>
                </div>
            </div>

            <!-- Activity Card: Sunset Yoga -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card bg-dark text-white">
                    <img src="https://digitalguest.com/wp-content/uploads/2023/07/wellness-hotel-activities-for-the-guests-1024x576.jpg"
                         class="card-img-top" alt="Sunset Yoga" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Sunset Yoga</h5>
                    </div>
                </div>
            </div>

            <!-- Activity Card: Beach Bonfires -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card bg-dark text-white">
                    <img src="https://www.hotelcontractbeds.co.uk/media/4683/relaxing-by-the-pool.jpg"
                         class="card-img-top" alt="Beach Bonfires" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Beach Bonfires</h5>
                    </div>
                </div>
            </div>

            <!-- Activity Card: Culinary Tours -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card bg-dark text-white">
                    <img src="https://www.hotelmontecarlo.net/media/pages/27-Nsj1-20210804110634.jpg"
                         class="card-img-top" alt="Culinary Tours" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Culinary Tours</h5>
                    </div>
                </div>
            </div>

            <!-- Activity Card: Guided Nature -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card bg-dark text-white">
                    <img src="https://webrezpro.com/wp-content/uploads/2023/08/HotelActivities-SegwayTour.jpg"
                         class="card-img-top" alt="Guided Nature" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Guided Nature</h5>
                    </div>
                </div>
            </div>

            <!-- Activity Card: Treasure Hunts -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card bg-dark text-white">
                    <img src="https://www.zafirohotels.com/content/imgsxml/galerias/panel_galeriatexto/1/thumb-zafirotropic-barcopirata-2892-low999.jpg"
                         class="card-img-top" alt="Treasure Hunts" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Treasure Hunts</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end-section-activities -->

    <!-- start-section-restaurant -->
    <div class="container-fluid p-5 bg-dark my-5" id="restaurant">
        <div class="row justify-content-center text-center mb-4">
            <h1 class="section-title display-4 text-uppercase fw-bold text-white">Our Restaurant</h1>
            <p class="lead text-white">Enjoy a delightful dining experience with our carefully curated menu and ambient
                setting.</p>
        </div>

        <!-- Bootstrap Carousel -->
        <div id="restaurantCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded shadow-lg" style="height: 400px;">
                <!-- Set height for carousel container -->

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="https://chenabgourmet.b-cdn.net/wp-content/uploads/2021/09/Blog-Designs.png"
                         class="d-block w-100" alt="Gourmet Dish" style="height: 400px; object-fit: cover;">
                    <!-- Set height for image -->
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-light">Gourmet Cuisine</h3>
                        <p class="text-light">Experience the finest ingredients and a luxurious dining experience.</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://images.stockcake.com/public/9/a/c/9acb0d84-1741-4a3a-a7b9-4f4c45193df7_large/elegant-dining-ambiance-stockcake.jpg"
                         class="d-block w-100" alt="Elegant Ambiance" style="height: 400px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-light">Elegant Ambiance</h3>
                        <p class="text-light">Indulge in an atmosphere that is designed for your comfort and
                            relaxation.</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="https://www.priveober.nl/wp-content/uploads/2015/02/Ober-inhuren.jpg"
                         class="d-block w-100" alt="Exceptional Service" style="height: 400px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-light">Exceptional Service</h3>
                        <p class="text-light">Our team is dedicated to providing you with a seamless dining
                            experience.</p>
                    </div>
                </div>

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#restaurantCarousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#restaurantCarousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- end-section-restaurant -->

    <!-- start-section-contact -->
    <!-- Contact 3 - Bootstrap Brain Component -->
    <div class="container" id="contact">
        <div class="row justify-content-center text-center">
            <h1 class="section-title display-4 text-uppercase fw-bold">CONTACT US</h1>
            <p class="lead">We'd love to hear from you! Whether you're looking to book a room, inquire about our menu,
                or simply have a question, we're here to help.</p>
        </div>
    </div>
    <section class="py-3 py-md-5">
        <div class="container bg-dark">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-md-center">
                <div class="col-12 col-lg-6">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="h1 mb-3 text-white">Get in touch</h2>
                            <p class="lead fs-4 text-secondary mb-5">We're always on the lookout to work with new
                                clients. If you're interested in working with us, please get in touch in one of the
                                following ways.</p>
                            <div class="d-flex mb-5">
                                <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                         class="bi bi-geo text-white" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-3 text-white">Address</h4>
                                    <address class="mb-0 text-secondary">8014 Edith Blvd NE, Albuquerque, New York,
                                        United States
                                    </address>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-12 col-sm-6">
                                    <div class="d-flex mb-5 mb-sm-0">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                 fill="currentColor" class="bi bi-telephone-outbound text-white"
                                                 viewBox="0 0 16 16">
                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="mb-3 text-white">Phone</h4>
                                            <p class="mb-0">
                                                <a class="link-secondary text-decoration-none" href="tel:+15057922430">(505)
                                                    792-2430</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="d-flex mb-0">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                 fill="currentColor" class="bi bi-envelope-at text-white"
                                                 viewBox="0 0 16 16">
                                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                                                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="mb-3 text-white">E-Mail</h4>
                                            <p class="mb-0">
                                                <a class="link-secondary text-decoration-none"
                                                   href="mailto:demo@yourdomain.com">demo@yourdomain.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                         class="bi bi-alarm text-white" viewBox="0 0 16 16">
                                        <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                                        <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-3 text-white">Opening Hours</h4>
                                    <div class="d-flex mb-1">
                                        <p class="text-secondary fw-bold mb-0 me-5">Mon - Fri</p>
                                        <p class="text-secondary mb-0">9am - 5pm</p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="text-secondary fw-bold mb-0 me-5">Sat - Sun</p>
                                        <p class="text-secondary mb-0">9am - 2pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="bg-dark rounded shadow-sm overflow-hidden">

                        <form action="#!">
                            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                                <div class="col-12">
                                    <label for="fullname" class="form-label text-white">Full Name <span
                                                class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" value=""
                                           required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="email" class="form-label text-white">Email <span
                                                class="text-danger">*</span></label>
                                    <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-envelope" viewBox="0 0 16 16">
                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                  </span>
                                        <input type="email" class="form-control" id="email" name="email" value=""
                                               required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="phone" class="form-label text-white">Phone Number</label>
                                    <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-telephone" viewBox="0 0 16 16">
                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                  </span>
                                        <input type="tel" class="form-control" id="phone" name="phone" value="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label text-white">Subject <span
                                                class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="subject" name="subject" value=""
                                           required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label text-white">Message <span
                                                class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" name="message" rows="3"
                                              required></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-light text-dark btn-lg" type="submit">Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end-section-contact -->
</div>

</body>
</html>
