<?php 

	// Template Name: Portfolio Page

	get_header();

	$fields = get_fields();



	// $posts = get_posts([

	// 	'numberposts' => 4,

	// 	'post_type' => 'protfolio'

	// ]);

	$pageID = get_option('page_on_front');

	// var_dump($posts);

?>



<main>

	<h1 class="services__title text-center"><?php the_title(); ?></h1>



	<!-- FIRST SCREEN START 1-->

	<section class="paid_traffic_fs case_studies_fs with_square gray">

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

			<div class="container flex-center-between">

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



	<!-- PORTFOLIO ITEMS START -->

	<section class="home_working_with_us portfolio_page__items_wrap">

		<div class="container">

			<div class="flex-stretch-between our_work">

				<?php foreach ( get_field('working_with_us', $pageID)['list'] as $item): ?>

					<a href="<?php echo $item['url'] ?>" class="item">

						<span class="img_wrap">

							<?php echo theme_get_image_tag($item['background']??null); ?>

						</span>

						<h3 class="item_title text-a46"><?php echo $item['title'] ?></h3>

					</a>

				<?php endforeach ?>

			</div>


		</div>

	</section>

	<!-- PORTFOLIO ITEMS END -->

</main>



<?php 

	get_footer();

?>