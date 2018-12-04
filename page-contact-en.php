<?php
/* Template Name: Kontakt EN */

$header_image = get_field('header_image');
$benefits_form_en = get_field('benefits_form_en');

get_header();
?>
<div id="content" <?php post_class(); ?>>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="content__top">
			<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAQI-L8QPkmbTEit_a2KF2rtcwwPmQvYSY'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:600px;width:100%;'></div><div><small><a href="http://www.googlemapsgenerator.com/pl/">Osadzić Map Google na swojej stronie</a></small></div><div><small><a href="https://exemplementionslégalessiteinternet.fr/">mentions légales de site internet personnalisé</a></small></div></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:9,center:new google.maps.LatLng(52.16532300000001,18.399486000000024),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(52.16532300000001,18.399486000000024)});infowindow = new google.maps.InfoWindow({content:'<h2><?php   echo __('Contact', '--nazwa-firmy--');?></h2><strong>--nazwa-firmy-- Sp. z o. o.</strong><br><?php echo __('--nazwa-firmy--ka street 17, Paprotnia', '--nazwa-firmy--') ?><br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
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
				<?php if($benefits_form_en): ?>
					<div class="row">
						<div class="benefits-title col-sm-12">
							<h2>Cooperation benefits</h2>
						</div>
						<?php foreach($benefits_form_en as $index => $benefit): ?>

							<div class="col-sm-12 col-md-4 form-en-benefit">
								<h3><?php echo $benefit['benefit']; ?></h3>
								<img src="<?php echo $benefit['benefit_img']['url']; ?>" alt="">
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-sm-12">
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 form-en">
						<?php echo do_shortcode("[ninja_form id=5]"); ?>

					</div>
					<div class="cf"></div>
				</div>
				<div class="row">
					<div class="col-sm-12 form-en-info">
						<h2>--nazwa-firmy-- Sp. z o. o.</h2>
						<p>Paprotnia ul. --nazwa-firmy--ka 17, 62-513 Krzymów</p>
						<p>Sąd Rejonowy Poznań – Nowe Miasto I Wilda IX Wydział Gospodarczy Krajowego Rejestru Sądowego KRS: 0000176445,</p>
						<p>Share capital: 11.386.000,00 PLN, NIP: 665-26-77-246, REGON: 311604510</p>
					</div>
					<!-- <div class="form-en-thanks col-sm-12 col-md-10 col-md-offset-1">
						<img src="http://--nazwa-firmy--.test/wp-content/uploads/2018/04/form-en-succes.png" alt="Succes">
						<h2>Thanks you for submiting Your inquiry</h2>
						<p>Dear Customer,  <br>Thanks for visiting our website and interest in our products. Your message got safely to us, and we are looking into it. The reply will be sent in 3 days time from sales manager dedicated to Your market. Please note that, that for request we can cancel all Your contact details according to the EU regulations.</p>
						<h3>
							Thanks for choosing us!  <br><span>The --nazwa-firmy-- Team</span>
						</h3>
						<a href="">
							<button class="btn btn-primary">Read about our philosophy</button>
						</a>
					</div> -->
				</div>
			</div>
		</div>
		<div class="content_bottom">

		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
