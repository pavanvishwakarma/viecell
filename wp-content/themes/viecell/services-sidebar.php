<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */
?>
<?php 
$postID = get_the_ID();
$categories = get_the_terms( $post->ID, 'service_category' );    
foreach ( $categories as $catt){
	$name = $catt->name;
	$catID = $catt->term_id.',';
}
?>
<style>
.widget-services ul li.active a {
    color: #fff;
    background-color: #989933;
}
</style>
<aside class="sidebar has-marign-left sticky-top">
	<div class="widget widget-services">
		<h5 class="widget__title"><?php echo $name;?></h5>
		<div class="widget-content">
			<ul class="list-unstyled mb-0">
				
				<?php 
				//$side_service = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => 10 ) ); 
				
					$side_service =  new WP_Query(array(
						'posts_per_page'	=> 10,
						'post_type'			=> 'services',
						'order'     => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy' => 'service_category',
								'field'    => 'term_id',
								'terms'    => array( $catID ),
							),
						),
					));
				?>
				<?php while($side_service->have_posts()) : $side_service->the_post();?>
				<li class="<?php if($postID == $post->ID){ ?> active <?php }?>"><a href="<?php the_permalink();?>"><span><?php echo get_the_title();?></span><i class="icon-arrow-right"></i></a></li>
				<?php endwhile; ?>
			</ul>
		</div><!-- /.widget-content -->
	</div><!-- /.widget-services -->
	
</aside><!-- /.sidebar -->