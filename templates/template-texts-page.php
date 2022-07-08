<?php 
	// Template Name: Texts Page
	get_header();
?>

<main>
	<h1 class="services__title text-center"><?php the_title(); ?></h1>
	<!-- FIRST SCREEN START -->
	<section class="texts_page_decoration_block with_square gray">
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
		</div>
	</section>
	<!-- FIRST SCREEN END -->

	<!-- TEXTS CONTENT START -->
	<section class="texts_page_content">
		<div class="container free_content">
			<?php the_content(); ?>
		</div>
	</section>
	<!-- TEXTS CONTENT END -->
</main>

<?php 
	get_footer();
?>