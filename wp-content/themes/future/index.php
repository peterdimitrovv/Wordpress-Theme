<?php
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = ['posts_per_page' => 3, 'paged' => $paged ];
query_posts($args);

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1>Последни публикации</h1>
		</div>
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post();  ?>

		<div class="col-md-4">
			<div class="thumbnail">
			  <a href="<?=get_permalink()?>">
				<div style="width: 100%; height: 150px;
							background-color: red;
							background: url('<?=
							get_the_post_thumbnail_url() ?  
							get_the_post_thumbnail_url() :
							bloginfo('template_directory').'/images/image-not-found.png'?>');
							background-size: cover;
							background-position: center center;
							"></div>
				<div class="caption">
				  <h2><?= the_title()?></h2>
				  <p>
				  <?=the_content()?>
				  </p>
				</div>
			  </a>
			</div>
		</div>
		<?php endwhile; ?>

		<div class="col-md-12">
			<div class="nav-previous alignleft"><?php previous_posts_link(); ?></div>
			<div class="nav-next alignright"><?php next_posts_link(); ?></div>
		</div>

		<?php else : ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php 
get_footer();
?>