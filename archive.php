<?php get_header(); ?>

<?php 
	$sidebar_enabled = get_theme_mod('oy_sidebar_enabled', 0); 
	$post_type = get_theme_mod('oy_post_content', 'excerpt'); //get the post type; excerpt or full post.
?>	

	<h1 class="item-title animated-el massive">
		<?php single_cat_title(); ?>
	</h1>
	
	<div class="group">

		<div class="press">

	

	<div class="press-content"> 

		<div class="group">


									<?php if(have_posts()) while (have_posts()) : the_post(); ?>																	

								<div class="the-wrap">

									<div class="lefty">
												<?php if(has_post_thumbnail()) { the_post_thumbnail(array(705, 9999)); } ?>
									
									</div>

										

									<div class="righty">
												

													<h1 class="press animated-el">
													<?php the_title(); ?>
													</h1>

													<div class="the-content">
													<?php the_content(); ?>
													</div>

											    <!-- /.secondary thumbnail -->									
												<div class="second-feature-image">
											    <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>

											    <!-- /.link to article from custom post -->
												<?php $my_meta = get_post_meta( $post->ID, 'link-to-article', true ); // see http://codex.wordpress.org/Function_Reference/get_post_meta ?>
												<?php if( $my_meta && '' != $my_meta ) : ?>
												<a target="_blank" class="press-link" href="<?php echo $my_meta ?>">read article →</a>								
												<?php endif; ?>

												</div>
										</div>
									</div>

										

								
								<?php wp_link_pages( 
								array( 'before' => '<div class="page-link"><span class="page-link-title">Pages &rarr;</span>', 'after' => '</div>', 'pagelink' => ' Page % &nbsp;' ) ); ?>
								
								
									
									
					<?php endwhile; ?>
				
				<!-- /.single-post -->

				<div style="clear: both;"></div>
				
				<?php if($sidebar_enabled) { ?>
					<?php get_sidebar('blog'); ?>
				<?php } ?>
			
		</div><!-- /.group -->
	</div> <!-- /.end press content --> 
</div> 	<!-- /.press -->
		
		<?php if($sidebar_enabled) { ?>
			<?php get_sidebar( 'blog' ); ?>
		<?php } ?>
	
	</div><!-- /.group -->
	
	<ul class="pager group">
        <li class="prev-page">
			<?php next_posts_link( __('&larr; Older Entries', 'onioneye' ) ); ?>
        </li>
			
		<li class="next-page">
           	<?php previous_posts_link( __( 'Newer Entries &rarr;', 'onioneye' ) ); ?> 
        </li>
    </ul><!-- /.pager -->
	
<?php get_footer(); ?>