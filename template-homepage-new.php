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
	          <div class="grid-item width-1">
	          	<a href="#">
	          		<figure class="effect-hover">
		          	 	<span class="enter1">Commercial</span>
						<img src="<?php bloginfo('template_directory'); ?>/images/image1.jpg" /> 
		          	</figure>	
		         </a>
	          </div>
          <div class="grid-item width-2"><img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" /></div>
          <div class="grid-item width-3"><img src="<?php bloginfo('template_directory'); ?>/images/image3.jpg" /></div>
          <div class="grid-item width-4"><img src="<?php bloginfo('template_directory'); ?>/images/image4.jpg" /></div>
          <div class="grid-item width-5"><img src="<?php bloginfo('template_directory'); ?>/images/image5.jpg" /></div>
		   <div class="grid-item width-7">
		   		<a href="#">
	          		<figure class="effect-hover">
		          	 	<span class="enter2">Residential</span>
						<img src="<?php bloginfo('template_directory'); ?>/images/image7.jpg" />
		          	</figure>	
		         </a>			   	
		   </div>
           <div class="grid-item width-6"><img src="<?php bloginfo('template_directory'); ?>/images/image6.jpg" /></div> 
          <div class="grid-item width-8"><img src="<?php bloginfo('template_directory'); ?>/images/image8.jpg" /></div>  
          <div class="grid-item width-9"><img src="<?php bloginfo('template_directory'); ?>/images/image9.jpg" /></div>                                                   
        </div> <!-- end packery -->
    </div>
	<!-- end packery -->




</div>



<?php get_footer(); ?>