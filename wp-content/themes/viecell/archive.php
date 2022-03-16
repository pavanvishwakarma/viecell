<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, viecellbiotherapeutics already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */

get_header(); ?>



		<?php if ( have_posts() ) : ?>

<!-- ========================
       page title 
    =========================== -->
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
                <li class="breadcrumb-item active" aria-current="page">
				  	<?php
				if ( is_day() ) {
					/* translators: %s: Date. */
					printf( __( 'Daily Archives: %s', 'viecellbiotherapeutics' ), '<span>' . get_the_date() . '</span>' );
				} elseif ( is_month() ) {
					/* translators: %s: Date. */
					printf( __( 'Monthly Archives: %s', 'viecellbiotherapeutics' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'viecellbiotherapeutics' ) ) . '</span>' );
				} elseif ( is_year() ) {
					/* translators: %s: Date. */
					printf( __( 'Yearly Archives: %s', 'viecellbiotherapeutics' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'viecellbiotherapeutics' ) ) . '</span>' );
				} else {
					_e( 'Archives', 'viecellbiotherapeutics' );
				}
				?>
				  </li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

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
