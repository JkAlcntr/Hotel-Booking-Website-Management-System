<!-- Footer -->

<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">Hotel Margarette</h3>
            <p>
                dsadsdjfdsadfsfjgfsgfkjsdgfjksagjf
                gdwfgdksjagfsahgfkjsagfkjsagfksagfs
                jagfkjsagfksagfkjsagfjksagfsjkagfsgfjasgf
            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
            <a href="room.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
            <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
            <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a> <br>
            <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow Us</h5>
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
            <a href="<?php echo $contact_r['ig'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
                <i class="bi bi-instagram" me-1></i> Instagram</a> <br>
            <a href="<?php echo $contact_r['twt'] ?>" class="d-inline-block text-dark text-decoration-none">
                <i class="bi bi-twitter" me-1></i> Twitter</a>                 
        </div>
    </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Developed By JOHN KIM ALCANTARA</h6>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<script>

    function setActive(){

        let navbar = document.getElementById('nav-bar');
        let a_tags = navbar.getElementsByTagName('a');

        for(i=0;i<a_tags.length; i++)
        {
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];

            if(document.location.href.indexOf(file_name) >=0 ){
                a_tags[i].classList.add('active');
            }   
        }

    }
    setActive();    
</script>