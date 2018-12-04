<?php $embeds = get_sub_field('embeds'); ?>
<div class="module social-media">
	<div class="row">
		<div class="col-md-12">
			<h2><?php echo __('Social Media', '--nazwa-firmy--'); ?></h2>
		</div>
	</div>
	<div class="row">
		<?php foreach($embeds as $index=> $embed) : ?>
			<div class="col-md-4 col-sm-6 <?php echo ($index != 0) ? 'hidden-xs ' : ''; echo ($index > 1) ? 'hidden-sm ' : ''; ?>">
				<?php echo $embed['embed']; ?>
			</div>
		<?php endforeach; ?>
	</div>
</div>