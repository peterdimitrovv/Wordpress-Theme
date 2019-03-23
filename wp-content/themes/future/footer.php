<div class="container-fluid">
	<footer>
		<div class="row">
			<?php dynamic_sidebar('footer-a') ?>
		</div>
		<div class="row">
			<?php
			wp_nav_menu([
				'theme_location' => 'footer-menu',
				'container' => 'div',
				'container_class' => 'col-md-12',
				'menu_class' => 'footerMenu'
			])
			?>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy; Your Website, year | <a href="https://html5-templates.com/" target="_blank" rel="nofollow">HTML5 Templates</a></p>
			</div>
		</div>
	</footer>
</div>
<?php 
	wp_footer();
?>
</body>

</html>