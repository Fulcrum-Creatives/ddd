<?php
/*
Template Name: Homepage
*/
get_header();
get_template_part( 'template-parts/entry/home', 'copy' );
get_template_part( 'template-parts/entry/case', 'studies' );
get_template_part( 'template-parts/entry/news' );
get_template_part( 'template-parts/partials/case-studies', 'button' );
get_template_part( 'template-parts/entry/affiliate', 'features' );
get_template_part( 'template-parts/entry/clients' );
get_footer(); 
?>