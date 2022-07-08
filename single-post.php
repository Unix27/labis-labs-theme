<?php 
	get_header();
	global $post;
	setup_postdata($post);
?>
<main>
	
	<h1 class="single_post__title text-center"><?php the_title() ?></h1>
	<!-- FIRST SCREEN START -->
	<section class="single_post_fs with_square gray">
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
			<div class="container">
				<div class="img_wrap">
					<?php echo get_the_post_thumbnail($post) ?>
				</div>
			</div>
		</div>
	</section>
	<!-- FIRST SCREEN END -->

	<!-- POST CONTENT START -->
	<section class="single_post_content">
		<div class="container">
			<div class="flex-center-between post_info">
				<div class="author flex-center-between">
					<?php echo theme_get_image_tag(get_field('avatar', 'user_'.$post->post_author)) ?>
					<span class="by">By</span>
					<span class="name"><?php echo get_the_author_meta('display_name'); ?></span>
				</div>
				<p class="time"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago';?></p>
			</div>
			<div class="free_content">
				<?php echo apply_filters('the_content', get_field('post_content')); ?>
			</div>
		</div>
	</section>
	<!-- POST CONTENT END -->

	<!-- RELATED POSTS START -->
	<section class="single_post_related page_blog_posts">
		<div class="container">
			<h2 class="text-center title">Related Articles</h2>
			<div class="posts flex-stretch-between">
				<?php
				$posts = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
				wp_reset_postdata();
				foreach ($posts as $post): 
					setup_postdata($post);
				?>
					<div class="item" data-id="<?php echo $post->ID ?>">
						<a href="<?php the_permalink(); ?>" class="img_wrap">
							<?php echo get_the_post_thumbnail($post); ?>
						</a>
						<h3 class="item_title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
						<p class="text"><?php echo mb_strimwidth(strip_tags($post->post_content), 0, 104, "...") ?></p>
						<div class="flex-center-between post_info">
							<div class="author flex-center-between">
								<?php echo theme_get_image_tag(get_field('avatar', 'user_'.$post->post_author)) ?>
								<span class="by">By</span>
								<span class="name"><?php echo get_the_author_meta('display_name'); ?></span>
							</div>
							<p class="time"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago';?></p>
						</div>
					</div>	
				<?php 
					wp_reset_postdata();
				endforeach ?>
				<div class="item"></div>
			</div>
		</div>
	</section>
	<!-- RELATED POSTS END -->

</main>
<?php
	get_footer();
?>