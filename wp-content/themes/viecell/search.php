<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */

get_header(); ?>

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
				  <?php printf( __( 'Search Results for: %s', 'viecellbiotherapeutics' ), '<span>' . get_search_query() . '</span>' );?> 
				  </li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

<?php if ( have_posts() ) : ?>


	<?php //get_template_part( 'content', get_post_format() ); ?>

<section class="default-padding">
  	<div class="container">
		<div class="row row-gap-2">
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="col-md-4 col-sm-12 ">
				<div class="item item-box search-box" style="position: relative;">
					<span class="badge s-badge"><?php echo get_post_type( get_the_ID());?></span>
					<h5 class="post__title">
						<a href="<?php the_permalink();?>">
							<?php $title = get_the_title();
							$trim_title = wp_trim_words( $title, 5, "" );
							echo $trim_title;
							?>
						</a>
					</h5>

					<p class="post__desc"><?php $content = get_the_content(); 
						$trim_cont = wp_trim_words( $content, 10, "" );
						echo $trim_cont;
						?></p>
				</div>
			</div>   

			<?php endwhile; ?>                                                
		</div>
				
		 <div class="row mt-4">
          <div class="col-12 text-center">
            <nav class="pagination-area">
				<?php viecellbiotherapeutics_pagination(); ?>
            </nav><!-- .pagination-area -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
			
	</div>
</section>

<?php //viecellbiotherapeutics_content_nav( 'nav-below' ); ?>

<?php else : ?>

					
<?php //get_search_form(); ?>
<section class="default-padding">
    <div id="process" class="work-process-area ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                	<div class="site-heading text-center">
	                  <h2><?php _e( 'Nothing Found !', 'viecellbiotherapeutics' ); ?></h2>
	                  <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'viecellbiotherapeutics' ); ?></p>
	               	</div>
					<a class="btn btn__secondary btn__rounded " href="<?=site_url();?>">
						<i class="fas fa-arrow-circle-left"></i>
						Back To Home
					</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>


<?php get_footer(); ?>
