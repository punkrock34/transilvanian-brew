<?php ?>
<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="index.html" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">Transilvanian Brew</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="index.html" class="nav-item nav-link <?php echo (trim($page) == "" ? "active" : "") ?>">Acasă</a>
                <a href="despre-noi.html" class="nav-item nav-link <?php echo (trim($page) == "despre-noi" ? "active" : "") ?>">Despre noi</a>
                <a href="meniu.html" class="nav-item nav-link <?php echo (trim($page) == "meniu" ? "active" : "") ?>">Meniu</a>
                <a href="contact.html" class="nav-item nav-link <?php echo (trim($page) == "contact" ? "active" : "") ?>">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
