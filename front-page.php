<?php 
	get_header();
	$fields = get_fields();

?>

<!-- <pre>
	<?php var_dump($fields); ?>
</pre> -->

<main>		
	<!-- FIRST SCREEN START -->
	<section class="home_first_screen">
		<div class="container">
			<div class="texts_wrap flex-start-between">
				<h1 class="title"><?php echo $fields['first_screen']['title'] ?></h1>
				<div class="texts">
					<p><?php echo $fields['first_screen']['text'][0]['p'] ?></p>
					<p><?php echo $fields['first_screen']['text'][1]['p'] ?></p>
				</div>
			</div>
			<div class="row flex-stretch-between text-center">
				<?php foreach ($fields['first_screen']['list'] as $item): ?>
					<div class="item">
						<p class="val text-a46"><?php echo $item['title'] ?></p>
						<p class="caption"><?php echo $item['text'] ?></p>
					</div>	
				<?php endforeach ?>
			</div>
		</div>
	</section>
	<!-- FIRST SCREEN END -->

	<!-- FOR YOUR BRAND START -->
	<section class="home_for_your_brand with_square gray">
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
			<div class="container">
				<h2 class="title text-center"><?php echo $fields['for_your_brand']['title'] ?></h2>
				<p class="text_after_title text-center"><?php echo $fields['for_your_brand']['subtitle'] ?></p>
				<div class="items flex-start-between">
					<?php foreach ($fields['for_your_brand']['list'] as $key => $item): ?>
						<div class="item">
							<div class="img_wrap">
								<?php echo theme_get_image_tag($item['icon']); ?>
							</div>
							<div class="item_texts">
								<h3 class="item_title <?php echo $key%2==1?'text-gray':'text-a46' ?>"><?php echo $item['title']; ?></h3>
								<p><?php echo $item['text']; ?></p>
							</div>
						</div>	
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>
	<!-- FOR YOUR BRAND END -->

	<!-- OUR CLIENTS START -->
	<section class="home_our_clients">
		<h2 class="title text-center"><?php echo $fields['brands']['title']; ?></h2>
		<div class="brands owl-carousel owl-theme">
			<?php foreach ($fields['brands']['images'] as $item): ?>
				<div class="item">
					<?php echo theme_get_image_tag($item['image']); ?>
				</div>				
			<?php endforeach ?>
		</div>
	</section>
	<!-- OUR CLIENTS END -->

	<!-- CULTURE START -->
	<section class="home_culture">
		<div class="shadow"></div>
		<div class="container">
			<h2 class="text-center title"><?php echo $fields['culture']['title']; ?></h2>
			<div class="tab_buttons flex-stretch-between">
				<?php foreach ($fields['culture']['tabs'] as $key => $item): ?>
					<div class="flex-center <?php echo $key==0?'active':'' ?> text-a46"><?php echo $item['title']; ?></div>
				<?php endforeach ?>
			</div>
			<div class="tab_contents">
				<?php foreach ($fields['culture']['tabs'] as $key => $item): ?>
					<ul class="content flex-start-between <?php echo $key==0?'active':'' ?>">
						<?php foreach ($item['list'] as $li): ?>
							<li><?php echo $li['text']; ?></li>
						<?php endforeach ?>
					</ul>
				<?php endforeach ?>
			</div>
		</div>
	</section>
	<!-- CULTURE END -->

	<!-- WORKING WITH US START -->
	<section class="home_working_with_us with_square dull_green">
		<div class="square dull_green _13"></div>
		<div class="square dull_green _14"></div>
		<div class="square dull_green _15"></div>
		<div class="square dull_green _16"></div>
		<div class="square dull_green _17"></div>
		<div class="square dull_green _18"></div>
		<div class="shadow pink _4"></div>
		<div class="bg">
			<div class="container">
				<h2 class="title text-center"><?php echo $fields['working_with_us']['title'] ?></h2>
				<p class="text_after_title text-white text-center"><?php echo $fields['working_with_us']['subtitle'] ?></p>
				<div class="flex-stretch-between our_work">
					<?php foreach ($fields['working_with_us']['list'] as $item): ?>
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
	<!-- WORKING WITH US END -->

	<!-- FAQ START -->
	<section class="home_faq">
		<div class="container">
			<h2 class="title text-center"><?php echo $fields['faq']['title'] ?></h2>
			<div class="home_faq__list">
				<?php foreach ($fields['faq']['list'] as $item): ?>
					<div class="home_faq__item">
						<div class="home_faq__item_title">
							<h3><?php echo $item['question']; ?></h3>
							<div class="icon"></div>
						</div>
						<div class="home_faq__response">
							<?php foreach ($item['answer'] as $p): ?>
								<p><?php echo $p['p']; ?></p>
							<?php endforeach ?>
						</div>
					</div>	
				<?php endforeach ?>
			</div>
		</div>
	</section>
	<!-- FAQ END -->

	<!-- FORM START -->
	<section class="home_form">
		<div class="container">
			<?php
				echo do_shortcode('[contact-form-7 id="42" title="Home before footer form"]');
			?>
			<!-- <form action="#">
				<h3 class="subtitle text-center">Like What You See?</h3>
				<h2 class="title text-center text-white">LET'S WORK TOGETHER</h2>
				<div class="fiels_list flex-start-between">
					<div class="fiels_wrap w-50">
						<input required type="text" name="first_name" placeholder="First Name:">
					</div>
					<div class="fiels_wrap w-50">
						<input required type="text" name="last_name" placeholder="Last Name:">
					</div>
					<div class="fiels_wrap">
						<input required type="text" name="company" placeholder="Company:">
					</div>
					<div class="fiels_wrap">
						<input required type="email" name="business_email" placeholder="Business Email Address:">
					</div>
					<div class="fiels_wrap w-50">
						<input required type="text" name="website" placeholder="Website URL:">
					</div>
					<div class="fiels_wrap w-50">
						<input required type="text" name="phone" placeholder="Phone Number:">
					</div>
					<div class="fiels_wrap select">
						<div class="dropdown_btn"></div>
						<input required type="text" name="budget" placeholder="Monthly advertising budget:" readonly>
						<ul class="options">
							<li>1</li>
							<li>11</li>
							<li>111</li>
							<li>1111</li>
							<li>11111</li>
						</ul>
					</div>
				</div>
				<h4 class="checkboxes_title text-white text-center">I'm currently looking to hire …</h4>
				<div class="checkboxes_list flex-start-between text-white">
					<div class="checkbox_wrap">
						<input type="checkbox" id="checkbox1">
						<label for="checkbox1">Media buying</label>
					</div>

					<div class="checkbox_wrap">
						<input type="checkbox" id="checkbox2">
						<label for="checkbox2">Content and creative</label>
					</div>

					<div class="checkbox_wrap">
						<input type="checkbox" id="checkbox3">
						<label for="checkbox3">Full service agency</label>
					</div>

					<div class="checkbox_wrap">
						<input type="checkbox" id="checkbox4">
						<label for="checkbox4">Search engine marketing (SEM)</label>
					</div>

					<div class="checkbox_wrap">
						<input type="checkbox" id="checkbox5">
						<label for="checkbox5">Email and SMS</label>
					</div>

					<div class="checkbox_wrap">
						<input type="checkbox" id="checkbox6">
						<label for="checkbox6">Personal ecommerce training</label>
					</div>
				</div>
				<div class="fiels_wrap custom_variant">
					<input type="text" name="custom_variant" placeholder="Would you like to add anything else? (Optional)">
				</div>
				<input class="home_form__submit" type="submit" value="GET STARTED">
			</form> -->
		</div>
	</section>
	<!-- FORM END -->
</main>

<?php 
	get_footer('home');
?>