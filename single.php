<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bharatpharmatech
 */

get_header();
?>

<div class="md:flex min-h-screen">
	<main id="primary" class="site-main h-full md:p-14 p-5 md:w-[65%] border-b">


		<?php
		while (have_posts()):
			the_post();

			get_template_part('template-parts/content', get_post_type());

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'bharatpharmatech' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'bharatpharmatech' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );
		
			// If comments are open or we have at least one comment, load up the comment template.
			// if (comments_open() || get_comments_number()):
			// 	comments_template();
			// endif;
		
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<aside class="flex-1 p-5 md:border-l">
		<?php get_sidebar(); ?>
	</aside>
</div>
<?php
get_footer();