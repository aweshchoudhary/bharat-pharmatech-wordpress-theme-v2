<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bharatpharmatech
 */

get_header();
?>

<div class="md:flex min-h-screen">
	<main id="primary" class="site-main h-full md:p-14 p-5 md:w-[65%] border-b">

		<?php if (have_posts()): ?>

			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="archive-description">', '</div>');
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while (have_posts()):
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part('template-parts/content', get_post_type());

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