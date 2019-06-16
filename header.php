<!doctype html>
<html lang="<?php bloginfo('languaje'); ?>">
<head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
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
                    <a href="index.html"><img class="logo float-left p-3" src="img/logo.png" alt="Logo de labtic"></a>
                    <h1><strong>LabTIC&nbsp;-&nbsp;Unitec</strong></h1>
                    <p class="text-secondary">Laboratorio de hardware y software de la facultad de ingeniería de la
                        UNLP.</p>
                </div>
                <div class="col-12 col-md-6">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="nav nav-pills flex-nowrap">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link active">
                                    <i class="fa fa-fw fa-home fa-lg"></i>Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="mapa-del-sitio.html" class="nav-link">
                                    <i class="fa fa-fw fa-globe fa-lg"></i>Mapa del sitio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="contacto.html" class="nav-link">
                                    <i class="fa fa-fw fa-lg -o fa-envelope"></i>Contacto
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>