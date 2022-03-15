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
                    <h4 class="header-title">Lista de integrantes</h4>
                    <div class="table-responsive">

                        <table class="table table-hover table-centered mb-0">
                            <thead>
                                <th>Regional</th>
                                <th>EstatalNacimiento</th>
                                <th>EstatalAlta</th>
                                <th>Estatal</th>
                                <th>Seccional</th>
                                <th>Municipio</th>
                                <th>FechaNacimiento</th>
                                <th>FechaAlta</th>
                                <th>FechaCuadros</th>
                                <th>ClaveInt</th>
                                <th>Nombres</th>
                                <th>ApellidoPaterno</th>
                                <th>ApellidoMaterno</th>
                                <th>Nivel</th>
                                <th>Sexo</th>
                                <th>Frente</th>
                                <th>FrenteOrigen</th>
                                <th>FrenteDestino</th>
                                <th>Origen</th>
                                <th>Colecta</th>
                                <th>NivelAcade</th>
                                <th>CarreraProfesion</th>
                                <th>Titulado</th>
                                <th>EstadoCivil</th>
                                <th>Telefono</th>
                                <th>Mail</th>
                                <th>Direccion</th>
                                <th>CodigoPostal</th>
                                <th>Credencial</th>
                                <th>Colonia</th>
                                <th>CalleNumero</th>
                                <th>CP</th>
                                <th>CURP</th>
                                <th>ClaveINE</th>
                                <th>Responsable</th>
                                <th>NombreFamiliar</th>
                                <th>DireccionFamiliar</th>
                                <th>TelefonoFamiliar</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                            </thead>
                            <tbody>
                                <?php foreach($integrantes as $integrante){ ?>
                                <tr>
                                    <td><?= $integrante["Regional"]; ?></td>
                                    <td><?= $integrante["EstatalNacimiento"]; ?></td>
                                    <td><?= $integrante["EstatalAlta"]; ?></td>
                                    <td><?= $integrante["Estatal"]; ?></td>
                                    <td><?= $integrante["Seccional"]; ?></td>
                                    <td><?= $integrante["Municipio"]; ?></td>
                                    <td><?= $integrante["FechaNacimiento"]; ?></td>
                                    <td><?= $integrante["FechaAlta"]; ?></td>
                                    <td><?= $integrante["FechaCuadros"]; ?></td>
                                    <td><?= $integrante["ClaveInt"]; ?></td>
                                    <td><?= $integrante["Nombres"]; ?></td>
                                    <td><?= $integrante["ApellidoPaterno"]; ?></td>
                                    <td><?= $integrante["ApellidoMaterno"]; ?></td>
                                    <td><?= $integrante["Nivel"]; ?></td>
                                    <td><?= $integrante["Sexo"]; ?></td>
                                    <td><?= $integrante["Frente"]; ?></td>
                                    <td><?= $integrante["FrenteOrigen"]; ?></td>
                                    <td><?= $integrante["FrenteDestino"]; ?></td>
                                    <td><?= $integrante["Origen"]; ?></td>
                                    <td><?= $integrante["Colecta"]; ?></td>
                                    <td><?= $integrante["NivelAcade"]; ?></td>
                                    <td><?= $integrante["CarreraProfesion"]; ?></td>
                                    <td><?= $integrante["Titulado"]; ?></td>
                                    <td><?= $integrante["EstadoCivil"]; ?></td>
                                    <td><?= $integrante["Telefono"]; ?></td>
                                    <td><?= $integrante["Mail"]; ?></td>
                                    <td><?= $integrante["Direccion"]; ?></td>
                                    <td><?= $integrante["CodigoPostal"]; ?></td>
                                    <td><?= $integrante["Credencial"]; ?></td>
                                    <td><?= $integrante["Colonia"]; ?></td>
                                    <td><?= $integrante["CalleNumero"]; ?></td>
                                    <td><?= $integrante["CP"]; ?></td>
                                    <td><?= $integrante["CURP"]; ?></td>
                                    <td><?= $integrante["ClaveINE"]; ?></td>
                                    <td><?= $integrante["Responsable"]; ?></td>
                                    <td><?= $integrante["NombreFamiliar"]; ?></td>
                                    <td><?= $integrante["DireccionF"]; ?></td>
                                    <td><?= $integrante["TelefonoF"]; ?></td>
                                    <td><?= $integrante["Facebook"]; ?></td>
                                    <td><?= $integrante["Twitter"]; ?></td>
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