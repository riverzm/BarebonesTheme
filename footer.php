<footer class="main-footer">

	<?php if(dynamic_sidebar('footer_widgets')) : else : endif; ?>

	<?php 
	
		$args = array(
			'theme_location' => 'footer_menu',
		);
	
	?>
	
	<?php wp_nav_menu($args); ?>

</footer> <!-- .main-footer -->
<?php wp_footer(); ?>
</body>
</html>