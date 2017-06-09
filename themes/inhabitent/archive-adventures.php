<?php
/**
* The template for displaying archive pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>
<div class = "primary-secondary-container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <section class="page-header">
                            <?php
                                function adventures_archive_title($title) {
                                    if(is_post_type_archive('adventures')) {
                                        $title = 'Latest Adventures';
                                    }
                                    return $title;
                                    }
                                    add_filter('get_the_archive_title', 'adventures_archive_title');
                                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>
            </section><!-- .page-header -->
            <section class="container">
                <ul>
                <?php while ( have_posts() ) : the_post(); ?>
                    <li class="adventure-container">
                        <div class ="adventure-archive-image-container">
                    <?php the_post_thumbnail( '' ) ?>
                    <div class="adventures-gradient"></div>
                            <div class="adventure-info-wrapper">
                            <h3><a href = "<?php get_permalink();?>" class ="archive-adventure-title"><?php the_title(); ?></a></h3>
                                <a href ="<?php get_permalink();?>"class = "black-button">Read More</a>
                            </div>
                        </li>
                <?php endwhile; ?>
                </ul>
                </section>
            <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>