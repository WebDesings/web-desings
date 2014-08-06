<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-8">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );?>
					<div class="aseparator"></div>
					<footer class="after-single-content">
						<p>¿Que te ha parecido este artículo? Dejanos tu valoración...
							<?php if(function_exists('the_ratings')) { the_ratings(); } ?></p>
							<!-- Go to www.addthis.com/dashboard to customize your tools -->
						
						<div class="article-footer-meta clearfix">
							<span class="byline-single"  itemprop="author">
								<?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>
								<div id="author-description" class="author-description">
									<?php printf( __( '<span class="autor-footer" itemprop="author">%s</span>', 'twentyfourteen' ), get_the_author() );?><br />
									<?php the_author_meta( 'description' ); ?>
									<div class="author-social">
										<?php enlaces_autor(); ?>
									</div>
								</div>
							</span>

						</div>

						<div class="share-this-post clearfix">
							
							<div class="share share_buttons-big clearfix">
								<ul>
									<li class="share-twitter">
										<!-- <span class="share-count">0</span> -->
										<a href="#" title="" onclick="Social=window.open('https://twitter.com/intent/tweet?text=<?php the_title();?>&amp;url=<?php the_permalink();?>&amp;via=WebDesingscom','Social','width=612,height=368'); return false;">
											<i class="icon-twitter"></i>Comparte en Twitter
										</a>
									</li>
									<li class="share-facebook">
										<a href="#" title="" onclick="Social=window.open('http://www.facebook.com/sharer/sharer.php?href=u:<?php the_permalink();?>','Social','width=612,height=368'); return false;"><i class="icon-facebook"></i> Comparte en Facebook</a>
									</li>
									<li class="share-google-plus">
										<a href="#" title="" onclick="Social=window.open('https://plus.google.com/share?url=<?php the_permalink();?>','Social','width=612,height=368'); return false;"><i class="icon-googleplus"></i> Comparte en Google+</a>
									</li>
								</ul>
							</div>
						</div>
						

						<div class="single-relate-post">
							<?php ?>
						</div>

						<?php //twentyfourteen_post_nav();?>
					</footer>
					<div class="aseparator"></div>
					<section id="area-comments"  class="after-single-content">
						<?php //twentyfourteen_post_nav();

							if ( comments_open() || get_comments_number() ) {
									comments_template();
								}
							endwhile;
						?>
					</section>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar('single-sidebar');
get_footer();
