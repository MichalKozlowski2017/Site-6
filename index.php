<?php

global $wp_query;
$media_posts = array();
// for($i = 0; $i < count($wp_query->posts); $i++) {
// 	$media_posts[$i % 4][] = $wp_query->posts[$i];
// }
$media_posts = $wp_query->posts;
$page = get_page(get_option('page_for_posts', true));
$header_image = get_field('header_image', $page->ID);
get_header();
?>
<div id="content" <?php post_class(); ?>>
	<div class="content__top <?php echo (get_field('header_image_big')) ? 'content__top--big' : ''; ?>" style="background-image: url(<?php echo $header_image['sizes']['header-image']; ?>);">
		<div class="container">
			<div class="row">
				<div class="content__top__inner">
					<div class="content__top__inner__content">
						<h1 class="content__title">
							<?php echo get_the_title( get_option('page_for_posts', true) ); ?>
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content_mid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php display_breadcrumbs($page->ID); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
			</div>
			<div class="row">
				<!-- Media screen -->
				<div class="media hidden-xs hidden-sm">
					<?php foreach ($media_posts as $item) : ?>
						<div class="col-sm-3">
							<div class="media__item clearfix">
								<a class="media__item__image" style="background-image: url(<?php echo get_the_post_thumbnail_url($item->ID, 'media-thumb') ?>" alt="<?php echo $item->post_title; ?>)" href="<?php echo get_the_permalink($item->ID); ?>"></a>
								<div class="media__item__title">
									<h2><a href="<?php echo get_the_permalink($item->ID); ?>"><?php echo $item->post_title; ?></a></h2>
									<a class="media__item__title__link" href="<?php echo get_the_permalink($item->ID); ?>"><?php echo __('Read more', '--nazwa-firmy--'); ?> <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/build/arrow_right_green.png" alt="arrow"></a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="content_bottom">
		
	</div>
</div>
<?php get_footer(); ?>