<?php get_header(); ?>

<?php $sidebar_enabled = get_theme_mod('oy_sidebar_enabled', 0); ?>

<h1 class="item-title post-title massive">PRESS</h1>

<div class="press">

	<div class="featured-image">

		<?php if(has_post_thumbnail() ) { the_post_thumbnail(array(705, 9999)); } ?>

	</div>	

	<div class="press-content"> 

		<div class="group">

				<div class="single-post <?php echo $grid_class = ($sidebar_enabled) ? 'blog-with-sidebar' : 'blog-no-sidebar'; ?>">		

							<div class="press post-content">																	

								<h1 class="press animated-el">
									<?php the_title(); ?>
								</h1>

								<div class="the-content single-post-content">


									<?php if(have_posts()) while (have_posts()) : the_post(); ?>																	

									<?php the_content(); ?>
									
								    <!-- /.secondary thumbnail -->									
									<div class="second-feature-image">
								    <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>

								    <!-- /.link to article from custom post -->
									<?php $my_meta = get_post_meta( $post->ID, 'link-to-article', true ); // see http://codex.wordpress.org/Function_Reference/get_post_meta ?>
									<?php if( $my_meta && '' != $my_meta ) : ?>
									<a target="_blank" class="press-link" href="<?php echo $my_meta ?>">read article →</a>								
									<?php endif; ?>

									</div>

								</div><!-- /.the-content -->
								
								<?php wp_link_pages( 
								array( 'before' => '<div class="page-link"><span class="page-link-title">Pages &rarr;</span>', 'after' => '</div>', 'pagelink' => ' Page % &nbsp;' ) ); ?>
								
								
							</div><!-- /.post-content -->
									
									
					<?php endwhile; ?>
				
				</div>
				<!-- /.single-post -->
				
				<?php if($sidebar_enabled) { ?>
					<?php get_sidebar('blog'); ?>
				<?php } ?>
			
		</div><!-- /.group -->
	</div> <!-- /.end press content --> 
</div> 	<!-- /.press
	<ul class="pager group">
        <li class="prev-page">
			<?php next_post_link( '%link', '&larr; %title' ); ?>
        </li>
			
		<li class="next-page">
           	<?php previous_post_link( '%link', '%title &rarr;' ); ?>        
        </li>
    </ul><!-- /.pager -->
		
<?php get_footer(); ?>