<?php 

/**
* Template Name: All Blogs
*
*/

get_header();
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
				  Blogs
				  </li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
<?php $posts = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'paged' => $paged ) ); ?>
<!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid">
      <div class="container">
        <div class="row">
			<?php
			// Start the Loop.
			while ( $posts->have_posts() ) :
			$posts->the_post();
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
<?php get_footer(); ?>