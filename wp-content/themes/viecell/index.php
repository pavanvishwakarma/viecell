<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
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
				  Blogs
				  </li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

<!-- ======================
      Blog Grid
    ========================= -->
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

<?php
if ( current_user_can( 'edit_posts' ) ) :
// Show a different message to a logged-in user who can add posts.
?>

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
				  <?php _e( 'No posts to display', 'viecellbiotherapeutics' ); ?>
				  </li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

<section class="default-padding">
    <div id="process" class="work-process-area ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                	<div class="site-heading text-center">
	                  <h2><?php _e( 'No posts to display', 'viecellbiotherapeutics' ); ?></h2>
	                  <p>
						<?php
						  /* translators: %s: Post editor URL. */
						  printf( __( 'Ready to publish your first post? <br/><br/><a href="%s" class="btn btn__secondary btn__rounded ">Get started here</a>.', 'viecellbiotherapeutics' ), admin_url( 'post-new.php' ) );
						  ?>
						</p>
	               	</div>
                </div>
            </div>
        </div>
    </div>
</section>
				<?php
			else :
				// Show the default message to everyone else.
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
                <li class="breadcrumb-item active" aria-current="page">
				  <?php _e( 'Nothing Found', 'viecellbiotherapeutics' ); ?>
				  </li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->


<section class="default-padding">
    <div id="process" class="work-process-area ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                	<div class="site-heading text-center">
	                  <h2><?php _e( 'Nothing Found', 'viecellbiotherapeutics' ); ?></h2>
	                  <p>
						<?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'viecellbiotherapeutics' ); ?>
						</p>
	               	</div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; // End current_user_can() check. ?>

<?php endif; // End have_posts() check. ?>



<?php //get_sidebar(); ?>
<?php get_footer(); ?>
