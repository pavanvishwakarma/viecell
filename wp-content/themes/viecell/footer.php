<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */
?>

<!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <?php 
             $column_heading = get_field('column_one_heading','option');
             $footer_logo = get_field('footer_logo','option');
             $foot_about_us = get_field('about_us','option');
             ?>
            <div class="col-sm-12 col-md-12 col-lg-3">
              <div class="footer-widget-about">
                <?php if(!empty($column_heading)):?>
                <h6 class="footer-widget__title"><?php echo $column_heading; ?></h6>
                <?php endif;?>


                <?php if($footer_logo):?>
                <img src="<?php echo $footer_logo;?>" alt="logo" class="mb-30 footer-logo">
              <?php endif;?>


                <p class="color-gray">
                  <?php echo $foot_about_us; ?>
                </p>
                <!-- <a href="appointment.html" class="btn btn__primary btn__primary-style2 btn__link">
                  <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                </a> -->
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
              <div class="footer-widget-nav">
                

                <?php 
                $column_two_heading = get_field('column_two_heading','option');
                if(!empty($column_two_heading)):?>
                <h6 class="footer-widget__title"><?php echo $column_two_heading; ?></h6>
                <?php endif;?>
                <nav>
                  
                  <?php 
                   $footer_links = get_field('links','option');
                   wp_nav_menu( array(
                     'theme_location'    => $footer_links['value'],
                     'container'         => 'ul',
                     'menu_class'        => 'list-unstyled'
                   )
                 );
                 ?>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2">
              <div class="footer-widget-nav">
                <?php 
                $column_three_heading = get_field('column_three_heading','option');
                if(!empty($column_three_heading)):?>
                <h6 class="footer-widget__title"><?php echo $column_three_heading; ?></h6>
                <?php endif;?>
                <nav>
                  
                  <?php 
                   $footer_three_links = get_field('three_links','option');
                   wp_nav_menu( array(
                     'theme_location'    => $footer_three_links['value'],
                     'container'         => 'ul',
                     'menu_class'        => 'list-unstyled'
                   )
                 );
                 ?>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="footer-widget-contact">

                <?php 
                $column_four_heading = get_field('column_four_heading','option');
                $quick_contacts = get_field('quick_contacts','option');

                $quick_text = $quick_contacts['text'];
                $quick_address = $quick_contacts['address'];
                $quick_email = $quick_contacts['email'];
                $quick_phone = $quick_contacts['phone'];

                if(!empty($column_four_heading)):?>
                <h6 class="footer-widget__title color-heading"><?php echo $column_four_heading; ?></h6>
                <?php endif;?>
                <ul class="contact-list list-unstyled">
                  <?php if (!empty($quick_text)): ?>
                  <li><?php echo $quick_text ;?></li>
                  <?php endif;?>

                  <?php if (!empty($quick_phone)): ?>
                  <li>
                    <a href="tel:<?php echo $quick_phone ;?>" class="phone__number">
                      <i class="icon-phone"></i> <span><?php echo $quick_phone ;?></span>
                    </a>
                  </li>
                  <?php endif;?>

                  <?php if (!empty($quick_email)): ?>
                  <li>
                    <a href="mailto:<?php echo $quick_email ;?>" class="phone__number email">
                      <i class="icon-email"></i> <span><?php echo $quick_email ;?></span>
                    </a>
                  </li>
                  <?php endif;?>
                  
                  <?php if (!empty($quick_address)): ?>
                  <li class="color-body"><?php echo $quick_address ;?></li>
                  <?php endif;?>
                </ul>
                <div class="d-flex align-items-center">
                  <!-- <a href="contact-us.html" class="btn btn__primary btn__link mr-30">
                    <i class="icon-arrow-right"></i> <span>Get Directions</span>
                  </a> -->
                  <?php 
                  $footer_social_media = get_field('footer_social_media','option');
                    $foot_facebook = $footer_social_media['facebook'];
                    $foot_twitter = $footer_social_media['twitter'];
                    $foot_instagram = $footer_social_media['instagram'];
                    $foot_linkedin = $footer_social_media['linkedin'];
                    $foot_skype = $footer_social_media['skype'];
                    $foot_whatsapp = $footer_social_media['whatsapp'];
                  ?>
                  <ul class="social-icons list-unstyled mb-0">
                    <?php if (!empty($foot_facebook)): ?>
                    <li><a href="<?php echo $foot_facebook;?>"><i class="fab fa-facebook-f"></i></a></li>
                    <?php endif;?>

                    <?php if (!empty($foot_twitter)): ?>
                    <li><a href="<?php echo $foot_twitter;?>"><i class="fab fa-twitter"></i></a></li>
                    <?php endif;?>

                    <?php if (!empty($foot_instagram)): ?>
                    <li><a href="<?php echo $foot_instagram;?>"><i class="fab fa-instagram"></i></a></li>
                    <?php endif;?>

                    <?php if (!empty($foot_linkedin)): ?>
                    <li><a href="<?php echo $foot_linkedin;?>"><i class="fab fa-linkedin"></i></a></li>
                    <?php endif;?>

                    <?php if (!empty($foot_skype)): ?>
                    <li><a href="<?php echo $foot_skype;?>"><i class="fab fa-skype"></i></a></li>
                    <?php endif;?>

                    <?php if (!empty($foot_whatsapp)): ?>
                    <li><a href="<?php echo $foot_whatsapp;?>"><i class="fab fa-whatsapp"></i></a></li>
                    <?php endif;?>

                  </ul><!-- /.social-icons -->

                </div>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <?php
              $copy_right = get_field('copy_right','option');
              $bottom_links = get_field('bottom_links','option');
              ?>
              <span class="fz-14"><?php echo $copy_right;?></span>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <nav>
                 <?php 
                   wp_nav_menu( array(
                     'theme_location'    => $bottom_links['value'],
                     'container'         => 'ul',
                     'menu_class'        => 'list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0'
                   )
                 );
                 ?>
              </nav>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div>
  <!-- /.wrapper -->



  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/plugins.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/main.js"></script>
<?php wp_footer();?>
</body>
</html>

