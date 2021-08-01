<?php
/**
 * The template for displaying all single course
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package welearner
 */

get_header();
?>  
<div class="single-course-area">
	<?php
	while ( have_posts() ) :
		the_post();

		the_content();

	endwhile; // End of the loop.
	?>
</div>
<?php
get_footer();
