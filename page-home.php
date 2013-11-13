<?php
/**
 * Template Name: Home
 * Template para Home.
 *
 * @package celestial-theme
 * @since celestial-theme 1.0
 */

get_header('home'); ?>

	<?php 
		/* Pega a página selecionada para cada box */
        $box01 = get_option ('mo_box01');
        $box02 = get_option ('mo_box02');
        $box03 = get_option ('mo_box03');
    ?>

	<div id="linha-2-col">
    	<div class="slider marginr15">
        	<div class="header-box">
            <h2 class="titulo-header-box">Destaques</h2>
            </div><!-- #header-box -->
            <?php if(function_exists("insert_post_highlights")) insert_post_highlights(); ?>
        </div><!-- .slider -->
    
    	<div class="box">
        			<div id="widgetvideo" class="widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>




			<?php endif; // end sidebar widget area ?>
		</div><!-- #widgetvideo .widget-area -->
        </div><!-- .box -->
    </div><!-- #linha-2-col -->

	<div id="linha-3-col">
    	<div class="box marginr15">
        	<?php query_posts('pagename='.$box02.'&showposts=1'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	<div class="header-box">
            <h3 class="titulo-header-box"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div><!-- #header-box -->
            	<div class="thumb-destaque">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('destaqueimg'); ?></a>
            	</div><!-- .thumb-destaque -->
            	<?php $limitebox02 = get_option ('mo_limitebox02'); ?>
                <?php echo "<p>" . limit_words(get_the_excerpt(), $limitebox02) . "...</p>"; ?>
                <a class="veja" href="<?php the_permalink(); ?>">Veja &gt;&gt;</a>
				<?php endwhile; endif; wp_reset_query(); ?>
        </div><!-- .box -->
        
    	<div class="box marginr15">
        	<?php query_posts('pagename='.$box03.'&showposts=1'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	<div class="header-box">
            <h3 class="titulo-header-box"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div><!-- #header-box -->
            	<div class="thumb-destaque">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('destaqueimg'); ?></a>
            	</div><!-- .thumb-destaque -->
            	<?php $limitebox03 = get_option ('mo_limitebox03'); ?>
                <?php echo "<p>" . limit_words(get_the_excerpt(), $limitebox03) . "...</p>"; ?>
                <a class="veja" href="<?php the_permalink(); ?>">Veja &gt;&gt;</a>
				<?php endwhile; endif; wp_reset_query(); ?>
        </div><!-- .box -->
        
    	<div class="box">
        	<div class="header-box">
            <h3 class="titulo-header-box">Acompanhe!</h3>
            </div><!-- #header-box -->
            <div class="fb-like-box" data-href="https://www.facebook.com/celestialprodutora" data-width="290" data-height="" data-show-faces="true" data-stream="false" data-border-color="none" data-header="false"></div>
        </div><!-- .box -->
    </div><!-- #linha-3-col -->
     
<?php get_footer(); ?>

