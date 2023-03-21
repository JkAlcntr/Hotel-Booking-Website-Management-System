<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Margarette</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>    
    <style>
        .availability-form {
            margin-top: -100px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 0px;
                padding: 0 35px;
            }

        }
    </style>
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <!-- Image Carousel -->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper mySwiper swiper-container">

            <div class="swiper-wrapper">

            <?php 
                $res = selectAll('carousel');
                while($row = mysqli_fetch_assoc($res))
                {
                $path = CAROUSEL_IMG_PATH;
                echo <<<data
                    <div class="swiper-slide">
                        <img src="$path$row[image]" class="w-100 d-block rounded">
                    </div>
                data;
                }
            ?>
        </div>
    </div>

    <!-- Check-in Form -->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Presidential Suite</h5>
                        <h6 class="mb-4">Rates from ₱120,000 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Room Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Beds: King Bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room size: 280 sq m / 3,014 sq ft
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Occupancy: 2 Adults and 2 Children
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            View: City View and Garden View
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Library
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            In-room Safe
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            40-inch TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wifi
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Room Ratings</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </span>
                        </div>
                        <div  class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book This Room</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">View This Room</a>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Presidential Suite</h5>
                        <h6 class="mb-4">Rates from ₱120,000 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Room Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Beds: King Bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room size: 280 sq m / 3,014 sq ft
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Occupancy: 2 Adults and 2 Children
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            View: City View and Garden View
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Library
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            In-room Safe
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            40-inch TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wifi
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Room Ratings</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </span>
                        </div>
                        <div  class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book This Room</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">View This Room</a>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Presidential Suite</h5>
                        <h6 class="mb-4">Rates from ₱120,000 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Room Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Beds: King Bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room size: 280 sq m / 3,014 sq ft
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Occupancy: 2 Adults and 2 Children
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            View: City View and Garden View
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Library
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            In-room Safe
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            40-inch TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wifi
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Room Ratings</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </span>
                        </div>
                        <div  class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book This Room</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">View This Room</a>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="room.php" class="btn btn-sm btn-outline-dark rounded-50 fw-bold shadow-none">View All Hotel Margarette Offers</a>
            </div>
        </div>
    </div>

    <!-- Hotel Facilities -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/spa.svg" width="80px">
                <h5 class="mt-3">The Spa</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/exercise.svg" width="80px">
                <h5 class="mt-3">Fitness Centre</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/pool.svg" width="80px">
                <h5 class="mt-3">The Pool</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/dining.svg" width="80px">
                <h5 class="mt-3">Dining</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/bar.svg" width="80px">
                <h5 class="mt-3">The Bar</h5>
            </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-50 fw-bold shadow-none">View More</a>
                </div>    
        </div>
    </div>

    <!-- Ratings -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR CUSTOMERS TESTIMONIAL</h2>

    <div class="container mt-5">
        <div class="swiper swiper-ratings">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/person-circle.svg" width="30px">
                        <h6 class="m-0 ms-2">Asyong Aksaya</h6>
                    </div>
                    <p>
                        Pagawa nalang ng paragraph dine palagyan nalang ako para sa rating ng hotel natin kunwari,
                        ganon lang dito sa testimonial part.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/person-circle.svg" width="30px">
                        <h6 class="m-0 ms-2">Bogart Batumbakal</h6>
                    </div>
                    <p>
                        Pagawa nalang ng paragraph dine palagyan nalang ako para sa rating ng hotel natin kunwari,
                        ganon lang dito sa testimonial part.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/person-circle.svg" width="30px">
                        <h6 class="m-0 ms-2">Kapt. Niño Barzaga</h6>
                    </div>
                    <p>
                        Pagawa nalang ng paragraph dine palagyan nalang ako para sa rating ng hotel natin kunwari,
                        ganon lang dito sa testimonial part.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/person-circle.svg" width="30px">
                        <h6 class="m-0 ms-2">Batman</h6>
                    </div>
                    <p>
                        Pagawa nalang ng paragraph dine palagyan nalang ako para sa rating ng hotel natin kunwari,
                        ganon lang dito sa testimonial part.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="about.php" class="btn btn-sm btn-outline-dark rounded-50 fw-bold shadow-none">Know More</a>
        </div> 
    </div>

    <!-- Contact Us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: <?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?>
                    </a>
                    <br>
                    <?php
                        if($contact_r['pn2']!=''){
                            echo<<<data
                                <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
                                    <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
                                </a>
                            data;
                        }
                    ?>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <?php 
                        if($contact_r['fb']!=''){
                            echo<<<data
                                <a href="$contact_r[fb]" class="d-inline-block mb-3">
                                    <span class="badge bg-light text-dark fs-6 p-2">
                                    <i class="bi bi-facebook" me-1></i> Facebook
                                    </span>
                                </a>
                                <br>
                            data;
                        }
                    ?>
                    <a href="<?php echo $contact_r['ig']?>" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram" me-1></i> Instagram
                        </span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['twt']?>" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter" me-1></i> Twitter
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>

 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->

 <script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
    });

    var swiper = new Swiper(".swiper-ratings", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoint:{
            320:{
                slidesPerView: 1,
            },
            640:{
                slidesPerView: 1,
            },
            768:{
                slidesPerView: 2,
            },
            1024:{
                slidesPerView: 3,
            },
        },
    });
 </script>    
</body>
</html>