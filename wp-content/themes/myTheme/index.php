<?php
get_header();
?>
<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-slide-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/slider-bg-1.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Здравословни рецепти</span></h2>
					<h2 class="hs-title-2"><span>от най-добрите шеф-готвачи</span></h2>
					<h2 class="hs-title-3"><span>на България</span></h2>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/slider-bg-2.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Здравословни рецепти</span></h2>
					<h2 class="hs-title-2"><span>от най-добрите шеф-готвачи</span></h2>
					<h2 class="hs-title-3"><span>на България</span></h2>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Add section end -->
	<section class="add-section spad">
		<div class="container">
			<div class="add-warp">
				<div class="add-slider owl-carousel">
					<div class="as-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/add/1.jpg"></div>
					<div class="as-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/add/2.jpg"></div>
					<div class="as-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/add/3.jpg"></div>
				</div>
				<div class="row add-text-warp">
					<div class="col-lg-4 col-md-5 offset-lg-8 offset-md-7">
						<div class="add-text text-white">
							<div class="at-style"></div>
							<h2>Невероятни десерти</h2>
							<ul>
								<li>Лесни за правене</li>
								<li>Видео- стъпка по стъпка</li>
								<li>Без глутен</li>
								<li>Здравословни съставки</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Add section end -->


	<!-- Recipes section -->
	<section class="recipes-section spad pt-0">
		<div class="container">
			<div class="section-title">
				<h2>Последни рецепти</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="<?php echo get_template_directory_uri(); ?>/img/recipes/1.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Традиционна пица</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-md-6">
					<div class="recipe">
						<img src="<?php echo get_template_directory_uri(); ?>/img/recipes/2.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Италианска паста</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</section>
	<!-- Recipes section end -->

<?php
get_footer();
?>