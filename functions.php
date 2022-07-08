<?php 



require_once 'inc/enqueue.php';

require_once 'inc/register-post_type.php';



if( function_exists('acf_add_options_page') ) {

	

	acf_add_options_page(array(

		'page_title' 	=> 'Theme General Settings',

		'menu_title'	=> 'Theme Settings',

		'menu_slug' 	=> 'theme-general-settings',

		'capability'	=> 'edit_posts',

		'redirect'		=> false

	));

	

}



add_action( 'init', 'register_my_menu' );

function register_my_menu() {

	register_nav_menu('header_menu', 'Header Menu');

	register_nav_menu('footer_menu_1', 'Footer menu col 1');

	register_nav_menu('footer_menu_2', 'Footer menu col 2');

	register_nav_menu('footer_menu_3', 'Footer menu col 3');

	register_nav_menu('footer_menu_4', 'Footer menu opposite the copyright text');



	add_theme_support('post-thumbnails');

}



function theme_get_image_tag($image, $class = '') {

	if ($image == null) {

		return '';

	}

	return '<img src="'.$image['url'].'" alt="'.$image['alt'].'" class="'.$class.'">';

};



function theme_get_link_tag($link, $class = '') {

	return '<a href="'.$link['url'].'" class="'.$class.'">'.$link['text'].'</a>';

};



add_action( 'wp_ajax_nopriv_show_more_posts', 'show_more_posts' );

add_action( 'wp_ajax_show_more_posts', 'show_more_posts' );

function show_more_posts(){



	$posts = get_posts([

		'exclude'     => $_POST['ids'],

		'numberposts' => 12

	]);



	global $post;

	ob_start(); 

	foreach ($posts as $post){ 

		setup_postdata($post);

		?>

		<a href="<?php the_permalink() ?>" class="item" data-id="<?php echo $post->ID ?>">

			<div class="img_wrap">

				<?php echo get_the_post_thumbnail($post); ?>

			</div>

			<h3 class="item_title"><?php the_title() ?></h3>

			<p class="text"><?php echo mb_strimwidth(strip_tags($post->post_content), 0, 104, "...") ?></p>

			<div class="flex-center-between post_info">

				<div class="author flex-center-between">

					<?php echo theme_get_image_tag(get_field('avatar', 'user_'.$post->post_author)) ?>

					<span class="by">By</span>

					<span class="name"><?php echo get_the_author_meta('display_name'); ?></span>

				</div>

				<p class="time"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago';?></p>

				<!-- <p class="time">11h ago</p> -->

			</div>

		</a>	

		<?php 

		wp_reset_postdata();

	}



	$status = 1;

	if ( (int) wp_count_posts()->publish - count($posts) - count($_POST['ids']) == 0) {

		$status = 0;

	}



	exit(json_encode([

		'post' => $_POST,

		'html' => ob_get_clean(),

		'status' => $status

	]));

}


// remove 'protfolio' from url START
function portfolio_change_link( $post_link, $post, $leavename ) {
    if ( $post->post_type != 'protfolio' || $post->post_status != 'publish' ) {
        return $post_link;
    }
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
    return $post_link;
}
add_filter( 'post_type_link', 'portfolio_change_link', 10, 3 );

function portfolio_parse_request( $query ) {
    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'protfolio', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'portfolio_parse_request' );
// remove 'protfolio' from url END