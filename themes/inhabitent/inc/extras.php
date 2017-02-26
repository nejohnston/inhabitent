<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_login_logo(){
	echo '<style>
		#login h1 a {
			background: url('. get_template_directory_uri() .'/images/inhabitent-logo-text-dark.svg) no-repeat !important;
			background-size: 300px 53px !important; width: 300px !important; height: 53px !important;
			}
		#login .button.button-primary {
			background-color: #248A83;
			}
	</style>';
}
add_action('login_head', 'inhabitent_login_logo');

function inhabitent_login_url($url){
	return home_url();
}
add_filter('login_headerurl', 'inhabitent_login_url' );

/**
 * Customize the title attribute for the login logo link.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

function inhabitent_login_title($url){
	return 'Inhabitent';
}
add_filter('login_headertitle', 'inhabitent_login_title' );

/**
 * Customize the hero image of the about page.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

function inhabitent_about_css() {
if (!is_page_template('page-templates/about.php')) {
	return;
}
	$image = CFS()->get('about_hero_image');

	if(!$image) {
		return;
	}

	$hero_css = ".page-template-about .entry-header {
			background:
				linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
				url({$image}) no-repeat center bottom;
			background-size: cover, cover;
	}";

	wp_add_inline_style( 'red-starter-style', $hero_css );

}

add_action( 'wp_enqueue_scripts', 'inhabitent_about_css' );

function post_list( $query ){
    if ($query->is_main_query() && is_post_type_archive( 'products' )){
        $query->set( 'orderby', 'title');
        $query->set( 'post_type', 'products');
        $query->set( 'order', 'ASC');
        $query->set( 'posts_per_page', 16);
    }
}
add_action( 'pre_get_posts', 'post_list', 1);

/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 */
function red_wp_trim_excerpt( $text ) {
	$raw_excerpt = $text;

	if ( '' == $text ) {
		// retrieve the post content
		$text = get_the_content('');

		// delete all shortcode tags from the content
		$text = strip_shortcodes( $text );

		$text = apply_filters( 'the_content', $text );
		$text = str_replace( ']]>', ']]&gt;', $text );

		// indicate allowable tags
		$allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
		$text = strip_tags( $text, $allowed_tags );

		// change to desired word count
		$excerpt_word_count = 50;
		$excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );

		// create a custom "more" link
		$excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
		$excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );

		// add the elipsis and link to the end if the word count is longer than the excerpt
		$words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );

		if ( count( $words ) > $excerpt_length ) {
			array_pop( $words );
			$text = implode( ' ', $words );
			$text = $text . $excerpt_more;
		} else {
			$text = implode( ' ', $words );
		}
	}

	return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'red_wp_trim_excerpt' );
