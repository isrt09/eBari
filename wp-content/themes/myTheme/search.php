<?php get_header(); ?>   
	<div class="content_wrapper">	
		<div class="left_content">
			<h2>Search For : <?php the_search_query(); ?></h2>
			<?php echo get_template_part('content'); ?>
			<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages);}?>								
		</div>
		<?php get_sidebar(); ?>	
		<br class="clear" />
	</div>
	<?php get_template_part('before_widget_sidebar'); ?>		
<?php get_footer(); ?>	