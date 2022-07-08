<?php 
	// Template Name: Copywriting
	get_header();

	$terms = get_terms( [
	    'taxonomy' => 'copywriting_cat',
	    'hide_empty' => false,
	    'orderby' => 'term_id',
	    'order' => 'ASC'
	] );

	$posts_ = [];
	foreach ($terms as $term) {
		$posts_[] = $posts = get_posts( [
			'numberposts' => 20,
			'tax_query' => [
	            [
	                'taxonomy' => 'copywriting_cat',
	                'field' => 'term_id',
	                'terms' => $term->term_id,
	            ]
	        ],
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'copywriting',
		] );
	}


?>
<main>
	<h1 class="services__title text-center"><?php the_title(); ?></h1>

	<section class="page_copywriting with_square">
		<div class="square gray _1"></div>
		<div class="square gray _3"></div>
		<div class="square gray _4"></div>
		<div class="container">
			<div class="tab_buttons flex-stretch-between">
				<?php foreach ($terms as $key => $item): ?>
					<div class="flex-center <?php echo $key==0?'active':'' ?>"><?php echo $item->name; ?></div>
				<?php endforeach ?>
			</div>
			<div class="tab_contents">
				<?php foreach ($posts_ as $key => $posts): ?>
					<div class="content flex-start-between <?php echo $key==0?'active':'' ?>">
						<?php 
							foreach ($posts as $post): 
							$post_fields = get_fields($post->ID);
						?>
							<div class="item flex-start-between" data-post_id="<?php echo $post->ID ?>">
								<div class="left_part flex-center">
									<?php echo get_the_post_thumbnail($post); ?>
								</div>
								<div class="right_part">
									<ul>
										<?php foreach ($post_fields['list'] as $item): ?>
											<li>
												<span class="text-a46"><?php echo $item['name'] ?></span>
												<span><?php echo $item['value'] ?></span>
											</li>
										<?php endforeach ?>
									</ul>
									<div class="text free_content">
										<?php echo $post_fields['text']; ?>
									</div>
									<p class="text-a46"><?php echo $post_fields['cta'] ?></p>
									<p><?php echo $post_fields['text_2'] ?></p>
								</div>
							</div>	
						<?php endforeach ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>

</main>
<?php 
	get_footer();
?>