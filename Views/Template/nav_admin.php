<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            <a href="<?= base_url(); ?>" class="logo text-center logo-light">
                <span class="logo-lg">
                    ESTADÍSTICA
                </span>
                <span class="logo-sm">
                    ESTADÍSTICA
                </span>
            </a>

            <!-- LOGO -->
            <a href="<?= base_url(); ?>" class="logo text-center logo-dark">
                <span class="logo-lg">
                    ESTADÍSTICA
                </span>
                <span class="logo-sm">
                    ESTADÍSTICA
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar="">

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navegación</li>

                    <?php if(!empty($_SESSION['permisos'][1]['r'])){ ?>
                    <li class="side-nav-item">
                        <a href="<?= base_url(); ?>/dashboard" class="side-nav-link">
                            <i class="uil-dashboard"></i>
                            <span> Dashboard</span>
                        </a>
                    </li>
                    <?php } ?>

                    <?php if(!empty($_SESSION['permisos'][2]['r'])){ ?>
                    <li class="side-nav-title side-nav-item">Administración</li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarUsuarios" aria-expanded="false"
                            aria-controls="sidebarUsuarios" class="side-nav-link">
                            <i class="dripicons-user-group"></i>
                            <span> Usuarios </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarUsuarios">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>/usuarios">Usuarios</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>/roles">Roles</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <li class="side-nav-title side-nav-item">Tablas básicas</li>

                    <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#seccionalPage" aria-expanded="false"
                            aria-controls="seccionalPage" class="side-nav-link">
                            <i class="uil-map-marker-shield"></i>
                            <span> Seccionales</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="seccionalPage">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>/seccionales">Tabla</a>
                                </li>
                                <li>
                                    <a href="#">Consultas</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <?php if(!empty($_SESSION['permisos'][4]['r'])){ ?>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#municipiosPage" aria-expanded="false"
                            aria-controls="municipiosPage" class="side-nav-link">
                            <i class="uil-building"></i>
                            <span> Municipios</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="municipiosPage">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>/municipios/municipioscrud">Municipios CRUD</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>/municipios">Tabla 2. Municipios</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <?php if(!empty($_SESSION['permisos'][5]['r'])){ ?>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#centrosPage" aria-expanded="false"
                            aria-controls="centrosPage" class="side-nav-link">
                            <i class="uil-home"></i>
                            <span> Centros</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="centrosPage">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>/centros">Tabla</a>
                                </li>
                                <li>
                                    <a href="#">Consultas</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <?php if(!empty($_SESSION['permisos'][6]['r'])){ ?>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#organismosPage" aria-expanded="false"
                            aria-controls="organismosPage" class="side-nav-link">
                            <i class="uil-book-reader"></i>
                            <span> Organismos</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="organismosPage">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>/organismos">Tabla</a>
                                </li>
                                <li>
                                    <a href="#">Consultas</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <?php if(!empty($_SESSION['permisos'][7]['r'])){ ?>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#integrantesPage" aria-expanded="false"
                            aria-controls="integrantesPage" class="side-nav-link">
                            <i class="uil-users-alt"></i>
                            <span> Integrantes</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="integrantesPage">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>/integrantes/integrantescrud">CRUD integrantes</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>/integrantes">5. Tabla básica</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>



                </ul>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Buscar ..."
                                        aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>



                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="<?= media(); ?>/images/avatar.png" alt="user-image"
                                        class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">
                                        <?= $_SESSION['userData']['nombres']; ?>
                                    </span>
                                    <span class="account-position"><?= $_SESSION['userData']['nombrerol']; ?> -
                                        <?= $_SESSION['userData']['nombre_seccional'] ?>
                                    </span>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Bienvenido estadista</h6>
                                </div>

                                <!-- item-->
                                <a href="<?= base_url(); ?>/Usuarios/perfil" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>Perfil</span>
                                </a>

                                <!-- item-->
                                <a href="<?= base_url(); ?>/logout" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Cerrar sesión</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control dropdown-toggle" placeholder="Buscar..."
                                    id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn-primary" type="submit">Buscar</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- end Topbar -->