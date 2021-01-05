<?php get_header(); ?>   
	<div class="content_wrapper">
		<div class="left_content">

			<?php if(have_posts()) :?>
			<h2 class="archive_heding">
			<?php $post = $posts[0]; ?>
			<?php if (is_category()) { ?>
				<?php _e('Archive For'); ?> '<?php echo single_cat_title(); ?>' <?php _e('Category'); ?>
			<?php } elseif( is_tag() ) { ?>
				<?php _e('Archive For'); ?> <?php single_tag_title(); ?> <?php _e('Tag'); ?>
			<?php } elseif (is_day()) { ?>
				<?php _e(' Archive For '); ?> <?php the_time('F jS, Y'); ?>                             
			<?php } elseif (is_month()) { ?>
				<?php _e('Archive For'); ?> <?php the_time('F, Y'); ?>                                    
			<?php } elseif (is_year()) { ?>
				<?php _e('Archive For'); ?> <?php the_time('Y'); ?>                                       
			<?php } elseif (is_search()) { ?>
				<?php _e('Search Results'); ?>                            
			<?php } elseif (is_author()) { ?>
				<?php _e('Author Archive For'); ?> '<?php echo get_the_author(); ?>' 
			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<?php _e('Blog Archives'); ?>                                        
			<?php } ?></h2>	

				<?php	while(have_posts()):the_post();?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="featured_image">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="post_meta">
						Posted by : <span><?php the_author_posts_link(); ?></span> ,
						Posted on : <span><?php the_time('d M, Y'); ?></span> ,
						Posted In : <span><?php the_category(','); ?></span>
					</div>
					<p><?php echo excerpt('30'); ?></p>
				<?php   endwhile;
					else:
						echo "Not Found";
					endif;					
				 ?>
				 <?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages);}?>				
		</div>
		<?php get_sidebar(); ?>	
		<br class="clear" />
	</div>
	<?php get_template_part('before_widget_sidebar'); ?>		
<?php get_footer(); ?>	 