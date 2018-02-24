<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chapel_Ridge
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container widget-area">
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
				</div>
				<div class="col-xs-6 col-sm-3">
					<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
				</div>
				<div class="col-xs-6 col-sm-3">
					<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
				</div>
				<div class="col-xs-6 col-sm-3">
					<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
				</div>
			</div>
		</div>
		<div class="site-info container text-center">
			&copy; <?php echo date("Y"); ?> Chapel Ridge Free Methodist Church
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
	$(function() {
		$('.nav-item.dropdown .nav-link').click(function() {
				$(this).next('.dropdown-menu').fadeToggle(500);
		});
	});
</script>

</body>
</html>
