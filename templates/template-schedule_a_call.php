<?php 
	// Template Name: Schedule a Call Page
	get_header('empty');
	$fields_header_logo = get_field('header','option');
	$fields_footer_logo = get_field('footer','option');
	$fields = get_fields();
?>

<!-- SCHEDULE A CALL START -->
<section class="schedule_call_content">
	<div class="container">
		<div class="text-center">
			<a href="<?php echo get_home_url(); ?>" class="header__logo">
				<?php echo theme_get_image_tag($fields_header_logo['logo']); ?>
			</a>
		</div>

		<h1 class="schedule_call__title text-center"><?php the_title(); ?></h1>
		<div class="content flex-stretch-between">
			<div class="left_part">
				<div class="img_wrap">
					<?php echo theme_get_image_tag($fields['left_part']['img']) ?>
				</div>

				<div class="free_content">
					<?php echo $fields['left_part']['text'] ?>
				</div>

				<div class="row flex-stretch-between text-center">
					<?php foreach ($fields['left_part']['list'] as $item): ?>
						<div class="item">
							<p class="val text-a46"><?php echo $item['ttile'] ?></p>
							<p class="caption"><?php echo $item['text'] ?></p>
						</div>	
					<?php endforeach ?>
				</div>
			</div>

			<div class="right_part">
				<!-- Calendly inline widget begin -->
				<div class="calendly-inline-widget" data-url="https://calendly.com/labislabs/30call" style="min-width:320px;height:630px;"></div>
				<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
				<!-- Calendly inline widget end -->
			</div>
		</div>
	</div>
</section>
<!-- SCHEDULE A CALL END -->

<?php 
	get_footer('empty');
?>