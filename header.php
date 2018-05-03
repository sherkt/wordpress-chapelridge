<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chapel_Ridge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe|Poppins:400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<?php
if ( is_search() || is_404() || get_post_type() === 'wpfc_sermon' ) {
	$add_container = True;
} else {
	$add_container = False;
}
?>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'chapel-ridge' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row d-none d-md-block">
				<div class="col-12">
						<?php the_custom_logo(); ?>
				</div>
			</div>

			<nav class="navbar navbar-expand-md navbar-dark bg-dark">
				<span class="text-white d-block d-md-none">
					<?php the_custom_logo(); ?>
				</span>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div>
						<?php
							$walker = new ChapelRidge_Walker_Nav_Menu();
							wp_nav_menu([
								'menu' => 'Header Menu',
								'items_wrap' => '<ul id="%1$s" class="nav ml-0 %2$s">%3$s</ul>',
								'walker' => $walker
							]);
						 ?>
					</div>
				</div>
			</nav>


		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content <?php if($add_container){echo 'container' ;} ?>">
