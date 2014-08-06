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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/Article">
	<?php //twentyfourteen_post_thumbnail(); ?>
	<meta itemprop="image" content="<?php if (has_post_thumbnail()) : ?>
		<?php
		$image_id = get_post_thumbnail_id();
		$image_url = wp_get_attachment_image_src($image_id,'large', true); ?>
		<?php echo $image_url[0]; ?>
		<?php else : ?>
		ruta_al_logo_de_tu_blog
		<?php endif; ?>
		" />
	<header class="entry-header">
		<?php

			if ( is_single() ) :
				the_title( '<h1 class="entry-title" itemprop="name">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>

		<div class="entry-meta">
			
			<div class="entry-meta-top">

				<?php
					if ( 'post' == get_post_type() )?>

					<span class="entry-date-single">
						<time itemprop="datePublished" content="<?php echo get_the_date(Y); ?>-<?php echo get_the_date(m); ?>-<?php echo get_the_date(d); ?>" rel="bookmark" class="" datetime=""><?php echo get_the_date(Y-m-d); ?></time>
					</span><span class="separador">/</span>

					
						<a href="#comentario">
							<span><?php comments_popup_link('Dejar mi opinión (0)', 'Ver Comentario (1)', 'Ver Comentarios (%)'); ?></span>
						</a><span class="separador">/</span>

					<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
						<span class="cat-links"  itemprop="about">
							<?php echo get_the_category_list( _x( ' ', 'twentyfourteen' ) ); ?>
						</span>
					<?php endif;?>
			</div>
			

		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<div class="entry-meta-bottom">
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<div class="addthis_native_toolbox share-this-post clearfix"></div>
	</div>

	<?php if ( is_search() ) : ?>
	<div class="post-thumbnail thumbnail">
		<?php twentyfourteen_post_thumbnail(); ?>
	</div>

	<div class="index-content-post">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>


		<div class="entry-content">
			<?php	the_excerpt();?>
		</div><!-- .entry-content -->

		<div class="entry-meta">
			<div class="share-post">
				<span class="share-icon icon-share"></span>
				<span class="num-share">524 compartido</span>
				<div class="share-buttons"></div>
			</div><span class="separador">/</span>
			<?php twentyfourteen_posted_on_index(); ?> <span class="separador">/</span>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
		</div><!-- .entry-meta -->
	</div><!-- .entry-summary -->

	<?php else : ?>
	
	<?php 
		$DescPost = get_post_meta($post->ID, 'DescPost',true);
		$ArchivosBase = get_post_meta($post->ID, 'ArchivosBase',true);
		$DemoOnline = get_post_meta($post->ID, 'DemoOnline',true);
	?>

	<?PHP //******* POST DESCRIPTION ********//?>

	<?php
	$DescPost = get_post_meta($post->ID, 'DescPost',true);
	if($DescPost){ ?>
		<p class="single_post_desc" itemprop="description">
			<?php echo $DescPost ?>
		</p>
	<?php } ?>

	<?php if($ArchivosBase || $DemoOnline){?>
		<div class="clearfix btn-content">
			<?php if($ArchivosBase){?>
				<a class="descargar_archivos_base btn btn-lg btn-danger" href="<?php echo $ArchivosBase; ?>" target="_blank" titile="Descargar Archivos Base">Descargar Archivos</a>
				
			<?php }if($DemoOnline){ ?>
				
					<a class="demo_online btn-lg btn btn-warning" href="<?php echo $DemoOnline ?>" target="_blank" title="Demo Online">Demo Online</a>
				
			<?php } ?>
		</div>
	<?php } ?>						

	<div class="entry-content" itemprop="articleBody">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

</article><!-- #post-## -->
