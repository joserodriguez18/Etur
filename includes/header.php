<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/etur/css/bootstrap.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css'>
    <link rel="stylesheet" href="http://localhost/etur/css/estilos.css">
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/etur/img/favicon.png">
    <link rel="stylesheet" href="http://localhost/etur/slick/slick.css">
    <link rel="stylesheet" href="http://localhost/etur/slick/slick-theme.css">
    <title><?php echo $titulo_pagina; ?></title>
</head>

<body>
    <!-- Buscador -->
    <div class="search-container">
        <i class="fa fa-times header-search-close"></i>
        <div class="search-overlay"></div>
        <div class="search">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control border-x" placeholder="¿Qué quieres aprender?">
                    <div class="input-group-append border-x">
                        <button class="btn btn-default" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Buscador -->
    <!-- Menú -->
    <nav class="menu animated" id="menu">
        <div class="container-fluid contenedor-botones-menu">
            <button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
            <button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
            <a href="">
                <img src="http://localhost/etur/img/logo.png" alt="">
            </a>
        </div>

        <div class="container-fluid contenedor-enlaces-nav">
            <div class="contenedor-enlaces-nav-hijo">
                <div class="contenedor-logo">
                    <a href="http://localhost/etur/">
                        <img src="http://localhost/etur/img/logo.png" alt="">
                    </a>
                </div>
                <div class="btn-departamentos" id="btn-departamentos">
                    <p><span>Categorías</span></p>
                    <i class="fas fa-caret-down"></i>
                </div>
            </div>
            <div class="enlaces">
                <a class="link" href="http://localhost/etur/blog/">Blog</a>
                <a class="link" href="http://localhost:8000/admin/login">Iniciar sesión</a>
                <a href="javascript:void(0);" class="search-trigger search-btn link">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>

        <div class="container-fluid contenedor-grid">
            <div class="grid" id="grid">
                <div class="categorias">
                    <button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
                    <h3 class="subtitulo">Categorias</h3>

                    <a href="#" data-categoria="amor">Amor <i class="fas fa-angle-right"></i></a>
                    <a href="#" data-categoria="bienestar">Bienestar <i class="fas fa-angle-right"></i></a>
                    <a href="#" data-categoria="finanzas">Finanzas <i class="fas fa-angle-right"></i></a>
                </div>

                <div class="contenedor-subcategorias">
                    <div class="subcategoria " data-categoria="amor">
                        <div class="enlaces-subcategoria">
                            <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                            <h3 class="subtitulo">Subcategorías</h3>
                            <a href="#">Matrimonio</a>
                            <a href="#">Hijos</a>
                            <a href="#">Pareja</a>
                        </div>

                        <div class="banner-subcategoria">
                            <a href="#">
                                <img src="http://localhost/etur/img/main-banner/slider_amor.png" alt="">
                            </a>
                        </div>

                        <div class="galeria-subcategoria">
                            <a href="#">
                                <img src="http://localhost/etur/img/tecnologia-galeria-1.png" alt="">
                            </a>
                            <a href="#">
                                <img src="http://localhost/etur/img/tecnologia-galeria-2.png" alt="">
                            </a>
                            <a href="#">
                                <img src="http://localhost/etur/img/tecnologia-galeria-3.png" alt="">
                            </a>
                            <a href="#">
                                <img src="http://localhost/etur/img/tecnologia-galeria-4.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="subcategoria" data-categoria="bienestar">
                        <div class="enlaces-subcategoria">
                            <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                            <h3 class="subtitulo">Subcategorías</h3>
                            <a href="#">Alimentación</a>
                            <a href="#">Salud</a>
                            <a href="#">Deportes</a>
                        </div>

                        <div class="banner-subcategoria">
                            <a href="#">
                                <img src="http://localhost/etur/img/main-banner/slider_bienestar.png" alt="">
                            </a>
                        </div>

                        <div class="galeria-subcategoria">
                            <a href="#">
                                <img src="http://localhost/etur/img/libros-galeria-1.png" alt="">
                            </a>
                            <a href="#">
                                <img src="http://localhost/etur/img/libros-galeria-2.png" alt="">
                            </a>
                            <a href="#">
                                <img src="http://localhost/etur/img/libros-galeria-3.png" alt="">
                            </a>
                            <a href="#">
                                <img src="http://localhost/etur/img/libros-galeria-4.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="subcategoria" data-categoria="finanzas">
                        <div class="enlaces-subcategoria">
                            <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                            <h3 class="subtitulo">Subcategorías</h3>
                            <a href="#">Inversión</a>
                            <a href="#">Ahorro</a>
                            <a href="#">Bienes Raíces</a>
                        </div>

                        <div class="banner-subcategoria">
                            <a href="#">
                                <img src="http://localhost/etur/img/main-banner/slider_finanzas.png" alt="">
                            </a>
                        </div>

                        <div class="galeria-subcategoria">
                            <a href="#">
                                <img src="http://localhost/etur/img/ropa-galeria-1.png" alt="">
                            </a>
                            <a href="#">
                                <img src="http://localhost/etur/img/ropa-galeria-2.png" alt="">
                            </a>
                            <a href="#">
                                <img src="http://localhost/etur/img/ropa-galeria-3.png" alt="">
                            </a>
                            <a href="#">
                                <img src="http://localhost/etur/img/ropa-galeria-4.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Menú -->