<footer class="main-footer">
	
	<?php
	
		$args = (
			'theme_location' => 'footer',
		);
	
	?>
	
	<?php wp_nav_menu( $args ); ?>

</footer> <!-- .main-footer -->
<?php wp_footer(); ?>
</body>
</html>