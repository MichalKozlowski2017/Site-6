<?php $image = get_sub_field('image'); ?>
<div class="row">
	<div class="module image_text">
		<?php if (!get_sub_field('image_right')) : ?>
			<div class="col-md-6 image_text__left image_text__image">
				<img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo 'Obrazek do tekstu'; ?>">
			</div>
			<div class="col-md-6 image_text__right image_text__text">
				<?php echo apply_filters('the_content', get_sub_field('content')); ?>
			</div>
		<?php else: ?>
			<div class="col-md-6 image_text__left image_text__image visible-sm visible-xs">
				<img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo 'Obrazek do tekstu'; ?>">
			</div>
			<div class="col-md-6 image_text__left image_text__text">
				<?php echo apply_filters('the_content', get_sub_field('content')); ?>
			</div>
			<div class="col-md-6 image_text__right image_text__image hidden-sm hidden-xs">
				<img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo 'Obrazek do tekstu'; ?>">
			</div>
		<?php endif; ?>
		<div class="cf"></div>
		<?php if (!empty(get_sub_field('content_small_left'))) : ?>
			<div class="col-sm-6">
				<div class="image_text__col image_text__col--grey">
					<?php echo apply_filters('the_content', get_sub_field('content_small_left')); ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (!empty(get_sub_field('content_small_right'))) : ?>
			<div class="col-sm-6">
				<div class="image_text__col image_text__col--green">
					<?php echo apply_filters('the_content', get_sub_field('content_small_right')); ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="cf"></div>
	</div>
</div>