<?php 

/**
* Template Name: Home
*
*/

get_header();
?>

    <!-- ============================
        Slider
    ============================== -->
   <section class="slider slider-centerd">
      <div class="slick-carousel m-slides-0 carousel-arrows-light carousel-dots-light"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
        
      <?php
      if( have_rows('slides', 'option') ):
         while( have_rows('slides', 'option') ) : the_row();
            $sub_value = get_sub_field('title', 'option'); ?>
            <?php 
               $slide_background_image = get_sub_field('background_image','option');
               $slide_title = get_sub_field('title','option');
               $slide_sub_title = get_sub_field('sub_title','option');
               $slide_button = get_sub_field('button','option');
            ?>
      <div class="slide-item align-v-h">
         <div class="bg-img">
            <img src="<?php echo $slide_background_image;?>" alt="slide img">
         </div>
         <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                <div class="slide__content">
                  <h2 class="slide__title color-white"><?php echo $slide_title;?></h2>
                  <p class="slide__desc color-white"><?php echo $slide_sub_title;?></p>
                  <div class="d-flex flex-wrap justify-content-center align-items-center">
                     <?php 
                     if( $slide_button ): 
                         $link_url = $slide_button['url'];
                         $link_title = $slide_button['title'];
                         $link_target = $slide_button['target'] ? $slide_button['target'] : '_self';
                         ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" class="btn btn__white btn__rounded mr-30" target="<?php echo esc_attr( $link_target ); ?>">
                      <span><?php echo esc_html( $link_title ); ?></span>
                      <i class="icon-arrow-right"></i>
                    </a>
                     <?php endif; ?>
                    
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
         </div><!-- /.container -->
      </div><!-- /.slide-item -->
      <?php
           endwhile;
       else :
       endif;?>
      </div><!-- /.carousel -->
    </section><!-- /.slider -->



<?php while ( have_rows('sections') ) : the_row();?>
 <?php if( get_row_layout() == 'section_1' ) :
       $section_1_heading = get_sub_field('section_1_heading');
       $background_image = get_sub_field('background_image');
    ?>
<!-- ======================
     Work Process 
    ========================= -->
   <section class="work-process work-process-carousel pt-130 pb-80 bg-overlay bg-overlay-secondary">
      
      <?php if(!empty($background_image)):?>
      <div class="bg-img">
         <img src="<?php echo esc_url( $background_image ); ?>" alt="background">
      </div>
      <?php endif; ?>
      

      <div class="container">

        <div class="row heading-layout2">
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
            <?php if(!empty($section_1_heading)):?>
            <h3 class="heading__title color-white"><?php echo $section_1_heading;?></h3>
            <?php endif; ?>
          </div><!-- /.col-xl-5 -->

         <?php
         if( have_rows('contents') ):
            $i = 1;
             while( have_rows('contents') ) : the_row(); 
                 $content = get_sub_field('content'); ?>
            <div class="<?php if($i == 1){ ?> col-sm-12 col-md-12 col-lg-7 <?php }else{ ?> col-sm-12 col-md-12 col-lg-12 <?php } ?> ">
               <p class="heading__desc font-weight-bold color-gray mb-40 text-justify">
                 <?php echo $content;?>
               </p>
            </div><!-- /.col-xl-6 -->
            <?php 
            $i++; endwhile;
         else :
            // Do something...
         endif; 
         ?>

        </div><!-- /.row -->
        
       </div>
    </section>
    <?php endif; ?>
    <?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'section_2' ) :
      $section_2_heading = get_sub_field('section_2_heading');
    ?>
   <section class="work-process work-process-carousel pt-50 pb-80 bg-overlay bg-overlay-secondaryy">
      <div class="bg-img">
         <img src="<?php echo esc_url( $background_image ); ?>" alt="background">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 mt-50">
            <h5 class="color-white"><?php echo $section_2_heading;?></h5>
            <div class="carousel-container mt-40">
               <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": true, "dots": true, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>

                <?php
               if( have_rows('services') ):
                  $a = 1;
                   while( have_rows('services') ) : the_row(); 
                       $services_image = get_sub_field('image');
                       $services_name = get_sub_field('name');
                       $services_content = get_sub_field('content');
                       ?>
                <!-- process item #1 -->
                  <div class="process-item">
                     <span class="process__number">0<?php echo $a++;?></span>
                     <div class="process__icon service-imgg">
                       <!-- <i class="icon-health-report"></i> -->
                       <i class="icon-stethoscope"></i>
                       
                       <!-- <img src="<?php //echo $services_image;?>"> -->
                     </div><!-- /.process__icon -->
                     <h4 class="process__title"><?php echo $services_name;?></h4>
                     <p class="process__desc"><?php echo $services_content;?></p>
                     <!-- <a href="#" class="btn btn__secondary btn__link">
                       <span>Doctors’ Timetable</span>
                       <i class="icon-arrow-right"></i>
                     </a> -->
                  </div><!-- /.process-item -->
                   <?php 
                      endwhile;
                  else :
                     // Do something...
                  endif; 
                  ?>

              </div><!-- /.carousel -->
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->

        

      </div><!-- /.container -->

    </section><!-- /.Work Process -->
    <?php endif; ?>
<?php endwhile; ?>




<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'section_3' ) :
      $section_3_heading = get_sub_field('section_3_heading');
      $section_3_image = get_sub_field('image');
    ?>
    <!-- ========================
        About Layout 5
      =========================== -->
    <section class="about-layout5 pt-80 pb-50">
      <div class="container">
        <div class="row">
         <?php if(!empty($section_3_image)): ?>
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="map-wrapper mb-50">
              <img src="<?php echo $section_3_image;?>" class="who-img" alt="map">
            </div><!-- /.map-wrapper -->
          </div><!-- /.col-lg-6 -->
         <?php endif; ?>

          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1" id="accordion">
            <?php if(!empty($section_3_heading)): ?>
            <div class="heading-layout2">
              <h3 class="heading__title mb-80"><?php echo $section_3_heading;?></h3>
            </div><!-- /heading -->
            <?php endif; ?>

            <?php
            if( have_rows('accordions') ):
               $x = 1;
               $y = 1;
               while( have_rows('accordions') ) : the_row(); 
                  $accor_title = get_sub_field('title');
                  $accor_content = get_sub_field('content');
              ?>
            <?php if(!empty($accor_title)): ?>
            <div class="accordion-item <?php if($x == 1){ ?> opened <?php } ?>">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse<?php echo $x++;?>">
                <a class="accordion__title" href="#"><?php echo $accor_title;?></a>
              </div><!-- /.accordion-item-header -->
              <div class="collapse <?php if($y == 1){ ?> show <?php } ?>" id="collapse<?php echo $y++;?>"  data-parent="#accordion">
                <div class="accordion__body">
                  <p>
                  <?php echo $accor_content;?>
                  </p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <?php endif; ?>
            <?php 
                $b++; endwhile;
            else :
               // Do something...
            endif; 
            ?>
         
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 5 -->
    <?php endif; ?>
<?php endwhile; ?>




<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'section_4' ) :
      $section_4_image = get_sub_field('images');
    ?>
    <!-- ==========================
        contact layout 3
    =========================== -->
    <section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
      <div class="bg-img">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banners/3.jpg" alt="banner">
      </div>
      <div class="container">
        <div class="row">
          
          
            <?php if( have_rows('our_vision_mission') ): ?>
         <div class="col-sm-12 col-md-12 col-lg-7">     
               <?php $z = 1;
               while( have_rows('our_vision_mission') ) : the_row(); 
                  $our_vi_mi_title = get_sub_field('title');
                  $our_vi_mi_content = get_sub_field('content');
              ?>
            <div class="heading heading-light mb-30 <?php if($z != 1){ ?> text__block <?php } ?> ">
              <h3 class="heading__title mb-20"><?php echo $our_vi_mi_title;?></h3>
              <p class="heading__desc"><?php echo $our_vi_mi_content;?> </p>
            </div>
         <?php $z++; endwhile; ?>
        
          </div><!-- /.col-lg-5 -->
           <?php endif; ?>
          <?php //if(!empty($section_4_image)): ?>
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="contact-panel vi-mi-img">
              <img src="<?php echo $section_4_image; ?>">
            </div>
          </div><!-- /.col-lg-7 -->
          <?php //endif; ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 3 -->
    <?php endif; ?>
<?php endwhile; ?>

<?php  

get_footer();

?>