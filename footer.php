<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package relia
 */

?>
</div><!-- #content -->

<?php if ( get_theme_mod( 'relia_footer_background_type', 'image' ) == 'image' ) : ?>
    <footer id="colophon" class="site-footer" role="contentinfo" style="background-image: url(<?php echo esc_url( get_theme_mod( 'relia_footer_image', get_template_directory_uri() . '/inc/images/page-header-bg.jpg' ) ); ?>);">
<?php else : ?>
    <footer id="colophon" class="site-footer" role="contentinfo">
<?php endif; ?>
    
        <div class="container">

            <div class="row">

                <div class="col-md-12">
 <div class="social-icons">
    <a class="link-vimeo" href="https://vk.com/artemiyzz" target="_BLANK"><img src="http://127.0.0.1/wp-content/themes/relia/inc/images/1.png" width="20" height="20"></a>
    <a class="link-instagram" href="https://www.instagram.com/artemiy_zhukov/" target="_BLANK"><img src="http://127.0.0.1/wp-content/themes/relia/inc/images/2.png" width="20" height="20"></a>
 </div>
 <div class="site-info">
            © Zhukov Artemiy 2018        </div>        
                    

                </div>

            </div>

        </div>

    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
