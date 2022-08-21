<!DOCTYPE html>
<html lang="en">
<?php include "views/views_header.php"?>
<body>
    <header class="d-flex justify-content-between align-items-center">
        <div class="text-white fw-bold"><h2>Tu cartelera Web</h2></div>
        <div><a class="btn btn-warning" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Cerrar sesion</a></div>
    </header>
    <main class="container_adm">
        <h3 class="text-center mt-3">Agregar nueva movie</h3>
        <form id="form_data" class="row m-3 g-3" enctype="multipart/form-data">
            <div class="col-5 portada">
            <input type="hidden" class="form-control" name="id">
            <label for="nameId" class="form-label porta">Portada</label>
                <input type="file" class="form-control" id="nameId" name="portada" required>
            </div>
            <div class="col-3 titulo">
                <label for="nameId" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="nameId" name="titulo" required>
            </div>
            <div class="col-2 directores">
                <label for="nameId" class="form-label">Directores</label>
                <input type="text" class="form-control" id="nameId" name="directores" required>
            </div>
            <div class="col-2 actor">
                <label for="nameId" class="form-label">Actor</label>
                <input type="text" class="form-control" id="nameId" name="actor" required>
            </div>
            <div class="col-3 fecha">
                <div class="row">
                    <div class="col-12">
                        <label for="nameId" class="form-label">Fecha de extreno</label>
                        <input type="text" class="form-control" id="nameId" name="fecha" required>
                    </div>
                    <div class="col-12 ">
                        <label for="nameId" class="form-label">Trailer</label>
                        <input type="text" class="form-control" id="nameId" name="trailer" required>
                    </div>
                </div>
            </div>
            <div class="col-6 resumen">
                <label for="validationTextarea" class="form-label">Resumen</label>
                <textarea class="form-control" id="validationTextarea" name="resumen" placeholder="Required example textarea" required></textarea>
                <div class="invalid-feedback">
                  Please enter a message in the textarea.
                </div>
              </div>
            <div class="col-3 ">
                <div class="row">
                    <div class="col-12 grupo mb-3 categoria">
                        <select class="form-select" required aria-label="select example" name="categoria">
                          <option class="select_cat" value="">Categoria</option>
                          <option value="Terror">Terror</option>
                          <option value="Accion">Accion</option>
                          <option value="Anime">Anime</option>
                          <!-- <option value="Terror" selected="selected">Terror</option> -->
                          <option value="Romantica">Romantica</option>
                        </select>
                        <div class="invalid-feedback">Example invalid select feedback</div>
                      </div>
                    <div class="col-12">
                        <button type="button" id="btn_guardar" class="btn btn-primary w-100">Enviar</button>
                        <button type="button" id="btn_actualizar" class="btn btn-success none w-100">Actualizar</button>
                    </div>
                </div>

            </div>
        </form>  
        <div class="data_table px-3">
        <table id="tablaUsuarios" class="table table-striped table-bordered table-hover text-center" style="width:100%;">
            <thead class="bg-primary text-white">
                <tr>
                    <th>id</th>
                    <th>Portada</th>
                    <th>tiulo</th>
                    <th>directores</th>
                    <th>actor</th> 
                    <th>fecha</th> 
                    <th>trailer</th> 
                    <th>resumen</th> 
                    <th>categoria</th> 
                    <th>accion</th> 
                </tr>
            </thead>
            <tbody>
            </tbody>
            </table>            
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script src="src/main/scritp.js"></script>
</body>
</html>