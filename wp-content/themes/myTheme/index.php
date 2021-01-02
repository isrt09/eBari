<?php get_header(); ?>
	<div class="content_wrapper">
		<div class="left_content">
			<?php 
				if(have_posts()) :
					while(have_posts()):the_post();?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php the_content(); ?></p>	
			<?php   endwhile;
				else:
					echo "Not Found";
				endif;					
			 ?>				
		</div>
		<?php get_sidebar(); ?>	
		<br class="clear" />
	</div>
<?php get_footer(); ?>	