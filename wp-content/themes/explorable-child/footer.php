<?php if ( ! et_is_listing_page() || ( is_single() && 'listing' == get_post_type() ) ) : ?>
	<footer id="main-footer">
		<div class="container">
			<?php get_sidebar( 'footer' ); ?>

		<div class="footer-copyright">
			<p>&copy; <?php echo date( "Y" ) ?> Everything Senior Citizen.  All Rights Reserved</p>
		</div>
		</div> <!-- end .container -->
	</footer> <!-- end #main-footer -->
<?php endif; ?>

	<?php wp_footer(); ?>
</body>
</html>