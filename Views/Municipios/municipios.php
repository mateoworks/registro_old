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
                                <th>Revisado</th>
                                <th>RevObs</th>
                                <th>Regional</th>
                                <th>Estatal</th>
                                <th>Seccional</th>
                                <th>FechaFundación</th>
                                <th>Municipio</th>
                                <th>PobTotal</th>
                                <th>Mayor18</th>
                                <th>Padrón</th>
                                <th>Localidades</th>
                                <th>Nivel</th>
                            </thead>
                            <tbody>
                                <?php foreach($municipios as $municipio){ ?>
                                <tr>
                                    <td><?= $municipio["id"]; ?></td>
                                    <td><?= $municipio["Revisado"]; ?></td>
                                    <td><?= $municipio["RevObs"]; ?></td>
                                    <td><?= $municipio["Regional"]; ?></td>
                                    <td><?= $municipio["Estatal"]; ?></td>
                                    <td><?= $municipio["Seccional"]; ?></td>
                                    <td><?= $municipio["FechaFundacion"]; ?></td>
                                    <td><?= $municipio["Municipio"]; ?></td>
                                    <td><?= $municipio["Responsable"]; ?></td>
                                    <td><?= $municipio["PobTotal"]; ?></td>
                                    <td><?= $municipio["Mayor18"]; ?></td>
                                    <td><?= $municipio["Localidades"]; ?></td>
                                    <td><?= $municipio["Nivel"]; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->


<?php footerAdmin($data); ?>