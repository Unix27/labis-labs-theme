<?php 
	// Template Name: More Exaples of Happy Clients Reviews Page
	get_header();
	$fields = get_fields();
?>

<main>
	<h1 class="services__title text-center"><?php the_title(); ?></h1>

	<!-- FIRST SCREEN START -->
	<section class="page_clients_reviews page_copywriting with_square">
	    <div class="square gray _1"></div>
	    <div class="square gray _3"></div>
	    <div class="square gray _4"></div>
	    <div class="square gray _19"></div>
	    <div class="square gray _20"></div>
	    <div class="square gray _21"></div>
	    <div class="container">
	    	<div class="reviews_list">
	    		<?php foreach ($fields['content'] as $item): ?>
					<div class="item single_portfolio_video">
						<div class="comment flex-start-between">
							<div class="left_part">
								<div class="img_wrap">
									<?php echo theme_get_image_tag($item['comment']['img']); ?>
								</div>
							</div>
							<div class="right_part">
								<div class="quotes">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/quotes.svg" alt="“">
								</div>
								<p class="text"><?php echo $item['comment']['text'] ?></p>
								<div class="after_comment text-a46">
									<p class="company_name"><?php echo $item['comment']['company_name'] ?></p>
									<p class="position"><?php echo $item['comment']['position'] ?></p>
								</div>
							</div>
						</div>
						<div class="video_wrap">
							<div class="iframe_wrap">
								<?php echo $item['iframe'] ?>
							</div>
						</div>
					</div>
				<?php endforeach ?>
	    	</div>
	    </div>
	</section>
	<!-- FIRST SCREEN END -->

</main>

<?php 
	get_footer();
?>