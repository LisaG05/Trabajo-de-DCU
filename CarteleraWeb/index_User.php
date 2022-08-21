<!DOCTYPE html>
<?php
include 'php/consulta_user.php'
?>
<?php include "views/views_header.php"?>
<body>
    <header class="d-flex justify-content-between align-items-center">
        <div class="text-white fw-bold"><h2 class="boton_principal">Tu cartelera Web</h2></div>
        <div><a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Iniciar sesion</a></div>
    </header>
    <main class="container-fluid row vh-100 p-0 m-0">
        <?php include "views/views_linkmenu.php" ?>
        <section class="col-md-10 col-sm-12 p-0">
            <div class="contenedor_link">
            <?php if($listas):foreach($listas as $lista): ?>
                <div class="cont_portada">
                    <section class="">
                        <div class="portada_img">
                        <img src="<?php echo $lista["portada"];?>" alt="Los Vengadores">
                        </div>
                    </section>
                    <section class="info_portada">
                        <h4>Titulo</h4>
                        <h5><?php echo $lista["titulo"];?></h5>
                        <h4>Fecha de lazanmiento</h4>
                        <h6><?php echo $lista["fecha"];?></h6>
                        <h4>Directores</h4>
                        <h6><?php echo $lista["directores"];?></h6>
                        <h4>Actor</h4>
                        <h6><?php echo $lista["actor"];?></h6>
                        <h4>Resumen</h4>
                        <div class="resumen">
                            <label><?php echo $lista["resumen"];?></label>
                        </div>
                    </section>
                </div>
                    <div class="trailer_portada">
                        <?php echo ('<iframe src="'.$lista['trailer'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');?>
                    </div>
                    <?php endforeach; ?>
                    <?php else : ?>
                        <h1>Sin datos</h1>
                     <?php endif; ?>
                </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="src/main/scritp.js"></script>
</body>
</html>