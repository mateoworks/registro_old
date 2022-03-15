<?php 
    headerAdmin($data); 
    $organismos = $data["organismos"];
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
                        <li class="breadcrumb-item active">Organismos</li>
                    </ol>
                </div>
                <h4 class="page-title">Organismos
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
                    <h4 class="header-title">Lista de organismos</h4>
                    <div class="table-responsive">

                        <table class="table table-hover table-centered mb-0">
                            <thead>
                                <th>Clave</th>
                                <th>Revisado</th>
                                <th>RevObs</th>
                                <th>Estatal</th>
                                <th>Seccional</th>
                                <th>Municipio</th>
                                <th>Centro</th>
                                <th>Frente</th>
                                <th>FechaFundación</th>
                                <th>ClaveOrg</th>
                                <th>Organismo</th>
                                <th>OrgTipo2</th>
                                <th>OrgCategoría</th>
                                <th>OrgNivel</th>
                                <th>Activista responsable</th>
                                <th>Integrantes</th>
                                <th>Control1x1</th>
                                <th>Solicitante</th>
                                <th>Cotiza</th>
                                <th>Cuota</th>
                                <th>Credenciales</th>
                                <th>Estructura</th>
                                <th>ObraEstudio</th>
                                <th>ObraLeida</th>
                                <th>FechaRatificacionPleno</th>
                                <th>DiadeReunion</th>
                                <th>HoradeReunion</th>
                                <th>DescripcionComoLlegar</th>
                                <th>LugarReunion</th>
                                <th>Periodicidad</th>
                            </thead>
                            <tbody>
                                <?php foreach($organismos as $organismo){ ?>
                                <tr>
                                    <td><?= $organismo["clave_org"] ?></td>
                                    <td><?= $organismo["Revisado"] ?></td>
                                    <td><?= $organismo["RevObs"] ?></td>
                                    <td><?= $organismo["Estatal"] ?></td>
                                    <td><?= $organismo["Seccional"] ?></td>
                                    <td><?= $organismo["Municipio"] ?></td>
                                    <td><?= $organismo["Centro"] ?></td>
                                    <td><?= $organismo["Frente"] ?></td>
                                    <td><?= $organismo["FechaFundacion"] ?></td>
                                    <td><?= $organismo["ClaveOrg"] ?></td>
                                    <td><?= $organismo["Organismo"] ?></td>
                                    <td><?= $organismo["OrgTipo2"] ?></td>
                                    <td><?= $organismo["OrgCategoria"] ?></td>
                                    <td><?= $organismo["OrgNivel"] ?></td>
                                    <td><?= $organismo["OrgOrigen"] ?></td>
                                    <td><?= $organismo["ActivistaResponsable"] ?></td>
                                    <td><?= $organismo["Integrantes"] ?></td>
                                    <td><?= $organismo["Control1X1"] ?></td>
                                    <td><?= $organismo["Solicitante"] ?></td>
                                    <td><?= $organismo["Cotiza"] ?></td>
                                    <td><?= $organismo["Cuota"] ?></td>
                                    <td><?= $organismo["Credenciales"] ?></td>
                                    <td><?= $organismo["Estructura"] ?></td>
                                    <td><?= $organismo["ObraEstud"] ?></td>
                                    <td><?= $organismo["FechaRatificacionPleno"] ?></td>
                                    <td><?= $organismo["DiadeReunion"] ?></td>
                                    <td><?= $organismo["HoraDeReunion"] ?></td>
                                    <td><?= $organismo["DescripcionComoLlegar"] ?></td>
                                    <td><?= $organismo["LugarReunion"] ?></td>
                                    <td><?= $organismo["Perioricidad"] ?></td>
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