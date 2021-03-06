<?php 
    headerAdmin($data); 
    $seccionales = $data["seccionales"];
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
                        <li class="breadcrumb-item active">Seccionales</li>
                    </ol>
                </div>
                <h4 class="page-title">Seccionales
                    <?php if($_SESSION['permisosMod']['w']){ ?>
                    <button class="btn btn-primary" type="button">
                        <i class="uil-plus"></i>
                        Nuevo
                    </button>
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
                    <h4 class="header-title">Lista de seccionales</h4>
                    <div class="table-responsive">

                        <table class="table table-hover table-centered mb-0">
                            <thead>
                                <th>ID</th>
                                <th>Revisado</th>
                                <th>RevObs</th>
                                <th>Regional</th>
                                <th>Estatal</th>
                                <th>FechaFundación</th>
                                <th>Seccional</th>
                                <th>Responsable</th>
                                <th>Habitantes</th>
                                <th>Mayor18</th>
                                <th>Padrón</th>
                                <th>DistritosElectoralesFederales</th>
                            </thead>
                            <tbody>
                                <?php foreach($seccionales as $seccional){ ?>
                                <tr>
                                    <td><?= $seccional["id"] ?></td>
                                    <td><?= $seccional["Revisado"] ?></td>
                                    <td><?= $seccional["RevObs"] ?></td>
                                    <td><?= $seccional["Regional"] ?></td>
                                    <td><?= $seccional["Estatal"] ?></td>
                                    <td><?= $seccional["FechaFundacion"] ?></td>
                                    <td><?= $seccional["Seccional"] ?></td>
                                    <td><?= $seccional["Responsable"] ?></td>
                                    <td><?= $seccional["Habitantes"] ?></td>
                                    <td><?= $seccional["Mayor18"] ?></td>
                                    <td><?= $seccional["Padron"] ?></td>
                                    <td><?= $seccional["DistritosElectoralesFederales"] ?></td>
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