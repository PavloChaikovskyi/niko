<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container page-section privacy-section-privacy">
	<h1 class="page-section__title"><?php the_title(); ?></h1>
	<?php the_content(); ?> 	
</div>
<?php endwhile; ?>
<?php endif; ?>
