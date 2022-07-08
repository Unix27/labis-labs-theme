<!DOCTYPE html>
<html lang="en">
<head>

	<?php wp_head(); ?>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<title> Labis Labs - <?php the_title() ?> </title>
</head>

<body>

	<?php 
		$fields = get_field('header','option');
	?>

	<!-- HEADER START -->
	<header>
		<div class="container flex-center-between">
			<a href="<?php echo get_home_url(); ?>" class="header__logo">
				<?php echo theme_get_image_tag($fields['logo']); ?>
			</a>
			<nav class="header__menu_wrap">
				<?php 
				wp_nav_menu( [
					'theme_location'  => 'header_menu',
					'container'       => '',
					'menu_class'      => 'flex-start-between',
				] );
				?>
			</nav>
			<?php echo theme_get_link_tag($fields['call_link'], 'header__btn btn'); ?>
			<div class="mob header__show_menu_btn"><span class="flex-center"></span></div>
		</div>
	</header>
	<!-- HEADER END -->