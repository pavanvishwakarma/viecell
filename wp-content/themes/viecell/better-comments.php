<?php
// My custom comments output html
function better_comments( $comment, $args, $depth ) {

	// Get correct tag used for the comments
	if ( 'div' === $args['style'] ) {
		$tag       = 'ul';
		$add_below = 'comment';
	} else {
		$tag       = 'div';
		$add_below = 'div-comment';
	} ?>

	<ul class="<?php echo empty( $args['has_children'] ) ?  'comments-list nested__comment list-unstyled' : 'comments-list list-unstyled parent'; ?>" id="comment-<?php comment_ID() ?>">

	<?php
	// Switch between different comment types
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' : ?>
		<div class="pingback-entry">
			<span class="pingback-heading"><?php esc_html_e( 'Pingback:', 'viecellbiotherapeutics' ); ?></span> <?php comment_author_link(); ?>
		</div>
	<?php
		break;
		default :

		if ( 'div' != $args['style'] ) { ?>
		<li id="div-comment-<?php comment_ID() ?>" class="comment__item commen-item">
			<?php } ?>

			<div class="comment__avatar ">
				<?php
				// Display avatar unless size is set to 0
				if ( $args['avatar_size'] != 0 ) {
					$avatar_size = ! empty( $args['avatar_size'] ) ? $args['avatar_size'] : 70; // set default avatar size
						echo get_avatar( $comment, $avatar_size );
				}
				// Display author name
				//printf( __( '<div class="fn">%s</div> <span class="says">says:</span>', 'viecellbiotherapeutics' ), get_comment_author_link() ); ?>
			</div>
			<!-- .comment-author -->
			<div class="comment__content">
				<?php printf( __( '<h5 class="comment__author">%s</h5>', 'viecellbiotherapeutics' ), get_comment_author_link() ); ?>
				<span class="comment__date">
					<?php
					/* translators: 1: date, 2: time */
					printf(
						__( '%1$s at %2$s', 'viecellbiotherapeutics' ),
						get_comment_date(),
						get_comment_time()
					); 
				?>
				</span>
				<div class="comment__desc">
					<?php comment_text(); ?>
				</div>
				
				<?php
				// Display comment reply link
				 $myclass = 'comment__reply';
				echo preg_replace( '/comment-reply-link/', $myclass, 
				get_comment_reply_link( array_merge( $args, array(
					'reply_text' => __('<i class="fa fa-reply"></i> Reply', 'viecellbiotherapeutics'),
					'add_below' => $add_below,
					'depth'     => $depth,
					'max_depth' => $args['max_depth']
				) ) ) ); ?>				
				
				<!-- <a href="<?php //echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
				
					</a> -->
					<?php
					//edit_comment_link( __( '(Edit)', 'viecellbiotherapeutics' ), '  ', '' ); ?>
			</div>
	<?php
		if ( 'div' != $args['style'] ) { ?>
		</li>
		<?php }
	// IMPORTANT: Note that we do NOT close the opening tag, WordPress does this for us
		break;
	endswitch; // End comment_type check.
	?>
	
	<?php }