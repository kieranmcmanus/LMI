<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package LMI
 */

 $resource_title_1   = get_field('resource_title_1');
 $resource_link_1   = get_field('resource_link_1');
 $resource_title_2   = get_field('resource_title_2');
 $resource_link_2   = get_field('resource_link_2');
 $resource_title_3   = get_field('resource_title_3');
 $resource_link_3   = get_field('resource_link_3');
 $resource_title_4   = get_field('resource_title_4');
 $resource_link_4   = get_field('resource_link_4');
 $resource_title_5   = get_field('resource_title_5');
 $resource_link_5   = get_field('resource_link_5');

get_header(); ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
	<h1>Sorry! That page can't be found.</h1>
</section>

<div class="container">

	<div id="primary" class="row">

		<main id="content" class="col-sm-8">

			<div class="error-404 not-found">

				<div class="page-content">

					<h2>Let's get you back on track.</h2>

					<p>Head back to the <a href="<?php echo esc_url(home_url('/')); ?>">home page.</a></p>

					<!-- CATEGORIES -->
					<h3>Categories</h3>
					<p>Perhaps you were looking for a popular category?</p>

					<div class="widget widget_categories">
						<h4 class="widget-title">Most Used Categories</h4>
							<ul>
								<?php
									wp_list_categories( array (

										'orderby'			=>	'count',
										'order'				=>	'DESC',
										'Show_count'	=> 	1,
										'title_li'		=>	'',
										'number'			=> 	10

										))
								 ?>
							</ul>
					</div>

					<!-- ARCHIVES -->
					<h3>Archives</h3>
					<p>You can always sort through our archives...</p>
					<?php the_widget('WP_Widget_Archives', 'title=Our Archives', 'before_title=<h4 class="widgettitle">&after_title=</h4>'); ?>

				</div>

			</div>

		</main>

		<!-- SIDEBAR -->
		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>

	</div>

</div>

<?php get_footer(); ?>
