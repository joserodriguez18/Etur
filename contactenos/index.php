    <?php $titulo_pagina = "Contáctenos - Etur"; ?>
    <!-- Header -->
    <?php include("../includes/header.php"); ?>
    <!-- End Header -->
    <!-- Main -->
    <main>
        <!-- Contáctenos -->
        <section class="section-contacto" style="background-image: url(../img/main-banner/1.jpg);">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="contact-info">

                                <h2 class="contact-title">¿Tiene alguna pregunta?</h2>
                                <p>Si tienes alguna pregunta sobre cursos, ponte en contacto con nosotros</p>
                                <ul class="contact-info">
                                    <li>
                                        <div class="info-left">
                                            <i class="fas fa-at"></i>
                                        </div>
                                        <div class="info-right">
                                            <h4>info@etur.com.co</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="contact-form">
                                <!--Contact Form-->
                                <form id='contact-form' method='POST'><input type='hidden' name='form-name' value='contactForm' />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" id="first-name" placeholder="Introduzca su nombre *" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Introduzca su correo *" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea rows="4" name="message" class="form-control" id="description" placeholder="Introduzca si mensaje *" required="required"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <!--contact button-->
                                            <button class="btn-big btn btn-bg">
                                                Enviar <i class="fa fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contáctenos -->
    </main>
    <!-- End Main -->
    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>
    <!-- End Footer -->
