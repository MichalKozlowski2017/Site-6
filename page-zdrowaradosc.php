<?php
/* Template Name: Zdrowa radosc */

$header_image = get_field('header_image');


get_header();
?>
<div id="content" <?php post_class(); ?>>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php
			$header_image = get_field('header_image');
			if (get_field('header_image_big')) {
				$header_image = $header_image['sizes']['zdrowaradosc'];
			} else {
				$header_image = $header_image['sizes']['header-image'];
			}
		?>
		<div class="content__top <?php echo (get_field('header_image_big')) ? 'content__top--big' : ''; ?>" style="background-image: url(<?php echo $header_image; ?>);">
			<div class="container">
				<div class="row">
					<h1 class="content__title">
						<?php the_title(); ?>
					</h1>
				</div>
			</div>
		</div>
		<div class="content_mid zdrowaradosc-content">
			<div class="container">
				<div class="row">
					<div>
						<div class="zdrowaradosc-content__wrapper">
							<?php
							if( have_rows('zrz_content') ):
							     // loop through the rows of data
							    while ( have_rows('zrz_content') ) : the_row();
							        if( get_row_layout() == 'text' ):
										$text = get_sub_field('text');
							            echo $text;
							        elseif( get_row_layout() == 'icons' ): ?>
							            <div class="zdrowaradosc-content__wrapper__icons">
							            	<h2><?php echo get_sub_field('title'); ?></h2>
											<div class="zdrowaradosc-content__wrapper__icons__list">
												<?php foreach(get_sub_field('icon_list') as $icon): ?>
													<div class="zdrowaradosc-content__wrapper__icons__list__icon">
														<div class="zdrowaradosc-content__wrapper__icons__list__icon__image">
															<img src="<?php echo $icon['icon'] ?>" alt="<?php echo $icon['text'] ?>">
														</div>
														<p><?php echo $icon['text'] ?></p>
													</div>
												<?php endforeach; ?>
											</div>
							            </div>
									<?php elseif( get_row_layout() == 'cta' ): ?>
										<div class="zdrowaradosc-content__wrapper__cta">
											<h2><?php echo get_sub_field('title'); ?></h2>
											<a class="btn btn-default" href="mailto:<?php echo get_sub_field('button_link'); ?>"><?php echo get_sub_field('button_text'); ?></a>
											<p>Klauzula informacyjna RODO:<br>
											W związku z realizacją wymogów Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o ochronie danych „RODO”), informujemy o zasadach przetwarzania Pani/Pana danych osobowych oraz o przysługujących Pani/Panu prawach z tym związanych.</p>
										</div>
									<?php elseif( get_row_layout() == 'przepis' ): ?>
										<div class="zdrowaradosc-content__wrapper__przepis">

											<?php if(get_sub_field('title')): ?>
											<h2><?php echo get_sub_field('title'); ?></h2>
											<?php endif; ?>
											<?php if(get_sub_field('slides')): ?>
											<div class="zrz-slider-przepis" id="slider-przepis">
												<?php $slides = get_sub_field('slides'); ?>
												<?php foreach($slides as $slide): ?>

												<div class="zrz-slider-przepis__slide" >
														<img src="<?php echo $slide['image']; ?>" alt="<?php echo get_sub_field('title'); ?>">
														<div class="zrz-slider-przepis__slide__logo" style="background-image:url('<?php echo get_sub_field('slider-logo') ?>')">

														</div>
												</div>
												<?php endforeach; ?>
											</div>
											<?php endif; ?>
											<?php if(get_sub_field('skladniki')): ?>
												<div class="zdrowaradosc-content__wrapper__przepis__skladniki">
													<h3>Składniki</h3>
													<ul>
													<?php foreach(get_sub_field('skladniki') as $skladnik): ?>
													<li><?php echo $skladnik['skladnik']; ?></li>
													<?php endforeach; ?>
													</ul>
												</div>
											<?php endif; ?>
											<?php if(get_sub_field('przygotowanie')): ?>
												<div class="zdrowaradosc-content__wrapper__przepis__przygotowanie">
													<h3>Przygotowanie</h3>
													<ol>
														<?php foreach(get_sub_field('przygotowanie') as $point): ?>
															<li><?php echo $point['point']; ?></li>
														<?php endforeach; ?>
													</ol>
												</div>
											<?php endif; ?>
											<?php if(get_sub_field('porady_dietetyka')): ?>
												<div class="porady-diet">
													<h3>Porady dietetyka</h3>
													<div class="porady-diet__wrapper">
														<?php foreach(get_sub_field('porady_dietetyka') as $porada): ?>
														<div class="porady-diet__wrapper__porada">
															<div class="porady-diet__wrapper__porada__header">
																<img src="<?php echo $porada['image'] ?>" alt="<?php echo $porada['imie_i_nazwisko'] ?>">
																<div>
																	<h4><?php echo $porada['imie_i_nazwisko']; ?></h4>
																	<p><?php echo $porada['stanowisko']; ?></p>
																</div>
															</div>
															<div class="porady-diet__wrapper__porada__content">
																<p><span><?php echo $porada['title']; ?></span>
																	<?php echo $porada['zajawka']; ?>
																</p>
															</div>
															<div class="porady-diet__wrapper__porada__content__button">
																<a class="btn btn-default" href="<?php echo $porada['button_link'];?>"><?php echo $porada['button_text']; ?></a>
															</div>
														</div>
														<?php endforeach; ?>
													</div>
												</div>
											<?php endif; ?>
											<?php if(get_sub_field('slider_ambasador')): ?>
												<h2>Inspiracje naszych Ambasadorów</h2>
												<div class="zrz-slider-przepis" id="slider-ambasador">
													<?php $slider_ambasador = get_sub_field('slider_ambasador'); ?>
													<?php foreach($slider_ambasador as $slide): ?>

													<div class="zrz-slider-przepis__slide" >
														<?php echo $slide['embed']; ?>
													</div>
													<?php endforeach; ?>
												</div>
											<?php endif; ?>
										</div>

									<?php endif;
							    endwhile;
							else :

							    // no layouts found

							endif;
							?>
						</div>
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
