<?php
get_header();
printf('
    <main class="container pt-4 pb-5">
        <div class="row">
');
if(have_posts()):
    while(have_posts()):
        the_post();
            $template_html = '
                    
                <div class="col-12 col-md-6 col-lg-4 ">
                    <h1>%s</h1>
					<div>%s</div>

					<small class="text-muted">%s</small>
                    <p class="pt-3">%s</p>
                    <a href="%s" class="btn btn-primary">Ver mas</a>
                </div>
                                        
                ';
                printf( 
                    $template_html,
                    get_the_title(),
                    get_the_post_thumbnail( $post_id, 'medium', array( 'alt' => get_the_title() ) ),
                    get_the_date(),
                    get_the_excerpt(),
                    get_the_permalink()
                    );
    endwhile;

else:
    echo '<p>No hay entradas</p>';
endif;

printf('
        </div>
    </main>
');
get_footer();