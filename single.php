<?php
get_header();
printf('<main class="container pt-4 pb-5">');
if(have_posts()):
    while(have_posts()):
        the_post();
            $template_html = '
                    
                <div class="col-12">
                    <h2>%s</h2>
                    <div>%s</div>
                </div>
                                        
                ';
                printf( 
                    $template_html,
                    get_the_title(),
                    get_the_content(),
                );
    endwhile;

else:
    echo '<p>No hay entradas</p>';
endif;

printf('</main>');
comments_template();
get_footer();