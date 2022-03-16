<?php
/**
 * The template for displaying Author Archive pages
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */

get_header(); ?>


		<?php if ( have_posts() ) : ?>

<?php
/*
* Queue the first post, that way we know
* what author we're dealing with (if that is the case).
*
* We reset this later so we can run the loop
* properly with a call to rewind_posts().
*/
the_post();
?>

<section class="page-title page-title-layout5 bg-overlay">
      <div class="bg-img">
		  <img src="<?=site_url();?>/wp-content/uploads/2022/02/1.jpg" alt="background">
		</div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?=site_url();?>">Home</a></li>
				  <li class="breadcrumb-item">Author</li>
                <li class="breadcrumb-item active" aria-current="page">
				 <?php printf( __( '%s', 'viecellbiotherapeutics' ), '<span class="vcard">' . get_the_author() . '</span>' );?>
				  </li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->
			

			<?php
				/*
				 * Since we called the_post() above, we need
				 * to rewind the loop back to the beginning.
				 * That way we can run the loop properly, in full.
				 */
				rewind_posts();
			?>

			<?php //viecellbiotherapeutics_content_nav( 'nav-above' ); ?>
<section class="blog-grid">
      <div class="container">
        <div class="row">
			<?php
			// Start the Loop.
			while ( have_posts() ) :
			the_post();
			include('blog/blog-grid.php');
			endwhile;
			//viecellbiotherapeutics_content_nav( 'nav-below' );
			?>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 text-center">
            <nav class="pagination-area">
				<?php viecellbiotherapeutics_pagination(); ?>
            </nav><!-- .pagination-area -->
          </div><!-- /.col-12 -->
			
			
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>