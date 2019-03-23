<?php
get_header();
the_post();
?>

	<!-- Recipes section -->
	<section class="recipes-section spad pt-0" style="background: #d9dcdc;">
		<div class="container">
			<div class="section-title">
				<h2><?= get_the_title() ?></h2>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<?= the_content() ?>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Recipes section end -->

<?php
get_footer();
?>