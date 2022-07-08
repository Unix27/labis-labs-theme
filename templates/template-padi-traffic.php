<?php 

	// Template Name: Paid Traffic

	get_header();

	$fields = get_fields();

?>



<main>

	<h1 class="services__title text-center"><?php the_title() ?></h1>

	<?php if ($fields['block_first_screen']['title'] != ''): ?>

	<!-- FIRST SCREEN START 1-->

	<section class="paid_traffic_fs with_square gray">

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

	<?php endif ?>



	<?php if ($fields['block_our_mission']['title'] != ''): ?>

	<!-- OUR MISSION START 2-->

	<section class="careers_our_mission">

		<div class="container">

			<h2 class="title text-center"><?php echo $fields['block_our_mission']['title'] ?></h2>

			<p class="subtitle text-center text-a46"><?php echo $fields['block_our_mission']['subtitle'] ?></p>

		</div>

	</section>

	<!-- OUR MISSION END -->

	<?php endif ?>



	<?php if ($fields['block_brands']['title'] != ''): ?>

	<!-- OUR CLIENTS START 3-->

	<section class="home_our_clients">

		<h2 class="title text-center"><?php echo $fields['block_brands']['title'] ?></h2>

		<div class="brands owl-carousel owl-theme">

			<?php foreach ($fields['block_brands']['brands'] as $item): ?>

				<div class="item">

					<?php echo theme_get_image_tag($item['img']); ?>

				</div>	

			<?php endforeach ?>

		</div>

	</section>

	<!-- OUR CLIENTS END -->

	<?php endif ?>



	<?php if ($fields['block_why_labis_labs']['title'] != ''): ?>

	<!-- WHY LABIS LABS START 4-->

	<section class="paid_traffic_why">

		<div class="container">

			<div class="content">

				<h2 class="title text-center"><?php echo $fields['block_why_labis_labs']['title'] ?></h2>

				<ul class="answers">

					<?php foreach ($fields['block_why_labis_labs']['list'] as $item): ?>

						<li class="item">

							<h3 class="item_title text-a46"><?php echo $item['title']; ?></h3>

							<p class="item_text"><?php echo $item['text']; ?></p>

						</li>	

					<?php endforeach ?>

				</ul>

			</div>

		</div>

	</section>

	<!-- WHY LABIS LABS END -->

	<?php endif ?>



	<?php if ($fields['block_tier_system']['title'] != ''): ?>

	<!-- TIER SYSTEM START 5-->

	<section class="referal_tier">

		<div class="container">

			<h2 class="title text-center"><?php echo $fields['block_tier_system']['title'] ?></h2>

			<p class="subtitle text-center"><?php echo $fields['block_tier_system']['subtitle'] ?></p>

			<div class="flex-start-between items">

				<?php foreach ($fields['block_tier_system']['list'] as $item): ?>

					<div class="item flex-start-between">

						<div class="img_wrap">

							<?php echo theme_get_image_tag($item['img']) ?>

						</div>

						<div class="texts">

							<h3 class="item_title text-a46"><?php echo $item['title'] ?></h3>

							<p><?php echo $item['text'] ?></p>

						</div>

					</div>

				<?php endforeach ?>

			</div>



			<?php if ($fields['block_tier_system']['block']['title'] != ''): ?>

			<div class="block_wrap">

				<div class="block flex-center">

					<div class="img_wrap">

						<?php echo theme_get_image_tag($fields['block_tier_system']['block']['img']); ?>

					</div>

					<div class="block_texts">

						<h2 class="block_title"><?php echo $fields['block_tier_system']['block']['title'] ?></h2>

						<p><?php echo $fields['block_tier_system']['block']['text'] ?></p>

					</div>

				</div>

			</div>

			<?php endif ?>

		</div>

	</section>

	<!-- TIER SYSTEM END -->

	<?php endif ?>



	<?php if ($fields['block_best_fit_for']['title'] != ''): ?>

	<!-- Best Fit For START 6-->

	<section class="white_label_fit referal_tier">

		<div class="container">

			<h2 class="title text-center"><?php echo $fields['block_best_fit_for']['title'] ?></h2>

			<p class="subtitle text-center"><?php echo $fields['block_best_fit_for']['subtitle'] ?></p>

			<div class="flex-start-between items">

				<?php foreach ($fields['block_best_fit_for']['list'] as $item): ?>

					<div class="item">

						<div class="img_wrap">

							<?php echo theme_get_image_tag($item['img']) ?>

						</div>

						<div class="texts">

							<h3 class="item_title text-a46"><?php echo $item['title'] ?></h3>

							<p><?php echo $item['text'] ?></p>

						</div>

					</div>

				<?php endforeach ?>

				<div class="item"></div>

			</div>



			<?php if ($fields['block_best_fit_for']['block']['title'] != ''): ?>

			<div class="block_wrap">

				<div class="block flex-center">

					<div class="img_wrap">

						<?php echo theme_get_image_tag($fields['block_best_fit_for']['block']['img']); ?>

					</div>

					<div class="block_texts">

						<h2 class="block_title"><?php echo $fields['block_best_fit_for']['block']['title'] ?></h2>

						<p><?php echo $fields['block_best_fit_for']['block']['text'] ?></p>

					</div>

				</div>

			</div>

			<?php endif ?>

		</div>

	</section>

	<!-- Best Fit For END -->

	<?php endif ?>



	<?php if ($fields['block_tier_system_partner']['title']): ?>

	<!-- TIER SYSTEM START 7-->

	<section class="partner_programm_fit white_label_fit referal_tier">

		<div class="container">

			<h2 class="title text-center"><?php echo $fields['block_tier_system_partner']['title'] ?></h2>

			<p class="subtitle text-center"><?php echo $fields['block_tier_system_partner']['subtitle'] ?></p>

			<div class="flex-start-between items">

				<?php foreach ($fields['block_tier_system_partner']['list'] as $item): ?>

					<div class="item">

						<div class="img_wrap">

							<?php echo theme_get_image_tag($item['img']) ?>

						</div>

						<div class="texts">

							<h3 class="item_title text-a46"><?php echo $item['title'] ?></h3>

							<p><?php echo $item['text'] ?></p>

						</div>

					</div>

				<?php endforeach ?>

				<div class="item"></div>

			</div>



			<h2 class="title text-center second"><?php echo $fields['block_tier_system_partner']['title_2'] ?></h2>

			<p class="subtitle text-center second"><?php echo $fields['block_tier_system_partner']['subtitle_2'] ?></p>

			<div class="flex-stretch-between items second">

				<?php foreach ($fields['block_tier_system_partner']['blocks'] as $item): ?>

					<div class="item flex-start-between">

						<div class="img_wrap">

							<?php echo theme_get_image_tag($item['img']) ?>

						</div>

						<div class="texts">

							<h3 class="item_title text-a46"><?php echo $item['title'] ?></h3>

							<p><?php echo $item['text'] ?></p>

						</div>

					</div>

				<?php endforeach ?>

			</div>

		</div>

	</section>

	<!-- TIER SYSTEM END -->

	<?php endif ?>



	<?php if ($fields['block_our_principles']['title'] != ''): ?>		

	<!-- Our Principles START 8-->

	<section class="home_for_your_brand careers_our_principles">

		<div class="container">

			<h2 class="title text-center"><?php echo $fields['block_our_principles']['title'] ?></h2>

			<p class="subtitle text-center"><?php echo $fields['block_our_principles']['subtitle'] ?></p>

			<div class="items flex-start-between">

				<?php foreach ($fields['block_our_principles']['list'] as $item): ?>

				<div class="item">

					<div class="img_wrap">

						<?php echo theme_get_image_tag($item['img']); ?>

					</div>

					<div class="item_texts">

						<h3 class="item_title text-a46"><?php echo $item['title'] ?></h3>

						<p><?php echo $item['text'] ?></p>

					</div>

				</div>	

				<?php endforeach ?>

			</div>

		</div>

	</section>

	<!-- Our Principles END -->

	<?php endif ?>



	<?php if ($fields['block_meet_our_departments']['title'] != ''): ?>

	<!-- Meet our Departments START 9-->

	<section class="careers_meet_departments">

		<div class="container">

			<h2 class="title text-center"><?php echo $fields['block_meet_our_departments']['title'] ?></h2>

			<div class="items">

				<?php foreach ($fields['block_meet_our_departments']['list'] as $item): ?>

				<div class="item_wrap">

					<div class="item flex-center-between">

						<div class="img_wrap">

							<?php echo theme_get_image_tag($item['img']); ?>

						</div>

						<div class="texts">

							<p><b><?php echo $item['bold_text'] ?></b> <?php echo $item['text'] ?></p>

							<?php echo theme_get_link_tag($item['button'], 'btn'); ?>

						</div>

					</div>

				</div>

				<?php endforeach ?>

			</div>

		</div>

	</section>

	<!-- Meet our Departments END -->

	<?php endif ?>



	<?php if ($fields['block_you_expect']['title'] != ''): ?>

	<!-- What Can You Realistically Expect? START 10-->

	<section class="paid_traffic_you_expect">

		<div class="container">

			<h2 class="title text-center"><?php echo $fields['block_you_expect']['title'] ?></h2>

			<p class="subtitle text-center"><?php echo $fields['block_you_expect']['subtitle'] ?></p>

			<div class="blocks flex-stretch-between">

				<div class="block">

					<p class="period text-a46"><?php echo $fields['block_you_expect']['items'][0]['time'] ?></p>

					<h3 class="block_title"><?php echo $fields['block_you_expect']['items'][0]['title'] ?></h3>

					<ul class="list">

						<?php foreach ($fields['block_you_expect']['items'][0]['list'] as $item): ?>

							<li><?php echo $item['li'] ?></li>

						<?php endforeach ?>

					</ul>

				</div>



				<div class="block">

					<p class="period text-a46"><?php echo $fields['block_you_expect']['items'][1]['time'] ?></p>

					<h3 class="block_title"><?php echo $fields['block_you_expect']['items'][1]['title'] ?></h3>

					<ul class="list">

						<?php foreach ($fields['block_you_expect']['items'][1]['list'] as $item): ?>

							<li><?php echo $item['li'] ?></li>

						<?php endforeach ?>

					</ul>

				</div>



				<div class="line flex-start-between">

					<p class="line_item"><?php echo $fields['block_you_expect']['items'][0]['time'] ?></p>

					<p class="line_item"><?php echo $fields['block_you_expect']['items'][2]['time'] ?></p>

					<p class="line_item"><?php echo $fields['block_you_expect']['items'][1]['time'] ?></p>

					<p class="line_item"><?php echo $fields['block_you_expect']['items'][3]['time'] ?></p>

				</div>



				<div class="block">

					<p class="period text-a46"><?php echo $fields['block_you_expect']['items'][2]['time'] ?></p>

					<h3 class="block_title"><?php echo $fields['block_you_expect']['items'][2]['title'] ?></h3>

					<ul class="list">

						<?php foreach ($fields['block_you_expect']['items'][2]['list'] as $item): ?>

							<li><?php echo $item['li'] ?></li>

						<?php endforeach ?>

					</ul>

				</div>



				<div class="block">

					<p class="period text-a46"><?php echo $fields['block_you_expect']['items'][3]['time'] ?></p>

					<h3 class="block_title"><?php echo $fields['block_you_expect']['items'][3]['title'] ?></h3>

					<ul class="list">

						<?php foreach ($fields['block_you_expect']['items'][3]['list'] as $item): ?>

							<li><?php echo $item['li'] ?></li>

						<?php endforeach ?>

					</ul>

				</div>

			</div>

			<?php echo theme_get_link_tag($fields['block_you_expect']['button'], 'btn') ?>

		</div>

	</section>

	<!-- What Can You Realistically Expect? END -->

	<?php endif ?>



	<?php if ($fields['block_you_expect_3']['title'] != ''): ?>

	<!-- What Can You Realistically Expect? START 11-->

	<section class="paid_traffic_you_expect _3">

		<div class="container">

			<h2 class="title text-center"><?php echo $fields['block_you_expect_3']['title'] ?></h2>

			<p class="subtitle text-center"><?php echo $fields['block_you_expect_3']['subtitle'] ?></p>

			<div class="blocks flex-stretch-between">

				<div class="block">

					<p class="period text-a46"><?php echo $fields['block_you_expect_3']['items'][0]['time'] ?></p>

					<h3 class="block_title"><?php echo $fields['block_you_expect_3']['items'][0]['title'] ?></h3>

					<ul class="list">

						<?php foreach ($fields['block_you_expect_3']['items'][0]['list'] as $item): ?>

							<li><?php echo $item['li'] ?></li>

						<?php endforeach ?>

					</ul>

				</div>



				<div class="block">

					<p class="period text-a46"><?php echo $fields['block_you_expect_3']['items'][1]['time'] ?></p>

					<h3 class="block_title"><?php echo $fields['block_you_expect_3']['items'][1]['title'] ?></h3>

					<ul class="list">

						<?php foreach ($fields['block_you_expect_3']['items'][1]['list'] as $item): ?>

							<li><?php echo $item['li'] ?></li>

						<?php endforeach ?>

					</ul>

				</div>



				<div class="line flex-start-between">

					<p class="line_item"><?php echo $fields['block_you_expect_3']['items'][0]['time'] ?></p>

					<p class="line_item"><?php echo $fields['block_you_expect_3']['items'][2]['time'] ?></p>

					<p class="line_item"><?php echo $fields['block_you_expect_3']['items'][1]['time'] ?></p>

				</div>



				<div class="block">

					<p class="period text-a46"><?php echo $fields['block_you_expect_3']['items'][2]['time'] ?></p>

					<h3 class="block_title"><?php echo $fields['block_you_expect_3']['items'][2]['title'] ?></h3>

					<ul class="list">

						<?php foreach ($fields['block_you_expect_3']['items'][2]['list'] as $item): ?>

							<li><?php echo $item['li'] ?></li>

						<?php endforeach ?>

					</ul>

				</div>

			</div>

			<?php echo theme_get_link_tag($fields['block_you_expect_3']['button'], 'btn') ?>

		</div>

	</section>

	<!-- What Can You Realistically Expect? END -->

	<?php endif ?>



	<?php if ($fields['block_our_methods']['title'] != ''): ?>

	<!-- OUR METHOD START 12-->

	<section class="paid_traffic_our_method with_square gray">

		<div class="square gray _1"></div>

		<div class="square gray _2"></div>

		<div class="square gray _3"></div>

		<div class="square gray _4"></div>

		<div class="square gray _5"></div>

		<div class="square gray _6"></div>

		<div class="square gray _7"></div>

		<div class="square gray _8"></div>

		<div class="square gray _9"></div>

		<div class="square gray _10"></div>

		<div class="square gray _11"></div>

		<div class="square white _12"></div>

		<div class="shadow green _1"></div>

		<div class="shadow pink _2"></div>

		<div class="shadow pink _3"></div>

		<div class="bg">

			<div class="container text-center">

				<h2 class="title"><?php echo $fields['block_our_methods']['title'] ?></h2>

				<p class="subtitle"><?php echo $fields['block_our_methods']['subtitle'] ?></p>

				<div class="methods flex-start-between">

					<?php foreach ($fields['block_our_methods']['list'] as $item): ?>

						<div class="item">

							<div class="img_wrap">

								<?php echo theme_get_image_tag($item['img']); ?>

							</div>

							<h3 class="item_title text-a46"><?php echo $item['title'] ?></h3>

							<p class="item_text"><?php echo $item['text'] ?></p>

						</div>	

					<?php endforeach ?>

				</div>

			</div>

		</div>

	</section>

	<!-- OUR METHOD END -->

	<?php endif ?>



	<?php if ($fields['block_meet_your_team']['title'] != ''): ?>

	<!-- Meet Your Team START 13-->

	<section class="paid_traffic_meet_your_team">

		<div class="container">

			<h2 class="title text-center"><?php echo $fields['block_meet_your_team']['title'] ?></h2>

			<p class="subtitle text-center"><?php echo $fields['block_meet_your_team']['subtitle'] ?></p>

			<ul class="list">

				<?php foreach ($fields['block_meet_your_team']['list'] as $item): ?>

					<li><span><?php echo $item['li'] ?></span></li>

				<?php endforeach ?>

			</ul>

		</div>

	</section>

	<!-- Meet Your Team END -->

	<?php endif ?>



	<?php if ($fields['block_with_videos']['title']): ?>

	<!-- Video Testimonials START 14-->

	<section class="paid_traffic_video">

		<div class="container">

			<h2 class="title text-center"><?php echo $fields['block_with_videos']['title'] ?></h2>

			<div class="videos flex-stretch-between">

				<?php foreach ($fields['block_with_videos']['list'] as $item): ?>

					<div class="item">

						<!-- <blockquote><?php // echo $item['quoted_text'] ?></blockquote> -->

						<div data-iframe='<?php echo htmlspecialchars($item['url']); ?>' class="video_thumb">

							<?php echo $item['url']; ?>

							<!-- <?php // echo theme_get_image_tag($item['img']); ?>

							<div class="play">

								<img src="<?php // echo get_template_directory_uri() ?>/assets/img/rounded_triangle.svg" alt="">

							</div> -->

						</div>

					</div>

				<?php endforeach ?>

			</div>

		</div>

	</section>

	<!-- Video Testimonials END -->

	<?php endif ?>



	<?php if ($fields['block_portfolio']['title'] != ''): ?>

	<!-- Portfolio Case Studies START 15-->

	<section class="paid_traffic_portfolio home_working_with_us with_square dull_green">

		<div class="square dull_green _13"></div>

		<div class="square dull_green _14"></div>

		<div class="square dull_green _15"></div>

		<div class="square dull_green _16"></div>

		<div class="square dull_green _17"></div>

		<div class="square dull_green _18"></div>

		<div class="shadow pink _4"></div>

		<div class="bg">

			<div class="container">

				<h2 class="title text-center"><?php echo $fields['block_portfolio']['title'] ?></h2>

				<p class="subtitle text-white text-center"><?php echo $fields['block_portfolio']['subtitle'] ?></p>

				<div class="list flex-start-between">

					<?php foreach ($fields['block_portfolio']['list'] as $item): ?>

						<!-- <a href="<?php echo $item['url'] ?>" class="item">

							<h3 class="item_title"><?php echo $item['title'] ?></h3>

							<p class="item_subtitle text-a46"><?php echo $item['subtitle'] ?></p>

						</a> -->



						<a href="<?php echo $item['url'] ?>" class="item">

							<span class="img_wrap">

								<?php echo theme_get_image_tag($item['background']??null); ?>

							</span>

							<h3 class="item_title text-a46"><?php echo $item['title'] ?></h3>

						</a>

					<?php endforeach ?>

				</div>

			</div>

		</div>

	</section>

	<!-- Portfolio Case Studies END -->

	<?php endif ?>



	<?php if ($fields['block_interested_in_joining_us']['title'] != ''): ?>

	<!-- Interested in joining us? START 16-->

	<section id="careers_join_us" class="careers_join_us with_square dull_green">

		<div class="square dull_green _13"></div>

		<div class="square dull_green _14"></div>

		<div class="square dull_green _15"></div>

		<div class="square dull_green _16"></div>

		<div class="square dull_green _17"></div>

		<div class="square dull_green _18"></div>

		<div class="shadow pink _4"></div>

		<div class="bg">

			<div class="container">

				<h2 class="title text-center"><?php echo $fields['block_interested_in_joining_us']['title'] ?></h2>

				<p class="subtitle text-white text-center"><?php echo $fields['block_interested_in_joining_us']['subtitle'] ?></p>

				<div class="list flex-stretch-between">

					<?php foreach ($fields['block_interested_in_joining_us']['list'] as $item): ?>

					<a href="<?php echo $item['url'] ?>" class="item flex-center-between">

						<div class="img_wrap">

							<?php echo theme_get_image_tag($item['img']) ?>

						</div>

						<div class="texts">

							<h3 class="item_title"><?php echo $item['title'] ?></h3>

							<p class="item_subtitle text-a46"><?php echo $item['subtitle'] ?></p>

						</div>

					</a>

					<?php endforeach ?>

				</div>

			</div>

		</div>

	</section>

	<!-- Interested in joining us? END -->

	<?php endif ?>


	<?php if ($fields['block_tiktok_our_clients']['title'] != ''): ?>

	<!-- Our Clients Constantly Land on TikTok Top Ads START 17-->

	<section class="tiktok_our_clients">
		<div class="container">
			<h2 class="title text-center"><?php echo $fields['block_tiktok_our_clients']['title'] ?></h2>
			<p class="subtitle text-center"><?php echo $fields['block_tiktok_our_clients']['subtitle'] ?></p>
			<div class="img_wrap text-center">
				<?php echo theme_get_image_tag($fields['block_tiktok_our_clients']['img']); ?>
			</div>
		</div>
	</section>

	<!-- Our Clients Constantly Land on TikTok Top Ads END -->

	<?php endif ?>



	<?php if ($fields['block_tiktok_pricing']['title'] != ''): ?>

	<!-- pricing START 18-->

	<section class="tiktok__pricing tiktok_our_clients">
		<div class="container">
			<h2 class="title text-center"><?php echo $fields['block_tiktok_pricing']['title'] ?></h2>
			<p class="subtitle text-center"><?php echo $fields['block_tiktok_pricing']['subtitle'] ?></p>

			<div class="pricing_table flex-start-between">
				<?php foreach (['column_1', 'column_2', 'column_3'] as $col): ?>
					<div class="col">
						<?php foreach ($fields['block_tiktok_pricing']['table'] as $row): ?>
							<div class="cell <?php 
									echo $row[$col]=='yes'?'yes':''; 
									echo $row[$col]=='no'?'no':'';
								?>">
								<?php echo !in_array($row[$col], ['yes','no'])?$row[$col]:''  ?>
							</div>
						<?php endforeach ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>

	<!-- pricing END -->

	<?php endif ?>


	<div class="spacer_before_footer"></div>



</main>

<!-- VIDEO POPUP WRAP START -->
<!-- <div class="block_video_popup popup_wrap">
	<div class="close_btn flex-center"></div>
	<div class="popup_content">
		<div class="iframe_wrap"></div>
	</div>
</div> -->
<!-- VIDEO POPUP WRAP END -->


<?php 

	get_footer();

?>