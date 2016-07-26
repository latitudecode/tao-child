<?php
/*
Template Name: Updated homepage
*/
?>
<?php get_header(); ?>
	

<div class="welcome">

	<!-- start packery -->
    <div class="packery">
        <div class="grid"> <!-- start packery -->
          <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/images/image1.jpg" /></div>
          <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" /></div>
          <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/images/image3.jpg" /></div>
          <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/images/image4.jpg" /></div>
          <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/images/image5.jpg" /></div>
          <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/images/image6.jpg" /></div>
          <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/images/image7.jpg" /></div>
          <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/images/image8.jpg" /></div>    
          <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/images/image9.jpg" /></div>                                                   
        </div> <!-- end packery -->
    </div>
	<!-- end packery -->

	<!--
	<div class="entry fl">
		<?php query_posts('post_type=page&p=360&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

		<a href="http://reform-creative.com/?portfolio_category=commercial">
			<figure class="effect-hover"> 
				<img src="<?php echo get_post_meta($post->ID, 'featured-image', true); ?>" />
			</figure>
		<h3 class="project-title .medium">COMMERCIAL</h3>
		</a>
	</div>
	<?php endwhile; endif; wp_reset_query(); ?>	

	<div class="entry fr">
		<?php query_posts('post_type=page&p=362&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

		<a href="http://reform-creative.com/?portfolio_category=residential">
			<figure class="effect-hover"> 			
			<img src="<?php echo get_post_meta($post->ID, 'featured-image', true); ?>" />
			</figure>
		<h3 class="project-title .medium">RESIDENTIAL</h3>
		</a>
	</div>
	<?php endwhile; endif; wp_reset_query(); ?>	
	-->
</div>



<?php get_footer(); ?>