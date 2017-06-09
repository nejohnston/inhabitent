    <?php
    /**
    * The template for displaying single adventures.
    *
    * @package RED_Starter_Theme
    */

    get_header(); ?>

        <section class="container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <div class="shop-product">
                        <div class="product-thumbnail">
                            <a href="<?php the_permalink(); ?>" rel="bookmark">
                            	<?php while ( have_posts() ) : the_post(); ?>
                                <div class="post-image">
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                            </a>
                        </div>
                    <div class="product-info">
                            <h1><?php the_title(); ?></h1>
                            <div class="entry-content">
                        <div class="product-price">
                            <?php echo CFS()->get('cost'); ?>
                        </div>
                        <div class="product-excerpt">
                            <?php the_content() ?>
                        </div>
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
                </div>
                			<?php endwhile; // End of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </section>
    <?php get_footer(); ?>
