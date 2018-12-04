<?php
$args = array(
    'post_type' => 'tips',
    'post_per_page' => -1,
    'order' => 'DESC',
	'orderby' => 'date',
	'meta_query' => array(
		array(
			'key' => 'products',
			'value' => '"' . $post->ID . '"',
			'compare' => 'LIKE'
		)
	),
);

$tips = get_posts( $args );

$term = array_shift(get_the_terms($post->ID, 'products'));
$header_image = get_field('header_image', $term->term . '_' . $term->term_id);

$args = array(
	'post_type' => 'product',
	'tax_query' => array(
		array(
			'taxonomy' => 'products',
			'field' => 'id',
			'terms' => $term->term_id
		),
	),
	'post__not_in' => array( $post->ID ),
	'numberposts' => -1
);
$related_products = get_posts( $args );

$packaging = get_field('packaging');
$files = get_field('files');
$small_adboxes = get_field('adbox_small');
$big_adboxes = get_field('adbox_big');
get_header();
?>

<div id="content" <?php post_class(); ?>>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
					<div class="col-sm-12">
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="product">
						<div class="col-md-5">
							<div class="product__left">
								<h1 class="product__name">
									<?php the_title(); ?>
								</h1>
								<div class="product__image visible-xs visible-sm">
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'product-thumb-large') ?>" alt="<?php echo get_the_title(); ?>">
								</div>
                                <div class="product_download hidden-md hidden-lg <?php if (!$packaging[0]['link']) : ?>hide<?php endif; ?>">
									<div class="kup-teraz-btn">
										<a class="btn btn-default" href="<?php echo $packaging[0]['link']; ?>"  role="button" target="_blank">
											<?php echo __('Buy now', '--nazwa-firmy--'); ?>
										</a>
									</div>
								</div>

								<?php if (!empty($packaging)) : ?>
									<div class="product__packaging visible-xs">
										<h2><?php echo __('Types of packaging', '--nazwa-firmy--'); ?></h2>
										<div class="row">
											<?php foreach($packaging as $package) : ?>
												<div class="col-xs-4">
													<div class="product__package">
														<a href="#" data-link="<?php echo $package['link']; ?>"  data-image="<?php echo $package['image']['sizes']['product-thumb-large']; ?>" class="product__package__image">
															<img src="<?php echo $package['image']['sizes']['product-thumb-extra-small']; ?>" alt="<?php echo $package['name']; ?>">
														</a>
														<div class="product__package_name">
															<?php echo $package['name']; ?>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								<?php endif; ?>
								<?php $rows = get_field('table'); ?>
								<?php if (!empty($rows)) : ?>
									<ul class="product__table">
										<?php foreach($rows as $row) : ?>
											<li>
												<div class="product__table__left">
													<div class="product__table__left__title">
														<?php echo $row['left'];?>
													</div>
													<div class="product__table__left__subtitle">
														<?php echo $row['left_sub']; ?>
													</div>
												</div>
												<div class="product__table__right">
													<div class="product__table__right__title">
														<?php echo $row['right'];?>
													</div>
													<div class="product__table__right__subtitle">
														<?php echo $row['right_sub'];?>
													</div>
												</div>
												<div class="cf"></div>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</div>
							<div class="product__desc">
								<?php the_content(); ?>
							</div>
						</div>

						<div class="col-md-3">
							<div class="product__image hidden-xs hidden-sm">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'product-thumb-large') ?>" alt="<?php echo get_the_title(); ?>">
							</div>
                            <?php  /*?>
                            <?php if (!empty($files)) : ?>
								<div class="product_download hidden-xs hidden-sm">
									<div class="dropdown filter-dropdown">
										<a id="dLabel" class="filter-dropdown__btn btn-default" data-target="#" href="<?php echo $current_permalink; ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											<?php echo __('Packshot', '--nazwa-firmy--'); ?>
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu" aria-labelledby="dLabel">
											<?php foreach($files as $file) : ?>
												<li><a target="_blank" href="<?php echo $file['file']; ?>"><?php echo $file['name']; ?></a></li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							<?php endif; */?>
							
							
								<div class="product_download hidden-xs hidden-sm <?php if (!$packaging[0]['link']) : ?>hide<?php endif; ?>">
									<div class="kup-teraz-btn">
										<a class="btn btn-default" href="<?php echo $packaging[0]['link']; ?>"  role="button" target="_blank">
											<?php echo __('Buy now', '--nazwa-firmy--'); ?>
										</a>
									</div>
								</div>
							
							<?php if (!empty($packaging)) : ?>
								<div class="product__packaging hidden-xs hidden-sm">
									<h2><?php echo __('Types of packaging', '--nazwa-firmy--'); ?></h2>
									<div class="row">
										<?php foreach($packaging as $package) : ?>
											<div class="col-xs-4">
												<div class="product__package">
													<a href="#" data-link="<?php echo $package['link']; ?>" data-image="<?php echo $package['image']['sizes']['product-thumb-large']; ?>" class="product__package__image">
														<img src="<?php echo $package['image']['sizes']['product-thumb-extra-small']; ?>" alt="<?php echo $package['name']; ?>">
													</a>
													<div class="product__package_name">
														<?php echo $package['name']; ?>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-md-4">
							<div class="row hidden-xs hidden-sm">
								<div class="related-products">
									<?php foreach($related_products as $item) : ?>
										<div class="col-md-4">
											<div class="related-product <?php echo ($post->ID == $item->ID) ? 'related-product--active' : ''; ?>">
												<div class="related-product__image">
													<a href="<?php echo get_permalink($item->ID); ?>"/>
														<img src="<?php echo get_the_post_thumbnail_url($item->ID, 'product-thumb-small') ?>" alt="<?php echo $item->post_title; ?>">
													</a>
												</div>
												<a class="related-product__title" href="<?php echo get_permalink($item->ID); ?>"/><?php echo $item->post_title; ?></a>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<div class="cf"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="content_bottom">
			<div class="container">
				<?php if (!empty($tips)) : ?>
					<div class="tips">
						<div class="row">
							<div class="col-md-12">
								<h2>TIPS &amp; TRICKS</h2>
							</div>
						</div>

							<?php 
							if($lastRec=count($tips)){
								echo '<div class="row">';
								$i=0;

								foreach( $tips as $tip ) {
									if( ($i % 3 == 0) && ($i<$lastRec) ) echo '</div><div class="row">';
									?>
									<div class="col-md-4 ">
										<a role="button" data-toggle="collapse" href="#tip-<?php echo $tip->ID; ?>" aria-expanded="false" aria-controls="collapseExample">
											<h3 class="tips__title">
												<?php echo $tip->post_title; ?>
											</h3>
											<?php echo get_field('desc', $tip->ID); ?>
											<?php if (!empty(get_field('content', $tip->ID))) : ?>
												<span><img src="<?php bloginfo('template_directory'); ?>/assets/images/build/arrow.png" alt="<?php echo __('Czytaj więcej', '--nazwa-firmy--'); ?>"></span>
											<?php endif; ?>
										</a>
										<br><br>
										<div class="collapse" id="tip-<?php echo $tip->ID; ?>">
											<div class="tips_desc">
												<?php echo get_field('content', $tip->ID); ?>
											</div>
										</div>
									</div>
									<?php
									$i++;
								}
								echo '</div>';
							}
							?>
							
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
	<hr>
	<div class="container">
		<div class="row">
			<?php include('includes/_adboxes.php'); ?>
		</div>
	</div>

</div>
<?php get_footer(); ?>
