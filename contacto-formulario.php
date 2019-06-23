<!doctype html>
<html lang="<?php bloginfo('languaje'); ?>">
<head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/logo.ico" type="image/x-icon">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title>Labtic</title>
    <?php wp_head(); ?>
</head>

<body>

    <!-- Encabezado y menú de navegación / Header and navbar -->
    <header class="container-fluid shadow p-3 mb-3 bg-white rounded">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <a href="index.html"><img class="logo float-left p-3" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logo de labtic"></a>
                    <h1><strong>LabTIC&nbsp;-&nbsp;Unitec</strong></h1>
                    <p class="text-secondary">Laboratorio de hardware y software de la facultad de ingeniería de la
                        UNLP.</p>
                </div>
                <div class="col-12 col-md-6">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="nav nav-pills flex-nowrap">
                            <li class="nav-item">
                                <a href="<?php bloginfo('url'); ?>" class="nav-link active">
                                    <i class="fa fa-fw fa-home fa-lg"></i>Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php bloginfo('url'); ?>/mapa-del-sitio" class="nav-link">
                                    <i class="fa fa-fw fa-globe fa-lg"></i>Mapa del sitio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php bloginfo('template_url'); ?>/contacto.html" class="nav-link">
                                    <i class="fa fa-fw fa-lg -o fa-envelope"></i>Contacto
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Formulario de contacto / Form contact -->
    <main class="container mt-5">
        <h2 class="text-primary font-weight-bold pb-3">Contacto</h2>
        <p>
            En LabTIC tenemos las puertas abiertas a la comunidad para recibir todos aquellos comentarios, inquietudes,
            consultas o
            pedido de asesoramiento que sean necesarios.
            <br>
            <br>
            A continuación ingrese sus datos en el siguiente formulario para realizar una consulta o solicitar
            información. Le
            responderemos a la mayor brevedad posible. No dudes en comunicarte también por nuestra vía telefónica al +54
            221
            422-7628 de lunes a viernes de 9 a 18 hs.
        </p>
        <form action="contacto.php" method="POST" class="border border-light p-5">
            <div class="row">
                <div class="col-lg-4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" class="form-control mb-4" placeholder="Nombre" required>
                </div>

                <div class="col-lg-4">
                    <label for="email">Dirección de E-mail:</label>
                    <input type="email" id="email" class="form-control mb-4" placeholder="E-mail" requiered>
                </div>

                <div class="col-lg-4">
                    <label for="telefono">Número de teléfono:</label>
                    <input type="tel" id="telefono" class="form-control mb-4" placeholder="Teléfono">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="comentarios">Mensaje:</label>
                        <textarea name="comentarios" class="form-control rounded-0" id="comentarios" rows="9"
                            placeholder="Mensaje" required></textarea>
                    </div>
                    <button class="btn btn-info" type="submit">Enviar</button>
                </div>
            </div>
        </form>
        <a href="index.html">
            <p class="text-primary mb-5"><i class="fa fa-w fa-home fa-lg"></i>Volver a la página de inicio</p>
        </a>
    </main>

   <!-- Pie de pagina / Footer page -->
    <footer class="footer container-fluid bg-primary text-white mt-auto pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h3 class="titulosDelFooter">Lab<strong>TIC</strong>- UNITEC</h3>
                    <p>Departamento de Electrónica
                        <br>Facultad de Ingeniería
                        <br>Universidad Nacional de La Plata
                        <br>
                        <br>Calle 116 y 48, 2º Piso, La Plata
                        <br>Teléfono: +54 221 422-7628
                    </p>
                    <ul class="listaDeRedesSociales" id="redesSociales">
                        <li>
                            <a href="https://www.facebook.com/uid.unitec/">
                                <i class="fa fa-2x fa-facebook-square fa-fw text-inverse iconoRedesSociales"></i>
                                <span class="descripcionLectorDePantalla descripcionLectorDePantallaFocus">Ir a facebook unitec</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/labtic-unitec">
                                <i class="fa fa-2x fa-github-square fa-fw text-inverse iconoRedesSociales"></i>
                                <span class="descripcionLectorDePantalla descripcionLectorDePantallaFocus">Ir a Github de labtic unitec</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-2x fa-rss-square fa-fw text-inverse iconoRedesSociales"></i>
                                <span class="descripcionLectorDePantalla descripcionLectorDePantallaFocus">Suscribirse a este sitio web por RSS</span>
                            </a>
                        </li>
                    </ul>
                    <hr class="d-xl-none d-sm-block d-md-none">
                </div>
                <div class="col-12 col-md-4">
                    <h3 class="titulosDelFooter">Como llegar</h3>
                    <p>
                        Camino accesible con rampas y ascensor.
                        <br>
                        Entrada desde calle 1 y 48, facultad de ciencias exactas.
                    </p>
                    <p class="descripcionLectorDePantalla descripcionLectorDePantallaFocus">
                        En el siguiente video se ve como llegar al laboratorio desde la entrada de la facultad de ciencias exactas en calle 1 y 48.
                        En el video se muestra como llegar por un camino accesible con rampas y asensor. El lugar es un predio con varios edificios y jardines que se 
                        deben atravezar para poder llegar al laboratorio ubicado en calle 116 y 48, segundo piso.
                        Para llegar al laboratorio desde aqui se debe entrar desde esta entrada en 1 y 48 y caminar 100 metros derecho hasta llegar a la facultad de electrotecnia.
                        Una vez alli se puede entrar a través de escaleras o rampas que estan detras de la entrada principal del edificio.
                        El laboratorio esta ubicado en el segundo piso al cual se puede llegar por ascensor o escaleras.
                        Para llegar al ascensor se debe llegar al hall principal a traves de los pasillos, el asensor se encuentra en el pasillo derecho del hall principal
                        y tiene inscripción en braille en su puerta para llamar al ascensor y un sonido que indica cuando llega a nuestro piso al llamarlo.
                        Los botones del ascensor tambien tienen inscripcion en braille.
                        Marcamos el botón para ir al segundo piso.
                        Al llegar al segundo piso el ascensor emite un sonido.
                        Estando en el segundo piso al abrir la puerta del ascensor estaremos en justo frente de la puerta del laboratorio que tiene una inscripción en
                        braille y un timbre.
                        Se recomienda contactar con el laboratorio por telefono o mail antes de ir personalmente.
                    </p>
                    <div class="video">
                        <iframe class="border-0 pt-2" src="https://www.youtube.com/embed/qHMMSkLm24I"
                             allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <hr class="d-xl-none d-sm-block d-md-none">
                </div>
                <div class="col-12 col-md-4">
                    <h3 class="titulosDelFooter float-md-right">Sitios relacionados</h3>
                    <ul class="d-flex flex-row float-md-right" id="sitiosRelacionados">
                        <li>
                            <a href="https://www.facebook.com/uid.unitec/">
                                <img src="<?php bloginfo('template_url'); ?>/img/LogoUNITEC.png" class="logoDeSitiosRelacionados" alt="Logo del laboratorio Unitec">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/img/LogoEDETEC.png" class="logoDeSitiosRelacionados" alt="Logo del laboratorio de Edetec">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/img/LogoLATE.png" class="logoDeSitiosRelacionados" alt="Logo del laboratorio de Late">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <small class="float-right">Labtic-Unitec. 2019</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php wp_footer(); ?>
</body>

</html>