<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Margarette - Facilities</title>

    <?php require('inc/links.php'); ?>
    <style>
        .pop:hover{
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Life Lived Best</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            The Hotel Margarette launches a comprehensive new wellness and sustainability programme, "Life Lived Best", <br> which provides guests with unprecedented opportunities to pursue their fitness, mindfulness, and nutritional goals. 
        </p>
    </div>

    <div class="container">
        <div class="row">
            <?php
                $res = selectAll('facilities');
                $path = FEATURES_IMG_PATH;

                while($row = mysqli_fetch_assoc($res)){
                    echo<<<data
                        <div class="col-lg-4 col-md-6 my-3 pop">
                            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                                <img src="$path$row[picture]" class="card-img-top">
                                <div class="card-body">
                                    <h5>$row[name]</h5>
                                    <h7 class="mb-4">$row[description]</h7>
                                    <div class="features mb-4">
                                        <h6 class="mb-1 mt-2">HOURS</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        24 hours advance notice recommended
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        7:00 am to 10:00 pm
                                        </span>
                                    </div>
                                    <div class="facilities mb-4">
                                        <h6 class="mb-1">ENQUIRIES</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                         +$contact_r[pn2]
                                        </span>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                    data;
                }
            ?>
            
        </div>        
    </div>


    <?php require('inc/footer.php'); ?>
    
</body>
</html>