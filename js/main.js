const btnDepartamentos = document.getElementById('btn-departamentos'),
    btnCerrarMenu = document.getElementById('btn-menu-cerrar'),
    grid = document.getElementById('grid'),
    contenedorEnlacesNav = document.querySelector('#menu .contenedor-enlaces-nav'),
    contenedorSubCategorias = document.querySelector('#grid .contenedor-subcategorias'),
    esDispositivoMovil = () => window.innerWidth <= 800;

btnDepartamentos.addEventListener('mouseover', () => {
    if (!esDispositivoMovil()) {
        grid.classList.add('activo');
    }
});

grid.addEventListener('mouseleave', () => {
    if (!esDispositivoMovil()) {
        grid.classList.remove('activo');
    }
});

document.querySelectorAll('#menu .categorias a').forEach((elemento) => {
    elemento.addEventListener('mouseenter', (e) => {
        if (!esDispositivoMovil()) {
            document.querySelectorAll('#menu .subcategoria').forEach((categoria) => {
                categoria.classList.remove('activo');
                if (categoria.dataset.categoria == e.target.dataset.categoria) {
                    categoria.classList.add('activo');
                    contenedorSubCategorias.style.display = 'block';
                }
            });
        };
    });
});

// EventListeners para dispositivo movil.
document.querySelector('#btn-menu-barras').addEventListener('click', (e) => {
    e.preventDefault();
    if (contenedorEnlacesNav.classList.contains('activo')) {
        contenedorEnlacesNav.classList.remove('activo');
        document.querySelector('body').style.overflow = 'visible';
    } else {
        contenedorEnlacesNav.classList.add('activo');
        document.querySelector('body').style.overflow = 'hidden';
    }
});

// Click en boton de todos los departamentos (Para version movil).
btnDepartamentos.addEventListener('click', (e) => {
    e.preventDefault();
    grid.classList.add('activo');
    btnCerrarMenu.classList.add('activo');
});

// Boton de regresar en el menu de categorias
document.querySelector('#grid .categorias .btn-regresar').addEventListener('click', (e) => {
    e.preventDefault();
    grid.classList.remove('activo');
    btnCerrarMenu.classList.remove('activo');
});

document.querySelectorAll('#menu .categorias a').forEach((elemento) => {
    elemento.addEventListener('click', (e) => {
        if (esDispositivoMovil()) {
            contenedorSubCategorias.classList.add('activo');
            contenedorSubCategorias.style.display = 'block';
            document.querySelectorAll('#menu .subcategoria').forEach((categoria) => {
                categoria.classList.remove('activo');
                if (categoria.dataset.categoria == e.target.dataset.categoria) {
                    categoria.classList.add('activo');
                }
            });
        }
    });
});

// Boton de regresar en el menu de categorias
document.querySelectorAll('#grid .contenedor-subcategorias .btn-regresar').forEach((boton) => {
    boton.addEventListener('click', (e) => {
        e.preventDefault();
        contenedorSubCategorias.classList.remove('activo');
    });
});

btnCerrarMenu.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelectorAll('#menu .activo').forEach((elemento) => {
        elemento.classList.remove('activo');
    });
    document.querySelector('body').style.overflow = 'visible';
});


/* ------------------------------------------------------------------------
    Menú pegajoso
------------------------------------------------------------------------ */
$(document).ready(function () {
    /*var altura = $('.menu').offset().top + 200;
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > altura) {
            $('.menu').addClass('menu-fixed');
            $('.menu-fixed').addClass('fadeInDown');
            $('.menu-fixed').removeClass('fadeOutUp');
            $('.menu-fixed').addClass('animated');
        } else {
            $('.menu').removeClass('menu-fixed');
            $('.menu').removeClass('fadeInDown');
            $('.menu-fixed').addClass('fadeInUp');
            $('.menu-fixed').removeClass('fadeOutUp');
        }
    });*/
    /* ------------------------------------------------------------------------
    Buscador
    ------------------------------------------------------------------------ */
    $('.search-trigger').on('click', function () {
        $('.search-container').fadeIn();
        $('.search-container').css('display', 'flex');
    });
    $('.header-search-close').on('click', function () {
        $('.search-container').fadeOut();
    });
    /* ------------------------------------------------------------------------
    Carrusel cursos
    ------------------------------------------------------------------------ */
    $('.carrusel-cursos').slick({
        dots: false,
        nav: true,
        infinite: false,
        speed: 300,
        useCSS: true,
        cssEase: 'linear',
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
                },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
                },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
    });
});
