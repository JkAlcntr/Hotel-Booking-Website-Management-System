<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Margarette - Rooms</title>

    <?php require('inc/links.php'); ?>

</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h6 class="fw-bold text-center">FIND</h6>
        <h1 class="fw-bold h-font text-center mb-1">ROOMS & SUITES</h1>
        <div class="h-line bg-dark"></div>
    </div>

    <!--FilterDropdownNav-->

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5> 
                                <label class="form-label">Check-In</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-Out</label>
                                <input type="date" class="form-control shadow-none">                                
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1"> 
                                    <label class="form-check-label" for="f1">Facility One</label>                             
                                </div> 
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1"> 
                                    <label class="form-check-label" for="f2">Facility Two</label>                             
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1"> 
                                    <label class="form-check-label" for="f3">Facility Three</label>                             
                                </div>                                       
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none mb-3">
                                    </div>          
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none mb-3">
                                    </div>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">

                <div class="card mb-4 border-o shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/superior.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">SUPERIOR ROOM</h5>
                            <div class="features mb-3">
                                <h6 class="mb-3">Room Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Beds: King or Queen
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room size: 37 sq m / 398 sq ft
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Occupancy: Max of 6 guest (Adult & Children)
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    View: City view
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-3">Facilities</h6>
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
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center ">
                            <div class="card-body">
                                <h6 class="mb-4">Rates from ₱8,200 per night</h6>
                                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">view More</a> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-o shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/deluxe.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">DELUXE ROOM</h5>
                            <div class="features mb-3">
                                <h6 class="mb-3">Room Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Beds: King or Twin
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room size: 37 - 41 sq m / 398 - 441 sq ft
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Occupancy: Max of 6 guest (Adult & Children)
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    View: City view
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-3">Facilities</h6>
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
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card-body">
                                <h6 class="mb-4">Rates from ₱9,000 per night</h6>
                                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">view More</a> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-o shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/premier.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">PREMIER SUITE</h5>
                            <div class="features mb-3">
                                <h6 class="mb-3">Room Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Beds: King
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room size: 88 sq m / 947 sq ft
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Occupancy: Max of 6 guest (Adult & Children)
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    View: City view and Garden view
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-3">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Powder room
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    living room
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    49-inch TV
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    In-room safe
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card-body">
                                <h6 class="mb-4">Rates from ₱14,000 per nigh</h6>
                                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">view More</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>        
    </div>


    <?php require('inc/footer.php'); ?>
    
</body>
</html>