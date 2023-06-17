<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bharatpharmatech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<main id="page" class="site">
		<article>
			<a class="skip-link screen-reader-text" href="#primary">
				<?php esc_html_e('Skip to content', 'bharatpharmatech'); ?>
			</a>
			<header
				class="md:px-10 h-[60px] sticky top-0 left-0 bg-white z-40 px-5 py-2 border-b flex items-center justify-between">
				<div class="site-branding">
					<figure>
						<?php
						the_custom_logo(); ?>
						<figcaption class="opacity-0 absolute">Bharat Pharamtech Logo transparent</figcaption>
					</figure>
				</div>
				<nav class="primary-menu-list md:block hidden">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
						)
					);
					?>
				</nav>
				<div class="relative menu-btns md:flex hidden items-center gap-5">
					<button href="/search" id="header-search-btn" class="relative">
						<iconify-icon class="text-xl" icon="octicon:search-16"></iconify-icon>
						<div id="header-search" class="absolute top-full right-0 w-[400px] border">
							<?php get_search_form() ?>
						</div>
					</button>
					<a href="/contact-us" class="btn btn-filled">Contact</a>
				</div>

				<div class="md:hidden">
					<button id="open-menu-btn" onclick="toggleMenu()" class="btn btn-outlined">
						<iconify-icon icon="lucide:menu" class="text-xl"></iconify-icon>
					</button>
				</div>
			</header>
			<aside id="mobile-menu-container" class="md:hidden fixed top-0 right-full w-full h-screen z-50 bg-white">
				<div class="site-branding flex items-center justify-between px-5 py-3 border-b">
					<?php
					the_custom_logo(); ?>
					<button id="close-menu-btn" onclick="toggleMenu()">
						<iconify-icon icon="material-symbols:close" class="text-3xl"></iconify-icon>
					</button>
				</div>
				<div id="mobile-search" class="search border-b w-full p-5">
					<?php get_search_form() ?>
				</div>
				<nav id="mobile-menu" class="p-5 h-[calc(100vh-65px)] overflow-y-auto">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
						)
					);
					?>
				</nav>
			</aside>
			<script>
				const openBtn = document.getElementById("open-menu-btn");
				const closeBtn = document.getElementById("close-menu-btn");
				const mobileMenu = document.getElementById("mobile-menu-container");

				const toggleMenu = () => {
					mobileMenu.classList.toggle('open');
				}

				const menuItemHasChildren = document.querySelectorAll("menu-item-has-children");
				menuItemHasChildren.forEach(item => {
					console.log(item)
				})
			</script>