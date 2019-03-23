<?php 
get_header();
the_post();
?>
<div class="container">
	<div class="col-md-12">
		<h1><?=the_title()?></h1>
	</div>
	<div class="col-md-4">
		<img src="<?=
					get_the_post_thumbnail_url() ?  
					get_the_post_thumbnail_url() :
					bloginfo('template_directory').'/images/image-not-found.png'?>"
					class="img-responsive" 
		/>
	</div>
	<div class="col-md-8">
		<p>
			<?=the_content()?>
		</p>
	</div>
</div> 
<?php
get_footer();
?>