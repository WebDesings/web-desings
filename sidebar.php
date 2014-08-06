<?php
/**
 * The Content Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>
<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
	<aside id="social-sidebar" class="widget">
		<div class="icon-social">
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
		 <div id="subscribe_post_bottom">
		    <!-- <p>Suscríbete para recibir los últimos posts directamente en tu bandeja de entrada:</p> -->
				<form onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=webDesings', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post" target="popupwindow" action="http://feedburner.google.com/fb/a/mailverify">
					<input type="text" class="holder subscribe_input" placeholder="News Letters" name="email">
					<input type="hidden" name="uri" value="webDesings">
					<input type="hidden" name="loc" value="es_ES">
			    	<button class="subscribe_button"><span>Ok</span></button>
				</form>
		</div>
	</aside>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #content-sidebar -->
