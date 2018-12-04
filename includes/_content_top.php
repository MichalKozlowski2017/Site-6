<?php
	$header_image = get_field('header_image');
	if (get_field('header_image_big')) {
		$header_image = $header_image['sizes']['header-image-big'];
	} else {
		$header_image = $header_image['sizes']['header-image'];
	}
?>

<div class="content__top <?php echo (get_field('header_image_big')) ? 'content__top--big' : ''; ?>" style="background-image: url(<?php echo $header_image; ?>);">
	<div class="container">
		<div class="row">
			<div class="content__top__inner">
				<div class="content__top__inner__content">
					<h1 class="content__title">
						<?php the_title(); ?>
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>
