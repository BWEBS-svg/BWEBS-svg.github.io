<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tora
 */

?>
	
		</div>
	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner-footer">
			<!--<?php do_action('tora_footer'); ?>-->
			<!--<nav id="footer-navigation" class="footer-navigation" role="navigation">
				<div id="footer-menu" class="menu">
					<ul>
						<li class="page_item page-item-25"><a href="http://bwebssvg.com/clients/">Clients</a></li>
						<li class="page_item page-item-19"><a href="http://bwebssvg.com/contact-us/">Contact Us</a></li>
					</ul>
				</div>
			</nav> -->
			<a class="go-top"><i class="tora-icon dslc-icon-ei-arrow_triangle-up"></i></a>		
			<div class="site-info">
				<a href="https://bwebssvg.com/"> BWEBS</a>
				<p>Copyright &copy; 2017. All rights reserved. </p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>