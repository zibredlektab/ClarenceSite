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
        	<div class="post-title-container">
				<div class="line postline"></div>
				<div class="posttitle"><?php the_title(); ?></div>
				<div class="line postline" ></div>
			</div>
			<div class="postclient">Client: <?php $client = get_cfc_field( "clientgroup", "client" ); if (get_cfc_field("clientgroup", "has-url")) : ?>
							<?php $url = get_cfc_field( "clientgroup" , "url") ?>
							<?php $client = "<a href=\"{$url}\">{$client}</a>" ?>
						<?php endif ?>
			<?php echo $client ?></div>
			<div class="postdate"><?php the_date(); ?></div>
			<?php the_content(); ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>
