<?php
/* Template Name: Landing */

get_header();
$items = get_field('items');
$bg = get_field('background');
$kv_bg_big = get_field('kv_bg_big');
$kv_bg_small = get_field('kv_bg_small');
$kv_prize = get_field('prize_1');
$ambasadors = get_field('ambasadors');
$regulamin = get_field('regulamin', 'options');
$regulamin_ambasadorow = get_field('regulamin_ambasadorow', 'options');
$lista = get_field('lista_zwyciezcow', 'options');
?>
<div id="content" <?php post_class(); ?>>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="content_mid" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/bg.jpg') ">
			<div class="module kv">
				<div class="kv__content">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-sm-6 col-md-6">
								<div class="col-xs-12 col-sm-4 col-md-5">
									<h1>
										SPRÓBUJ <br><span>NOWEGO <br>SMAKU</span>
									</h1>
								</div>
								<div class="col-xs-12 col-sm-8 col-md-7 packshots">
									<a href="/produkt/wafle-ryzowe-z-belgijska-czekolada-deserowa/">
										<img class="img img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/packshot_deserowa.png" alt="packshot">
										<div class="btn">Sprawdź!</div>
									</a>
									<a href="/produkt/wafle-ryzowe-z-belgijska-czekolada-mleczna/">
										<img class="img img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/packshot_mleczna.png" alt="packshot">
										<div class="btn">Sprawdź!</div>
									</a>
								</div>
							</div>
							<div class="col-sm-12 col-sm-6 col-md-6">
								<img class="img img-responsive wafle_logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/wafle_logo.jpg" alt="Wafle ryżowe">
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="trinagle-bg" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/trinagle-bg.png') "></div>
			<br>

			<div id="konkurs" class="module konkurs" >
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2 header-center">
							<p>rozstrzygnięcie konkursu</p>
							<h3>wybraliśmy mistrzowskie połączenie</h3>
							<h2>Ryżowe Batony Moniki</h2>
							<p>Autorka: <span>Monika Raźny</span></p>
						</div>
						<div class="col-xs-12 col-md-2 nagroda-glowna">
							<p>nagroda główna</p>
							<img class="img img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/nagroda.png" alt="Nagroda Główna">
							<h3>ZESTAW MAŁEGO AGD <br>MARKI BOSCH <br>O WARTOŚCI 5.000 zł</h3>
						</div>
					</div>
					<div class="row">
						<div class="sklad">
							<div class="wafle col-xs-12 col-md-3">
								<p>Składniki:</p>
								<a href="/produkt/wafle-ryzowe-z-sola-morska-2/">
									<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/wafle_z_sola_morska.png" alt="Wafle z solą morską">
								</a>
								<h3>
									wafle ryżowe --nazwa-firmy-- z solą morską
								</h3>
							</div>
							<div class="skladniki col-xs-12 col-md-9">


								<div class="col-xs-6 col-md-6">
									<div class="skladnik">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/skladnik_1.png" alt="składnik">
										<p>opakowanie <br>Płatków migdałowych</p>
									</div>
									<div class="skladnik">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/skladnik_2.png" alt="składnik">
										<p>2 łyżki <br>nasion chia</p>
									</div>
									<div class="skladnik">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/skladnik_3.png" alt="składnik">
										<p>polewa <br>czekoladowa</p>
									</div>								
								</div>
								<div class="col-xs-6 col-md-6">
									<div class="skladnik">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/skladnik_4.png" alt="składnik">
										<p>karmel <br>z 500 g krówek</p>
									</div>
									<div class="skladnik">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/skladnik_5.png" alt="składnik">
										<p>3 łyżki <br>żurawiny</p>
									</div>
									
									<div class="skladnik">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/skladnik_6.png" alt="składnik">
										<p>1 łyżka <br>mleka</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="wafle sposob col-xs-12">
							<p>sposób przyrządzenia:</p>
						</div>
					</div>
					<div class="row">
						<div class="przepis">
							<div class="kroki">
								<div class="krok col-xs-6 col-md-4">
									<div class="icon">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/krok_1.png" alt="składnik">
									</div>
									<p>W rondelku na wolnym ogniu rozpuszczamy krówki z jedną łyżką mleka. Powstały karmel odstawiamy do przestygnięcia. 
</p>
								</div>
								<div class="krok col-xs-6 col-md-4">
									<div class="icon">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/krok_2.png" alt="składnik">
									</div>
									<p>W oddzielnej misce drobno kruszymy wafle Kupca z solą morską.
</p>
								</div>
								<div class="krok col-xs-6 col-md-4">
									<div class="icon">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/krok_3.png" alt="składnik">
									</div>
									<p>Następnie dodajemy płatki migdałowe, nasiona chia, żurawinę i wszystko dokładnie ze sobą mieszamy. Do powstałej mieszanki powoli wlewamy przestudzony karmel i bardzo  energicznie wszystko ze sobą łączymy. 
</p>
								</div>
								<div class="krok col-xs-6 col-md-4">
									<div class="icon">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/krok_4.png" alt="składnik">
									</div>
									<p>Z powstałej masy za pomocą dwóch łyżek formujemy batony tudzież kulki. 
</p>
								</div>
								<div class="krok col-xs-6 col-md-4">
									<div class="icon">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/krok_5.png" alt="składnik">
									</div>
									<p>Batony przekładamy na blaszkę wyłożona papierem do pieczenia i pozostawiamy do zastygnięcia na około 30min. 

</p>
								</div>
								<div class="krok col-xs-6 col-md-4">
									<div class="icon">
										<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/landing/krok_6.png" alt="składnik">
									</div>
									<p>Smacznego!
</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row lista">
						<?php if ($lista) : ?>
							<a href="<?php echo $lista ?>" class="konkurs-lista btn btn-default" target="_blank">lista zwycięzców nagród codziennych</a>
						<?php endif; ?>
						<?php if($regulamin) : ?>
						<div class="regulamin">
							<a href="<?php echo $regulamin ?>" target="_blank">Regulamin</a>
						</div>
						<?php endif; ?>

					</div>
					
				</div>
			</div>
			<br>
			<br>
			<br>
			<hr>
			<br>
			<div id="program" class="module program" >
				<div class="container">
					<div class="row">
						<div class="col-md-offset-3 col-md-6">
							<?php echo apply_filters('the_content', get_field('program_content')); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-3 col-md-6">
							<?php echo do_shortcode(get_field('form_shortcode')); ?>
						</div>
					</div>
				</div>
			</div>


			<?php if ($ambasadors) : ?>
				<div class="module landing-gallery">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 header-center">
								<h2>Nasi ambasadorzy</h2>
							</div>
						</div>
						<div class="row">
							<?php if($regulamin_ambasadorow) : ?>
							<div class="regulamin">
								<a href="<?php echo $regulamin_ambasadorow ?>" target="_blank">Regulamin</a>
							</div>
							<?php endif; ?>
						</div>
						<div class="row">
							
							<div class="slick-slider">
								<?php foreach($ambasadors as $item) : ?>
									<div class="ambasador-wrapper">
										<div class="ambasador">
											<a href="<?php echo $item['url'] ?>" target="_blank">
												<img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
												<?php if($item['fb_insta']) : ?>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/build/insta_amba.png" alt="Instagram">
												<?php endif; ?>
												<?php if(!$item['fb_insta']) : ?>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/build/fb_amba.png" alt="Facebook">
												<?php endif; ?>
											</a>		

										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						
					</div>
				</div>
				<br>

				<hr>
				<br>
			<?php endif; ?>
			<div class="module landing-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12 header ">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="module landing-products">
				<div class="container">
					<div class="row">
						<?php foreach($items as $item) : ?>
							<div class="landing-products__item">
								<a href="<?php echo $item['link']; ?>">
									<div class="landing-products__item__image">
										<img src="<?php echo $item['image']['sizes']['landing-product-thumb']; ?>" alt="<?php echo $item['title']; ?>">
									</div>
									<div class="landing-products__item__text">
										<?php echo $item['text']; ?>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
						<div class="landing-products__cta">
							<a href="/produkty" class="btn btn-default">Wszystkie produkty</a>
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