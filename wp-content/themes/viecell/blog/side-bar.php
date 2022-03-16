 <div class="col-sm-12 col-md-12 col-lg-4">
	<aside class="sidebar">
		<div class="widget widget-search">
			<h5 class="widget__title">Search</h5>
			<div class="widget__content">
				<form role="search" class="widget__form-search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" class="form-control" name="s" id="s" placeholder="Search..." required>
					<button class="btn" type="submit"><i class="icon-search"></i></button>
				</form>
			</div><!-- /.widget-content -->
		</div><!-- /.widget-search -->
		<div class="widget widget-posts">
			<h5 class="widget__title">Recent Posts</h5>
			<div class="widget__content">
				<?php  $recent = new WP_Query( array( 'post_type' => 'post' ,'order' => 'DESC', 'posts_per_page' => 3 ) );
                while($recent->have_posts()) : $recent->the_post();?>
                
				<!-- post item #1 -->
				<div class="widget-post-item d-flex align-items-center">
					<div class="widget-post__img">
						<a href="<?php the_permalink();?>">
							<?php 
                            if ( has_post_thumbnail() ) { ?>
                               <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>"  style="object-fit: cover;">
                            <?php } else {?>
                                <img src="<?=site_url();?>/wp-content/uploads/2022/02/no_preview.png"  style="object-fit: cover;">
                            <?php } ?>
                        </a>
					</div><!-- /.widget-post-img -->
					<div class="widget-post__content">
						<span class="widget-post__date"><?php echo get_the_date( 'M d, Y', $post->ID ); ?></span>
						<h4 class="widget-post__title">
							<a href="<?php the_permalink();?>">
								<?php $title = get_the_title();
								$trim_title = wp_trim_words( $title, 6, "" );?>
								<?php echo $trim_title;?>
							</a>
						</h4>
					</div><!-- /.widget-post-content -->
				</div><!-- /.widget-post-item -->
				<?php endwhile; ?>
				
			</div><!-- /.widget-content -->
		</div><!-- /.widget-posts -->
		<div class="widget widget-categories">
			<h5 class="widget__title">Categories</h5>
			<div class="widget-content">
				<ul class="list-unstyled mb-0">
<!-- 					<li><a href="#"><span class="cat-count">4</span><span>Neurology</span></a></li>
					<li><a href="#"><span class="cat-count">0</span><span>Cardiology</span></a></li>
					<li><a href="#"><span class="cat-count">3</span><span>Pathology</span></a></li>
					<li><a href="#"><span class="cat-count">2</span><span>Laboratory</span></a></li>
					<li><a href="#"><span class="cat-count">4</span><span>Pediatric</span></a></li>
					<li><a href="#"><span class="cat-count">1</span><span>Cardiac Clinic</span></a></li> -->
					<?php
					   $categories = get_categories();
					//print_r($categories);
						foreach($categories as $category) {
						   echo '<li><a href="' . get_category_link($category->term_id) . '"><span class="cat-count">'. $category->count . '</span><span>' . $category->name . '</span></a></li>';
							
						}
					?>
				</ul>
			</div><!-- /.widget-content -->
		</div><!-- /.widget-categories -->
		<div class="widget widget-tags">
			<h5 class="widget__title">Tags</h5>
			<div class="widget-content">
				<ul class="list-unstyled mb-0">
					<?php
                $posttags = get_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) {?>
                            <li><a href="<?php echo esc_attr( get_tag_link( $tag->term_id ) );?>"><?php echo $tag->name; ?></a></li>
                        <?php }
                    }
                ?>
				</ul>
			</div><!-- /.widget-content -->
		</div><!-- /.widget-tags -->
	 </aside><!-- /.sidebar -->
</div><!-- /.col-lg-4 -->