<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Bash Hauliers Ltd</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap-custom.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 d-none d-lg-block">
            <div class="container px-0">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-white me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            <a href="#" class="text-white me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                            <a href="#" class="text-white me-0"><i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-facebook-f text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-twitter text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-instagram text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <?php
        $current_page = basename($_SERVER['PHP_SELF']);
        ?>
        <div class="container-fluid sticky-top px-0">
            <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;"></div>
            <div class="container px-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                    <a href="index.php" class="navbar-brand p-0">
                        <img class="brand-image" src="img/bashlogo.png" alt="Brand Image">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="index.php" class="nav-item nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a>
                            <a href="about.php" class="nav-item nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>">About</a>
                            <a href="services.php" class="nav-item nav-link <?php echo $current_page == 'services.php' ? 'active' : ''; ?>">Services</a>
                            <a href="projects.php" class="nav-item nav-link <?php echo $current_page == 'projects.php' ? 'active' : ''; ?>">Projects</a>
                            <a href="contact.php" class="nav-item nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <button class="btn btn-primary btn-md-square mx-2" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0">Get Quote</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->