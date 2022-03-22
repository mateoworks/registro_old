<?php 
    headerAdmin($data); 
    $estados = $data["estados"];
    $frentes = $data["frentes"];
    $niveles = $data["niveles"];
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
                        <li class="breadcrumb-item active">Integrantes</li>
                    </ol>
                </div>
                <h4 class="page-title">
                    Integrantes
                </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Agregar integrante</h4>

                    <form class="needs-validation" action="<?= base_url() . "/integrantes/guardar" ?>" method="POST"
                        enctype="multipart/form-data" autocomplete="off" novalidate>
                        <div class="row">
                            <div class="col-8">
                                <div class="mb-3">
                                    <label class="form-label">Clave del integrante</label>
                                    <input type="text" class="form-control" placeholder="Clave" name="clave_int"
                                        required>
                                    <small id="emailHelp" class="form-text text-muted">
                                        Debe ser único, si no se tiene una clave, puede usar la CURP o la clave de
                                        Credencial
                                    </small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nombre(s) del integrante</label>
                                    <input type="text" class="form-control" placeholder="Juan" name="nombres" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Apellido paterno</label>
                                    <input type="text" class="form-control" placeholder="Barrera" required
                                        name="apellido_paterno">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Apellido materno</label>
                                    <input type="text" class="form-control" placeholder="Barrera"
                                        name="apellido_materno">
                                    <small id="emailHelp" class="form-text text-muted">
                                        Si no tiene apellido materno, dejar vacío
                                    </small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nivel</label>
                                    <select class="form-control select2" data-toggle="select2" name="nivel_id" required>
                                        <option disabled value="" selected>Selecciona un nivel</option>
                                        <?php foreach($niveles as $nivel){ ?>
                                        <option value="<?= $nivel->id; ?>"><?= $nivel->abrev_nivel ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Sexo</label>
                                    <select class="form-select mb-3" name="sexo" required>
                                        <option selected disabled value="">Selecciona el sexo</option>
                                        <option value="H">Hombre</option>
                                        <option value="M">Mujer</option>
                                        <option value="X">No binario</option>
                                    </select>
                                </div>

                                <div class="mb-3 position-relative" id="datepicker4">
                                    <label class="form-label">Fecha de nacimiento</label>
                                    <input type="text" name="fecha_nacimiento" class="form-control"
                                        data-provide="datepicker" data-date-autoclose="true"
                                        data-date-container="#datepicker4" required value=""
                                        data-date-format="yyyy-mm-dd" autocomplete="off">
                                </div>

                                <div class="mb-3 position-relative" id="datepicker4">
                                    <label class="form-label">Fecha de alta al antorchismo</label>
                                    <input type="text" name="fecha_alta" class="form-control" data-provide="datepicker"
                                        data-date-autoclose="true" data-date-container="#datepicker4" required value=""
                                        data-date-format="yyyy-mm-dd" autocomplete="off">
                                </div>

                                <div class="mb-3 position-relative" id="datepicker4">
                                    <label class="form-label">Fecha de asistencia a escuela de cuadros</label>
                                    <input type="text" name="fecha_cuadros" class="form-control"
                                        data-provide="datepicker" data-date-autoclose="true"
                                        data-date-container="#datepicker4" data-date-format="yyyy-mm-dd"
                                        autocomplete="off">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Estado de alta
                                        <span class="text-danger">*Obligatorio</span>
                                    </label>
                                    <select class="form-control select2" data-toggle="select2" name="estado_alta_id"
                                        required>
                                        <option value="" disabled selected>Selecciona estado</option>
                                        <?php foreach($estados as $estado){ ?>
                                        <option value="<?= $estado->id; ?>"><?= $estado->nombre ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Estado de nacimiento
                                        <span class="text-danger">*Obligatorio</span>
                                    </label>
                                    <select class="form-control select2" data-toggle="select2"
                                        name="estado_nacimiento_id" required>
                                        <option value="" disabled selected>Selecciona estado</option>
                                        <?php foreach($estados as $estado){ ?>
                                        <option value="<?= $estado->id; ?>"><?= $estado->nombre ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Frente origen
                                        <span class="text-danger">*Obligatorio</span>
                                    </label>
                                    <select class="form-control select2" data-toggle="select2" name="frente_origen_id"
                                        required>
                                        <option value="" disabled selected>Selecciona un frente</option>
                                        <?php foreach($frentes as $frente){ ?>
                                        <option value="<?= $frente->id; ?>"><?= $frente->nombre_frente ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Frente destino
                                        <span class="text-danger">*Obligatorio</span>
                                    </label>
                                    <select class="form-control select2" data-toggle="select2" name="frente_destino_id"
                                        required>
                                        <option value="" disabled selected>Selecciona un frente</option>
                                        <?php foreach($frentes as $frente){ ?>
                                        <option value="<?= $frente->id; ?>"><?= $frente->nombre_frente ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Frente actual
                                        <span class="text-danger">*Obligatorio</span>
                                    </label>
                                    <select class="form-control select2" data-toggle="select2" name="frente_id"
                                        required>
                                        <option value="" disabled selected>Selecciona un frente</option>
                                        <?php foreach($frentes as $frente){ ?>
                                        <option value="<?= $frente->id; ?>"><?= $frente->nombre_frente ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Origen</label>
                                    <select class="form-select mb-3" required name="origen">
                                        <option selected value="" disabled>Selecciona el origen</option>
                                        <option value="Campesino">Campesino</option>
                                        <option value="Colono">Colono</option>
                                        <option value="Estudiante">Estudiante</option>
                                        <option value="Obrero">Obrero</option>
                                        <option value="Otro">Otro</option>
                                        <option value="Profesionista">Profesionista</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Colecta</label>
                                    <input type="checkbox" id="colecta" checked data-switch="bool" name="colecta"
                                        value="1" />
                                    <label for="colecta" data-on-label="Sí" data-off-label="No"></label>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nivel académico</label>
                                    <select class="form-select mb-3" required name="nivel_academico">
                                        <option selected value="" disabled>Selecciona el nivel académico</option>
                                        <option value="Doctorado">Doctorado</option>
                                        <option value="Licenciatura-Universidad o Equiv.">Licenciatura-Universidad o
                                            Equivalente</option>
                                        <option value="Maestría-Posgrado">Maestría-Posgrado</option>
                                        <option value="Preparatoria o Equiv.">Preparatoria o Equiv.</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Secundaria</option>
                                        <option value="Sin Estudios">Sin Estudios</option>
                                        <option value="Técnico">Técnico</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Carrera</label>
                                    <input type="text" class="form-control" placeholder="Nombre de la carrera"
                                        name="carrera">
                                    <small id="emailHelp" class="form-text text-muted">
                                        Colocar el nombre de la carrera, si no tiene, dejar vacío
                                    </small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Titulado</label>
                                    <input type="checkbox" id="titulado" checked data-switch="bool" name="titulado"
                                        value="1" />
                                    <label for="titulado" data-on-label="Sí" data-off-label="No"></label>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Estado civil</label>
                                    <select class="form-select mb-3" required name="estado_civil">
                                        <option selected value="" disabled>Selecciona el estado civil</option>
                                        <option value="Casado (a)">Casado (a)</option>
                                        <option value="Divorciado">Divorciado</option>
                                        <option value="Soltero (a)">Soltero (a)</option>
                                        <option value="Viudo (a)">Viudo (a)</option>
                                        <option value="Unión Libre">Unión Libre</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" data-toggle="input-mask"
                                        data-mask-format="(000)-000-0000" name="telefono">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Correo electrónico</label>
                                    <input type="text" class="form-control" placeholder="Correo" name="email">
                                    <small id="emailHelp" class="form-text text-muted">
                                        Si no tiene, dejar vacío.
                                    </small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Colonia</label>
                                    <input type="text" class="form-control" placeholder="El Rosario" name="colonia"
                                        required>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Calle y número</label>
                                    <input type="text" class="form-control" placeholder="Calle ACM No. 1"
                                        name="calle_numero" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Código postal</label>
                                    <input type="text" class="form-control" placeholder="45870" name="codigo_postal"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Credencial</label>
                                    <input type="checkbox" id="switch1" checked data-switch="bool" name="credencial"
                                        value="1" />
                                    <label for="switch1" data-on-label="Sí" data-off-label="No"></label>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">CURP</label>
                                    <input type="text" class="form-control" placeholder="CURP" name="curp" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Clave INE</label>
                                    <input type="text" class="form-control" placeholder="Clave INE" name="clave_ine">
                                    <small id="emailHelp" class="form-text text-muted">
                                        Si no tiene, dejar vacío.
                                    </small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nombre del responsable político</label>
                                    <input type="text" class="form-control" placeholder="Responsable"
                                        name="nombre_responsable" required>
                                    <small id="emailHelp" class="form-text text-muted">
                                        Colocar el nombre completo
                                    </small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nombre del familiar más cercano</label>
                                    <input type="text" class="form-control" placeholder="Nombre del familiar"
                                        name="nombre_familiar">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Dirección del familiar</label>
                                    <input type="text" class="form-control" placeholder="Dirección del familiar"
                                        name="direccion_familiar">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Teléfono del familiar</label>
                                    <input type="text" class="form-control" data-toggle="input-mask"
                                        data-mask-format="(000)-000-0000" name="telefono_familiar">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Link del perfil de Facebook</label>
                                    <input type="text" class="form-control"
                                        placeholder="www.facebook.com/antorchista_100sexy" name="facebook">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Link del perfil de Twitter</label>
                                    <input type="text" class="form-control"
                                        placeholder="www.twitter.com/antorchista_100sexy  o @antorchista_100sexy"
                                        name="twitter">
                                </div>


                                <button type="submit" class="btn btn-primary">Registrar</button>


                            </div>

                            <div class="col-4">

                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto referencial del integrante</label>
                                    <input type="file" id="foto" class="form-control" name="foto">
                                </div>

                                <div class="mb-3">
                                    <label for="foto" class="form-label">Imagen de la credencial de elector</label>
                                    <input type="file" id="imagen_credencial" name="imagen_credencial"
                                        class="form-control">
                                </div>

                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->


<?php footerAdmin($data); ?>