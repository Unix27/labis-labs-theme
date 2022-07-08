<?php 
	// Template Name: Pricing
	get_header();
	$fields = get_fields();
?>

<main>
	<h1 class="services__title text-center"><?php the_title() ?></h1>
	<!-- FIRST SCREEN START -->
	<section class="paid_traffic_fs with_square gray">
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

	<!-- SET UP START -->
	<section class="pricing_set_up">
		<div class="container">
			<h2 class="pricing_title text-a46 text-center"><?php echo $fields['set_up_table']['title'] ?></h2>
			<div class="pricing_table flex-end-between">
				<?php foreach (['column_1', 'column_2'] as $col): ?>
					<div class="col">
						<div class="cell col_title"><?php echo $fields['set_up_table'][$col.'_title']??'' ?></div>
						<?php foreach ($fields['set_up_table']['table'] as $row): ?>
							<div class="cell <?php 
									echo $row[$col]=='yes'?'yes':''; 
									echo $row[$col]=='no'?'no':'';
								?>">
								<?php echo !in_array($row[$col], ['yes','no'])?$row[$col]:''  ?>
							</div>
						<?php endforeach ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>
	<!-- SET UP END -->

	<!-- Ongoing Management START -->
	<section class="pricing_ongoing_management">
		<div class="container">
			<h2 class="pricing_title text-a46 text-center"><?php echo $fields['ongoing_management_table']['title'] ?></h2>
			<div class="pricing_table flex-end-between">
				<?php foreach (['column_1', 'column_2', 'column_3', 'column_4'] as $col): ?>
					<div class="col">
						<div class="cell col_title"><?php echo $fields['ongoing_management_table'][$col.'_title']??'' ?></div>
						<?php foreach ($fields['ongoing_management_table']['table'] as $row): ?>
							<div class="cell <?php 
									echo $row[$col]=='yes'?'yes':''; 
									echo $row[$col]=='no'?'no':'';
								?>">
								<?php echo !in_array($row[$col], ['yes','no'])?$row[$col]:''  ?>
							</div>	
						<?php endforeach ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>
	<!-- Ongoing Management END -->

	<div class="spacer_before_footer"></div>
</main>

<?php 
	get_footer();
?>