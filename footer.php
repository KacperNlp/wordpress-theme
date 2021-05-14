<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="footer" role="contentinfo">
		<div class="footer__container">
			<!--Contact ways and opening hours-->
			<div class="footer__top-section">
				<div class="contact-ways">
					<img src="<?php echo get_template_directory_uri() . '-child/img/homePage/braumandl_logo_footer.png' ;?>" alt="KTM, Husqvarna, GasGas and Braumandl logo">
					<div class="contact-ways__text-container">
						<p class="contact-ways__text">KTM-Straße 1</p>
						<p class="contact-ways__text">4600 Thalheim bei Wels</p>
					</div>
					<div class="contact-ways__text-container">
						<p class="contact-ways__text">Telefon: <a href="tel:785482324" class="contact-ways__link">785 482 324</a></p>
						<p class="contact-ways__text">Mail: <a href="mailto:office@braumandl.com" class="contact-ways__link">office@braumandl.com</a></p>
					</div>
				</div>
				<div class="contact-ways">
				    <div class="contact-ways__text-container">
						<p class="contact-ways__text contact-ways__text--bold">Öffnungszeiten:</p>
						<p class="contact-ways__text">4600 Thalheim bei Wels</p>
					</div>
					<div class="contact-ways__text-container">
						<p class="contact-ways__text contact-ways__text--bold">Montag – Freitag</p>
						<p class="contact-ways__text">9:00 – 12:30 und 13:30 – 18:00</p>
					</div>
					<div class="contact-ways__text-container">
						<p class="contact-ways__text contact-ways__text--bold">Samstag</p>
						<p class="contact-ways__text">9:00 – 12:00</p>
					</div>
				</div>
				<div class="social-media">
					<a href="#" class="social-media__link">
						<img src="<?php echo get_template_directory_uri() . '-child/img/homePage/fb.png' ;?>" alt="facebook">
					</a>
					<a href="#" class="social-media__link">
						<img src="<?php echo get_template_directory_uri() . '-child/img/homePage/insta.png' ;?>" alt="instagram">
					</a>
				</div>
			</div>
			<!--lists with links to differents websites/online shops etc-->
			<div class="footer__lists-section">
				<div class="footer-lists">
					<p class="footer-list__section-header">KTM</p>
					<div class="footer-list__grid-container">
						<div class="footer-list__list-container">
							<ul><p class="footer-list__header">Bekleidung</p>
								<li class="footer-list__element"><a href="#">Jacken</a></li>
								<li class="footer-list__element"><a href="#">Hosen & Shorts</a></li>
								<li class="footer-list__element"><a href="#">Handschuhe</a></li>
								<li class="footer-list__element"><a href="#">Helme</a></li>
								<li class="footer-list__element"><a href="#">Protektoren</a></li>
								<li class="footer-list__element"><a href="#">Stiefel</a></li>
								<li class="footer-list__element"><a href="#">Brillen</a></li>
								<li class="footer-list__element"><a href="#">Jerseys</a></li>
							</ul>
						</div>
						<div class="footer-list__list-container">
							<ul><p class="footer-list__header">Zubehör & Teile</p>
								<li class="footer-list__element"><a href="#">Auspuffanlagen</a></li>
								<li class="footer-list__element"><a href="#">Bremsen</a></li>
								<li class="footer-list__element"><a href="#">Fußrasten</a></li>
								<li class="footer-list__element"><a href="#">Navigation</a></li>
								<li class="footer-list__element"><a href="#">Sitzbänke</a></li>
								<li class="footer-list__element"><a href="#">Verkleidungsteile/Dekore</a></li>
								<li class="footer-list__element"><a href="#">Windschilder</a></li>
								<li class="footer-list__element"><a href="#">Ketten, Kettenräder & Zubehör</a></li>
							</ul>
						</div>
						<div class="footer-list__list-container">
							<ul><p class="footer-list__header">Ersatzteil Kits</p>
								<li class="footer-list__element"><a href="#">Antriebssatz</a></li>
								<li class="footer-list__element"><a href="#">Griffset</a></li>
								<li class="footer-list__element"><a href="#">Kolbenkit</a></li>
								<li class="footer-list__element"><a href="#">Kunststoffteilekit</a></li>
								<li class="footer-list__element"><a href="#">Kupplungs-/Bremshebel</a></li>
								<li class="footer-list__element"><a href="#">Kupplungskit</a></li>
								<li class="footer-list__element"><a href="#">Luftfilter geölt</a></li>
								<li class="footer-list__element"><a href="#">Ölfilterkit</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-lists">
					<p class="footer-list__section-header">Husqvarna</p>
					<div class="footer-list__grid-container">
						<div class="footer-list__list-container">
							<ul><p class="footer-list__header">Bekleidung</p>
								<li class="footer-list__element"><a href="#">Jacken</a></li>
								<li class="footer-list__element"><a href="#">Hosen & Shorts</a></li>
								<li class="footer-list__element"><a href="#">Handschuhe</a></li>
								<li class="footer-list__element"><a href="#">Helme</a></li>
								<li class="footer-list__element"><a href="#">Protektoren</a></li>
								<li class="footer-list__element"><a href="#">Stiefel</a></li>
								<li class="footer-list__element"><a href="#">Brillen</a></li>
								<li class="footer-list__element"><a href="#">Jerseys</a></li>
							</ul>
						</div>
						<div class="footer-list__list-container">
							<ul><p class="footer-list__header">Zubehör & Teile</p>
								<li class="footer-list__element"><a href="#">Auspuffanlagen</a></li>
								<li class="footer-list__element"><a href="#">Bremsen</a></li>
								<li class="footer-list__element"><a href="#">Fußrasten</a></li>
								<li class="footer-list__element"><a href="#">Navigation</a></li>
								<li class="footer-list__element"><a href="#">Sitzbänke</a></li>
								<li class="footer-list__element"><a href="#">Verkleidungsteile/Dekore</a></li>
								<li class="footer-list__element"><a href="#">Ketten, Kettenräder & Zubehör</a></li>
							</ul>
						</div>
						<div class="footer-list__list-container">
							<ul><p class="footer-list__header">Ersatzteil Kits</p>
								<li class="footer-list__element"><a href="#">Antriebssatz</a></li>
								<li class="footer-list__element"><a href="#">Griffset</a></li>
								<li class="footer-list__element"><a href="#">Ölfilterkit</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!--bottom navigation-->
			<div class="footer__bottom-section">
				<?php do_action('display_footer_nav') ;?>
				<p class="footer__bottom-section-copy-right">&copy; 2021 Braumandl</p>
			</div>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
