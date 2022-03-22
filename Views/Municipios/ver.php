<?php 
    headerAdmin($data); 
    $municipio = $data["municipio"];
    $centros = $data["centros"];
    $noNivel = $data["no_nivel"];
    
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
                        <li class="breadcrumb-item"><a
                                href="<?= base_url(); ?>/municipios/municipioscrud">Municipios</a></li>
                        <li class="breadcrumb-item active"><?= $municipio->municipio ?? ""; ?></li>
                    </ol>
                </div>
                <h4 class="page-title">
                    <?= $municipio->municipio ?? ""; ?>
                </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Municipio escudo -->
                            <img src="<?= media() . "/images/escudos/"; ?><?= $municipio->escudo ?? "" ?>"
                                class="img-fluid" style="max-width: 280px;" alt="Product-img">

                        </div> <!-- end col -->
                        <div class="col-lg-8">
                            <div class="ps-lg-4">
                                <!-- Municipio -->
                                <h3 class="mt-0">
                                    <?= $municipio->municipio ?? ""; ?>
                                </h3>
                                <p class="mb-1">Fundación del trabajo político:
                                    <?= $municipio->fecha_fundacion ?? ""; ?></p>

                                <!-- Habitantes -->
                                <div class="mt-4">
                                    <h6 class="font-14">Responsable:</h6>
                                    <h3>
                                        <?= $municipio->integrante->nombres ?? ""; ?>
                                        <?= $municipio->integrante->apellido_paterno ?? ""; ?>
                                        <?= $municipio->integrante->apellido_materno ?? ""; ?>
                                        (<?= $municipio->integrante->nivel->abrev_nivel ?? ""; ?>)
                                    </h3>
                                </div>

                                <div class="mt-4">
                                    <h6 class="font-14">Nivel político del municipio:</h6>
                                    <h3><?= $municipio->nivel->abrev_nivel ?? ""; ?></h3>
                                </div>

                                <div class="mt-4">
                                    <h6 class="font-14">Seccional:</h6>
                                    <h3><?= $municipio->seccional->nombre_seccional ?? ""; ?></h3>
                                </div>

                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6 class="font-14">Población total:</h6>
                                            <p class="text-sm lh-150"><?= $municipio->poblacion_total ?? ""; ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="font-14">Población mayor a 18</h6>
                                            <p class="text-sm lh-150"><?= $municipio->poblacion_mayor_18 ?? ""; ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="font-14">Padrón:</h6>
                                            <p class="text-sm lh-150"><?= $municipio->padron_electoral ?? ""; ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="font-14">No- localidades</h6>
                                            <p class="text-sm lh-150"><?= $municipio->no_localidades ?? ""; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="font-14">Integrantes por nivel:</h6>
                                </div>
                                <table class="table table-bordered table-centered mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>M</th>
                                            <th>S</th>
                                            <th>A</th>
                                            <th>MA y MAE</th>
                                            <th>CA y CAE</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $noNivel["M"][0]->cantidad_nivel; ?></td>
                                            <td><?= $noNivel["S"][0]->cantidad_nivel; ?></td>
                                            <td><?= $noNivel["A"][0]->cantidad_nivel; ?></td>
                                            <td>
                                                <?= ($noNivel["MA"][0]->cantidad_nivel) + ($noNivel["MAE"][0]->cantidad_nivel);  ?>
                                            </td>
                                            <td>
                                                <?= ($noNivel["CA"][0]->cantidad_nivel) + ($noNivel["CAE"][0]->cantidad_nivel);  ?>
                                            </td>
                                            <td>
                                                <?=
                                                $noNivel["M"][0]->cantidad_nivel + 
                                                $noNivel["S"][0]->cantidad_nivel +
                                                $noNivel["A"][0]->cantidad_nivel +
                                                $noNivel["MA"][0]->cantidad_nivel +
                                                $noNivel["MAE"][0]->cantidad_nivel +
                                                $noNivel["CA"][0]->cantidad_nivel +
                                                $noNivel["CAE"][0]->cantidad_nivel;
                                                ?>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>



                            </div>
                        </div> <!-- end col -->
                    </div>

                    <div class="table-responsive mt-4">
                        <h3>Centros que pertenecen al municipio</h3>
                        <table class="table table-bordered table-centered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Centro</th>
                                    <th>Frente</th>
                                    <th>Tipo</th>
                                    <th>Población total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($centros as $centro){ ?>
                                <tr>
                                    <td>
                                        <?= $centro->cen_id; ?>
                                    </td>
                                    <td>
                                        <?= $centro->Centro; ?>
                                    </td>
                                    <td>
                                        <?= $centro->Frente; ?>
                                    </td>
                                    <td>
                                        <?= $centro->Tipo; ?>
                                    </td>
                                    <td>
                                        <?= $centro->PobTotal; ?>
                                    </td>
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