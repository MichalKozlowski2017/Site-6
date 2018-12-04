<?php
/* Template Name: Wszystkie kategorie */

$header_image = get_field('header_image');

$current_permalink = get_the_permalink();

get_header();

$args = array(
	'post_type' => 'product',
	'posts_per_page' => -1
);
query_posts( $args );
?>
<div id="content" <?php post_class(); ?>>
	<?php include('includes/_content_top.php'); ?>
	<div class="content_mid">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-6">
					<?php display_breadcrumbs($post->ID); ?>
				</div>
				<div class="col-md-5 col-sm-6">
					<?php include('includes/_category_filter.php'); ?>
				</div>
			</div>
			<div class="row">
				<?php include('includes/_product_list.php'); ?>
			</div>
			<div class="row visible-xs">
				<div class="col-sm-12">
					<?php include('includes/_category_filter.php'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="content_bottom">
		
	</div>
</div>
<?php get_footer(); ?>