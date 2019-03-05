<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Education_Care
 */

get_header(); ?>
<?php if ( true === apply_filters( 'education_care_show_home_page_content', true ) ) : ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/*while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

			endwhile; // End of the loop.*/
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php

endif;

get_footer();
