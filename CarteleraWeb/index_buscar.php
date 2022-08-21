<?php
include 'php/consulta_buscar.php'
?>
<?php include "views/views_header.php"?>
<body>
    <header class="d-flex justify-content-between align-items-center">
        <div class="text-white fw-bold"><h2 class="boton_principal">Tu cartelera Web</h2></div>
        <div><a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Iniciar sesion</a></div>
    </header>
    <main class="container-fluid row vh-100 p-0 m-0">
        <?php include "views/views_linkmenu.php"?>
            <section class="col-md-10 col-sm-12 p-0">   
               <div class="contenedor_catelera contenedor_img_portada">
                <?php if ($listas): ?>
               <?php foreach ($listas as $lista):?>
                    <div >
                    <a href="index_User.php?id=<?php echo $lista["id"];?>">
                        <img src="<?php echo $lista["portada"];?>" alt="Los Vengadores">
                            <h5 class="mt-3"><?php echo $lista["titulo"];?></h5>
                        </a>
                        <h6 class="text-center"><?php echo $lista["fecha"];?></h6>
                    </div>
                    <?php endforeach; ?>                    
                    <?php else: echo "<h1 class='text-center text-info'>Esta pelicula no se encuentra disponible</h1>";
                    endif; ?>
               </div>
            </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="src/main/scritp.js"></script>
    <script src="DataTables/datatables.min.js"></script>
</body>
</html>