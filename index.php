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
        <section class="banner">
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
        </section>
        <!-- End Banner -->
        <!-- Categorías -->
        <section class="categorias">
            <div class="container-fluid">
                <h2 class="h2-section padding-top-30 padding-bottom-10">Categorías principales</h2>
                <p class="padding-bottom-30">Tenemos 3 categorías madres en las que se basan todos nuestros cursos
                </p>
                <div class="cards-grid">
                <?php
                foreach ($arrcategorias as $categoria)
                {
                    $rutaImagen = homologarRuta($categoria['imagen']);
            		if(!empty($categoria['imagen'])){
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
                <p class="padding-bottom-30"> 3 categorías madres en las que se basan todos nuestros cursos
                <div class="carrusel-cursos">
                    <div class="padding-left-10 padding-right-10">
                        <div class="course-card">
                            <div class="course-card__thumbnail">
                                <img class="course-card__thumbnail-image" src="img/cursos/1.jpg" />
                                <a class="course-card__thumbnail-link" href="http://localhost:81/etur/curso"></a>
                            </div>
                            <div class="course-card__info">
                                <a class="course-card__category" href="http://localhost:81/etur/curso">Matrimonio</a>
                                <h3 class="course-card__headline">
                                    <a class="course-card__headline-link text-truncate" href="http://localhost:81/etur/curso">Curso sobre el amor en la relación entre sexos</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="padding-left-10 padding-right-10">
                        <div class="course-card">
                            <div class="course-card__thumbnail">
                                <img class="course-card__thumbnail-image" src="img/cursos/2.jpg" />
                                <a class="course-card__thumbnail-link" href="http://localhost:81/etur/curso"></a>
                            </div>
                            <div class="course-card__info">
                                <a class="course-card__category" href="http://localhost:81/etur/curso">Alimentación</a>
                                <h3 class="course-card__headline">
                                    <a class="course-card__headline-link text-truncate" href="http://localhost:81/etur/curso">Curso Introducción al mundo del sobrepeso y la obesidad</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="padding-left-10 padding-right-10">
                        <div class="course-card">
                            <div class="course-card__thumbnail">
                                <img class="course-card__thumbnail-image" src="img/cursos/3.jpg" />
                                <a class="course-card__thumbnail-link" href="http://localhost:81/etur/curso"></a>
                            </div>
                            <div class="course-card__info">
                                <a class="course-card__category" href="http://localhost:81/etur/curso">Inversión</a>
                                <h3 class="course-card__headline">
                                    <a class="course-card__headline-link text-truncate" href="http://localhost:81/etur/curso">Curso de Introducción a los mercados bursátiles</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="padding-left-10 padding-right-10">
                        <div class="course-card">
                            <div class="course-card__thumbnail">
                                <img class="course-card__thumbnail-image" src="img/cursos/4.jpg" />
                                <a class="course-card__thumbnail-link" href="http://localhost:81/etur/curso"></a>
                            </div>
                            <div class="course-card__info">
                                <a class="course-card__category" href="http://localhost:81/etur/curso">Deportes</a>
                                <h3 class="course-card__headline">
                                    <a class="course-card__headline-link text-truncate" href="http://localhost:81/etur/curso">Curso Sentadillas para glúteos</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="padding-left-10 padding-right-10">
                        <div class="course-card">
                            <div class="course-card__thumbnail">
                                <img class="course-card__thumbnail-image" src="img/cursos/5.jpg" />
                                <a class="course-card__thumbnail-link" href="http://localhost:81/etur/curso"></a>
                            </div>
                            <div class="course-card__info">
                                <a class="course-card__category" href="http://localhost:81/etur/curso">Pareja</a>
                                <h3 class="course-card__headline">
                                    <a class="course-card__headline-link text-truncate" href="http://localhost:81/etur/curso">Curso celos entre parejas</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="padding-left-10 padding-right-10">
                        <div class="course-card">
                            <div class="course-card__thumbnail">
                                <img class="course-card__thumbnail-image" src="img/cursos/6.jpg" />
                                <a class="course-card__thumbnail-link" href="http://localhost:81/etur/curso"></a>
                            </div>
                            <div class="course-card__info">
                                <a class="course-card__category" href="http://localhost:81/etur/curso">Ahorro</a>
                                <h3 class="course-card__headline">
                                    <a class="course-card__headline-link text-truncate" href="http://localhost:81/etur/curso">Curso de Soluciones financieras en el hogar</a>
                                </h3>
                            </div>
                        </div>
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
