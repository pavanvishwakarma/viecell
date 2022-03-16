<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */
?>
<?php
$wplogoutURL = urlencode(get_the_permalink());
$wplogoutTitle = urlencode(get_the_title());
$wplogoutImage= urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
?>

<!-- ========================
       page title 
    =========================== -->
    <section class="page-title pt-30 pb-30 text-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?=site_url();?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?=site_url();?>/blogs">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo the_title();?></li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

<!-- ======================
      Blog Single
    ========================= -->
    <section class="blog blog-single pt-0 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="post-item mb-0">
              <div class="post__img">
				  <?php 
				  if ( has_post_thumbnail() ) { ?>
				  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="Thumb" loading="lazy">
				  <?php }
				  else { ?>
				  <img src="<?=site_url();?>/wp-content/uploads/2022/02/no_preview.png" alt="Thumb" loading="lazy">
				  <?php }
				  ?>
              </div><!-- /.post-img -->
              <div class="post__body pb-0">
                <div class="post__meta-cat">
                  <?php
					$category_detail=get_the_category($post->ID);//$post->ID
						foreach($category_detail as $cd){ ?>
							<a href="<?php echo esc_url( get_category_link( $cd->term_id ) );?>"><?php echo $cd->cat_name;?></a>
						<?php } ?>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex align-items-center mb-20">
                  <span class="post__meta-date"><?php echo get_the_date( 'M d, Y', $post->ID ); ?></span>
					
					<?php
					$get_author_id = get_the_author_meta('ID');
					$get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
					?>
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="post__meta-author"><?php echo ucwords(get_the_author());?>
					</a>
					
                  <a class="post__meta-comments" href="#"><?php echo get_comments_number( $post->ID )?> coments</a>
                </div><!-- /.blog-meta -->
                <h1 class="post__title mb-30">
                  <?php echo get_the_title();?>
                </h1>
                <div class="post__desc">
                 <?php echo the_content();?>
                </div><!-- /.blog-desc -->
              </div>
            </div><!-- /.post-item -->
            <div class="d-flex flex-wrap justify-content-between border-top border-bottom pt-30 pb-30 mb-40">
              <div class="blog-share d-flex flex-wrap align-items-center">
                <strong class="mr-20 color-heading">Share</strong>
                <ul class="list-unstyled social-icons d-flex mb-0">
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $wplogoutURL; ?>" target="_blank" rel="nofollow"><i class="fab fa-facebook-f"></i></a></li>
						                            <li><a href="https://twitter.com/intent/tweet?text=<?php echo $wplogoutTitle;?>&amp;url=<?php echo $wplogoutURL;?>&amp;via=wplogout" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a></li>
						                            <li><a href="https://www.linkedin.com/shareArticle?url=<?php echo $wplogoutURL; ?>&amp;title=<?php echo $wplogoutTitle; ?>&amp;mini=true" target="_blank" rel="nofollow"><i class="fab fa-linkedin"></i></a></li>
						                            <li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $wplogoutURL; ?>&amp;media=<?php echo $wplogoutImage;   ?>&amp;description=<?php echo $wplogoutTitle; ?>" target="_blank" rel="nofollow"><i class="fab fa-pinterest"></i></a></li>
						                            <li><a href="https://api.whatsapp.com/send?text=<?php echo $wplogoutTitle; echo " "; echo $wplogoutURL;?>" target="_blank" rel="nofollow"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
              </div><!-- /.blog-share -->
              <div class="widget-tags">
                <ul class="list-unstyled d-flex flex-wrap mb-0">
					<?php
					$posttags = get_the_tags();
					if ($posttags) {
						foreach($posttags as $tag) {?>
					<li><a href="<?php echo esc_attr( get_tag_link( $tag->term_id ) );?>"><?php echo $tag->name; ?></a></li>
					<?php }
					}
					?>
                </ul>
              </div><!-- /.blog-tags -->
            </div>
            <div class="widget-nav d-flex justify-content-between mb-40">
				<?php
				$next_post_url = get_permalink( get_adjacent_post(false,'',false)->ID );
				$previous_post_url = get_permalink( get_adjacent_post(false,'',true)->ID );
				
				$next_post_title = get_the_title( get_adjacent_post(false,'',false)->ID );
				$previous_post_title = get_the_title( get_adjacent_post(false,'',true)->ID );
				
				//$trim_title = wp_trim_words($title, 10, " ");
				
				$next_post_img = get_post_thumbnail_id( get_adjacent_post(false,'',false)->ID );
				$previous_post_img = get_post_thumbnail_id( get_adjacent_post(false,'',true)->ID );
				
				
				?>
              <a href="<?php echo $previous_post_url;?>" class="widget-nav__prev d-flex flex-wrap">
                <div class="widget-nav__img">
					<?php 
                if ( has_post_thumbnail() ) { ?>
					  <img src="<?php echo wp_get_attachment_url( $previous_post_img, 'full' ); ?>"  loading="lazy">
                <?php }
                else { ?>
					  <img src="<?=site_url();?>/wp-content/uploads/2022/02/no_preview.png" alt="post image" loading="lazy">
                <?php }
                ?>
                </div>
                <div class="widget-nav__content">
                  <span>Previous Post</span>
                  <h5 class="widget-nav__ttile mb-0"><?php echo wp_trim_words($previous_post_title, 6, "...");?></h5>
                </div>
              </a><!-- /.widget-prev  -->
				
              <a href="<?php echo $next_post_url;?>" class="widget-nav__next d-flex flex-wrap">
                <div class="widget-nav__img">
                  <?php 
                if ( has_post_thumbnail() ) { ?>
					   <img src="<?php echo wp_get_attachment_url( $next_post_img, 'full' ); ?>"  loading="lazy">
                <?php }
                else { ?>
					  <img src="<?=site_url();?>/wp-content/uploads/2022/02/no_preview.png" alt="post image" loading="lazy">
                <?php }
                ?>
                </div>
                <div class="widget-nav__content">
                  <span>Next Post</span>
                  <h5 class="widget-nav__ttile mb-0"><?php echo wp_trim_words($next_post_title, 6, "...");?></h5>
                </div>
              </a><!-- /.widget-next  -->
				
            </div>
            <div class="blog-author d-flex flex-wrap mb-70">
              <div class="blog-author__avatar">
				  <?php
				  $get_author_id = get_the_author_meta('ID');
				  $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
				  ?>
<!-- 				  <a href="<?php //echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
					  <span><?php //the_author();?></span>
				  </a> -->
                <img src="<?php print get_avatar_url($get_author_id); ?>" alt="Author">
              </div><!-- /.author-avatar  -->
              <div class="blog-author__content">
                <h6 class="blog-author__name">
					<?php 
// 					global $post;
					$author_id = $post->post_author;
					echo get_the_author_meta( 'nicename', $author_id );
					?>
				  </h6>
                <p class="blog-author__bio"><?php echo wpautop( get_the_author_meta( 'description', $author_id ) );?></p>
<!--                 <ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-vimeo-v"></i></a> </li>
                  <li><a href="#"><i class="fab fa-linkedin"></i></a> </li>
                </ul> -->
              </div><!-- /.author-content  -->
            </div><!-- /.blog-author  -->
            <div class="blog-comments mb-70">
              <h5 class="blog-widget__title"><?php echo get_comments_number();?> comments</h5>
				
				<?php $comments_number = get_comments_number();
									if($comments_number != 0){  ?>
									
									
										<?php 
										// $args1 = array(
										// 	'callback'          => 'better_comments',
										// ); 
										?>
										<?php $args1 = array(
											'add_below' 		=> true,
											'depth'     		=> 4,
											'max_depth' 		=> 20,
											'callback'          => 'better_comments',
											'reverse_top_level' => false,
											'reverse_children'  => true,
										); ?>
										<?php
										$comments = get_comments(array(
											'post_id' => $post->ID,
											'status' => 'approve'
											));
											wp_list_comments($args1, $comments);
										echo ' </ul>';
										}
										?>
             <!-- /.comments-list -->
            </div><!-- /.blog-comments -->
            <div class="blog-widget blog-comments-form mb-30">
<!--               <h5 class="blog-widget__title">Leave A Reply</h5> -->
				
				<?php  $fields =  array(

	'author' => '<div class="row"><div class="col-sm-12 col-md-6 col-lg-6"><div class="form-group"><input id="name" name="author" type="text" class="form-control" placeholder="Name *"/></div></div>',
	'email' => '<div class="col-sm-12 col-md-6 col-lg-6"><div class="form-group"><input id="email" class="form-control" name="email" type="text" placeholder="Email *"/></div></div>',
);
				$args = array(

					'title_reply'       => '<h5 class="blog-widget__title">Leave A Reply</h5>',
					'fields' => $fields,
					'comment_field' => '<div class="row"><div class="col-12"><div class="form-group"><textarea id="comment" name="comment" cols="30" rows="10" class="form-control" placeholder="Comment" aria-required="true">' .
					'</textarea></div></div></div></div>',
					'id_form'           => 'commentform',
					'class_form'      => 'contact-formm',
					'title_reply_before'   => '<h5 id="reply-title" class="blog-widget__title">',
					'title_reply_after'    => '</h5>',
					'label_submit'      => 'Submit',
					'id_submit'         => 'submitt',
					'class_submit'      => 'comment-btn-submit',
					'name_submit'       => 'submit',
					'submit_button'        => '<button type="submit" id="submit-new" class="btn btn__primary btn__rounded"><span>'.__('Post Comment').'</span><i class="icon-arrow-right"></i></button>',
					'submit_field'         => '<div class="form-submit col-12">%1$s %2$s</div>',

				);
				?>
				<?php comment_form($args);?>
            </div><!-- /.blog-comments-form -->
          </div><!-- /.col-lg-8 -->
         
			  <?php 
			require get_template_directory() . '/blog/side-bar.php';?>
            
        </div>  
        <!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Single -->