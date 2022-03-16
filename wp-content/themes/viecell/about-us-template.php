<?php 

/**
* Template Name: About Us
*
*/

get_header();
?>

<?php while ( have_rows('sections') ) : the_row();?>
 <?php if( get_row_layout() == 'who_we_are' ) :
       $main_heading = get_sub_field('main_heading');
       $content = get_sub_field('content'); 
       $image = get_sub_field('image');
?>

<style>
.video-banner img {
    border-radius: 15px;
    width: 100%;
}
</style>
    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
			  <?php if( !empty($main_heading) ): ?>
            <div class="heading-layout2">
              <h3 class="heading__title mb-40"><?php echo esc_html( $main_heading ); ?></h3>
            </div><!-- /heading -->
			  <?php endif; ?>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__Text">
				<?php if( !empty($content) ): ?>
               <div class="mb-30 text-justify">
                 <?php echo $content;?>
               </div>
           		<?php endif; ?>
            </div>
          </div><!-- /.col-lg-6 -->
			<?php if( !empty($image) ): ?>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="video-banner">
              <img src="<?php echo esc_url( $image ); ?>" alt="about">
            </div><!-- /.video-banner -->
          </div><!-- /.col-lg-6 -->
			<?php endif; ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->
<?php endif; ?>
    <?php endwhile; ?>


<?php  

get_footer();

?>