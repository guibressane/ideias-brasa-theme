<?php get_header( 'blog' ); ?>

<div id="primary" class="content-area">
			<div id="content" class="site-content content-blog" role="main">
			<div id="esquerda-blog">
			<?php if ( have_posts() ) : ?>

				<?php /* Inicio do Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                
                <article class="cada-post">
                   	<?php  if ( has_post_thumbnail() ) { ?>
                		<div class="thumb-maior">
							<?php the_post_thumbnail( 'thumbcadapostmaior' ); ?>
	                    </div><!-- .thumb-maior -->
                        
                        <div class="meta-single">
                        <span class="p-meta-single">Publicado em <?php the_date( 'd/M/Y' ); ?>, na(s) categoria(s): 
							<?php
                            $cats_post = get_the_category();
                            $separator = ', ';
                            $output = '';
                            if($cats_post){
                                foreach($cats_post as $cat_post) {
                                    $output .= '<a href="'.get_category_link($cat_post->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $cat_post->name ) ) . '">'.$cat_post->cat_name.'</a>'.$separator;
                                }
                            echo trim($output, $separator);
                            }
                            ?>
                        </span>
                        </div>
                        
                    <?php } ?>
                        <header class="entry-header">
                            <h2 class="entry-title capriola"><?php the_title(); ?></h2>
                        </header><!-- .entry-header -->
                        
						<div class="entry-content">
                            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'celestial_theme' ) ); ?>
                        </div><!-- .entry-content -->

                            <?php /* edit_post_link( __( 'Edit', 'celestial_theme' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); */ ?>
                    </article><!-- .cada-post -->
                    
				<?php endwhile; ?>
				<?php endif; ?>


			<span id="nav-blog"><?php if (function_exists( 'wp_pagenavi' )) { wp_pagenavi(); } ?></span>

            </div><!-- esquerda-blog -->
            
            <?php get_sidebar( 'blog' ); ?>
            
			</div><!-- #content .site-content -->
            
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>