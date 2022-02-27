<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title><?= $data['page_tag']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?= media(); ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= media(); ?>/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="<?= media(); ?>/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading authentication-bg"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark text-center pb-0 fw-bold">Iniciar sesión</h4>
                                <img src="<?= media(); ?>/images/icono.png" alt="" height="150">
                                <p class="text-muted mb-4">Introduce tu correo y contraseña para iniciar sesión.
                                </p>
                            </div>
                            <div id="divLoading">

                            </div>

                            <form class="login-form" name="formLogin" id="formLogin" action="">

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Correo electrónico</label>
                                    <input class="form-control" type="email" id="txtEmail" name="txtEmail" required=""
                                        placeholder="Correo">
                                </div>

                                <div class="mb-3">
                                    <a href="#" class="text-muted float-end"><small>¿Olvidaste tu
                                            contraseña?</small></a>
                                    <label for="password" class="form-label">Contraseña</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="txtPassword" name="txtPassword" type="password"
                                            class="form-control" placeholder="Introduce tu contraseña">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 mb-0 text-center">
                                    <button class="btn btn-primary" type="submit"> Iniciar sesión </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        Movimiento Antorchista
    </footer>

    <script>
    const base_url = "<?= base_url(); ?>";
    </script>
    <!-- bundle -->
    <script src="<?= media(); ?>/js/vendor.min.js"></script>
    <script src="<?= media(); ?>/js/app.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>

</body>

</html>