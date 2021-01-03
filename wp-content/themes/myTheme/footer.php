<footer class="site-footer clearfix">
		<p>All Rights Reserved, <a href="http://itbari.com">IT-Bari Tutorials</a> &copy; 2016</p>
		<nav id="footer_nav">
			<ul>
				<?php 
					wp_nav_menu([
						'theme_location'=>'footer_menu'
					]);
				 ?>
			</ul>
		</nav>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>