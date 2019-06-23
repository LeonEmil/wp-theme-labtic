<?php
get_header();

if(have_posts()):
    the_post();

        $template_html = '
				<main class="container pt-4 pb-5">
					<h1>%s</h1>
					<div class="">%s</div>
				</main>
				
			';
			printf( 
				$template_html,
				get_the_title(),
				get_the_content()
			);

else:
    echo '<p>No hay entradas</p>';
endif;


get_footer();