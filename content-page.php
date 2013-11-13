<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package celestial-theme
 * @since celestial-theme 1.0
 */
?>

<article id="post-interno" >
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'celestial_theme' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Clique aqui para Editar&gt;&gt;', 'celestial_theme' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-interno -->
