<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package geekplanet
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main page-content section portfolio">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h1>Портфолио</h1>
							<div class="sub-title">Мои последние проекты</div>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'posts_per_page' => 12,
							'order' => 'DESC',
							'post_type' => 'project',
							'paged' => $paged,
						);

						$MY_QUERY = new WP_Query( $args );

						if ( $MY_QUERY->have_posts() ) :
							while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post();
								?>
									<div class="col-lg-4 col-md-6">
										<div class="project-item">
											<div class="project-item-thumbnail">
												<?php the_post_thumbnail('full'); ?>
											</div>
											<div class="project-item-info">
												<div class="project-item-head">
													<h3><?php the_title(); ?></h3>
													<div class="project-item-terms">
														<?php echo get_the_term_list( get_the_ID(), 'project-category', '', ', ', '' ); ?>
													</div>
												</div>
												<div class="project-item-permalink">
													<?php if(get_the_content()) :?>
													<a href="<?php echo get_post_permalink(); ?>">
														<i class="fas fa-search"></i>
													</a>
													<?php endif; ?>
													<?php if(get_field('direct_link')): ?>
													<a href="<?php echo get_field('direct_link'); ?>" target="_blank">
														<i class="fas fa-link"></i>
													</a>
													<?php endif;?>
												</div>
											</div>
										</div>
									</div>
								<?php
							endwhile;
						endif; ?>

						<!-- Pagination -->
						<div class="container">
							<div class="row">
								<div class="col-12">
									<?php
										$GLOBALS['wp_query']->max_num_pages = $MY_QUERY->max_num_pages;
										the_posts_pagination(array(
											'type'=>'list',
											'class'=>'pagination',
											'screen_reader_text' => __( '' ),
											'prev_next'    => True,
											'prev_text'    => __('<i class="fa fa-angle-left"></i>'),
											'next_text'    => __('<i class="fa fa-angle-right"></i>'),
											'add_args'     => False
										));
									?>
								</div>
							</div>
						</div>
						<?php  wp_reset_postdata(); ?>
						<!-- End Pagination -->
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
