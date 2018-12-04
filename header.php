<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MWMS427');</script>
		<!-- End Google Tag Manager -->
		<link rel="manifest" href="/manifest.json"><script charset="UTF-8" src="https://cdn.pushpushgo.com/js/5b150930611f7f000bf8c04b.js" async="async"></script>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
		<meta name="viewport" content="width=device-width" />
		<meta name="google-site-verification" content="cpg34SKMWCerftm4BfryuLS15LHstvADEyigve1LJ0g" />
		<?php wp_head(); ?>
		<!-- Facebook Pixel Code -->
		<script>
		  !function(f,b,e,v,n,t,s)
		  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		  n.queue=[];t=b.createElement(e);t.async=!0;
		  t.src=v;s=b.getElementsByTagName(e)[0];
		  s.parentNode.insertBefore(t,s)}(window, document,'script',
		  'https://connect.facebook.net/en_US/fbevents.js');
		  fbq('init', '254251478404908');
		  fbq('track', 'PageView');
		</script>
		<!-- End Facebook Pixel Code -->
		<!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '659510714384979');
            fbq('track', 'PageView');
        </script>
	</head>
	<body <?php body_class(); ?>>
		<noscript><img height="1" width="1" style="display:none"
		  src="https://www.facebook.com/tr?id=254251478404908&ev=PageView&noscript=1"
		/></noscript>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWMS427"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div id="wrapper" class="hfeed">
			<header id="header">
				<div class="cookies">
					<a class="cookies__close" href="#">x</a>
					<div class="container">
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								Monitorujemy anonimowo aktywność na stronie, korzystamy z cookies i local storage. Bez zmiany ustawień pliki są zapisywane na urządzeniu. Więcej przeczytasz <a target="_blank" href="#">tutaj</a>.
							</div>
						</div>
					</div>
				</div>
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<div class="navbar-toggle-wrapper">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<a class="navbar-brand" href="

							<?php
								if(ICL_LANGUAGE_CODE=='pl'){
								  echo home_url( '/' );
								}
								if(ICL_LANGUAGE_CODE=='en'){
								  echo home_url( '/en/' );
								}
							?>

						"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/build/logo.png" alt="--nazwa-firmy-- Logo"></a>
					</div>
					<div class="nav-wrapper">
						<?php
							wp_nav_menu( array(
				                'menu'              => 'main-menu',
				                'theme_location'    => 'main-menu',
				                'depth'             => 2,
				                'container'         => 'div',
				                'container_class'   => 'collapse navbar-collapse',
				                'container_id'      => 'bs-example-navbar-collapse-1',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				                'walker'            => new WP_Bootstrap_Navwalker())
				            );
						?>
					</div>
				</nav>
			</header>
			</div>
			<div id="container">
