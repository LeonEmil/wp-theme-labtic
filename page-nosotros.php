<?php
get_header();
?>

<main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="text-primary font-weight-bold pb-2">Nosotros</h2>
                <p>
                    El Laboratorio de Desarrollo de Software incorporando las herramientas de las Tecnologías de la
                    Información y la
                    Comunicación (LabTIC), es un espacio de etensión perteneciente a la Unidad de Investigación y Desarrollo
                    para la Calidad
                    de la Educación en Ingeniería con orientación al uso de TIC (UNITEC), formado por un grupo
                    interdisciplinario de
                    Investigadores de la del a UNLP y la CIC-PBA, Profesores de la UNLP, y alumnos avanzados de colegios
                    secundarios quienes
                    realizan sus PPS.
                </p>
            </div>
        </div>

        <div class="row">
            <article class="col-12 col-md-6 col-lg-4 mb-5">
                <img src="<?php bloginfo('template_url') ?>/img/curso1.jpg" class="img-fluid mb-2" alt="Imagen de proyectos realizados en el laboratorio">
                <h2 class="titulosDePublicaciones"><i class="fa fa-fw fa-lg fa-lightbulb-o"></i>Adaptación de PCs</h2>
                <p>
                    LabTIC como espacio perteneciente a UNITEC, trabaja de manera articulada con otras áreas del laboratorio. En el caso del
                    programa Adaptación de PCs LabTIC se encuentra vinculado con el LATE a fin acondicionar de manera adecuada las PCs que
                    serán entregadas a instituciones que trabajan con personas con discapacidad o particulares.
                    <br>
                    El proceso comienza en LATE, donde las terminales donadas son reacondicionadas y puestas a punto a nivel de hardware:
                    formateo de disco rígido, revisión de placas y componentes internos, instalación de S.O. etc. Una vez finalizada la
                    etapa reacondicionamiento las terminales son recepcionadas en LabTIC donde, de acuerdo a las necesidades y
                    particularidades el usuario, son instalados los diferentes tipos de software asistivo que sean adecuados.
                    <br>
                    Las aplicaciones instaladas son totalmente funcionales, se encuentran actualizadas y son probadas por los alumnos que
                    realizan las PPS antes que las PCs sean entregadas.
                    <br>
                    Si desea saber más sobre los tipos de software asistivo puede acceder al sector de catálogo.
                </p>
                <a href="<?php bloginfo('url') ?>/catalogo.pdf" class="btn btn-primary">Ver catálogo</a>
            </article>
            <article class="col-12 col-md-6 col-lg-4 mb-5">
                <img src="<?php bloginfo('template_url') ?>/img/Proyectos.jpg" class="img-fluid mb-2" alt="Imagen de proyectos realizados en el laboratorio">
                <h2 class="titulosDePublicaciones"><i class="fa fa-fw fa-book fa-lg"></i>Desarrollo de Software</h2>
                <p>
                    Las personas con algún tipo de discapacidad asociada que hacen uso de la PC como herramienta asistiva muchas veces
                    necesitan un tipo de software diseñado a medida de acuerdo a sus particularidades, por ello muchas aplicaciones que se
                    pueden llegar a encontrar desarrollada por terceros a veces, aunque se oriente a los requerimientos pretendidos, no son
                    las adecuadas para un usuario en particular.
                    <br>
                    Entendiendo que esta situación es común en la temática de la discapacidad, se ha creado dentro el espacio de LabTIC un
                    área de desarrollo de aplicaciones asistivas a medida de las necesidades puntuales de un usuario. De esta manera es
                    posible ofrecer una herramienta mucho más útil y adecuada a una persona con discapacidad.
                    <br>
                    Ya desde LabTIC se han desarrollado sistemas para PC orientados a la estimulación motriz e intelectual, y actualmente se
                    está diseñando una aplicación para Android que será utilizada como sistema alternativo de comunicación.
                    <br>
                    Si desea saber más sobre los desarrollos propios de LabTIC puede acceder al sector de Proyectos.
                </p>
                <a href="<?php bloginfo('url') ?>category/proyectos" class="btn btn-primary">Ver proyectos</a>
            </article>
            <article class="col-12 col-md-6 col-lg-4 mb-5">
                <img src="<?php bloginfo('template_url') ?>/img/cursos.jpg" class="img-fluid mb-2" alt="Imagen de proyectos realizados en el laboratorio">
                <h2 class="titulosDePublicaciones"><i class="fa fa-fw fa-lg fa-puzzle-piece"></i>Capacitación</h2>
                <p>
                    Desde 2013 y de manera continua se vienen llevando a cabo en este espacio de extensión Prácticas Profesionalizantes
                    Supervisadas (PPS) dentro de los Procesos de Articulación Universidad-Escuela Media.
                    <br>
                    Actualmente se capacitan a jóvenes estudiantes del 7mo año de la Tecnicatura “Técnico en electrónica” de la E.E.T. N° 6
                    – Albert Thomas. Estos alumnos están haciendo sus primeras experiencias en un laboratorio de investigación y desarrollo,
                    en marco del acuerdo institucional refrendado por la Dirección General de Educación de la Provincia de Buenos Aires
                    firmado entre UNITEC y Escuela Técnica N°6 Albert Thomas.
                    <br>
                    Entre las actividades que desarrollan se encuentran: guiar, asesorar e instruir a los estudiantes en el desarrollo de
                    proyectos de perfil técnico-investigativos, aportando la experiencia en este tipo de tareas de los profesores del
                    LabTIC, la capacitación en aspectos teoricos-práticos respecto al uso de las TIC en la discpacidad, desarrollo de
                    herramientas asistivas para personas con algín tipo de requerimiento, adapatación de PC de acuerdo a las necesidades
                    particulares de lusuario, etc.
                    <br>
                    Estas prácticas son de fundamental importancia para las estrategias cooperativas de trabajo entre Universidad y Escuelas
                    de nivel medio como forma de futura inserción laboral y apoyo a los últimos años de estudios secundarios como bisagra
                    para el ingreso y captación de alumnos para realizar estudios universitarios.
                </p>
                <a href="<?php bloginfo('url') ?>/cursos" class="btn btn-primary">Ver cursos</a>
            </article>
        </div>
        <a href="<?php bloginfo('url') ?>"><p class="text-primary"><i class="fa fa-w fa-home fa-lg"></i>Volver a la página de inicio</p></a>
    </main>

<?php
get_footer();
?>