<?php
/* Template Name: Kariera */
$header_image = get_field('header_image');
$kariera_video = get_field('kariera_video');
$kariera_video_text = get_field('kariera_video_text');
$kariera_zasady = get_field('kariera_zasady');
$kariera_rozwoj_title = get_field('rozwoj_title');
$rozwoj_points = get_field('rozwoj_points');
$praktyki_image = get_field('praktyki_image');
$praktyki_text = get_field('praktyki_text');
$big_adboxes = get_field('adbox_big');
$praktyki_button_url = get_field('praktyki_button_url');
$praktyki_button_text = get_field('praktyki_button_text');
$kariera_oferty = get_field('kariera_oferty');
	get_header();
?>
<div id="content" <?php post_class(); ?>>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php include('includes/_content_top.php'); ?>
		<div class="content_mid">
			<div class="container kariera">
				<div class="row">
					<div class="col-sm-12">
						<?php display_breadcrumbs($post->ID); ?>
					</div>
				</div>
				<!-- Wideo -->
				<div class="row">
					<div class="col-sm-12 col-md-6 kariera__video">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe src="<?php echo $kariera_video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<?php echo $kariera_video_text; ?>
					</div>
				</div>
				<!-- Zasady -->
				<div class="row kariera__zasady">
					<div class="col-xs-12">
						<h2>Zasady, którymi <br>kierujemy się w kupcu:</h2>
					</div>
					<!-- Icons -->
					<?php if (!empty($kariera_zasady)) : ?>
						<?php foreach($kariera_zasady as $index => $zasada) : ?>
							<div class="col-md-3 col-sm-6 col-xs-12 kariera__zasady__icon-container">
								<div class="kariera__zasady__icon-container__icon">
									<div class="kariera__zasady__icon-container__icon__img">
										<img src="<?php echo $zasada['kariera_zasada']['url'] ?>" alt="">
									</div>
									<h3><?php echo $zasada['kariera_zasada_tytul'] ?></h3>
									<?php echo $zasada['kariera_zasada_text'] ?>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="content_mid kariera__oferty" style="background-color: #f2f2f2;">
			<div class="container" >
				<div class="row">
					<div class="col-xs-12">
						<h2>najnowsze oferty pracy</h2>
					</div>
					<?php if (!empty($kariera_oferty)) : ?>
					<div class="col-xs-12 col-sm-8 col-md-6 kariera__oferty__lista">
						

						<?php foreach($kariera_oferty as $index => $oferta) : ?>
						<div class="kariera__oferty__lista__elem">
							<a href="<?php echo $oferta['kariera_oferty_link']?>" target="_blank">
								<h3><?php echo $oferta['kariera_oferty_stanowisko'] ?></h3>
								<p><?php echo $oferta['kariera_oferty_lokalizacja'] ?></p>
								<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/build/arrow_icon.png" alt="">
							</a>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
					<div class="col-xs-12 col-sm-4 col-md-6 kariera__oferty__hr-kontakt">
						<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/build/hr_icon.png" alt="">
						<h3>zapraszamy do kontaktu <br>z naszym działem hr</h3>
						<a class="btn btn-default" href="mailto:kadry@--nazwa-firmy--.pl">Napisz do nas</a>
					</div>
				</div>
			</div>
		</div>

		<div class="content_mid kariera__proces">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2>Proces rekrutacji</h2>
						<p class="title-note">* W zależności od stanowiska proces rekrutacji może się różnić.</p>
					</div>
					<div class="col-xs-12 kariera__proces__bullets">
						<div class="kariera__proces__bullets__bullet">
							<h2>1</h2>
							<p>nadsyłanie zgłoszeń</p>
						</div>
						<div class="kariera__proces__bullets__bullet">
							<h2>2</h2>
							<p>weryfikacja nadesłanych zgłoszeń</p>
						</div>
						<div class="kariera__proces__bullets__bullet">
							<h2>3</h2>
							<p>rezmowa rekrutacyjna</p>
						</div>
						<div class="kariera__proces__bullets__bullet">
							<h2>4</h2>
							<p>decyzja o zatrudnieniu</p>
						</div>
						<div class="kariera__proces__bullets__bullet">
							<h2>5</h2>
							<p>Witamy <br>w&nbsp;--nazwa-firmy-- sp.&nbsp;z.o.o!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if (!empty($kariera_rozwoj_title)) : ?>
		<div class="content_mid kariera__rozwoj">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<hr>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<h2>rozwój pracownika: zasada 70/20/10</h2>
					</div>

					<?php foreach($rozwoj_points as $index => $point) : ?>
					<div class="col-xs-12 col-md-3 kariera__rozwoj__point">
						<img src="<?php echo $point['image']['url'] ?>" alt="">
						<h3><?php echo $point['title'] ?></h3>
						<?php echo $point['text'] ?>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php if (!empty($kariera_rozwoj_title)) : ?>
		<div class="content_mid kariera__praktyki">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<hr>
					</div>
					<div class="col-xs-12 col-md-6">
						<img src="<?php echo $praktyki_image['url'] ?>" alt="" class="img img-responsive">
					</div>
					<div class="col-xs-12 col-md-6">
						<?php echo $praktyki_text ?>
						 <a href="<?php echo $praktyki_button_url; ?>" class="btn btn-default">
							<?php echo $praktyki_button_text; ?>
						</a>
					</div>
					
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="container">
			<div class="row kariera-box">
				<?php include('includes/_big_adboxes.php'); ?>
			</div>
		</div>
		<div class="content_bottom">
			
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>