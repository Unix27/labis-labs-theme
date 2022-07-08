<?php 
	// Template Name: Blog
	get_header();
	$fields = get_fields();

	$posts = get_posts([
		'numberposts' => 11
	]);

	// var_dump($posts);
?>

<main>
	<h1 class="services__title text-center"><?php the_title(); ?></h1>
	<!-- BLOG START -->
	<section class="page_blog_posts">
		<div class="container">
			<div class="posts flex-stretch-between">
				<?php
				global $post; 
				foreach ($posts as $key => $post): 
					setup_postdata($post);
				?>
					<a href="<?php the_permalink(); ?>" class="item" data-id="<?php echo $post->ID ?>">
						<div class="img_wrap">
							<?php echo get_the_post_thumbnail($post); ?>
						</div>
						<h3 class="item_title"><?php the_title() ?></h3>
						<p class="text"><?php echo mb_strimwidth(strip_tags($post->post_content), 0, $key==0?264:104, "...") ?></p>
						<div class="flex-center-between post_info">
							<div class="author flex-center-between">
								<?php echo theme_get_image_tag(get_field('avatar', 'user_'.$post->post_author)) ?>
								<span class="by">By</span>
								<span class="name"><?php echo get_the_author_meta('display_name'); ?></span>
							</div>
							<p class="time"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago';?></p>
						</div>
					</a>	
				<?php 
					wp_reset_postdata();
				endforeach ?>
				<div class="item"></div>
			</div>
			<div class="text-center"> <a class="show_more text-a46" href="#">Show more</a></div>
		</div>
	</section>
	<!-- BLOG END -->
</main>

<?php 
	get_footer();
?>