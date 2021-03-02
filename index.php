<?php
/**
 * 
 * @package japan
 */
?>

<?php get_header(); ?>

<main id="content" class="site-content">

<?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            get_template_part( 'template-parts/content/content' );
        }
    } else {
        get_template_part( 'template-parts/content/content-none');
    }

?>
</main><!-- /#content /.site-content -->

<?php get_footer(); ?>