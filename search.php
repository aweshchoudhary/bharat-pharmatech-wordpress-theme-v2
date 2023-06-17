<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bharatpharmatech
 */

get_header();
?>

<div class="md:flex min-h-screen">
	<main id="primary" class="site-main h-full md:p-14 p-5 md:w-[65%] border-b">

		<?php if (have_posts()): ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf(esc_html__('Search Results for: %s', 'bharatpharmatech'), '<span>' . get_search_query() . '</span>');
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while (have_posts()):
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part('template-parts/content', 'search');

			endwhile;

			the_posts_navigation();

		else:

			get_template_part('template-parts/content', 'none');

		endif;
		?>

	</main><!-- #main -->
	<aside class="flex-1 p-5 md:border-l">
		<?php get_sidebar(); ?>
	</aside>
</div>

<?php
get_footer();