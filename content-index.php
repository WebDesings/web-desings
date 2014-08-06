<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
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
			<?php $DescPost = get_post_meta($post->ID, 'DescPost',true);
			if($DescPost){ ?>
				<p class="single_post_desc" itemprop="description">
					<?php echo $DescPost ?> <a href="<?php the_permalink();?>" title="Leer Artículo Completo">[...]</a>
				</p>
			<?php } ?>
		</div><!-- .entry-content -->
		<div class="entry-meta">

			<div class="pop-share-post">
				<i class="share-icon icon-share"></i>
				<span class="num-share"></span> Compartir
				<div class="share-buttons">
					<div class="share share_buttons-mini">
						<ul>
							<li class="share-twitter">
								<!-- <span class="share-count">0</span> -->
								<a href="#" title="" onclick="Social=window.open('https://twitter.com/intent/tweet?text=<?php the_title();?>&amp;url=<?php the_permalink();?>&amp;via=WebDesingscom','Social','width=612,height=368'); return false;">
									<i class="icon-twitter"></i> Twitter
								</a>
							</li>
							<li class="share-facebook">
								<a href="#" title="" onclick="Social=window.open('http://www.facebook.com/sharer/sharer.php?href=u:<?php the_permalink();?>','Social','width=612,height=368'); return false;"><i class="icon-facebook"></i>Facebook</a>
							</li>
							<li class="share-google-plus">
								<a href="#" title="" onclick="Social=window.open('https://plus.google.com/share?url=<?php the_permalink();?>','Social','width=612,height=368'); return false;"><i class="icon-googleplus"></i>Google+</a>
							</li>
						</ul>
					</div>
				</div><!--share_buttons-mini-->
			</div><span class="separador">/</span>

			<?php twentyfourteen_posted_on_index(); ?> <span class="separador">/</span>
			
			<span class="comments-link">
				<?php comments_popup_link();?>
				<div class="pop-comment-index">
					<?php bg_recent_comments();?>
				</div>
			</span>
		</div><!-- .entry-meta -->
	</div>
</article><!-- #post-## -->
