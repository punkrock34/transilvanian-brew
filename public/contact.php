<?php include_once('global.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transilvanian Brew - Contact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Contactați-ne pentru orice întrebări, sugestii sau programări la cel mai popular local de cafea din Transilvania. Oferim o experiență autentică și unica într-o ambianță plăcută.">

    <?php include_once('head.php'); ?>
</head>

<body>
    <?php include_once('header.php'); ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Contact</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Acasă</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contactează-ne</h4>
                <h3 class="display-4">Nu ezita să ne contactezi</h3>
            </div>
            <div class="row px-3 pb-2">
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Adresă</h4>
                    <p> Strada Avram Iancu nr. 20, Cluj-Napoca</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Telefon</h4>
                    <p>+40 000000000</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Email</h4>
                    <p>info@transilvanianbrew.ro</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pb-5">
                    <iframe style="width: 100%; height: 443px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.455314196322!2d23.580466715570044!3d46.76942244630111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4747a3d33b6386c3%3A0xaf7de1d0a37a7c0a!2sStrada%20Avram%20Iancu%2020%2C%20Cluj-Napoca%2C%20Romania!5e0!3m2!1sen!2sus!4v1645214403187!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-6 pb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="name" placeholder="Numele tău" required="required" data-validation-required-message="Introduceți numele dvs." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control bg-transparent p-4" id="email" placeholder="Adresa ta de email" required="required" data-validation-required-message="Introduceți adresa dvs. de email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control bg-transparent py-3 px-4" rows="5" id="message" placeholder="Mesaj" required="required" data-validation-required-message="Introduceți mesajul dvs."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="sendMessageButton">Trimite</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <?php include_once('footer.php'); ?>


        <?php include_once('scripts.php'); ?>
</body>

</html>
