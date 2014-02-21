<?php
/*
 * The main template file.
*/

get_header(); ?>

  <div class="container">  
  			
	<?php if (have_posts()) : ?>	 			
  			<?php $home = new WP_Query('tag=home&order=ASC'); ?>
			<?php while ($home->have_posts()) : $home->the_post(); ?>
			
  	<div class="col-md-12" >
 	 	<div class="col-md-4">
 	 	<h1>
 	 	<?php the_title(); ?>
 	 	</h1>
 	 	</div>
 	 	<div class="col-md-8 body">
 	 	<?php the_content(); ?>
		</div> 	 	
 	</div> 

  			 <?php endwhile; ?>
  		
  </div>
  	<?php endif; ?>
	
  	<hr/>

<?php get_footer(); ?>