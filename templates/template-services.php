<?php 
	// Template Name: Services
	get_header();
	$fields = get_fields();
?>

<main>
	<h1 class="services__title text-center"><?php the_title(); ?></h1>
	<!-- SERVICES LIST START START -->
	<section class="services_list with_square gray">
		<div class="square gray _1"></div>
		<div class="square gray _2"></div>
		<div class="square gray _3"></div>
		<div class="square gray _4"></div>
		<div class="square gray _5"></div>
		<div class="square gray _6"></div>
		<div class="square gray _7"></div>
		<div class="square gray _8"></div>
		<div class="square gray _9"></div>
		<div class="square gray _10"></div>
		<div class="square gray _11"></div>
		<div class="square white _12"></div>
		<div class="shadow pink _5"></div>
		<div class="bg">
			<div class="container flex-stretch-between">
				
				<?php foreach ($fields['items'] as $item): ?>
					<div class="services_item">
						<h3 class="title"><?php echo $item['title'] ?></h3>
						<p class="subtitle text-a46 text-center"><?php echo $item['subtitle'] ?></p>
						<ul class="services_item_list">
							<?php foreach ($item['list'] as $li): ?>
								<li><?php echo $li['li'] ?></li>
							<?php endforeach ?>
						</ul>
						<div class="card_footer">
							<p class="subtitle text-a46 text-center"><?php echo $item['subtitle_2'] ?></p>
							<ul class="services_item_list">
								<?php foreach ($item['list_2'] as $li): ?>
								<li><?php echo $li['li'] ?></li>
							<?php endforeach ?>
							</ul>
							<?php echo theme_get_link_tag($item['button'], 'services_item_more btn'); ?>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>
	<!-- SERVICES LIST START END -->
</main>

<?php 
	get_footer('services');
?>