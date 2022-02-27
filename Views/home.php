<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Sistema estadístico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?= media(); ?>/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="<?= media(); ?>/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="<?= media(); ?>/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

</head>

<body class="loading" data-layout-config='{"darkMode":false}'>

    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg py-lg-3 navbar-dark">
        <div class="container">

            <!-- logo -->
            <a href="index.html" class="navbar-brand me-lg-5">
                <img src="assets/images/logo.png" alt="" class="logo-dark" height="18">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- menus -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <!-- left menu -->
                <ul class="navbar-nav me-auto align-items-center">
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link active" href="">Home</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="<?= base_url(); ?>/login">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- START HERO -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="mt-md-4">
                        <h2 class="text-white fw-normal mb-4 mt-3 hero-title">
                            Prototipo de sistema estadistico desarrollado por Miguel
                        </h2>

                        <p class="mb-4 font-16 text-white-50">
                            Proyecto de residencia profesional
                        </p>

                        <a href="<?= base_url(); ?>/login" target="_blank" class="btn btn-success">Entrar <i
                                class="mdi mdi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="text-md-end mt-3 mt-md-0">
                        <img src="<?= media() ?>/images/hero.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO -->

    <!-- START SERVICES -->
    <section class="py-5">
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-infinity"></i></h1>
                        <h3>Todos los datos bien organizados :)</h3>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END SERVICES -->


    <!-- START FOOTER -->
    <footer class="bg-dark py-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-5">
                        <p class="text-muted mt-4 text-center mb-0">Moviemiento Antorchista</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- bundle -->
    <script src="<?= media(); ?>/js/vendor.min.js"></script>
    <script src="<?= media(); ?>/js/app.min.js"></script>

</body>

</html>