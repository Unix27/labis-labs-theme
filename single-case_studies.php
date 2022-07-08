<?php 

	get_header();

	$fields = get_fields();

?>





<main>

	<h1 class="single_portfolio__title services__title text-center container"><?php the_title(); ?></h1>



	<!-- FIRST SCREEN START -->

	<section class="single_portfolio_fs with_square gray">

		<div class="square gray _1"></div>

		<div class="square gray _3"></div>

		<div class="square gray _4"></div>

		<div class="square gray _6"></div>

		<div class="square gray _7"></div>

		<div class="square gray _8"></div>

		<div class="square gray _10"></div>

		<div class="square gray _11"></div>

		<div class="square white _12"></div>

		<div class="bg">

			<div class="container flex-center-between">

				<div class="img_wrap">

					<?php echo theme_get_image_tag($fields['first_screen']['img']); ?>

				</div>



				<div class="column">

					<h3 class="title"><?php echo $fields['first_screen']['column_1']['title'] ?></h3>

					<p class="subtitle text-a46"><?php echo $fields['first_screen']['column_1']['subtitle'] ?></p>

				</div>



				<div class="column">

					<h3 class="title"><?php echo $fields['first_screen']['column_2']['title'] ?></h3>

					<p class="subtitle text-a46"><?php echo $fields['first_screen']['column_2']['subtitle'] ?></p>

				</div>

			</div>

		</div>

	</section>

	<!-- FIRST SCREEN END -->



	<!-- THE BRAND START -->

	<section class="single_portfolio_brand">

		<div class="container">

			<h2 class="title"><?php echo $fields['brand']['title'] ?></h2>

			<div class="free_content">

				<?php echo $fields['brand']['text'] ?>

			</div>

			<div class="images_wrap flex-stretch-between">

				<?php foreach ($fields['brand']['images'] as $item): ?>

					<div class="item">

						<div class="image_wrap">

							<?php echo theme_get_image_tag($item['img']); ?>

						</div>

					</div>

				<?php endforeach ?>

			</div>

		</div>

	</section>

	<!-- THE BRAND END -->



	<!-- THE CHALLENGE START -->

	<section class="single_portfolio_challenge">

		<div class="container">

			<h2 class="title"><?php echo $fields['challenge']['title'] ?></h2>

			<p class="text-a46"><?php echo $fields['challenge']['text_colored'] ?></p>

			<?php echo $fields['challenge']['text'] ?>

		</div>

		<div class="img_wrap">

			<?php echo theme_get_image_tag($fields['challenge']['img']); ?>

		</div>

	</section>

	<!-- THE CHALLENGE END -->



	<!-- THE SOLUTION START -->

	<section class="single_portfolio_solution">

		<div class="container">

			<div class="free_content">

				<?php echo apply_filters( 'the_content', $fields['solution'] ); ?>

			</div>

		</div>

	</section>

	<!-- THE SOLUTION END -->



	<!-- THE RESULTS START -->

	<section class="single_portfolio_results">

		<div class="container">

			<h2 class="title"><?php echo $fields['result']['title'] ?></h2>

			<div class="img_wrap">

				<?php echo theme_get_image_tag($fields['result']['img']) ?>

			</div>

		</div>

	</section>

	<!-- THE RESULTS END -->



	<!-- BLOCK WITH VIDEO START -->
	<section class="single_portfolio_video">
		<div class="container">
			<div class="comment flex-start-between">
				<div class="left_part">
					<div class="img_wrap">
						<?php echo theme_get_image_tag($fields['video']['comment']['img']); ?>
					</div>
				</div>
				<div class="right_part">
					<div class="quotes">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/quotes.svg" alt="“">
					</div>
					<p class="text"><?php echo $fields['video']['comment']['text'] ?></p>
					<div class="after_comment text-a46">
						<p class="company_name"><?php echo $fields['video']['comment']['company_name'] ?></p>
						<p class="position"><?php echo $fields['video']['comment']['position'] ?></p>
					</div>
				</div>
			</div>
			<div class="video_wrap">
				<div class="iframe_wrap">
					<?php echo $fields['video']['iframe'] ?>
				</div>
			</div>
		</div>
	</section>
	<!-- BLOCK WITH VIDEO END -->



</main>



<?php 

	get_footer();

?>