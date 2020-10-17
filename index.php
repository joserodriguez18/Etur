    <?php $titulo_pagina = "Etur"; ?>
    <!-- Header -->
    <?php
    include("includes/indexinc.php");
    include("includes/header.php");
    ?>
    <!-- End Header -->
    <!-- Main -->
    <main>
        <!-- Banner -->
        <!-- <section class="banner">
            <div class="banner--image-container">
                <img src="img/main-banner/5.jpg" alt="">
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
        </section> -->
        <section>
            <div>
                <img src="img/main-banner/5.jpg" class="img-fluid" alt="">
            </div>
        </section>
        <!-- End Banner -->
        <!-- Categorías -->
        <section class="categorias">
            <div class="container-fluid padding-bottom-20">
                <h2 class="h2-section padding-bottom-10">Categorías principales</h2>
                <p class="padding-bottom-30">Tenemos 3 categorías generales en las que se basan todos nuestros cursos
                </p>
                <div class="cards-grid">
                    <?php
                    foreach ($arrcategorias as $categoria) {
                        $rutaImagen = homologarRuta($categoria['imagen']);
                        if (!empty($categoria['imagen'])) {
                    ?>
                            <a href="categoria/<?php echo strtolower($categoria['categoria']); ?>" class="card_categoria">
                                <img class="card_categoria__icon" src="<?php echo $rutaImagen; ?>" alt="">
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
        <!-- Pestañas -->
        <section class="nuevos-cursos">
            <div class="container-fluid">
                <h2 class="h2-section padding-bottom-10">Los más populares</h2>
                <p class="padding-bottom-30"> 3 categorías madres en las que se basan todos nuestros cursos</p>
                <div class="carrusel-cursos">
                    <div class="padding-left-10 padding-right-10">
                        <a href="#" class="card-course__link">
                            <div class="card-course">
                                <div class="card-course__thumbnail">
                                    <img class="card-course__thumbnail-img" src="img/cursos/1.jpg">
                                </div>
                                <div class="card-course__content">
                                    <div class="card-course__name">
                                        Curso Introducción al mundo del sobrepeso y la obesidad.
                                    </div>
                                    <div class="card-course__instrcutor">
                                        Julio Londoño
                                    </div>
                                    <div class="card-course__price">
                                        18.990&nbsp;COP$
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="padding-left-10 padding-right-10">
                        <a href="#" class="card-course__link">
                            <div class="card-course">
                                <div class="card-course__thumbnail">
                                    <img class="card-course__thumbnail-img" src="img/cursos/2.jpg">
                                </div>
                                <div class="card-course__content">
                                    <div class="card-course__name">
                                        Curso de alimentación para deportes extremos.
                                    </div>
                                    <div class="card-course__instrcutor">
                                        Jose Rodriguez
                                    </div>
                                    <div class="card-course__price">
                                        Gratis
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pestañas -->
        <!-- Conviértete en instructor -->
        <section class="parallax">
            <div class="parallax__background" style="--image-url: url(../img/main-banner/1.jpg)"></div>
            <div class="parallax__overlay"></div>
            <div class="parallax__content">
                <div class="container margin-top-100 margin-bottom-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Conviértete en instructor</h1>
                            <p>Proporcionamos las herramientas y las habilidades para que enseñes lo que te apasiona.</p>
                            <a href="#" class="btn btn-large btn-primary">Empieza a enseñar hoy mismo</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Conviértete en instructor -->
        <!-- Conviértete en estudiante -->
        <section class="estudiantes-seccion">
            <div class="estudiantes-seccion__hero-img-container">
                <img src="img/estudiantes.png" alt="Tres personas utilizando sus dispositivos electrónicos" style="max-width: 400px; max-height: 250px;">
            </div>
            <div class="estudiantes-seccion__content-container">
                <p>
                    <span>
                        <strong>
                            Da el siguiente paso
                        </strong>
                        hacia tus metas personales y profesionales con Coursera.
                    </span>
                </p>
                <span class="subtitle">
                    Únete ahora para recibir recomendaciones personalizadas del catálogo completo de Coursera.
                </span>
                <button class="btn btn-primary" type="button">
                    Únete de forma gratuita
                </button>
                <div class="estudiantes-seccion__red-half-circle-container">
                    <img src="img/red-dotted-half-circle.png" alt="" style="max-width: 178px; max-height: 90px;">
                </div>
            </div>
        </section>
        <!-- End Conviértete en estudiante -->
    </main>
    <!-- End Main -->
    <!-- Footer -->
    <?php include("includes/footer.php"); ?>
    <!-- End Footer -->