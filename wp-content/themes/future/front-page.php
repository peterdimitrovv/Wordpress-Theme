<?php
get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?=bloginfo('template_directory').'/images/image-not-found.png'?>" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?=bloginfo('template_directory').'/images/image-not-found.png'?>" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?=bloginfo('template_directory').'/images/image-not-found.png'?>" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
		</div>
	</div>
</div>

<?php 
get_footer();
?>