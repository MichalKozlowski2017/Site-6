<?php

$header_image = get_field('header_image');

get_header();
?>
<div id="content" <?php post_class(); ?>>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php include('includes/_content_top.php'); ?>
		<div class="content_mid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php display_breadcrumbs($post->ID); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<?php the_content(); ?>		
					</div>
				</div>
			</div>
		</div>
		<div class="content_bottom">
			
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>