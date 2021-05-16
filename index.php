<?php /*
    Template Name:Main
*/;?>

<?php get_header(); ?>

    <?php
        if(is_home() || is_front_page()):
            get_template_part('templates/home-template');
        else:
            get_template_part('templates/other-page');
        endif;
    ;?>

<?php
get_footer();
