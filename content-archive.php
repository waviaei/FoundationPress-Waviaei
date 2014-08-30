<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p>
					<time class="updated" datetime="<?php get_the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>
					  |  <?php the_category(', '); ?>
				</p>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	<hr />
</article>
