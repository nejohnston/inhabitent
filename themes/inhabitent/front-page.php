	<?php
		get_header(); ?>
		<div class ="hero-container">
		<section class="home-hero">
				<img class="home-hero-logo" src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="Image of Inhabitent logo" />
		</section>
		</div>
		<div class="container information-wrapper">
		<section class="product-info">
		<h2>Shop Stuff</h2>
		<div class="shop-stuff-container">
		<?php
				$terms = get_terms( 'product_type', array(
					'taxonomy' => 'product-type',
					'order' => 'ASC',
					'hide_empty' => false,
					));
					foreach ($terms as $term) :
					$url = get_term_link ($term->slug , 'product-type');
		?>

		<div class="product-type-wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?php echo $term->slug ?>.svg"?>

			<p> <?php echo $term->description ?> </p>
			<a href="product_type/<?php echo $term->name ?>"
			class="category-link"> <?php echo $term->name ?> Stuff</a>
		</div>

		<?php endforeach ?>
		</section>
		<section class="new-posts">
				<h2>Inhabitent Journal</h2>
				<div class="new-posts-wrapper">
						<?php
						global $post;
						$args = array(
							'posts_per_page'   => 3,
							'orderby'          => 'date',
							'order'            => 'DESC',
							'post_type'        => 'post',
							'post_status'      => 'publish',
						);
						$inhabitent_blog_posts = get_posts( $args );
						foreach( $inhabitent_blog_posts as $post ) :?>
						<div class="post-wrapper">
							<div class="thumbnail-wrapper">
								<?php the_post_thumbnail('large'); ?>
							</div>
							<div class="post-info-wrapper">
								<div class="meta-entry">
									<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
								</div>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<a href="<?php the_permalink()?>" class ="black-button">Read Entry</a>
							</div>
						</div>
						<?php endforeach;
						wp_reset_postdata(); ?>
				</div>
				</section>
				<section class = "adventures container">
					<div class="adventures-header">
						<h2> Latest Adventures </h2>
					</div>
				<ul>
					<?php
						$loop = new WP_Query( array(
						'post_type' => 'adventure_post_type',
						'posts_per_page' => 4 ) );
					?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<li>
					<div class="adventure-wrapper">
						<?php the_post_thumbnail(); ?>
						<div class="adventures-gradient"></div>
							<div class="adventure-info">
								<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<a href="<?php echo the_permalink(); ?>" type="button" class="black-button">Read More</a>
							</div>
						</div>
				</li>
				<?php endwhile; ?>
				</ul>
                    <p class = "more-adventures">
                    <a href="">More Adventures</a>
                </p>
            </section>
			</div>
	<?php get_footer(); ?>