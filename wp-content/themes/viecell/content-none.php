<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */
?>

<?php //get_search_form(); ?>

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
				  <?php _e( 'Nothing Found', 'viecellbiotherapeutics' ); ?>
				  </li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->


<div class="default-padding">
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
</div>
