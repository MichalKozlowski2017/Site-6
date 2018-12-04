<?php


get_header();
?>
<div id="content" <?php post_class(); ?>>
	<div class="content_mid banner-404" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/--nazwa-firmy--404.jpg') ">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-404">
						<div class="page-404__wrapper">
							<p>Coś nam się posypało! Nie udało się odnaleźć strony, której szukasz.</p><br>
							<p>Sprawdź czy adres jest prawidłowy i spróbuj jeszcze raz!</p>
						</div>
						
						<!-- test -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content_bottom">
		
	</div>
</div>
<?php get_footer(); ?>