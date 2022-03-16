<?php 

/**
* Template Name: Home Static
*
*/

get_header(); ?>


<style>
.bg-overlay-blue-gradient:before {
    background-color: transparent;
    background-image: linear-gradient(180deg,#38521ab5 21%,#989933bf 86%);
}
.bg-overlay-primary:before {
    background-color: rgb(18 18 18 / 67%);
}
.features-layout1:after {
    height: 135px;
}

.font-25{
  font-size: 25px !important;
}
.background-position-top{
  background-position: top !important;
}
.feature-item .feature__img {
    bottom: 0;
}
.about-layout5 {
    margin: 0px 0px 80px;
    background: #f9f9f2;
    border-radius: 0px;
}
.bio-img {
    border-radius: 20px;
    box-shadow: 0px 12px 45px -15px #a9a9a9;
}
.testimonials-layout1{
	margin: 0 0px;		
}
</style>




<!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel m-slides-0" data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
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
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title"><?php echo $slide_title;?></h2>
                  <p class="slide__desc"><?php echo $slide_sub_title;?></p>
                  <div class="d-flex flex-wrap align-items-center">
					   <?php 
                     if( $slide_button ): 
                         $link_url = $slide_button['url'];
                         $link_title = $slide_button['title'];
                         $link_target = $slide_button['target'] ? $slide_button['target'] : '_self';
                         ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" class="btn btn__primary btn__rounded" target="<?php echo esc_attr( $link_target ); ?>">
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
       $sec_1_contents = get_sub_field('contents');
       $sec_1_image = get_sub_field('image'); 
?>
    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
			  <?php if( $sec_1_contents ): ?>
            <div class="heading-layout2">
              <h3 class="heading__title mb-40"><?php echo esc_html( $sec_1_contents['section_1_heading'] ); ?></h3>
            </div><!-- /heading -->
			  <?php endif; ?>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__Text">
				<?php
				if( have_rows('contents') ): 
				while ( have_rows('contents') ) : the_row();
         if( have_rows('content') ):
            $i = 1;
             while( have_rows('content') ) : the_row(); 
                 $content = get_sub_field('content_text'); ?>
               <p class="mb-30 text-justify">
                 <?php echo $content;?>
               </p>
            <?php 
            $i++; endwhile;
         else :
            // Do something...
         endif; 
				endwhile; endif; ?>
				<?php 
				$more_btn = $sec_1_contents['more_btn'];
				if( $more_btn ): 
					$more_btn_url = $more_btn['url'];
					$more_btn_title = $more_btn['title'];
					$more_btn_target = $more_btn['target'] ? $more_btn['target'] : '_self';
					?>
				 <div class="d-flex align-items-center mb-30">
					<a href="<?php echo esc_url( $more_btn_url ); ?>" class="btn btn__primary btn__outlined btn__rounded mr-30" target="<?php echo esc_attr( $more_btn_target ); ?>"><?php echo esc_html( $more_btn_title ); ?></a>
				  </div>
				<?php endif; ?>
             
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="video-banner">
              <img src="<?php echo esc_url( $sec_1_image ); ?>" alt="about">
            </div><!-- /.video-banner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->
<?php endif; ?>
    <?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'section_2' ) :
      $section_2_description = get_sub_field('description');
    ?>
    <!-- ======================
    Features Layout 1
    ========================= -->
    <section class="features-layout1 pt-100 pb-50">
      <div class="bg-img">
		  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/backgrounds/1.jpg" alt="background">
		</div>
      <div class="container">
        <div class="row">
			<?php
               if( have_rows('services') ):
                  $a = 1;
                   while( have_rows('services') ) : the_row(); 
                       $services_image = get_sub_field('image');
                       $services_name = get_sub_field('name');
                       $services_content = get_sub_field('content');
                       ?>
          <!-- Feature item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="<?php echo $services_image;?>" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-heart"></i>
                  <i class="icon-heart feature__overlay-icon"></i>
                </div>
                <h4 class="feature__title"><?php echo $services_name;?></h4>
              </div><!-- /.feature__content -->
				
				<?php 
				$url = get_sub_field('url');
				if( $url ): 
					$link_url = $url['url'];
					$link_title = $url['title'];
					$link_target = $url['target'] ? $url['target'] : '_self';
					?>
				 <a href="<?php echo esc_url( $link_url ); ?>" class="btn__link" target="<?php echo esc_attr( $link_target ); ?>">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
				<?php endif; ?>
             
				
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
		<?php 
			endwhile;
			else :
			// Do something...
			endif; 
			?>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
            <p class="font-weight-bold mb-0">
				<?php echo $section_2_description; ?>
<!--               <a href="#" class="color-secondary">
                <span>Contact Us For More Information</span> <i class="icon-arrow-right"></i>
              </a> -->
            </p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features Layout 1 -->
    <?php endif; ?>
<?php endwhile; ?>
    <!-- ========================
        Services Layout 2
    =========================== -->
    <section class="services-layout2 services-carousel bg-overlay bg-overlay-primary pt-130">
      <div class="bg-img">
		  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banners/1.jpg" alt="background">
		</div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-layout1 heading-light mb-60">
              <h3 class="heading__title">Patient Guide</h3>
              <p class="heading__desc">We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with specific injuries.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="carousel-container">
              <div class="slick-carousel carousel-arrows-light carousel-dots-light"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "autoplay": true, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <!-- service item #1 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/1.jpg" alt="img" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__content text-center">
                    <h4 class="service__title">Enquiring about therapy</h4>
                    <p class="service__desc">Our executives will contact you regarding the details of the disease, documents and reports of the disease and treatment taken so far.</p>
                    <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__content -->
                </div><!-- /.service-item -->
                <!-- service item #2 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/2.jpg" alt="img" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__content text-center">
                    <h4 class="service__title">Consultation about the Disease</h4>
                    <p class="service__desc ">Once you have decided to undergo stem cell therapy for your condition and made a wise choice of choosing our company to undergo treatment.</p>
                    <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__content -->
                </div><!-- /.service-item -->
                <!-- service item #3 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/3.jpg" alt="img" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__content text-center">
                    <h4 class="service__title">Facilities for Indian Patients</h4>
                    <p class="service__desc">Indian Patients who wants to undergo stem cell treatment can avail any assistance from specially trained patient care attendant.</p>
                    <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__content -->
                </div><!-- /.service-item -->
                <!-- service item #4 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/4.jpg" alt="img" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__content text-center">
                    <h4 class="service__title">Patient Diet</h4>
                    <p class="service__desc">Patient will be provided with multi cuisine diets based on the suggestion by physicians. As each patient has own dietary requirements</p>
                    <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__content -->
                </div><!-- /.service-item -->
                <!-- service item #5 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/5.jpg" alt="img" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__content text-center">
                    <h4 class="service__title">Stem Cell Therapy Cost</h4>
                    <p class="service__desc ">Cost of undergoing treatment will vary as no two diseases are same and need to undergo different doses and different procedures, the cost will vary accordingly.</p>
                    <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__content -->
                </div><!-- /.service-item -->
                <!-- service item #6 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/6.jpg" alt="img" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__content text-center">
                    <h4 class="service__title">Plan your visit</h4>
                    <p class="service__desc">Once the doctors had agreed to undertake for stem cell transplantation, you will be contacted immediately to make a decision to plan your arrival and procedures to be taken to undergo transplantation.</p>
                    <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__content -->
                </div><!-- /.service-item -->
              </div><!-- /.carousel -->
            </div><!-- /.carousel-container -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->


<?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'section_3' ) :
      $section_3_heading = get_sub_field('section_3_heading');
    ?>
<!-- ======================
     Work Process 
    ========================= -->
   <section class="testimonials-layout1 pt-100 pb-80 mt-0 background-position-top" style="display:none;" >
    <div class="bg-img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/backgrounds/2.jpg" alt="banner">
    </div>
      <div class="container">
	<?php
		  if( have_rows('accordions') ):
		  while( have_rows('accordions') ) : the_row(); 
		  $accor_title = get_sub_field('title');
		  $accor_content = get_sub_field('content');
		  ?>
		  <?php if(!empty($accor_title)): ?>
        <div class="row heading-layout2">
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-3">
            <h3 class="heading__title font-25 mb-40"><?php echo $accor_title;?></h3>
          </div><!-- /.col-xl-5 -->
            <div class="col-sm-12 col-md-12 col-lg-9">
               <p class="heading__desc font-weight-bold mb-10 text-justify">
                <?php echo $accor_content;?>
               </p>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
         <?php endif; ?>
            <?php 
                endwhile;
		  		else :
               // Do something...
            endif; 
            ?>
       </div>
    </section>
 <?php endif; ?>
<?php endwhile; ?>







<?php
while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'doctors_section' ) :
      $doctors_heading = get_sub_field('doctors_heading');
      $doctors_desctiption = get_sub_field('doctors_desctiption');
      $doctors = get_sub_field('doctors');
      $social_media = get_sub_field('social_media');
    ?>
    <section class="team-layout1 pb-80" style="display: none !important;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h3 class="heading__title"><?php echo $doctors_heading;?></h3>
              <p class="heading__desc"><?php echo $doctors_desctiption; ?> </p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
		
					<?php 

					$posts = get_posts(array(
						'posts_per_page'	=> 9,
						'post_type'			=> 'doctors',
						'order'     => 'DESC',
						'tax_query' => array(
							array(
								'taxonomy' => 'doctor_category',
								'field'    => 'term_id',
								'terms'    => $doctors,
							),
						),
					));

if( $posts ): ?>
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post ); ?>
		<!-- Member #1 -->
              <div class="member">
                <div class="member__img">
				<?php 
                if ( has_post_thumbnail() ) { ?>
                   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" >
                <?php }
                else { ?>
                    <img src="<?=site_url();?>/wp-content/uploads/2022/02/no_preview.png" >
                <?php }
                ?>
					<?php 
// 					get_field( 'my_field', $post_id );
					$social_media = get_field('social_media', $post->ID);
					if($social_media) : ?>
                  <ul class="social-icons list-unstyled mb-0">
					  <?php if( !empty($social_media['facebook']) ){?>
                    
					  <li>
						  <a href="<?php echo $social_media['facebook']?>" class="facebookk">
							  <i class="fab fa-facebook-f"></i>
						  </a>
					  </li>
					  <?php } ?>
					  
					  <?php if( !empty($social_media['twitter']) ){?>
					  <li>
						<a href="<?php echo $social_media['twitter']?>" class="twitterr">
							<i class="fab fa-twitter"></i>
						</a>
					  </li>
					  <?php } ?>
					  
					  <?php if( !empty($social_media['instagram']) ){?>
					  <li>
						<a href="<?php echo $social_media['instagram']?>" class="instagram">
							<i class="fab fa-instagram"></i>
						</a>
					  </li>
					  <?php } ?>
					  
					  <?php if( !empty($social_media['linkedin']) ){?>
					  <li>
						<a href="<?php echo $social_media['linkedin']?>" class="linkedin">
							<i class="fab fa-linkedin"></i>
						</a>
					  </li>
					  <?php } ?>
					  
					  <?php if( !empty($social_media['gmail']) ){?>
					  <li>
						<a href="mailto:<?php echo $social_media['gmail']?>" class="gmail">
							<i class="fab fa-google"></i>
						</a>
					  </li>
					  <?php } ?>
					  
					  
					  <?php if( !empty($social_media['phone']) ){?>
					  <li>
						<a href="tel:<?php echo $social_media['phone']?>" class="phone">
							<i class="fas fa-phone-alt"></i>
						</a>
					  </li>
					  <?php }; ?>
                  </ul><!-- /.social-icons -->
					<?php endif; ?>
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h5>
					<p class="member__job">
					<?php
					$termss = get_the_terms( get_the_ID(), 'doctor_category' );
                         
					if ( $termss && ! is_wp_error( $termss ) ) : 

						$draught_links = array();
						$i = 0;
						foreach ( $termss as $term ) {
							 if ($i == 2) { break; }
								$draught_links[]=$term->name;
							$i++;
						}
							echo $on_draught = join( ", ", $draught_links ); ?>
					<?php endif; ?>
						</p>
                  <p class="member__desc text-justify">
					  <?php $content = get_the_content();
					  $trim_content = wp_trim_words($content, 20, "...");
					  echo $trim_content;
					  ?>
					</p>
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="<?php the_permalink();?>" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
	
	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>
				

            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Team -->

 <?php endif; ?>
<?php endwhile; ?>




<?php  while( have_rows('sections') ) : the_row(); ?>
 <?php if( get_row_layout() == 'sections_7' ) :
$heading_image_column = get_sub_field('heading_image_column');

?>
    <!-- ========================
        About Layout 5
      =========================== -->
    <section class="about-layout5 mb-0">
      <div class="container">
        <div class="row">
			<?php 
			  if($heading_image_column):
			  ?>
          <div class="col-sm-12 col-md-12 col-lg-5">
			  <?php if( !empty($heading_image_column['sec_7_heading']) ){?>
            <div class="heading-layout2">
              <h3 class="heading__title mb-30"><?php echo $heading_image_column['sec_7_heading']; ?></h3>
            </div><!-- /heading -->
			  <?php } ?>
			  <?php if( !empty($heading_image_column['image']) ){?>
            <div class="map-wrapper mb-50">
              <img src="<?php echo $heading_image_column['image']; ?>" class="bio-img" alt="map">
            </div><!-- /.map-wrapper -->
			  <?php } ?>
          </div><!-- /.col-lg-6 -->
			<?php endif; ?>
          <div class="col-sm-12 col-md-12 col-lg-7">
			  <?php if( have_rows('contents_column') ): while ( have_rows('contents_column') ) : the_row();  ?>
				
				<?php 
			  if( have_rows( 'contents' ) ):
			  $a = 1;
			  while ( have_rows( 'contents' ) ) : the_row();  ?>
			  <p class="heading__desc mb-30 text-justify <?php echo ( $a == 1 ) ? ' color-secondary font-weight-bold' : ''; ?>">
				  <?php echo get_sub_field('content'); ?>
			  </p>
				
				<?php $a++; endwhile; endif; ?>
				<?php endwhile; endif; ?>
            <?php 
			  $contents_column = get_sub_field('contents_column');
				$more_btn = $contents_column['more_btn'];
				if( $more_btn ): 
					$more_btn_url = $more_btn['url'];
					$more_btn_title = $more_btn['title'];
					$more_btn_target = $more_btn['target'] ? $more_btn['target'] : '_self';
					?>
					 <div class="d-flex align-items-center mb-60">
					  <a href="<?php echo esc_url( $more_btn_url ); ?>" class="btn btn__secondary btn__rounded mr-30" target="<?php echo esc_attr( $more_btn_target ); ?>">
					   <span><?php echo esc_html( $more_btn_title ); ?></span>
						  <i class="icon-arrow-right"></i>
					  </a>
					</div>

				<?php endif; ?>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 5 -->
 <?php endif; ?>
<?php endwhile; ?>




<?php
while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'testimonials' ) :
      $testi_heading = get_sub_field('testi_heading');
      $testi_desctiption = get_sub_field('testi_desctiption');
      $testimonial = get_sub_field('testimonial');
    ?>
    <!-- ========================= 
      Testimonials layout 1
      =========================  -->
    <section class="testimonials-layout1 pt-130 pb-80">
      <div class="container">
        <div class="testimonials-wrapper">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-5">
              <div class="heading-layout2">
                <h3 class="heading__title"><?php echo $testi_heading; ?></h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="slider-nav mb-60">
				  <?php 

					$posts = get_posts(array(
						'posts_per_page'	=> -1,
						'post_type'			=> 'testimonial',
						'order'     => 'DESC',
						'tax_query' => array(
							array(
								'taxonomy' => 'testimonial_category',
								'field'    => 'term_id',
								'terms'    => $testimonial,
							),
						),
					));
			if( $posts ): ?>
				<?php foreach( $posts as $post ): 

					setup_postdata( $post ); ?>

                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <?php 
                if ( has_post_thumbnail() ) { ?>
                   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" >
                <?php }
                else { ?>
                    <img src="<?=site_url();?>/wp-content/uploads/2022/02/no_preview.png" >
                <?php }
                ?>
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title"><?php echo get_the_title();?></h4>
                    <p class="testimonial__meta-desc">
						<?php echo $image = get_field('designation', $post->ID);?>
					  </p>
                  </div>
                </div><!-- /.testimonial-meta -->

				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
              </div><!-- /.slider-nav -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="slider-with-navs">
				  
				  <?php if( $posts ): ?>
				<?php foreach( $posts as $post ): 

					setup_postdata( $post ); ?>
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title text-justify">
					  <?php echo get_the_content();?>
                  </h3>
                </div><!-- /. testimonial-item -->
				  
				  <?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
              </div><!-- /.slick-carousel -->
              <div class="testimonials__rating" style="display: none;">
                <div class="testimonials__rating-inner d-flex align-items-center">
                  <span class="total__rate">4.9</span>
                  <div>
                    <span class="overall__rate">Zocdoc Overall Rating</span>
                    <span>, based on 7541 reviews.</span>
                  </div>
                </div><!-- /.testimonials__rating-inner -->
              </div><!-- /.testimonials__rating -->
            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
        </div><!-- /.testimonials-wrapper -->
      </div><!-- /.container -->
    </section><!-- /.testimonials layout 1 -->
 <?php endif; ?>
<?php endwhile; ?>




<?php
while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'blogs' ) :
      $blogs_heading = get_sub_field('blogs_heading');
      $blog_post = get_sub_field('blog_post');
    ?>
    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
<!--               <h2 class="heading__subtitle">Resource Library</h2> -->
              <h3 class="heading__title"><?php echo $blogs_heading;?></h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
			
			<?php 

					$posts = get_posts(array(
						'posts_per_page'	=> 3,
						'post_type'			=> 'post',
						'order'     => 'DESC',
					));
			if( $posts ): ?>
				<?php foreach( $posts as $post ): 

					setup_postdata( $post ); ?>
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
				<?php 
                if ( has_post_thumbnail() ) { ?>
				<div class="post__img">
					<a href="<?php the_permalink();?>">
					  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="<?php echo get_the_title();?>" loading="lazy">
					</a>
				  </div><!-- /.post__img -->
                <?php }
                else { ?>
				<div class="post__img">
					<a href="<?php the_permalink();?>">
					  <img src="<?=site_url();?>/wp-content/uploads/2022/02/no_preview.png" alt="post image" loading="lazy">
					</a>
				  </div><!-- /.post__img -->
                <?php }
                ?>
              
              <div class="post__body">
                <div class="post__meta-cat">
					<?php
					$category_detail=get_the_category($post->ID);//$post->ID
						foreach($category_detail as $cd){ ?>
							<a href="<?php echo esc_url( get_category_link( $cd->term_id ) );?>"><?php echo $cd->cat_name;?></a>
						<?php } ?>
                  
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date"><?php echo get_the_date( 'M d, Y', $post->ID ); ?></span>
                  
					<?php
                        $get_author_id = get_the_author_meta('ID');
                        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                    ?>
					<a class="post__meta-author" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
					  <?php echo ucwords(get_the_author());?>
					</a>
                </div>
                <h4 class="post__title">
					<a href="<?php the_permalink();?>">
						<?php $title = get_the_title();
						$trim_title = wp_trim_words($title, 10, " ");
						echo $trim_title;
						?>
					</a>
				  </h4>

                <p class="post__desc text-justify">
					<?php $contenttt = get_the_content();
						$trim_contenttt = wp_trim_words($contenttt, 30, "...");
						echo $trim_contenttt;
						?>
                </p>
                <a href="<?php the_permalink();?>" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
			<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <?php endif; ?>
<?php endwhile; ?> 




<?php get_footer(); ?>