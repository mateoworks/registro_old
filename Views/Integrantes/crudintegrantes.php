<?php 
    headerAdmin($data); 
    $integrantes = $data["integrantes"];
?>

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Integrantes</li>
                    </ol>
                </div>
                <h4 class="page-title">Integrantes
                    <?php if($_SESSION['permisosMod']['w']){ ?>
                    <a class="btn btn-primary" href="<?= base_url(); ?>/integrantes/crear">
                        <i class="uil-plus"></i>
                        Nuevo
                    </a>
                    <?php } ?>
                </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Lista de integrantes</h4>
                    <div class="table-responsive">

                        <table class="table table-hover table-centered mb-0">
                            <thead>
                                <th>Seccional</th>
                                <th>Nombres</th>
                                <th>ApellidoPaterno</th>
                                <th>ApellidoMaterno</th>
                                <th>Nivel</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                <?php foreach($integrantes as $integrante){ ?>
                                <tr>
                                    <td><?= $integrante["nombre_seccional"]; ?></td>
                                    <td><?= $integrante["nombres"]; ?></td>
                                    <td><?= $integrante["apellido_paterno"]; ?></td>
                                    <td><?= $integrante["apellido_materno"]; ?></td>
                                    <td><?= $integrante["nombre_nivel"]; ?></td>
                                    <td>
                                        <div class="btn-group mb-2">
                                            <?php if($_SESSION['permisosMod']['r']){ ?>
                                            <a class="btn btn-info"
                                                href="<?= base_url() . "/integrantes/ver/" . $integrante["clave_int"]; ?>">
                                                <i class="dripicons-preview"></i>
                                            </a>
                                            <?php } ?>
                                            <?php if($_SESSION['permisosMod']['u']){ ?>
                                            <a class="btn btn-warning">
                                                <i class="dripicons-pencil"></i>
                                            </a>
                                            <?php } ?>
                                            <?php if($_SESSION['permisosMod']['d']){ ?>
                                            <a class="btn btn-danger">
                                                <i class="dripicons-trash"></i>
                                            </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <nav>
                        <ul class="pagination pagination-rounded mb-0">
                            <?= $data["link"]; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->


<?php footerAdmin($data); ?>