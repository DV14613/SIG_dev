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
                        Administrador de Plantillas
                    </p>
                </div>
            </div>
            <div class="admin-contenido">

                <!-- boton de añadir documento -->
                <div class="row">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="<?= BASE_URL . 'Dashboard/crearPlantilla'; ?>" class="btn btn btn-dark my-2"><i class="bi bi-plus-circle"></i> Añadir Plantilla</a>
                    </div>
                </div>

                
                <!-- Tabla -->
                <div class="table-responsive">
                    <table id="tblDatos" class="table table-light">
                        <thead>
                            <tr class="table-active">
                                <th>Acciones</th>
                                <th>Nombre Documento</th>
                                <th>Estado</th>
                                <th>Descripcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Estructura TBODY-->
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-dark my-1" onclick="" title="Descargar"><i class="bi bi-cloud-download"></i></button>
                                    <button type="button" class="btn btn-dark my-1" onclick="document.location='<?= BASE_URL . 'Dashboard/editarPlantilla'; ?>'" title="Editar"><i class="bi bi-gear-fill"></i></button>
                                    <button type="button" class="btn btn-dark my-1" onclick="document.location='<?= BASE_URL . 'Dashboard/historialPlantilla'; ?>'" title="Historial de uso"><i class="bi bi-clock-history"></i></button>
                                </td>
                                <td>GD-FR-001_Formato_Rotulo_de_Carpetas_V1.1</td>
                                <td>A</td>
                                <td>
                                    <div class="row">
                                        <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">Ver Descripción <i class="bi bi-eye"></i></button>
                                            <div class="collapse" id="collapse1">
                                                <div class="card card-body overflow-auto">Formato donde se registra informacion de serie,subserie y asunto de un expediente</div>
                                            </div>
                                    </div>
                                </td>
                            </tr>
                            <!--FIN Estructura TBODY-->
                        </tbody>
                        <tfoot>
                            <tr class="table-active">
                                <th>Acciones</th>
                                <th>Nombre Documento</th>
                                <th>Estado</th>
                                <th>Descripcion</th>
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