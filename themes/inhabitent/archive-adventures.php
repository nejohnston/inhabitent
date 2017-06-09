
<?php
/**
 * The template for displaying archive product post types (shop page).
 *
 * @package Inhabitent Theme
 */
get_header(); ?>

	<div id="primary" class="shop-content-area">
		<main id="main" class="shop-site-main" role="main">

		<?php if ( have_posts() ) : ?>

				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
            <section class="container">
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="adventure-container">
                    <img src="<?php the_post_thumbnail(); ?>" class="adventure-header-image" />
                    <h3><a href="adventures/<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <a href="<?php echo get_permalink(); ?>" class="black-button">Read more</a>
                </div>
			<?php endwhile; ?>
            </section>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>