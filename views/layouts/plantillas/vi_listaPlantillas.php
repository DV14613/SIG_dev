<?php require_once BASE_RELATIVE_VIEWS . 'layouts/common/head.php'; ?>
<style>
    .selected {
        background-color: #000;
    }

    .selected:hover {
        background-color: #0585c0;
    }
</style>

<body>
    <div class="container">
        <h1 class="headline text-center">SIG</h1>
        <div class="row">
            <div class="col-12  d-flex justify-content-center ">Descargar Plantillas</div>

            <div class="row ">
                <div class="col-6  col-md-6  my-1">
                    
                        <p>Área: Plantillas</p>
                    
                </div>
                <div class="col-6 col-md-6 my-1 d-flex justify-content-end">
                    <button type="button" class="btn btn-dark" onclick="document.location='<?= BASE_URL . 'Dashboard/mapaProcesos'; ?>'"><i class="bi bi-house-fill"></i></button>
                    
                </div>
            </div>

        </div>

        <!-- Tabla -->
        <div class="table-responsive">
            <table id="tblDatos" class="table table-light">
                <thead>
                    <tr class="table-active">
                        <th>Descargar</th>
                        <th>Nombre Documento</th>
                        <th>Estado</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Estructura TBODY-->
                    <tr>
                        <td>
                            <!--   <a href="" data-bs-toggle="modal" data-bs-target="#myModal1" title="Modificar Soat"><i class="bi bi-gear-fill" style="font-size:30px"></i></a> -->
                            <div class="row">
                                <div class="col-12 col-lg-6 my-1">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#myModal1" class="btn btn-dark " onclick="" title="Descargar"><i class="bi bi-cloud-download"></i></button>
                                </div>
                                <!--MODAL JUSTIFICACION *************************-->
                               
                                <!-- #myModal1 -->
                                <div class="modal" id="myModal1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">

                                            <!-- Modal Cabecera -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Justificación Descarga Plantilla</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal Cuerpo -->
                                            <div class="modal-body">
                                                <div class="col-12 col-md-12 " style="text-align: left;">
                                                    <div class="row my-1">
                                                        <div class="input-group my-2">
                                                            <span class="input-group-text col-12 col-md-12" id="inputGroupPrepend">Nombre Documento</span>
                                                            <label class="form-control">GD-FR-001_Formato_Rotulo_de_Carpetas_V1.1</label>
                                                        </div>
                                                    </div>
                                                    <div class="row my-1 ">
                                                        <div class="col-4  col-md-4 ">
                                                            <div class="col-12  col-md-12">Destinatario</div>
                                                        </div>
                                                        <div class="col-8 col-md-8">
                                                            <div class="col-12  col-md-12"><input type="text" class="form-control" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-1 ">
                                                        <div class="col-4  col-md-4 ">
                                                            <div class="col-12  col-md-12">Funcionario Vinculado</div>
                                                        </div>
                                                        <div class="col-8 col-md-8">
                                                            <div class="col-12  col-md-12"><input type="text" class="form-control" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-1">
                                                        <div class="col-4  col-md-4 ">
                                                            <div class="col-12  col-md-12">Justificación</div>
                                                        </div>
                                                        <div class="col-8 col-md-8">
                                                            <div class="col-12  col-md-12"><textarea name="" class="form-control" id="" cols="30" rows="10"></textarea> </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                                <!-- Pendiente redireccion onClick  -->
                                                <button type="button" class="btn" style="background-color:#990000; color:white" data-bs-dismiss="modal" onClick=""><i class="bi bi-cloud-download"></i> Descargar </button>
                                                <button type="button" class="btn btn-secondary" style="height:40px" data-bs-dismiss="modal">Cancelar</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--FIN-- MODAL #myModal1 JUSTIFICACION *************************-->
                            </div>
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
                        <th>Descargar</th>
                        <th>Nombre Documento</th>
                        <th>Estado</th>
                        <th>Descripcion</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div id="respuestaGeneral"></div>
    <!-- Cargue de redireccionador por metodo Post -->
    <?php require_once BASE_RELATIVE_VIEWS . 'layouts/common/reenviador.php'; ?>
</body>

</html>