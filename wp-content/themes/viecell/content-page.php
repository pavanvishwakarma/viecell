<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */
?>
<style>
#process .content{
    background: #fcfcfc;
    padding: 35px;
    border-radius: 8px;
}
.float-right {
    float: right;
}
</style>
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
				  <?php the_title();?>
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
            <div class="row pb-70">
                <div class="col-md-12 info">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>

                </div>
            </div>

            <?php edit_post_link( __( 'Edit', 'viecellbiotherapeutics' ), '<span class="edit-link float-right">', '</span>' ); ?>
        </div>

    </div>
</div>







