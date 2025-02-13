<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ansmusic
 */

get_header();
?>
 <main class="ANS_main-wrapper not_found_page">
	<div class="ANS_container ANS_flex flex_column flex_align_center justify_center">
		<h3 class="fs-2xl text-center">Oops, Page Not Found!</h3>
		<p class="fs-base text-center">Sorry, but the page you requested does not exist or has been moved. Please check the URL or return to the homepage.</p>
		<a class="ANS_btn btn-b-yellow" href="<?php echo home_url(); ?>">Home</a>
	</div>
 </main>

<?php
get_footer();
