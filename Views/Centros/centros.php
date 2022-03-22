<?php 
    headerAdmin($data); 
    $centros = $data["centros"];
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
                        <li class="breadcrumb-item active">Centros</li>
                    </ol>
                </div>
                <h4 class="page-title">Centros
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
                    <h4 class="header-title">Lista de centros</h4>
                    <div class="table-responsive">

                        <table class="table table-hover table-centered mb-0">
                            <thead>
                                <th>ID</th>
                                <th>Revisado</th>
                                <th>RevObs</th>
                                <th>Regional</th>
                                <th>Estatal</th>
                                <th>Seccional</th>
                                <th>Municipio</th>
                                <th>Centro</th>
                                <th>Frente</th>
                                <th>Tipo</th>
                                <th>Controlado</th>
                                <th>FechaFundación</th>
                                <th>PobTotal</th>
                                <th>Mayor18</th>
                                <th>Padrón</th>
                                <th>Ubic</th>
                                <th>Estructura</th>
                                <th>HabitadaActiv</th>
                                <th>NivelEscolar</th>
                                <th>EscoSuperior</th>
                                <th>EscoMedio</th>
                                <th>EscoBasico</th>
                                <th>EscoOtro</th>
                                <th>EscoTotal</th>
                                <th>Estudiantes</th>
                                <th>Profesores</th>
                                <th>Otro</th>
                            </thead>
                            <tbody>
                                <?php foreach($centros as $centro){ ?>
                                <tr>
                                    <td><?= $centro["cen_id"] ?></td>
                                    <td><?= $centro["Revisado"] ?></td>
                                    <td><?= $centro["RevObs"] ?></td>
                                    <td><?= $centro["Regional"] ?></td>
                                    <td><?= $centro["Estatal"] ?></td>
                                    <td><?= $centro["Seccional"] ?></td>
                                    <td><?= $centro["Municipio"] ?></td>
                                    <td><?= $centro["Centro"] ?></td>
                                    <td><?= $centro["Frente"] ?></td>
                                    <td><?= $centro["Tipo"] ?></td>
                                    <td><?= $centro["Controlado"] ?></td>
                                    <td><?= $centro["FechaDeFundacion"] ?></td>
                                    <td><?= $centro["PobTotal"] ?></td>
                                    <td><?= $centro["Mayor18"] ?></td>
                                    <td><?= $centro["Padron"] ?></td>
                                    <td><?= $centro["Ubic"] ?></td>
                                    <td><?= $centro["Estructura"] ?></td>
                                    <td><?= $centro["HabitadaActiv"] ?></td>
                                    <td><?= $centro["NivelEscolar"] ?></td>
                                    <td><?= $centro["EscoSuperior"] ?></td>
                                    <td><?= $centro["EscoMedio"] ?></td>
                                    <td><?= $centro["EscoBasico"] ?></td>
                                    <td><?= $centro["EscoOtro"] ?></td>
                                    <td><?= $centro["EscoTotal"] ?></td>
                                    <td><?= $centro["Estudiantes"] ?></td>
                                    <td><?= $centro["Profesores"] ?></td>
                                    <td><?= $centro["Otro"] ?></td>
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