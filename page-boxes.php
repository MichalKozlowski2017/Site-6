<?php
/* Template Name: Struktura boksów */

$header_image = get_field('header_image');

$boxes = get_field('boxes');
$cols = get_field('cols');

$cta_text = get_field('cta_text');
$cta_link = get_field('cta_link');

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
				<?php if (!empty($boxes)) : ?>
					<div class="boxes">
						<?php foreach($boxes as $index => $box) : ?>
							<?php if ($index % 2 == 0) : ?>
								<div class="box">
									<div class="row">
										<div class="col-md-6">
											<div class="box__image box__left">
												<img src="<?php echo $box['image']['sizes']['banner']; ?>" alt="<?php echo __('Obrazek do tekstu', '--nazwa-firmy--'); ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="box__text box__right">
												<?php echo apply_filters('the_content', $box['content']); ?>
												<div class="box__text__readmore">
													<a href="<?php echo $box['cta_url']; ?>" class="btn btn-default"><?php echo $box['cta_text']; ?></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php else : ?>
								<div class="box">
									<div class="row">
										<div class="col-md-6 visible-sm visible-xs">
											<div class="box__image box__right">
												<img src="<?php echo $box['image']['sizes']['banner']; ?>" alt="<?php echo __('Obrazek do tekstu', '--nazwa-firmy--'); ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="box__text box__left">
												<?php echo apply_filters('the_content', $box['content']); ?>
												<div class="box__text__readmore">
													<a href="<?php echo $box['cta_url']; ?>" class="btn btn-default"><?php echo $box['cta_text']; ?></a>
												</div>
											</div>
										</div>
										<div class="col-md-6 hidden-sm hidden-xs">
											<div class="box__image box__right">
												<img src="<?php echo $box['image']['sizes']['banner']; ?>" alt="<?php echo __('Obrazek do tekstu', '--nazwa-firmy--'); ?>">
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<?php if (!empty($cols)) : ?>
					<div class="cols">
						<div class="row">
							<?php foreach ($cols as $col) : ?>
								<div class="col-sm-6">
									<div class="col">
										<div class="col__image" style="background-image: url(<?php echo $col['image']['sizes']['banner']; ?>)">
											<h2 class="col__title"><?php echo $col['title']; ?></h2>
										</div>
										<div class="col__text">
											<?php echo apply_filters('the_content', $col['content']); ?>
										</div>
										<div class="cf"></div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="content_bottom">
			<?php if (!empty($cta_text && $cta_link)) : ?>
				<a class="btn btn-default" href="<?php echo $cta_link; ?>"><?php echo $cta_text; ?></a>
			<?php endif; ?>
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>