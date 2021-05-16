<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
$copyRight = '2021 Braumandl'
?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="footer" role="contentinfo">
		<div class="footer__container">
		<!--footer (if widget isn't set then will be dispalyed default footer-->
			<?php
				if(is_sidebar_active('braumandl-footer')):
					dynamic_sidebar('braumandl-footer');
				else:
					get_template_part('templates/default_footer');
				endif;
			?>
			<div class="footer__bottom-section">
				<?php do_action('display_footer_nav') ;?>
				<div class="footer__bottom-section-copy-right">&copy;                 
					<?php
						if(is_sidebar_active('footer-copyright')):
							dynamic_sidebar('footer-copyright');
						else:
							echo $copyRight;
						endif;
					;?>
				</div>
			</div>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
