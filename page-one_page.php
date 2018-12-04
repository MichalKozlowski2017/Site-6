<?php
/* Template Name: One Page */

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
				<?php
					$modules = array(
						'image_text', 'text', 'social', 'hr', 'banner', 'anchor'
					);
					$module_index = 0;
				?>
		     	<?php while ( have_rows('modules') ) : the_row(); ?>
		            <?php if (in_array(get_row_layout(), $modules)) : ?>
		                <?php get_template_part( 'one_page_templates/layout', get_row_layout() ); ?>
		            <?php endif; ?>
		        <?php $module_index++; endwhile; ?>
			</div>
		</div>
		<div class="content_bottom">
			
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>