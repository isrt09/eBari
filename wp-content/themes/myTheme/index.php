<?php get_header(); ?>   
	<div class="content_wrapper">	
		<div class="left_content">
			<?php echo get_template_part('content'); ?>						
		</div>
		<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages);}?>	
		<?php get_sidebar(); ?>	
		<br class="clear" />
	</div>
	<?php get_template_part('before_widget_sidebar'); ?>		
<?php get_footer(); ?>	