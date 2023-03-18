<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Margarette - Contact Us</title>

    <?php require('inc/links.php'); ?>

</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h6 class="fw-bold text-center">GET IN TOUCH</h6>
        <h1 class="fw-bold h-font text-center mb-1">CONTACT US</h1>
        <div class="h-line bg-dark"></div>
    </div>

    <!--Contact Section-->

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123030.70007582278!2d120.91098408789729!3d15.500056900729545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33972921652f4ccb%3A0x3ddca086bad37111!2sCabanatuan%20City%2C%20Nueva%20Ecija!5e0!3m2!1sen!2sph!4v1678898007374!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!--Location-->
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/Za2obHw3ejdZTuQT6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt"></i> Cabanatuan City, Nueva Ecija
                    </a>
                    <!--Number-->
                    <h5 class="mt-4">Call Us</h5>
                    <a href="tel: +099123456" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-phone-fill"></i> +6399123456
                    </a>
                    <br>
                    <a href="tel: +099123456" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +6399123456
                    </a>
                    <!--Links-->
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: juandelacruz@gmail.com" class="d-inline-block text-decoration-none text-dark">
                    <i class="bi bi-envelope-at-fill"></i> juandelacruz@gmail.com
                    </a>

                    <h5 class="mt-4">Follow Us</h5>
                    <a href="https://www.facebook.com/" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                    <a href="https://www.twitter.com/" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send us a message</h5>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500; ">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500; ">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500; ">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500; ">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">Submit</button>
                    </form>
                </div>
            </div>

        </div>        
    </div>


    <?php require('inc/footer.php'); ?>
    
</body>
</html>