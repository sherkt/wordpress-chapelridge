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
			&copy; <?php date("Y"); ?> Chapel Ridge Free Methodist Church
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
