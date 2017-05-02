<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<section class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="adventure-post">
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		<div class="social-media-buttons">
		                <button type="button" class="black-button">
                            <i class="fa fa-facebook"></i>
                            Like
                        </button>
                        <button type="button" class="black-button">
                            <i class="fa fa-twitter"></i>
                            Tweet
                        </button>
                        <button type="button" class="black-button">
                            <i class="fa fa-pinterest"></i>
                            Pin
                        </button>
						</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<?php get_footer(); ?>
