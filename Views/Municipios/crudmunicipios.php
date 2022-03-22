<?php 
    headerAdmin($data); 
    $municipios = $data["municipios"];
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
                        <li class="breadcrumb-item active">Municipios</li>
                    </ol>
                </div>
                <h4 class="page-title">Municipios
                    <?php if($_SESSION['permisosMod']['w']){ ?>
                    <a class="btn btn-primary">
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
                    <h4 class="header-title">Lista de municipios</h4>
                    <div class="table-responsive">

                        <table class="table table-hover table-centered mb-0">
                            <thead>
                                <th>ID</th>
                                <th>Seccional</th>
                                <th>Municipio</th>
                                <th>Responsable</th>
                                <th>Población total</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                <?php foreach($municipios as $municipio){ ?>
                                <tr>
                                    <td><?= $municipio["id"]; ?></td>
                                    <td><?= $municipio["Seccional"]; ?></td>
                                    <td><?= $municipio["Municipio"]; ?></td>
                                    <td><?= $municipio["Responsable"]; ?></td>
                                    <td><?= $municipio["PobTotal"]; ?></td>
                                    <td>
                                        <div class="btn-group mb-2">
                                            <?php if($_SESSION['permisosMod']['r']){ ?>
                                            <a class="btn btn-info"
                                                href="<?= base_url() . "/municipios/ver/" . $municipio["id"]; ?>">
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
                </div>
                <nav>
                    <ul class="pagination pagination-rounded mb-0">
                        <?= $data["link"]; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div> <!-- container -->


<?php footerAdmin($data); ?>