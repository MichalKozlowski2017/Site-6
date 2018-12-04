<?php

$ancestor = get_page(get_option( 'page_for_posts' ));
$header_image = get_field('header_image', $ancestor->ID);
$recent_posts = get_posts(array('posts_per_page' => 3));
get_post_type_archive_link( 'post' );
get_header();
?>
<div id="content" <?php post_class(); ?>>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
						<?php display_breadcrumbs($post->ID); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<ul class="recent_posts hidden-xs">
							<?php foreach($recent_posts as $recent_post) : ?>
								<li class="recent_post">
									<h3 class="recent_post__title">
										<a href="<?php echo get_permalink($recent_post->ID); ?>"><?php echo $recent_post->post_title; ?></a>
									</h3>
									<div class="recent_post__excerpt">
										<?php
											$excerpt = $recent_post->post_excerpt;
											$excerpt_len = 50;
											if (strlen($excerpt) > $excerpt_len) {
												$excerpt = substr($excerpt, 0, $excerpt_len);
											}
										?>
										<?php echo $excerpt . '...'; ?>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="col-sm-8">
						<div class="post">
							<?php the_content(); ?>		
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content_bottom">
			
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>