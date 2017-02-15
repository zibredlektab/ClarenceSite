<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package maxbatchelder
 * @subpackage maxbatcheldertest
 * @version 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="post">
        	<div class="posttitle"><?php the_title(); ?></div>
			<?php the_content(); ?>
        </div>
        <div class="line"/>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>
