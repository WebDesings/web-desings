<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->
	</div><!-- #page -->
	
	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		<div class="footer-top clearfix container">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>

		<div class="footer-bottom clearfix">
			<div class="container">
				<div class="left-footer-bottom">
					<?php wp_nav_menu( array( 'theme_location' => 'footerMenu', 'menu_class' => 'nav-menu-footer' ) ); ?>
					<p class="copy">
						<strong>&copy;2008-<?php echo date('Y');?></strong> Todos los derechos reservados.
					</p>
				</div>

				<div class="right-footer-bottom">
					<!-- Go to www.addthis.com/dashboard to customize your tools -->
					<div class="icon-social-mini">
						<ul>
							<li id="facebook">
								<a target="_blank" title="Siguenos en facebook" href="https://www.facebook.com/Webdesingscom">
									<i class="icon-facebook"></i>
								</a>
							</li>
							<li id="twitter">
								<a target="_blank" title="Siguenos en Twitter" href="https://twitter.com/WebDesingscom">
									<i class="icon-twitter"></i>
								</a>
							</li>
							<li id="google-plus">
								<a target="_blank" title="+1 en google plus" href="https://plus.google.com/u/1/104656289849588276427/posts">
									<i class="icon-googleplus"></i>
								</a>
							</li>
							<!--li id="linkedin">
								<a title="Red LinkedIn" href="">
									<i class="fa fa-linkedin"></i>
								</a>
							</li-->
						</ul>
					</div>
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
	
	<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_directory');?>/js/custom.js" type="text/javascript"></script>
	<!-- Script botones sociales mini -->
	<script type="text/javascript">var switchTo5x=true;</script>
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5240b6461b867387"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-18038880-2', 'auto');
	  ga('send', 'pageview');
	</script>
</body>
</html>