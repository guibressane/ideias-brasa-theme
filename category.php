<?php get_header( 'blog' ); ?>

<div id="primary" class="content-area">
			<div id="content" class="site-content content-blog" role="main">
			<div id="esquerda-blog">

			<?php if ( have_posts() ) : ?>

				<?php /* Inicio do Loop */ ?>
                <?php while ( have_posts() ) : the_post(); $loopcounter++; ?>
                
                <?php /* Exibe até o segundo post exibe o the_content(); */ ?>
                <?php if ($loopcounter <= 2) : ?>
                
                <article class="cada-post">
                   	<?php  if ( has_post_thumbnail() ) { ?>
                		<div class="thumb-cada-post-maior">
							<?php the_post_thumbnail( 'thumbcadapostmaior' ); ?>
	                    </div><!-- .thumb-cada-post-maior -->
                    <?php } ?>
                        <header class="entry-header">
                            <h2 class="entry-title capriola"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'celestial_theme' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        </header><!-- .entry-header -->
                    
                        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div><!-- .entry-summary -->
                        <?php else : ?>
                        <div class="entry-content">
                            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'celestial_theme' ) ); ?>
                        </div><!-- .entry-content -->
                        <?php endif; ?>
                    
                        <div class="meta-blog">
                            <div class="veja-blog">
                            <a href="<?php the_permalink(); ?>">Veja mais &gt;&gt;</a>
                            </div><!-- .veja-blog -->
                        </div><!-- .meta-blog -->
                    
                            <?php /* edit_post_link( __( 'Edit', 'celestial_theme' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); */ ?>
                    </article><!-- .cada-post -->
                    

                <?php /* Após o segundo post exibe o the_excerpt(); */ ?>
				<?php else : ?>
                
                <article class="cada-post">
                	<?php  if ( has_post_thumbnail() ) { ?>
                		<div class="thumb-cada-post-menor">
							<?php the_post_thumbnail( 'thumbcadapostmenor' ); ?>
	                    </div><!-- .thumb-cada-post-menor -->
                    <?php } ?>
                        
                        <div class="mini-cada-post">
                        <header class="entry-header">
                            <h2 class="entry-title capriola"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'celestial_theme' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        </header><!-- .entry-header -->
                    
                        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
                        <div class="entry-summary">
                            <?php echo "<p>" . limit_words(get_the_excerpt(), 35) . "...</p>"; ?>
                        </div><!-- .entry-summary -->
                        <?php else : ?>
                        <div class="entry-content">
                            <?php echo "<p>" . limit_words(get_the_excerpt(), 35) . "...</p>"; ?>
                        </div><!-- .entry-content -->
                        <?php endif; ?>
                        
                        </div><!-- .mini-cada-post -->
                        <div class="hack-position">&nbsp;</div>

						<div class="mini-meta-blog">
                            <div class="continue-blog">
                            <a href="<?php the_permalink(); ?>">Continue lendo &gt;&gt;</a>
                            </div><!-- .continue-blog -->
                        </div><!-- .mini-meta-blog -->
                    
                            <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                                <?php
                                    /* translators: used between list items, there is a space after the comma */
                                    $categories_list = get_the_category_list( __( ', ', 'celestial_theme' ) );
                                    if ( $categories_list && celestial_theme_categorized_blog() ) :
                                ?>
                              
                                <?php endif; // End if categories ?>
                    
                            <?php endif; // End if 'post' == get_post_type() ?>
                    </article><!-- .cada-post -->
                    

				<?php endif; ?>
				<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'no-results', 'index' ); ?>
			<?php endif; ?>

			<span id="nav-blog"><?php if (function_exists( 'wp_pagenavi' )) { wp_pagenavi(); } ?></span>

            </div><!-- esquerda-blog -->
            
            <?php get_sidebar( 'blog' ); ?>
            
			</div><!-- #content .site-content -->
            
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>