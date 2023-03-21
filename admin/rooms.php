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
    <title>Admin - Rooms</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    
    <?php require('inc/header.php'); ?>
    <div class="container-fluid" id="main-content">
      <div class="row">
        <div class="col-lg-10 ms-auto p-4 overfow-hidden">
          <h3 class="mb-3"><i class="bi bi-code-slash"></i> Manage Rooms</h3>

          <!-- Room section -->

          <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">

                <div class="text-end mb-4">
                    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
                        <i class="bi bi-plus-square"></i> Add
                    </button> 
                </div>  

                <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                    <table class="table table-hover border">
                        <thead>
                            <tr class="bg-dark text-light">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Area</th>
                            <th scope="col">Guests</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="room-data">
                        </tbody>
                    </table>
                </div>    

            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Feature Modal -->

    <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form class="add_room_form" autocomplete="off">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Add Room</h1>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Name</label>
                        <input type="text" name="name" class="form-control shadow-none" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Area</label>
                        <input type="number" min="1" name="area" class="form-control shadow-none" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Price</label>
                        <input type="number" min="1" name="price" class="form-control shadow-none" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Quantity</label>
                        <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Adult (Max.)</label>
                        <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Children (Max.)</label>
                        <input type="number" min="1" name="children" class="form-control shadow-none" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Features</label>
                        <div class="row">
                            <?php 
                                $res = selectAll('feature');
                                while($opt = mysqli_fetch_assoc($res)){
                                    echo"
                                        <div class='col-md-3 mb-1'>
                                            <label>
                                                <input type='checkbox' name='feature' value='$opt[id_no]' class='form-check-input shado-none'>
                                                $opt[name]
                                            </label>
                                        </div>
                                    ";
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Add-ons</label>
                        <div class="row">
                            <?php 
                                $res = selectAll('addons');
                                while($opt = mysqli_fetch_assoc($res)){
                                    echo"
                                        <div class='col-md-3 mb-1'>
                                            <label>
                                                <input type='checkbox' name='addons' value='$opt[id_no]' class='form-check-input shado-none'>
                                                $opt[name]
                                            </label>
                                        </div>
                                    ";
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Description</label>
                        <textarea name="description" rows="10" class="form-control shadow-none" required></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                <button type="submit" class="btn btn-primary text-white shadow-none">SUBMIT</button>
            </div>
            </div>
        </form>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>

    <script>
        let add_room_form = document.getElementById('add_room_form');

        add_room_form.addEventListener('submit',function(e){
            e.preventDefault();
            add_rooms();
        });
        
        function add_rooms()
        {
            let data = new FormData();
            data.append('add_rooms','');
            data.append('name',add_room_form.elements['name'].value);
            data.append('area',add_room_form.elements['area'].value);
            data.append('price',add_room_form.elements['price'].value);
            data.append('quantity',add_room_form.elements['quantity'].value);
            data.append('adult',add_room_form.elements['adult'].value);
            data.append('children',add_room_form.elements['children'].value);
            data.append('description',add_room_form.elements['description'].value);

            let feature = [];
            add_room_form.elements['feature'].forEach(el =>{
                if(el.checked){
                    feature.push(el.value);
                }
            });

            let addons = [];
            add_room_form.elements['addons'].forEach(el =>{
                if(el.checked){
                    addons.push(el.value);
                }
            });

            data.append('feature',JSON.stringify(feature));
            data.append('addons',JSON.stringify(addons));

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php",true);

            xhr.onload = function()
            {
                var myModal = document.getElementById('add-room');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();
                
                if(this.responseText == 1){
                    alert('success','New room added!');
                    add_room_form.reset();
                    //get_rooms();
                }
                else{
                    alert('error','Server Down!');
                }
            }
            xhr.send(data);
        }

    </script>

</body>
</html>