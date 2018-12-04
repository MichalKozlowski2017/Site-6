<?php
/* Template Name: Strona Główna */

$current_permalink = get_the_permalink();
get_header();

$slides = get_field('slides');
$promoboxes = get_field('promoboxes');
$products = get_field('products');
$products_desc = get_field('products_desc');

$big_adboxes = get_field('adbox_big');
$embeds = get_field('embeds');
$socials = get_field('socials');

?>
<div id="content" <?php post_class(); ?>>
	<div class="content__top <?php echo (get_field('alt')) ? 'content__top--full' : ''; ?>">
		<div class="content__top__left">
			<div class="carousel carousel-left">
			<?php foreach($slides as $index => $slide) : ?>
				<?php
					$image = $slide['image']['sizes']['slide'];
					if (get_field('alt')) {
						$image = $slide['image_alt']['sizes']['slide-wide'];
					}
				?>
				<div class="item " style="background-image: url(<?php echo $image; ?>)">
					<a class="item_link" href="<?php echo $slide['url']; ?>"></a>
					<?php if (get_field('alt')) { ?>
						<div class="carousel-text">
							<?php echo apply_filters('the_content', $slide['caption']);?>
							<div class="carousel-caption-cta">
								<a class="btn btn-default" href="<?php echo $slide['url']; ?>"><?php echo __('Read more', '--nazwa-firmy--'); ?><?php // echo $slide['cta_text']; ?></a>
							</div>
						</div>
					<?php } ?>
					
				</div>
			</div>
			<?php endforeach; ?>
			</div>
		<?php if (!get_field('alt')) : ?>
			
			<div class="content__top__right">
				<!-- Carousel screen -->
				<div id="carousel-example-generic" class="carousel carousel-screen carousel-products slide hidden-xs hidden-sm hidden-md" data-ride="carousel" data-interval="3000">
				<!-- Wrapper for slides -->
				<div class="carousel-inner carousel-screen-inner" role="listbox">
					<?php foreach($promoboxes as $index => $promobox) : ?>
					<div class="item <?php echo ($index == 0) ? 'active' : ''; ?>">
						<div class="promobox">
							<div class="promobox__content">
								<?php echo apply_filters('the_content', $promobox['content']); ?>
							</div>
							<div class="promobox__cta">
								<a href="<?php echo $promobox['cta_url']; ?>" class="btn btn-default"><?php echo $promobox['cta_text']; ?></a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
						<span class="sr-only"><?php echo __('Poprzedni', '--nazwa-firmy--'); ?></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
						<span class="sr-only"><?php echo __('Następny', '--nazwa-firmy--'); ?></span>
					</a>
				</div>

				<!-- Carousel mobile -->
				<div id="carousel-example-generic1" class="carousel-mobile carousel carousel-products slide hidden-lg" data-ride="carousel" data-interval="3000">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php foreach($promoboxes as $index => $promobox) : ?>
					<div class="item <?php echo ($index == 0) ? 'active' : ''; ?>">
						<div class="promobox">
							<div class="promobox__content">
								<?php echo apply_filters('the_content', $promobox['content']); ?>
							</div>
							<div class="promobox__cta">
								<a href="<?php echo $promobox['cta_url']; ?>" class="btn btn-default"><?php echo $promobox['cta_text']; ?></a>
							</div>
							
						</div>
					</div>
					<?php endforeach; ?>
				</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
						<span class="sr-only"><?php echo __('Poprzedni', '--nazwa-firmy--'); ?></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
						<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
						<span class="sr-only"><?php echo __('Następny', '--nazwa-firmy--'); ?></span>
					</a>
				</div>
			</div>
		<?php endif; ?>
		<div class="cf"></div>
	</div>
	<div class="content_mid">
		<div class="home-products-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2><?php echo __('Our products', '--nazwa-firmy--'); ?></h2>	
					</div>
				</div>
				<div class="row">
					<div class="home-products">
						<?php foreach($products as $product) : ?>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<?php
									$p_id = $product->ID;
									$p_title = $product->post_title;
									$p_permalink = get_permalink($product->ID);
								?>
								<?php include('includes/_product_list_item.php'); ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="home-products-wrapper__footer">
							<a href="<?php echo get_permalink(get_field('product_page', 'options')); ?>" class="btn btn-default"><?php echo __('All products', '--nazwa-firmy--'); ?></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="home-products-wrapper__desc">
							<?php echo apply_filters('the_content', $products_desc); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php include('includes/_big_adboxes.php'); ?>
			</div>
		</div>
		
	<div class="content_bottom">
		<?php if (!empty($embeds)) : ?>
			<div class="home__social-media">
				<div class="container">
					<div class="row">
						<div class="col-xs-8">
							<h2><?php echo __('Social Media', '--nazwa-firmy--'); ?></h2>
						</div>
						<div class="col-xs-4">
							<?php if (!empty($socials)) : ?>
								<div class="home__social-media__icons pull-right">
									<?php foreach($socials as $social_icon) : ?>
										<a target="_blank" href="<?php echo $social_icon['url']; ?>" class="home__social-media__icons__item">
											<img src="<?php echo $social_icon['icon']['sizes']['social-thumb']; ?>" alt="<?php echo $social_icon['url']; ?>">
										</a>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="row">
						<?php foreach($embeds as $index => $embed) : ?>
							<div class="col-md-4 <?php echo ($index != 0) ? 'hidden-xs' : ''; ?>">
								<?php echo $embed['embed']; ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="home__seo" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/build/seo-content-bg.jpg');">
			<div class="container-fluid">
				<div class="row" style="overflow: hidden;">
					<div class="col-md-6 col-sm-12 home__seo__img">
						<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/build/--nazwa-firmy--.png" alt="">
					</div>
					<div class="col-md-6 col-sm-12 home__seo__text">
						<?php echo apply_filters('the_content', $post->post_content); ?>
						<a href="<?php echo get_page_link( get_page_by_title( 'O firmie' )->ID ); ?>" class="btn btn-default"><?php echo __('About Us', '--nazwa-firmy--') ?></a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>