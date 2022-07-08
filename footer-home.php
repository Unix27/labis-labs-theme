	<?php 
		$fields = get_field('footer', 'options');
	?>

	<!-- HOME FOOTER START -->
	<footer class="home_footer">
		<div class="container">
			<div class="footer_columns flex-start-between">
				<div class="footer_col">
					<a class="footer_logo" href="<?php echo get_home_url(); ?>">
						<?php echo theme_get_image_tag($fields['logo']); ?>
						<!-- <img src="assets/img/logo_dark_mode.png" alt="Logo"> -->
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
	<!-- HOME FOOTER END -->

	<?php wp_footer(); ?>

	<!-- <script type="text/javascript" src="assets/js/jquery.min.js"></script> 
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script> 
	<script type="text/javascript" src="assets/js/script.js"></script> -->
</body>

</html> 