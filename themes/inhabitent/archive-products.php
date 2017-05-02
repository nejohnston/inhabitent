            <?php
            /**
            * The template for displaying archive for the products post type (shop page).
            *
            * @package RED_Starter_Theme
            */
            get_header(); ?>
            <section class="container">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                    <?php if ( have_posts() ) : ?>

                        <section class="product-header">
                            <?php
                                function product_archive_title($title) {
                                    if(is_post_type_archive('products')) {
                                        $title = 'Shop Stuff';
                                    }
                                    return $title;
                                    }
                                    add_filter('get_the_archive_title', 'product_archive_title');
                                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>
                <ul class="product-type-list">
                    <?php
                        $terms = get_terms( array(
                                            'taxonomy' => 'product_type',
                                            'orderby' => 'name',
                                        ));

                        foreach ($terms as $term) :
                            $url = get_term_link ($term->slug , 'product_type');
                        ?>
                            <li>
                            <a href='<?php echo $url?>' class='button'>
                            <p><?php echo $term->name; ?></p></a>
                            </li>
                    <?php
                        endforeach;
                    ?>
                </ul>
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
                                    <p class="product-price"><?php echo CFS()->get('cost'); ?>
                                    </p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php the_posts_navigation(); ?>
                        <?php else : ?>
                        <?php get_template_part( 'template-parts/content', 'none' ); ?>
                        <?php endif; ?>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </section>
            <?php get_footer(); ?>