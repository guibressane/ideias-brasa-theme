<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package celestial-theme
 * @since celestial-theme 1.0
 */
?>

	</div><!-- #main .site-main -->


</div><!-- #page .hfeed .site -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php do_action( 'celestial_theme_credits' ); ?>
		        
        <?php
		$textorodape = get_option ('mo_textorodape');
		
		$facebook = get_option ('mo_facebook');
        $twitter = get_option ('mo_twitter');
		$linkedin = get_option ('mo_linkedin');		
		?>
        
        <div id="rodape-celestial">
        	<p class="texto-rodape"><?php echo $textorodape; ?></p>
            <div id="redes-sociais">
            	<div id="facebook"><a class="a-facebook" href="<?php echo $facebook; ?>" target="_blank"></a></div>
                <div id="twitter"><a class="a-twitter" href="<?php echo $twitter; ?>" target="_blank"></a></div>
                <div id="linkedin"><a class="a-linkedin" href="<?php echo $linkedin; ?>" target="_blank"></a></div>
            
            </div><!-- #redes-sociais -->
        </div>
	</footer><!-- #colophon .site-footer -->
<?php wp_footer(); ?>

</body>
</html>