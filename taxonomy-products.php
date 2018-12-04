<?php
$term = get_queried_object();
$header_image = get_field('header_image', $term->term . '_' . $term->term_id);
$cta_text = get_field('cta_text', $term->term . '_' . $term->term_id);
$cta_link = get_field('cta_link', $term->term . '_' . $term->term_id);
get_header();
?>
<div id="content" <?php post_class(); ?>>
	<div class="content__top" style="background-image: url(<?php echo $header_image['sizes']['header-image']; ?>);">
		<div class="container">
			<div class="row">
				<div class="content__top__inner">
					<div class="content__top__inner__content">
						<h1 class="content__title">
							<?php echo $term->name; ?>
						</h1>
						<?php if ($cta_link && $cta_text) : ?>
							<div class="content__top__link">
								<a class="btn btn-default" href="<?php echo $cta_link; ?>"><?php echo $cta_text; ?></a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content_mid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php display_breadcrumbs($post->ID); ?>
				</div>
			</div>
			<div class="row">
				<?php include('includes/_product_list.php'); ?>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="term-description">
						<?php echo apply_filters('the_content', $term->description); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content_bottom">
		
	</div>
</div>
<?php get_footer(); ?>