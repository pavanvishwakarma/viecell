<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="google-site-verification" content="AsWioKWO8lruiTMX2XbqLujfSv3NhvJH5QbRyBVFpDE" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">

<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/libraries.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css">
<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>


   <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">

      <?php
      $top_email = get_field('email','option');
      $top_phone = get_field('phone','option');
      $work_timing = get_field('work_timing','option');

      $top_social_media = get_field('social_media','option');
        $top_facebook = $top_social_media['facebook'];
        $top_twitter = $top_social_media['twitter'];
        $top_instagram = $top_social_media['instagram'];
        $top_linkedin = $top_social_media['linkedin'];
        $top_whatsapp = $top_social_media['whatsapp'];
        $top_skype = $top_social_media['skype'];

      $top_search_form = get_field('search_form','option');
      ?>
      <?php 
      if( $top_email !== "" || $top_phone !== "" || $top_search_form !== "" || $top_facebook !== "" || $top_twitter !== "" || $top_instagram !== "" || $top_linkedin !== "" || $top_whatsapp !== "" || $top_skype !== "") { ?>
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="topbar contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <?php if( !empty($top_phone) ){ ?>
                  <li>
                    <i class="icon-phone"></i><a href="tel:<?php echo $top_phone;?>"><?php echo $top_phone;?></a>
                  </li>
                  <?php }?>

                  <?php if( !empty($top_email) ){ ?>
                  <li>
                    <i class="icon-email"></i><a href="mailto:<?php echo $top_email;?>?subject=Enquiry&amp;body=Dear Sir"><?php echo $top_email;?></a>
                  </li>
                  <?php }?>

                  <?php if( !empty($work_timing) ){ ?>
                  <li>
                    <i class="icon-clock"></i><a href="#"><?php echo $work_timing;?></a>
                  </li>
                  <?php }?>
                  
                </ul><!-- /.contact__list -->
                <div class="d-flex">

                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <?php if(!empty($top_facebook)){ ?>
                    <li><a href="<?php echo $top_facebook;?>"><i class="fab fa-facebook-f"></i></a></li>
                    <?php } ?>

                    <?php if(!empty($top_twitter)){ ?>
                    <li><a href="<?php echo $top_twitter;?>"><i class="fab fa-twitter"></i></a></li>
                    <?php } ?>

                    <?php if(!empty($top_instagram)){ ?>
                    <li><a href="<?php echo $top_instagram;?>"><i class="fab fa-instagram"></i></a></li>
                    <?php } ?>

                    <?php if(!empty($top_linkedin)){ ?>
                    <li><a href="<?php echo $top_linkedin;?>"><i class="fab fa-linkedin"></i></a></li>
                    <?php } ?>

                    <?php if(!empty($top_whatsapp)){ ?>
                    <li><a href="<?php echo $top_whatsapp;?>"><i class="fab fa-whatsapp"></i></a></li>
                    <?php } ?>

                    <?php if(!empty($top_skype)){ ?>
                    <li><a href="<?php echo $top_skype;?>"><i class="fab fa-skype"></i></a></li>
                    <?php } ?>

                  </ul><!-- /.social-icons -->
                  <?php echo $top_search_form; ?>
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
    <?php } ?>

      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php
            $header_logo = get_field('logo','option');
            if ( ! empty( $header_logo ) ) :
               ?>
            <img src="<?php echo esc_url( $header_logo ); ?>" class="logo-dark" alt="viecellbiotherapeutics" />
         <?php else : ?>
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/01/logo.png" class="logo-dark" alt="logo">
            <?php endif; ?>
            
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <!-- /.navbar-nav -->
             <?php 
             $header_nav_menu = get_field('nav_menu','option');
             wp_nav_menu( array(
               'theme_location'    => $header_nav_menu['value'],
               'container'         => 'ul',
               'menu_class'        => 'navbar-nav ml-auto',
               'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
               'walker'            => new WP_Bootstrap_Navwalker() )
           );
           ?>
          
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flexx align-items-center position-relative ml-30">
            <div class="miniPopup-departments-trigger">
              <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span>
              <a href="departments.html">Departments</a>
            </div>
            <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Neurology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Cardiology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Pathology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Laboratory Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Pediatric Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Cardiac Clinic</a>
              </li><!-- /.nav-item -->
            </ul> <!-- /.miniPopup-departments -->
            <a href="appointment.html" class="btn btn__primary btn__rounded ml-30">
              <i class="icon-calendar"></i>
              <span>Appointment</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->