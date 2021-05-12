<?php 
    /* Template Name: Home template*/ 
?>

<?php get_header() ;?>

<div class="header-image">
    <img src="<?php echo get_template_directory_uri() . '-child/img/header-img.jpg' ;?>" alt="header image">
</div>

<?php the_content() ;?>


<?php get_footer() ;?>