<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package celestial-theme
 * @since celestial-theme 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content content-interno" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-interno" >
                    
                        <div class="entry-contato">
                            <?php the_content(); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'celestial_theme' ), 'after' => '</div>' ) ); ?>
                            <?php edit_post_link( __( 'Clique aqui para Editar&gt;&gt;', 'celestial_theme' ), '<span class="edit-link">', '</span>' ); ?>
                        </div><!-- .entry-content .entry-contato -->
                    </article><!-- #post-interno -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>