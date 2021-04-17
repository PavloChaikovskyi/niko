<?php 
$title = get_field( "commons-titles-home-testimonials", 703 );
?>

<div class="container home-section__container">
    <h3 class="home-section__title testimonials"><?php echo $title ?></h3>
    <div id="testimonialsSlider"
        class="testimonial-carousel">
        <?php 
		$posts = get_posts(array(
			'posts_per_page'	=> -1,
			'post_type'			=> 'testimonial'
		));
		if( $posts ): ?>
        <?php foreach( $posts as $post ): 
				?>
        <div class="testimonial-carousel__item-wrapper">
            <div class="testimonial-carousel__item bg-white">
                <img src="<?php the_field('testimonial-avatar'); ?>"
                    class="testimonial-carousel__avatar"
                    alt="avatar" />
                <span class="testimonial-carousel__title"><?php the_field('testimonial-title'); ?></span>
                <span class="testimonial-carousel__subtitle"><?php the_field('testimonial-subtitle'); ?></span>
                <p class="testimonial-carousel__desc"><?php the_field('testimonial-description'); ?></p>
            </div>
        </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>