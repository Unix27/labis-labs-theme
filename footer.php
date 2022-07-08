	<?php 

		$fields = get_field('footer', 'options');

	?>



	<!-- FOOTER START -->

	<footer class="footer_default">

		<div class="container">

			<div class="block_next_step text-center">

				<p class="block_subtitle"><?php echo $fields['block_next_step']['subtitle'] ?></p>

				<h2 class="block_title "><?php echo $fields['block_next_step']['title'] ?></h2>

				<?php echo theme_get_link_tag($fields['block_next_step']['button'], 'home_form__submit') ?>

			</div>



			<div class="two_columns flex-start-between">

				<?php foreach ($fields['columns'] as $item): ?>

					<div class="col">

						<div class="content">

							<h4 class="col_title"><?php echo $item['title']; ?></h4>

							<p class="col_text"><?php echo $item['subtitle']; ?></p>

							<?php echo theme_get_link_tag($item['button'], 'col_btn'); ?>

						</div>

					</div>	

				<?php endforeach ?>

			</div>

			<div class="footer_columns flex-start-between">

				<div class="footer_col">

					<a class="footer_logo" href="<?php echo get_home_url(); ?>">

						<?php echo theme_get_image_tag($fields['logo']); ?>

					</a>

					<div class="texts">

						<p><?php echo $fields['text_1'] ?></p>

						<p><?php echo $fields['text_2'] ?></p>

					</div>

					<a class="footer_email" href="mailto:<?php echo $fields['email_1'] ?>"><?php echo $fields['email_1'] ?></a>

				

				</div>



				<div class="footer_col menu">

					<h3 class="title text-a46"><?php echo $fields['title_1'] ?></h3>

					<?php 

						wp_nav_menu( [

							'theme_location'  => 'footer_menu_1',

							'container'       => '',

							'menu_class'      => '',

						] );

					?>

				</div>



				<div class="footer_col menu">

					<h3 class="title text-a46"><?php echo $fields['title_2'] ?></h3>

					<?php 

						wp_nav_menu( [

							'theme_location'  => 'footer_menu_2',

							'container'       => '',

							'menu_class'      => '',

						] );

					?>

				</div>



				<div class="footer_col menu">

					<h3 class="title text-a46"><?php echo $fields['title_3'] ?></h3>

					<?php 

						wp_nav_menu( [

							'theme_location'  => 'footer_menu_3',

							'container'       => '',

							'menu_class'      => '',

						] );

					?>

				</div>

			</div>



			<div class="footer_rules_links flex-start-between">

				<?php 

					wp_nav_menu( [

						'theme_location'  => 'footer_menu_4',

						'container'       => '',

						'menu_class'      => 'flex-start',

					] );

				?>

				<p class="footer_copyright"><?php echo $fields['copyright'] ?></p>

			</div>

		</div>

	</footer>

	<!-- FOOTER END -->



	<?php wp_footer(); ?>

</body>



</html> 