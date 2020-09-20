<footer>
	<div class="container">
		<div class="row">
			<div class="copyright col-sm-7 col-4">
				<p>Copyright &copy; 2020 Fernando Castanon</p>
			</div>
			<div class="footer-menu col-sm-5 col-8 text-right">
				<?php wp_nav_menu( array(
					'theme_location'  => 'footer-menu'
				) ); ?>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>