<?php
get_header();
the_post();
?>
<h1 class="text-center">	
	<?= get_the_title() ?>
</h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
		<?= the_content() ?>
		</div>
	</div>
</div>
<?php 
get_footer();
?>