<?php
get_header();
?>

<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-primary">Mapa del sitio</h2> <br>
            <a href="<?php bloginfo('url') ?>/nosotros">Quienes somos</a> <br>
            <a href="<?php bloginfo('url') ?>/category/proyectos">Proyectos</a> <br>
            <a href="<?php bloginfo('url') ?>/category/publicaciones">Publicaciones</a> <br>
            <a href="<?php bloginfo('template_url') ?>/catalogo.pdf">Catálogo de software accesible</a> <br>
            <a href="<?php bloginfo('url') ?>/category/cursos">Cursos</a> <br>
            <a href="<?php bloginfo('url') ?>/como-llegar">Como llegar</a> <br>
            <a href="<?php bloginfo('url') ?>/contacto">Contacto</a> <br>
            <a href="#redesSociales">Redes sociales</a> <br>
            <a href="#sitiosRelacionados">Sitios relacionados</a> <br>
            <a href="<?php bloginfo('url') ?>">
                <p class="text-primary mt-5"><i class="fa fa-w fa-home fa-lg"></i>Volver a la página de inicio</p>
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
?>