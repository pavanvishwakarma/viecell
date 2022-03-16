<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */

get_header(); ?>
<style>
.video-banner-layout3 img {
    width: 100%;
}
</style>
    <section class="page-title page-title-layout2 bg-overlay text-center pb-0">
      <div class="bg-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/page-titles/3.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
            <div class="pagetitle__icon">
              <i class="icon-microscope"></i>
            </div>
            <h1 class="pagetitle__heading"><?php the_title();?></h1>
<!--             <p class="pagetitle__desc mb-30">Pathology is the study of disease. It is the bridge between science and
              medicine.
              It underpins every aspect of patient care, from diagnostic testing and treatment advice to using
              cutting-edge genetic technologies and preventing disease.
            </p> -->
            <a href="#services" class="scroll-down"><i class="fas fa-long-arrow-alt-down"></i></a>
          </div><!-- /.col-xl-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section id="services" class=" pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 service-content">
            <div class="text-block mb-50">
              <div class="video-banner-layout3 bg-overlay mb-30">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="banner">
              </div><!-- /.video-banner -->
              <div class="widget-plan mb-30 text-block__desc">
				   <div class="widget__body"><?php the_content();?>
				  </div>
				</div>
            </div><!-- /.text-block -->
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <?php require get_template_directory() . '/services-sidebar.php';?>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>


<?php if( have_rows('mobile_app_sections') ): 
require get_template_directory() . '/services/mobile_app_development.php'; ?>
<?php endif;?>

<?php if( have_rows('web_development_sections') ): 
require get_template_directory() . '/services/web_development.php'; ?>
<?php endif;?>

<?php if( have_rows('customer_software_sections') ): 
require get_template_directory() . '/services/customer_software.php'; ?>
<?php endif;?>

<?php if( have_rows('ui_ux_sections') ): 
require get_template_directory() . '/services/ui_ux_development.php'; ?>
<?php endif;?>


<?php if( have_rows('team_augmentation_sections') ): 
require get_template_directory() . '/services/team_augmentation.php'; ?>
<?php endif;?>


<?php if( have_rows('mvp_development_sections') ): 
require get_template_directory() . '/services/mvp_development.php'; ?>
<?php endif;?>

<?php get_footer(); ?>
