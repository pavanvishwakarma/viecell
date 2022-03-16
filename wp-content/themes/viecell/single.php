<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */

get_header(); ?>
<?php
while ( have_posts() ) :
the_post();
?>

<?php get_template_part( 'content', get_post_format() ); ?>

<!-- <nav class="nav-single">
<h3 class="assistive-text"><?php _e( 'Post navigation', 'viecellbiotherapeutics' ); ?></h3>
<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'viecellbiotherapeutics' ) . '</span> %title' ); ?></span>
<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'viecellbiotherapeutics' ) . '</span>' ); ?></span>
</nav> -->
<!-- .nav-single -->

<?php //comments_template( '', true ); ?>

<?php endwhile; // End of the loop. ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
