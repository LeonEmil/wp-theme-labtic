<?php
get_header();
?>

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

        <?php if(isset($_GET['exito'])): ?>
        <div class="bg-success">
            <p class="text-white font-weight-bold p-2">El mensaje ha sido enviado.</p>
        </div>
        <?php endif; ?>

        <form action="<?php echo esc_url(admin_url('admin-post.php')) ?>" method="POST" class="border border-light p-5">
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
                        <label for="mensaje">Mensaje:</label>
                        <textarea name="mensaje" class="form-control rounded-0" id="mensaje" rows="9"
                            placeholder="Mensaje" required></textarea>
                    </div>
                    <input class="btn btn-info" type="submit" value="Enviar">
                    <input type="hidden" name="action" value="contactform">
                </div>
            </div>
        </form>
        <a href="<?php bloginfo('url') ?>">
            <p class="text-primary mb-5"><i class="fa fa-w fa-home fa-lg"></i>Volver a la página de inicio</p>
        </a>
    </main>

<?php
get_footer();
?>