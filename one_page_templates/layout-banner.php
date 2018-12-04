<?php $image = get_sub_field('image'); ?>
<div class="module banner">
	<div class="col-sm-8">
		<div class="banner__left" style="background-image: url(<?php echo $image['sizes']['banner'] ?>);">
			<h2><?php echo get_sub_field('title'); ?></h2>
			<ul>
				<?php foreach (get_sub_field('list') as $item) : ?>
					<li><?php echo $item['content']; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="banner__right">
			<?php echo get_sub_field('text'); ?>
		</div>
	</div>
	<div class="cf"></div>
</div>