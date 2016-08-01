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


        	<!-- START - IMAGE BLOCK 1 -->         
	          <div class="grid-item width-1">
				<?php 
				    query_posts(array( 
				        'post_type' => 'blocks',
				        'showposts' => 1,
				    ) );  
				?>

				<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

		          	<a href="/?portfolio_category=commercial">
		          		<span class="enter1">Commercial</span>
		          		<figure class="">
							<!-- <img src="<?php bloginfo('template_directory'); ?>/images/image1.jpg" /> -->
							<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail();
							} 
							?>

							<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			          	</figure>	
			         </a>

			<?php endwhile; endif; wp_reset_query(); ?>  

	          </div>
	        <!-- END - IMAGE BLOCK 1 -->     
	        
	        <!-- START - IMAGE BLOCK 2 -->       
	          <div class="grid-item width-2">
				<?php 
				    query_posts(
				    	array( 
				        'post_type' => 'blocks',
				        'showposts' => 1,
				        'offset' => 1,
				    ) );  
				?>

				<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

          		<!-- <img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" />-->
  				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} 
				?>

				<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				
				<?php endwhile; endif; wp_reset_query(); ?>  

	          </div>
	        <!-- END - IMAGE BLOCK 2 -->       

	        <!-- START - IMAGE BLOCK 3 -->     
	          <div class="grid-item width-3">
				<?php 
				    query_posts(
				    	array( 
				        'post_type' => 'blocks',
				        'showposts' => 1,
				        'offset' => 2,
				    ) );  
				?>

				<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

          		<!-- <img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" />-->
  				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} 
				?>

				<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				
				<?php endwhile; endif; wp_reset_query(); ?>

	          </div>
	        <!-- END - IMAGE BLOCK 3 --> 
	      <!-- START - IMAGE BLOCK 4 -->          
          <div class="grid-item width-4">
				<?php 
				    query_posts(
				    	array( 
				        'post_type' => 'blocks',
				        'showposts' => 1,
				        'offset' => 3,
				    ) );  
				?>

				<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

          		<!-- <img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" />-->
  				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} 
				?>

				<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				
				<?php endwhile; endif; wp_reset_query(); ?>
          </div>
          <!-- END - IMAGE BLOCK 4 -->
          <!-- START - IMAGE BLOCK 5 -->  
          <div class="grid-item width-5">
				<?php 
				    query_posts(
				    	array( 
				        'post_type' => 'blocks',
				        'showposts' => 1,
				        'offset' => 4,
				    ) );  
				?>

				<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

          		<!-- <img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" />-->
  				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} 
				?>

				<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				
				<?php endwhile; endif; wp_reset_query(); ?>

          </div>
          <!-- END - IMAGE BLOCK 5 --> 
          <!-- START - IMAGE BLOCK 6 -->           
		   <div class="grid-item width-7">
				<?php 
				    query_posts(array( 
				        'post_type' => 'blocks',
				        'showposts' => 1,
				        'offset' => 6,				        
				    ) );  
				?>

				<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
		   		<a href="/?portfolio_category=residential">
		          	<span class="enter2">Residential</span>		   			
	          		<figure class="">
							<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail();
							} 
							?>

							<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		          	</figure>	
		         </a>	
			<?php endwhile; endif; wp_reset_query(); ?>  		         		   	
		   </div>
          <!-- END - IMAGE BLOCK 6 --> 
          <!-- START - IMAGE BLOCK 7 --> 			   
           <div class="grid-item width-6">
				<?php 
				    query_posts(
				    	array( 
				        'post_type' => 'blocks',
				        'showposts' => 1,
				        'offset' => 5,
				    ) );  
				?>

				<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

          		<!-- <img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" />-->
  				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} 
				?>

				<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				
				<?php endwhile; endif; wp_reset_query(); ?>
           </div> 
          <!-- END - IMAGE BLOCK 7 --> 
          <!-- START - IMAGE BLOCK 8 -->  
          <div class="grid-item width-8">
				<?php 
				    query_posts(
				    	array( 
				        'post_type' => 'blocks',
				        'showposts' => 1,
				        'offset' => 7,
				    ) );  
				?>

				<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

          		<!-- <img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" />-->
  				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} 
				?>

				<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				
				<?php endwhile; endif; wp_reset_query(); ?>
          </div> 
          <!-- END - IMAGE BLOCK 8 -->
          <!-- START - IMAGE BLOCK 9 -->   
          <div class="grid-item width-9">
				<?php 
				    query_posts(
				    	array( 
				        'post_type' => 'blocks',
				        'showposts' => 1,
				        'offset' => 8,
				    ) );  
				?>

				<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

          		<!-- <img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" />-->
  				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} 
				?>

				<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				
				<?php endwhile; endif; wp_reset_query(); ?>
          </div>  
          <!-- END - IMAGE BLOCK 9 -->                                                   
        </div> <!-- end packery -->
    </div>
	<!-- end packery -->




</div>



<?php get_footer(); ?>