<?php include_once('global.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transilvanian Brew - Meniu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Descoperiți cele mai bune băuturi și gustări din orașul nostru la cel mai popular local de cafea din Transilvania. Oferim o gamă largă de băuturi și gustări, inclusiv cafea proaspăt prăjită, ceaiuri fine și sandvișuri delicioase, pregătite cu ingrediente proaspete și de înaltă calitate.">

    <?php include_once('head.php'); ?>
</head>

<body>
    <?php include_once('header.php'); ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Meniu</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Acasă</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Meniu</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Meniu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Meniu și Prețuri</h4>
                <h3 class="display-4">Prețuri Competitive</h3>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" id = "coffee-items">

                    <?php
                    //get data from coffees.json file
                    $json = file_get_contents('data/coffees.json');

                    //decode json to associative array
                    $data = json_decode($json, true);

                    foreach ($data as $coffee) {

                        //divs with background as image and on hover show a eye icon in the center on click it will do something with javascript
                        echo
                        '
                            <div class="menu-item" id = "' . $coffee["id"] . '">
                                <div class="menu-item-img">
                                    <img src="' . $coffee['image'] . '" alt="' . $coffee['title'] . '">
                                </div>
                                <div class="menu-item-content">
                                    <p class="text-uppercase title">' . $coffee['title'] . '</p>
                                    <p class="text-primary price">' . $coffee['price'] . ' RON</p>
                                    <p class="eye"><i class="fa fa-eye"></i></p>
                                </div>
                            </div>
                        ';

                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Meniu End -->


    <?php include_once('footer.php'); ?>


    <?php include_once('scripts.php'); ?>
</body>

</html>
