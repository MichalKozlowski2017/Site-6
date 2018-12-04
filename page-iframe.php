<?php
/* Template Name: iframe */

get_header();
?>

<div id="content" <?php post_class(); ?>>
	<div class="iframe">
		<iframe id="iframe__content" src="<?php echo get_field('url'); ?>" frameborder="0"></iframe>
	</div>
</div>
<script>
	window.iFrameResizer = {
		targetOrigin: 'https://generator---nazwa-firmy--.dev'
	}
</script>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/iframe-resizer/js/iframeResizer.min.js"></script>
<script>
	iFrameResize({
		log: false,
		messageCallback: function(msgData) {
			if (msgData.message == 'step') {

			}
		}
	}, '#iframe__content')
	// parentIFrame.sendMessage(function(msg) {
	// 	console.log(msg);
	// });
</script>

<?php get_footer(); ?>