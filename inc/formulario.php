<?php

function captura_de_valores_del_formulario(){

    $nombre = sanitize_text_field( $_POST['nombre']);
    $email = sanitize_text_field( $_POST['email']);
    $telefono = sanitize_text_field( $_POST['telefono']);
    $mensaje = sanitize_text_field( $_POST['mensaje']);

    wp_mail("LeonEmilioBernal@gmail.com", "Formulario de contacto", $mensaje . " Numero de telefono: " .$telefono . " Email: " .$email);
    wp_redirect(add_query_arg(array('exito' => '1' ), get_home_url() . "/contacto" ));exit;
}

add_action('admin_post_nopriv_contactform','captura_de_valores_del_formulario');
add_action('admin_post_contactform','captura_de_valores_del_formulario');