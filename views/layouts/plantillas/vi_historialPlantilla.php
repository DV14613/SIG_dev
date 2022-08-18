<?php require_once BASE_RELATIVE_VIEWS . 'layouts/common/head.php'; ?>
<!--GESTION DE DOCUMENTOS-->

<body>
    <div class="admin-contenedor">
        <?php include BASE_RELATIVE_VIEWS . '/layouts/common/menu_admin.php'; ?>
        <div class="admin-menu">
            <div class="admin-header">
                <div>
                    <h1 class="headline">
                        Sistema Integrado de Gestión
                    </h1>
                    <p class="sub-headline">
                        Historial de Plantillas
                    </p>
                </div>
            </div>
            <div class="admin-contenido">

                <!-- boton de añadir documento -->
                <div class="row">
                        <div class="input-group my-2">
                            <span class="input-group-text col-12 col-md-2" id="inputGroupPrepend">Nombre Documento</span>
                            <label class="form-control">GD-FR-001_Formato_Rotulo_de_Carpetas_V1.1</label>
                        </div>
                </div>


                <!-- Tabla -->
                <div class="table-responsive">
                    <table id="tblDatos" class="table table-light">
                        <thead>
                            <tr class="table-active">
                                <th>Cod Verificación</th>
                                <th>Usuario</th>
                                <th>Fecha/Hora</th>
                                <th>Destinatario</th>
                                <th>Funcionario Vinculado</th>
                                <th>Justificacion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Estructura TBODY-->
                            <tr>
                                <td>HM-JJ-004</td>
                                <td>Jenny Abello</td>
                                <td>12-08-2022 / 9:26am</td>
                                <td>Menzies Base 2</td>
                                <td>Jonathan Marin</td>
                                <td>
                                    <div class="row">
                                        <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">Ver Justificacion <i class="bi bi-eye"></i></button>
                                        <div class="collapse" id="collapse1">
                                            <div class="card card-body overflow-auto">Documento para gestionar el control de rotación de carpetas solicitada por David Puentes.</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!--FIN Estructura TBODY-->
                        </tbody>
                        <tfoot>
                            <tr class="table-active">
                                <th>Cod Verificación</th>
                                <th>Usuario</th>
                                <th>Fecha/Hora</th>
                                <th>Destinatario</th>
                                <th>Funcionario Vinculado</th>
                                <th>Justificacion</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="respuestaGeneral"></div>
    <!-- Cargue de redireccionador por metodo Post -->
    <?php require_once BASE_RELATIVE_VIEWS . 'layouts/common/reenviador.php'; ?>
</body>

</html>