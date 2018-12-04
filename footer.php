			<div class="clear"></div>
		</div>
		
		<?php if (get_field('newsletter', 'options')) : ?>
			<?php if (in_array($post->ID, get_field('b2b_newsletter', 'options'))) : ?>
				<div class="container">
					<div class="row">
						<div class="col-md-12 b2b_newsletter-container">
							<?php 
								echo do_shortcode('[FM_form id="1"]'); 
							?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="padding: 0;">
					<hr>
				</div>
			</div>
		</div>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
								<?php wp_nav_menu(array('theme_location' => 'footer-menu-1')); ?>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-3">
								<?php wp_nav_menu(array('theme_location' => 'footer-menu-2')); ?>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-3">
								<?php wp_nav_menu(array('theme_location' => 'footer-menu-3')); ?>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-3 footer-kontakt">
								<?php wp_nav_menu(array('theme_location' => 'footer-menu-5')); ?>
								<div class="social-icons">
									<?php if ($socials = get_field('footer_socials', 'options')) : ?>
										<?php foreach($socials as $social_icon) : ?>
											<a target="_blank" rel="nofollow" href="<?php echo $social_icon['url']; ?>" class="">
												<img src="<?php echo $social_icon['image']['sizes']['social-thumb']; ?>" alt="<?php echo $social_icon['url']; ?>">
											</a>
										<?php endforeach; ?>
									<?php endif; ?>
								</div>
								
								<div id="copyright">
									<?php wp_nav_menu(array('theme_location' => 'footer-menu-4')); ?>
									<p><?php echo sprintf( __( '%1$s %2$s %3$s %4$s', '--nazwa-firmy--' ), 'Copyright', '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</footer>
	</div>
	<?php wp_footer(); ?>
	<script type='text/javascript'>
	var src = (('https:' == document.location.protocol) ? 'https://' : 'http://');
	new Image().src = src+'adsearch.adkontekst.pl/deimos/tracking/?tid=34359741933&reid=AKCS3565&expire=5&nc=1505395682512-538088760';
	</script>
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 954203536;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/954203536/?guid=ON&amp;script=0"/>
	</div>
	</noscript>

	
	<script>
	  (function(d) {
	    var config = {
	      kitId: 'bqv2com',
	      scriptTimeout: 3000,
	      async: true
	    },
	    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>
		
	
	<?php if (get_field('newsletter', 'options')) : ?>
		<?php if (!in_array($post->ID, get_field('b2b_newsletter', 'options'))) : ?>
			<a type="button" class="newsletter-btn" data-toggle="modal" data-target="#myModal">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/newsletter-btn.png" alt="Newsletter">
			</a>
		<?php endif; ?>
	<?php endif; ?>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php 
					echo do_shortcode('[FM_form id="1"]'); 
				?>
			</div>
		</div>
	</div>
	</div>
</body>
</html>