<?php include_once('global.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transilvanian Brew</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Bun venit la cea mai populară cafenea din Transilvania, unde vă puteți bucura de o experiență autentică și unică. Descoperiți cele mai bune băuturi și gustări pregătite cu ingrediente proaspete și de înaltă calitate, într-o ambianță plăcută și primitoare. Contactați-ne astăzi pentru a face o programare sau pentru orice întrebare sau sugestie.">

    <?php include_once('head.php'); ?>
</head>

<body>
    <?php include_once('header.php'); ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Tradiție de peste 50 de ani</h2>
                        <h1 class="display-1 text-white m-0">Cafea de calitate</h1>
                        <h2 class="text-white m-0">* Din 1950 *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Bucură-te de savoarea cafelei noastre</h2>
                        <h1 class="display-1 text-white m-0">Cafea proaspăt prăjită</h1>
                        <h2 class="text-white m-0">* În fiecare zi *</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- despre-noi Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Despre noi</h4>
                <h1 class="display-4">Servim cu pasiune din anul 1950</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Povestea noastră</h1>
                    <p>Ne-am început afacerea în 1950, când am deschis prima noastră cafenea. Cu multă muncă și dedicare, am reușit să dezvoltăm o afacere puternică și să ne extindem în întregul oraș. În tot acest timp, am învățat multe lecții valoroase, inclusiv importanța calității și a clienților mulțumiți. Încă suntem conduși de aceleași valori și suntem mândri să fim încă un pilon al comunității noastre.</p>
                    <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/despre-noi.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Viziunea noastră</h1>
                    <p>Ne dorim să fim mereu liderii industriei noastre, oferind produse și servicii de cea mai bună calitate. În plus, vrem să continuăm să fim un loc unde oamenii se simt bineveniți și conectați între ei. Pentru a ne atinge aceste obiective, investim în inovație și ne străduim să fim mereu la curent cu cele mai noi tendințe din industrie. Suntem determinați să ne menținem poziția de lideri și să continuăm să oferim cele mai bune experiențe pentru clienții noștri.</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Oferim produse și servicii de cea mai bună calitate</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Investim în inovație și suntem mereu la curent cu cele mai noi tendințe din industrie</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Creăm experiențe unice și memorabile pentru clienții noștri</h5>
                    <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Află mai multe</a>
                </div>
            </div>
        </div>
    </div>
    <!-- despre-noi End -->


    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Services</h4>
                <h1 class="display-4">Fresh & Organic Beans</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Savorați aroma autentică a cafelei proaspete prăjite la comandă</h4>
                            <p class="m-0">Descoperiți aroma unică și gustul bogat al cafelei noastre proaspete, prăjite la comandă. Boabele de cafea sunt atent selectate și prăjite în fiecare zi pentru a oferi un gust pur și autentic. Savurați o ceașcă de cafea într-un ambient plăcut și relaxant și bucurați-vă de fiecare înghițitură din această băutură divină.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Descoperiți savoarea autentică a cafelei, pregătită cu grijă și pasiune</h4>
                            <p class="m-0">Vă oferim o experiență de cafea de înaltă calitate, prin intermediul boabelor noastre exclusiviste și procesului nostru meticulos de preparare a cafelei. Încercați cea mai bună cafea din oraș și bucurați-vă de gustul unic și aromat al cafelei noastre. Fie că sunteți în căutarea unei cafele de dimineață sau doriți să savurați o ceașcă de cafea după cină, suntem siguri că veți găsi aici alegerea perfectă pentru dumneavoastră.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Offer Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3">Reducere specială: 10% la cafeaua preferată a clienților noștri!</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">Bucurați-vă de o experiență unică de savoare și arome cu cafeaua noastră proaspăt prăjită și beneficiați de o reducere specială de 10% între 20-28 februarie 2023. Înscrieți-vă cu adresa dvs. de e-mail pentru a beneficia de această ofertă și pentru a descoperi mai multe despre cafeaua noastră exclusivistă./h4>
                <form class="form-inline justify-content-center mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Your Email" style="height: 60px;">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-4" type="submit">Înregistrare</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Meniu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Meniu și Prețuri</h4>
                <h3 class="display-4">Prețuri Competitive</h3>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" id = "coffees">

                    <?php
                        //get data from coffees.json file
                        $json = file_get_contents('data/coffees.json');

                        //decode json to associative array
                        $data = json_decode($json, true);

                        $limit = 3;

                        foreach($data as $coffee){
                            if($limit == 0){
                                break;
                            }
                            //divs with background as image and on hover show a eye icon in the center on click it will do something with javascript
                            echo
                            '
                                <div class="menu-item" id = "'.$coffee["id"].'">
                                    <div class="menu-item-img">
                                        <img src="'.$coffee['image'].'" alt="'.$coffee['title'].'">
                                    </div>
                                    <div class="menu-item-content">
                                        <h4 class="text-uppercase">'.$coffee['title'].'</h4>
                                        <p class="text-primary">'.$coffee['price'].' RON</p>
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                            ';
                            $limit--;
                        }

                    ?>

                    <button class="btn btn-primary font-weight-bold px-4" type="button" href = "meniu.html">Vezi mai mult</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Meniu End -->

    <?php include_once('footer.php'); ?>


    <?php include_once('scripts.php'); ?>
</body>

</html>
