<?php 
/*
https://codex.wordpress.org/Function_Reference/comments_template
https://codex.wordpress.org/Function_Reference/comment_form
http://codex.wordpress.org/Function_Reference/wp_list_comments
*/
printf('<section class="container form-group">');
	comment_form();
	printf('<ol class="form-row">');
		wp_list_comments();
	printf('</ol>');
printf('</section>');