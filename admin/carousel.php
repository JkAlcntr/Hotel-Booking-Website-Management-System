<?php
  require('inc/essentials.php');
  adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Carousel</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    
    <?php require('inc/header.php'); ?>
    <div class="container-fluid" id="main-content">
      <div class="row">
        <div class="col-lg-10 ms-auto p-4 overfow-hidden">
          <h3 class="mb-3">Carousel</h3>

          <!-- Carousel section -->

          <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="card-title m-0">Images</h5>
                <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#carousel-s">
                <i class="bi bi-plus-square"></i> Add
                </button> 
              </div>

                <div class="row" id="carousel-data">  
                </div>

            </div>
          </div>

          <!--  Carousel modal -->

          <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <form class="carousel_s_form">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5">Add Images</h1>
                  </div>
                  <div class="modal-body">  
                    <div class="mb-3">
                      <label class="form-label fw-bold">image</label>
                      <input type="file" name="carousel_image" id="carousel_image_inp" accept=".jpg, .png, .jpeg" class="form-control shadow-none" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" onclick="carousel_image.value='' " class="btn text-secondary shadow-none" data-bs-dismiss="modal">
                      CANCEL
                    </button>
                    <button type="submit" class="btn btn-primary text-white shadow-none">
                      SUBMIT
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

    <?php require('inc/scripts.php'); ?>
    <script src="scripts/carousel.js"></script>
</body>
</html>