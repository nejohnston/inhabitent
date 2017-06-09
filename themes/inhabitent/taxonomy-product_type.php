<?php
/**
* The template for displaying archive for the products post type (shop page).
*
* @package RED_Starter_Theme
*/
get_header(); ?>
    <div id="primary" class="content-area container site-content">
        <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
        <section class="product-header">
            <header class="page-header">
                <?php
                    function product_archive_title($title) {
                        if(is_post_type_archive('product-types')) {
                            $title = 'product-type';
                        }
                        return $title;
                        }
                        function grd_custom_archive_title( $title ) {
                            // Remove any HTML, words, digits, and spaces before the title.
                                return preg_replace( '#^[\w\d\s]+:\s*#', '', strip_tags( $title ) );
                        }

                        add_filter( 'get_the_archive_title', 'grd_custom_archive_title' );
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>

            </header>
</section>
            <div class="all-products">
                            <?php /* Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="shop-product">

                                    <div class="product-thumbnail">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                                        <div class="post-image">
                                        <?php the_post_thumbnail('large'); ?>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                    <div class="product-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="product-price">
                                    <?php echo CFS()->get('cost'); ?>
                                    </div>
                                    </div>
                                </div>
                <?php endwhile; ?>
            </div>
            <?php the_posts_navigation(); ?>
            <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
        </section>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>