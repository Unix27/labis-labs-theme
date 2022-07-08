<?php 
	// Template Name: Graphic Designer
	get_header();
	$fields = get_fields();
?>

<main>
	<h1 class="services__title text-center"><?php the_title() ?></h1>
	<h3 class="page_subtitle subtitle text-center text-a46"><?php echo $fields['page_subtitle']; ?></h3>
	<!-- FIRST SCREEN START -->
	<section class="paid_traffic_fs graphic_designer_fs with_square gray">
		<div class="square gray _1"></div>
		<div class="square gray _3"></div>
		<div class="square gray _4"></div>
		<div class="square gray _6"></div>
		<div class="square gray _7"></div>
		<div class="square gray _8"></div>
		<div class="square gray _10"></div>
		<div class="square gray _11"></div>
		<div class="square white _12"></div>
		<div class="shadow pink _5"></div>
		<div class="bg">
			<div class="container flex-stretch-between">
				<div class="left_part">
					<?php echo theme_get_image_tag($fields['block_first_screen']['img']) ?>
				</div>
				<div class="right_part">
					<h2 class="title"><?php echo $fields['block_first_screen']['title']; ?></h2>
					<p class="text"><?php echo $fields['block_first_screen']['text']; ?></p>
				</div>
			</div>
		</div>
	</section>
	<!-- FIRST SCREEN END -->

	<section class="graphic_designer_lists">
		<div class="container">
			<?php foreach ($fields['lists'] as $item): ?>
			<div class="list_wrap">
				<h2 class="title"><?php echo $item['title'] ?></h2>
				<p class="subtitle text-a46"><?php echo $item['subtitle'] ?></p>
				<ul class="<?php echo $item['list_style'] ?>">
					<?php foreach ($item['list'] as $li): ?>
						<li><?php echo $li['text'] ?></li>
					<?php endforeach ?>
				</ul>
			</div>
			<?php endforeach ?>
		</div>
		<?php echo theme_get_link_tag($fields['button'], 'graphic_designer_lists__btn home_form__submit'); ?>
	</section>

	<div class="spacer_before_footer"></div>
</main>

<?php 
	get_footer();
?>