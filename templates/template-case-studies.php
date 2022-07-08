<?php 
	// Template Name: Case Studies Page
	get_header();
	$fields = get_fields();

	$posts = get_posts([
		'numberposts' => 10,
		'post_type' => 'case_studies'
	]);

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

	<!-- BLOG START -->
	<section class="page_blog_posts case_studies_posts">
		<div class="container">
			<div class="posts flex-stretch-between">
				<?php
					global $post; 
					foreach ($posts as $key => $post): 
					setup_postdata($post);
				?>
					<a href="<?php the_permalink(); ?>" class="item <?php echo $key==0?'w-66':$key==6?'w-66':'' ?>">
						<div class="img_wrap">
							<?php echo get_the_post_thumbnail($post); ?>
						</div>
						<div class="item_logo_wrap">
							<?php echo theme_get_image_tag(get_field('brand_for_page_case_studies', $post->ID)); ?>
						</div>
						<h3 class="item_name"><?php the_title() ?></h3>
					</a>
				<?php 
					wp_reset_postdata();
					endforeach 
				?>
				<div class="item"></div>
			</div>
			<!-- <div class="text-center"> <a class="show_more text-a46" href="#">Show more</a></div> -->
		</div>
	</section>
	<!-- BLOG END -->
</main>

<?php 
	get_footer();
?>