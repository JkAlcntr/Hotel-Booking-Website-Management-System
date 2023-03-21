<?php
  require('inc/essentials.php');
  require('inc/db_config.php');
  adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Features & Facilities</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    
    <?php require('inc/header.php'); ?>
    <div class="container-fluid" id="main-content">
      <div class="row">
        <div class="col-lg-10 ms-auto p-4 overfow-hidden">
          <h3 class="mb-3"><i class="bi bi-code-slash"></i> Features & Facilities</h3>

          <!-- Feature section -->

          <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="card-title m-0">Features</h5>
                    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
                        <i class="bi bi-plus-square"></i> Add
                    </button> 
                </div>  

                <div class="table-responsive-mb" style="height: 350px; overflow-y: scroll;">
                    <table class="table table-hover border">
                        <thead>
                            <tr class="bg-dark text-light">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="feature-data">
                        </tbody>
                    </table>
                </div>    

            </div>
          </div>

          <!-- Facilities section -->
          
          <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="card-title m-0">Facilities</h5>
                    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facilities-s">
                        <i class="bi bi-plus-square"></i> Add
                    </button> 
                </div>  

                <div class="table-responsive-mb" style="height: 350px; overflow-y: scroll;">
                    <table class="table table-hover border">
                        <thead>
                            <tr class="bg-dark text-light">
                            <th scope="col">#</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Name</th>
                            <th scope="col" width="40%">Description</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="facilities-data">
                        </tbody>
                    </table>
                </div>    

            </div>
          </div>
          
         <!-- Add-ons section -->

         <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="card-title m-0">Add-ons</h5>
                    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#addons-s">
                        <i class="bi bi-plus-square"></i> Add
                    </button> 
                </div>  

                <div class="table-responsive-mb" style="height: 350px; overflow-y: scroll;">
                    <table class="table table-hover border">
                        <thead>
                            <tr class="bg-dark text-light">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col" width="40%">Description</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="addons-data">
                        </tbody>
                    </table>
                </div>    

            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Feature Modal -->

    <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form class="feature_s_form">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Manage Features</h1>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label fw-bold">Name</label>
                    <input type="text" name="feature_name" id="feature_name_inp" class="form-control shadow-none" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">
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

    <!-- Facilities Modal -->

    <div class="modal fade" id="facilities-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="facilities_s_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Manage Facilities</h1>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Picture</label>
                            <input type="file" name="facilities_picture" id="facilities_picture_inp" accept=".jpg, .png, .jpeg" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Name</label>
                            <input type="text" name="facilities_name" id="facilities_name_inp" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-12 ps-0 mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="facilities_desc" class="form-control shadow-none" rows="3"></textarea>
                        </div>                     
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">
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

     <!-- Add-ons Modal -->

     <div class="modal fade" id="addons-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form class="addons_s_form">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Manage Add-ons</h1>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label fw-bold">Name</label>
                    <input type="text" name="addons_name" id="addons_name_inp" class="form-control shadow-none" required>
                </div>
                <div class="col-md-12 ps-0 mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="addons_desc" class="form-control shadow-none" rows="3"></textarea>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">
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

    <?php require('inc/scripts.php'); ?>

    <script src="scripts/features_facilities.js"></script>

</body>
</html>