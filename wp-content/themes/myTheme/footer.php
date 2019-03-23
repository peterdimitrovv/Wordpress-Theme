<!-- Footer widgets section -->
	<section class="bottom-widgets-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 ftw-warp">
					<?php dynamic_sidebar('footer-a') ?>
				</div>
				<div class="col-lg-8 col-md-6 ftw-warp">
					<?php dynamic_sidebar('footer-b') ?>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Footer widgets section end -->

	<!-- Gallery section -->
	<div class="gallery">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/instagram/1.jpg"></div>
			<div class="gs-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/instagram/2.jpg"></div>
			<div class="gs-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/instagram/3.jpg"></div>
			<div class="gs-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/instagram/4.jpg"></div>
			<div class="gs-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/instagram/5.jpg"></div>
			<div class="gs-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/instagram/6.jpg"></div>
		</div>
	</div>
	<!-- Gallery section end -->


	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
					</div>
					<div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">
					<?php wp_nav_menu([
					'theme_location' => 'footer-menu',
					'container' => '',
					'container_class' => '',
					'container_id' => '',
					'menu_class' => 'footer-menu'
				]);
				?>
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<?php
		wp_footer();
	?>
</body>
</html>