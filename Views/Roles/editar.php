<?php headerAdmin($data); ?>
<?php 
$seccionales = $data["seccionales"]; 
$rol = $data["rol"];
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
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/Roles">Roles</a></li>
                        <li class="breadcrumb-item">Editar </li>

                    </ol>
                </div>
                <h4 class="page-title">Editar rol <?= $rol["nombre_rol"]; ?></h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Editar</h4>

                    <div class="row">
                        <div class="col-8">
                            <form action="<?= base_url() . "/Roles/setRol" ?>" method="POST">
                                <input type="hidden" value="<?= $rol["id"] ?>" name="idRol">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Capturista" name="nombre_rol"
                                        value="<?= $rol["nombre_rol"]; ?>" />
                                    <label for="floatingInput">Nombre del rol</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Solamente podrá registrar"
                                        name="descripcion" value="<?= $rol["descripcion"]; ?>" />
                                    <label for="floatingInput">Descripción del rol</label>
                                </div>

                                <div class="form-floating">
                                    <select class="form-select" name="seccional">
                                        <option value="0">Supremo líder estatal</option>
                                        <?php foreach($seccionales as $seccional){ ?>
                                        <option value="<?= $seccional["id"]; ?>">
                                            <?= $seccional["nombre_seccional"]; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    <label for="floatingSelect">Selecciona el seccional</label>
                                </div>

                                <div class="form-floating mt-2">
                                    <select class="form-select" name="estado">
                                        <?php if($rol["estado"] == 1){ ?>
                                        <option value="1" selected>Activo</option>
                                        <option value="2">Inactivo</option>
                                        <?php } else{ ?>
                                        <option value="1">Activo</option>
                                        <option value="2" selected>Inactivo</option>
                                        <?php } ?>
                                    </select>
                                    <label for="floatingSelect">Estado</label>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>

                            </form>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->


<?php footerAdmin($data); ?>