<?php 
	get_header();
	$fields = get_fields();
?>

<main>
	<h1 class="services__title text-center"><?php the_title(); ?></h1>

	<!-- GALLERY START -->
	<section class="with_square page_blog_posts portfolio_more_examples__gallery">
		<div class="square gray _1"></div>
		<div class="square gray _3"></div>
		<div class="square gray _4"></div>
		<div class="square gray _19"></div>
		<div class="square gray _20"></div>
		<div class="square gray _21"></div>
		<div class="container">
			<div class="gallery flex-stretch-between">
				<?php //for($i = 0; $i < 20; $i++) { ?>
				<?php foreach ($fields['images'] as $i => $img): ?>
					<div class="item <?php echo $img['full_image'] == ''?'':'with_full_img '; echo $i>=8?'hidden':'' ?>" data-full_imgae_url="<?php echo $img['full_image'] ?>">
						<div class="img_wrap">
							<?php echo theme_get_image_tag($img['image']) ?>
							<?php if ($img['full_image'] != ''): ?>
								<div class="flex-center plus">
									<div class="flex-center"></div>
								</div>
							<?php endif ?>
						</div>
					</div>
				<?php endforeach ?>
				<?php //} ?>
			</div>
			<div class="text-center">
				<a class="show_more text-a46" href="#"><?php echo get_field('show_more_caption', 'option'); ?></a>
			</div>
		</div>
	</section>
	<!-- GALLERY END -->
</main>

<div class="popup_wrap popup_full_image">
	<div class="close_btn flex-center"></div>
	<img class="popup_content" src="#" alt="design">
</div>

<?php 
	get_footer();
?>