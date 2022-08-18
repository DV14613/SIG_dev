<?php include BASE_RELATIVE_VIEWS . '/layouts/common/head.php'; ?>
<!--MODIFICAR CATEGORIA-->

<body>
    <div class="admin-contenedor">
        <?php require_once BASE_RELATIVE_VIEWS . 'layouts/common/menu_admin.php'; ?>
        <div class="admin-menu">
            <div class="admin-header">
                <div>
                    <h1 class="headline">
                        Sistema Integrado de Gestión
                    </h1>
                    <p class="sub-headline">
                        Cargar Plantilla
                    </p>
                </div>
            </div>
            <div class="admin-contenido">
                <form name="frmGuardar" id="frmGuardar" class="" class="row g-3 needs-validation was-validated">
                    <div class="col-12 col-md-12">
                        <label for="nombre" class="form-label">Nombre Documento *</label>
                        <input type="text" name="nombre" id="nombre" value="" class="form-control" required>
                    </div>
                    <div class="col-12 col-md-12">
                        <label for="Descripcion" class="form-label" >Descripción Corta *</label>
                        <textarea name="" class="form-control" id=""  rows="3"></textarea>
                    </div>
                    <div class="col-12 col-md-12">
                        <label for="plantilla" class="form-label">Seleccione el tipo de plantilla *</label>
                        <select name="" id="" class="form-control">
                            <option>Seleccione una plantilla</option>
                            <option>Plantilla 1</option>
                            <option>Plantilla 2</option>
                            <option>Plantilla 3</option>
                        </select>
                    </div>
                    <div class="col-md-12 d-grid justify-content-center">
                        <label for="uploadFile" style="text-align: center;" class="form-label">Selecione el archivo en formato <br>Word - Excel- PDF</label>
                        <input id="uploadFile" name="uploadFile" type="file" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.pps,.ppsx,.jpg,.jpeg" class="form-control">
                    </div>

                    
                    
                    <!-- Componentes Funcionales -->
                    <div id="respuestaGeneral"></div>

                    <input type="hidden" name="idUser" id="idUser" value="<?= $_SESSION["idUser"] ?>">
                    <!-- fin Componentes Funcionales -->
                    <br>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex justify-content-end">                            
                            <div class="d-grid col-12 col-md-6 my-2"><button type="reset" class="btn btn-dark" onclick="document.location='<?= BASE_URL . 'Dashboard/dashboard'; ?>'">Cancelar</button></div>
                        </div>

                        <div class="col-12 col-md-6 d-flex justify-content-star">
                            <div class="col-12 col-md-6 d-grid gap-2 my-2"><button type="submit" name="btnGuardar" id="btnGuardar" class="btn btn-dark"> Guardar</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Cargue de redireccionador por metodo Post -->
    <?php require_once BASE_RELATIVE_VIEWS . 'layouts/common/reenviador.php'; ?>
</body>
</html>
