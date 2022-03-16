<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage viecellbiotherapeutics
 * @since viecellbiotherapeutics 1.0
 */

get_header(); ?>

<div class="row">
	<div class="col-12">
		<section class="error-404 bg-overlay bg-image">
			<div class="error-404-inner">
				<header>
					<h1>404</h1>
				</header><!-- .page-title -->
				<h2 class="page-heading"> Oops! That page can’t be found.</h2>
				<div class="page-content">
					The page requested couldn't be found. This could be a spelling error in the URL or a removed page.
				</div><!-- .page-content -->
				<a class="btn btn__secondary btn__rounded " href="<?=site_url();?>">
					<i class="fas fa-arrow-circle-left"></i>
					Back To Home
				</a>
			</div>
		</section><!-- .error-404 -->
	</div>
</div>

<?php get_footer(); ?>
