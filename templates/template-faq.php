<?php 
	// Template Name: FAQ
	get_header();
	$fields = get_fields();
?>

<main>
	<!-- FAQ START -->
	<section class="page_faq home_faq">
		<div class="container">
			<h1 class="title text-center"><?php the_title(); ?></h1>
			<div class="tab_buttons flex-stretch-between">
				<?php foreach ($fields['tabs'] as $key => $item): ?>
					<div class="button <?php echo $key==0?'active':'' ?>"><?php echo $item['title'] ?></div>
				<?php endforeach ?>
			</div>
			<div class="tab_contents">					
				<?php foreach ($fields['tabs'] as $key => $item): ?>
				<div class="home_faq__list <?php echo $key==0?'active':'' ?>">
					<?php foreach ($item['list'] as $li): ?>
						<div class="home_faq__item">
							<div class="home_faq__item_title">
								<h3><?php echo $li['question'] ?></h3>
								<div class="icon"></div>
							</div>
							<div class="home_faq__response">
								<p><?php echo $li['answer'] ?></p>
							</div>
						</div>
					<?php endforeach ?>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>
	<!-- FAQ END -->

	<div class="spacer_before_footer"></div>
</main>

<?php 
	get_footer();
?>