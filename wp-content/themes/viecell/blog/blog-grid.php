<?php
$wplogoutURL = urlencode(get_the_permalink());
$wplogoutTitle = urlencode(get_the_title());
$wplogoutImage= urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
?>
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
          <!-- Post Item #2 -->