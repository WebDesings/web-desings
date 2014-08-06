<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-post'); ?>>
	
	<div class="post-thumbnail thumbnail">
		<?php twentyfourteen_post_thumbnail(); ?>
	</div>

	<div class="index-content-post">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>


		<div class="entry-content">
			<?php	the_excerpt();?>
		</div><!-- .entry-content -->

		<div class="entry-meta">
			<?php twentyfourteen_posted_on_index(); ?> <span class="separador">/</span>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
		</div><!-- .entry-meta -->
	</div>
</article><!-- #post-## -->
