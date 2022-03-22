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
                        <li class="breadcrumb-item"><a
                                href="<?= base_url(); ?>/municipios/municipioscrud">Municipios</a></li>
                        <li class="breadcrumb-item active">Registrar</li>
                    </ol>
                </div>
                <h4 class="page-title">Registrar municipio
                </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Registrar un municipio</h4>


                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->


<?php footerAdmin($data); ?>