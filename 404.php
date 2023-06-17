<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bharatpharmatech
 */

get_header();
?>

<div class="md:flex min-h-screen">
	<main id="primary" class="site-main h-full md:p-14 p-5 md:w-[65%] md:border-b-0 border-b">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title">
					<?php esc_html_e('Oops! That page can&rsquo;t be found.', 'bharatpharmatech'); ?>
				</h1>
				<p>
					<?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bharatpharmatech'); ?>
				</p>
			</header><!-- .page-header -->
		</section><!-- .error-404 -->
	</main><!-- #main -->
	<aside class="flex-1 p-5 md:border-l">
		<?php get_sidebar(); ?>
	</aside>
</div>

<?php
get_footer();