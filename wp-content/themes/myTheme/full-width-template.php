
<?php 
/*
	Template Name: Full Width Template
*/
get_header(); ?>   
	<div class="content_wrapper">
		<div class="left_content" style="width: 100%;">
			<h2><?php echo get_template_part('myText'); ?></h2>			
			<?php 
				if(have_posts()) :
					while(have_posts()):the_post();?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="featured_image">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="post_meta">
						Posted by : <span><?php the_author_posts_link(); ?></span> ,
						Posted on : <span><?php the_time('d M, Y'); ?></span> ,
						Posted In : <span><?php the_category(','); ?></span>
					</div>
					<p><?php the_content(); ?></p>	
			<?php   endwhile;
				else:
					echo "Not Found";
				endif;					
			 ?>				
		</div>		
		<br class="clear" />
	</div>
			
<?php get_footer(); ?>	