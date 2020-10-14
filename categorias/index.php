<?php $titulo_pagina = "Etur"; ?>
    <!-- Header -->
    <?php
        include("../includes/categoriasinc.php");
        include("../includes/header.php");
    ?>
    <!-- End Header -->
    <!-- Main -->
    <main>
        <!-- Banner -->
        <section class="banner">
            <div class="banner--image-container">
                <img src="../img/main-banner/5.jpg" alt="">
            </div>
            <div class="banner--content-box">
                <h1 class="">Aprenda en su horario</h1>
                <p class="">Estudie cualquier tema, en cualquier momento. Explore más de 30 cursos en 3 categorías diferentes.</p>
                <form action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control border-x" placeholder="¿Qué quieres aprender?">
                        <div class="input-group-append border-x">
                            <button class="btn btn-default" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Banner -->
        <!-- Categorías -->
        <section class="categorias">
            <div class="container-fluid">
                <div class="cards-grid margin-top-30">
                <?php
                foreach ($arrcategorias as $categoria)
                {
                    $rutaImagen = homologarRuta($categoria['imagen']);
            		if(!empty($categoria['imagen'])){
            	?>
                <a href="<?php echo $categoria['categoria']; ?>" class="card_categoria">
                    <img class="card_categoria__icon" src="../<?php echo $rutaImagen; ?>" alt="">
                    <div class="card_categoria__body">
                        <h4 class="card_categoria__head"><?php echo homologarTexto($categoria['categoria']); ?></h4>
                    </div>
                </a>
                <?php
                    }  
                }
                ?>
                </div>
            </div>
        </section>
        <!-- End Categorías -->
    </main>
    <!-- End Main -->
    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>
    <!-- End Footer -->
