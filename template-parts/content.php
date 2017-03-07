<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Elite
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
	
	<header class="entry-header">

		<?php

		if ( is_single() ) :?>

		<div class="image-container" style="background:url( <?php if(has_post_thumbnail()){the_post_thumbnail_url( );}?>); background-size: cover">	
		
		</div>
		<div class="container">
		 
			<?php  the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			
			<div class="entry-meta">
				<?php elite_posted_on(); ?>  
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
				<?php if ( ('post' === get_post_type() )&& is_archive()) : ?>
			<div class="image-container" style="background:url( <?php if(has_post_thumbnail()){the_post_thumbnail_url( );}?>); background-size: cover">	
		
			</div>
			<div class="entry-meta">
				<?php elite_posted_on(); ?>  
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
			
		</header><!-- .entry-header -->

	<div class="container">
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'elite' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elite' ),
					'after'  => '</div>',
				) );
			?>

	</div><!-- .entry-content -->
	</div>

	<footer class="entry-footer">
	<div class="container">
		<?php elite_entry_footer(); ?>
		</div>
	</footer><!-- .entry-footer -->
	</div>

</article><!-- #post-## -->
