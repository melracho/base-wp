<?php
/**
 * The Footer.
 *
 */
?>
	<footer class="container" id="colophon" role="contentinfo" >
		
		<div class="col-md-12">
			<div class="col-md-2">
			<p style="font-size: x-small">
			BASE Theme v.1 &copy; <?php echo date('Y'); ?> MR 
			</p>
			</div>
			<div class="col-md-10">
			<p style="font-size: x-small">
			<?php bloginfo('description'); ?>
			</p>
			</div>
		</div>

		
	</footer>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
<script type="text/javascript" src="//use.typekit.net/ypp6max.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_footer(); ?>
</body>
</html>