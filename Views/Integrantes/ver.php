<?php 
    headerAdmin($data); 
    $integrante = $data["integrante"];
    $organismo = $data["organismo"];
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
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/integrantes">Integrantes</a></li>
                        <li class="breadcrumb-item active"><?= $integrante->nombres ?? ""; ?></li>
                    </ol>
                </div>
                <h4 class="page-title">
                    <?= $integrante->nombres ?? ""; ?>
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
                            <img src="<?= media() . "/images/fotos_integrantes/"; ?><?= $integrante->foto ?? "" ?>"
                                class="img-fluid" style="max-width: 280px;" alt="Foto integrante">

                        </div> <!-- end col -->
                        <div class="col-lg-8">
                            <div class="ps-lg-4">
                                <!-- Municipio -->
                                <h3 class="mt-0">
                                    <?= $integrante->nombres ?? ""; ?>
                                    <?= $integrante->apellido_paterno ?? ""; ?>
                                    <?= $integrante->apellido_materno ?? ""; ?>
                                    (<?= $integrante->nivel->abrev_nivel ?? ""; ?>)
                                </h3>
                                <p class="mb-1">Fecha de nacimiento:
                                    <?= $integrante->fecha_nacimiento ?? ""; ?></p>

                                <!-- Habitantes -->
                                <div class="mt-4">
                                    <h6 class="font-14">Responsable:</h6>
                                    <h3>
                                        <?= $integrante->nombre_responsable ?? ""; ?>
                                    </h3>
                                </div>

                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6 class="font-14">Origen de clase</h6>
                                            <p class="text-sm lh-150"><?= $integrante->origen ?? ""; ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="font-14">Frente origen:</h6>
                                            <p class="text-sm lh-150">
                                                <?= $integrante->frenteOrigen->nombre_frente ?? ""; ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="font-14">Frente destino:</h6>
                                            <p class="text-sm lh-150">
                                                <?= $integrante->frenteDestino->nombre_frente ?? ""; ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="font-14">Frente actual:</h6>
                                            <p class="text-sm lh-150"><?= $integrante->frente->nombre_frente ?? ""; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6 class="font-14">Fecha de alta:</h6>
                                            <p class="text-sm lh-150"><?= $integrante->fecha_alta ?? ""; ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="font-14">Fecha de asistencia a escuela de cuadros:</h6>
                                            <p class="text-sm lh-150">
                                                <?= $integrante->fecha_cuadros ?? ""; ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="font-14">Colecta:</h6>
                                            <p class="text-sm lh-150">
                                                <?= $integrante->colecta ?? ""; ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="font-14">Credencial:</h6>
                                            <p class="text-sm lh-150"><?= $integrante->credencial ?? ""; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <?php if(!empty($organismo)){ ?>
                                <div class="mt-4">
                                    <h6 class="font-14">Organismo:</h6>
                                    <h3><?= $integrante->organismo->org->nombre_organismo ?? ""; ?></h3>
                                </div>

                                <?php }else{ ?>
                                <a href="" class="btn btn-warning">
                                    Aún no esta agregado a un organismo, click para gregar
                                </a>
                                <?php } ?>



                            </div>
                        </div> <!-- end col -->
                    </div>

                    <div class="table-responsive mt-4">
                        <h3></h3>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->


<?php footerAdmin($data); ?>