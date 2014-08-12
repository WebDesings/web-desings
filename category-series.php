<?php
/*
*
* Template name: Single Serie Page
*
*/

get_header();?>

<div id="main-content" class="main-content">

	<section id="primary" class="content-area">
		
		<div id="content" class="site-content" role="main">
		
			<header class="archive-header">
				<h1 class="archive-title"><span><?php echo $titulo_archive;?></span><?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->
		<?php
			if (have_posts()) :
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts("cat=76&paged=$paged");
				while (have_posts()) : the_post();

					get_template_part( 'content', 'index' );

				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
		
		</div><!-- #content -->

	</section><!-- #primary -->
	
	<?php get_sidebar();?>

</div><!-- #main-content -->

<?php
get_footer();