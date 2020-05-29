<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Homepage
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inktel
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="home-title">
						<h3>Latest News</h3>
					</div>
				</div>
			</div>
		</div>


		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div id="news-wrapper">
						<ul id="carousel-one">
						
						
						<?php // WP_Query arguments
$args = array (
	'nopaging'               => true,
	 'category_name' => 'home-slider-one',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) :	while ( $query->have_posts() ) : 		$query->the_post(); ?>
	
	<li><a href="<?php echo the_permalink(); ?>">
								<div class="news-block">
									<div class="image-wrapper">
										<?php the_post_thumbnail('featured') ?>
									</div>

									<div class="item-wrapper">
										<h3><?php foreach((get_the_category()) as $cat) {
  if (!($cat->cat_name=='Home Slider One')) echo $cat->cat_name . ' ';
} ?></h3>
										<h2><?php the_title() ;?></h2>
										<?php the_excerpt() ;?>
									</div>
								</div>
								</a>
							</li>
							
							
	<?php endwhile; endif; wp_reset_postdata(); ?>

						
						
						</ul>
						
						
						
						<ul id="carousel-two">
						
						
						
						<?php // WP_Query arguments
$args = array (
	'nopaging'               => true,
	 'category_name' => 'home-slider-two',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) :	while ( $query->have_posts() ) : 		$query->the_post(); ?>
						
						
						
							<li><a href="<?php echo the_permalink(); ?>">
								<div class="news-block">
									<div class="item-wrapper">
										<h3><?php foreach((get_the_category()) as $cat) {
  if (!($cat->cat_name=='Home Slider Two')) echo $cat->cat_name . ' ';
} ?></h3>
										<h2><?php the_title() ;?></h2>
										<?php the_excerpt() ;?>
									</div>
									
									
									<div class="image-wrapper">
										<?php the_post_thumbnail('featured') ?>
									</div>
								</div>
								</a>
							</li>
							
							
							<?php endwhile; endif; wp_reset_postdata(); ?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="border-one"></div>
		<div class="border-two"></div>


		
	</main>
	<!-- #main -->
</div>
<!-- #primary -->



<?php get_footer(); ?>