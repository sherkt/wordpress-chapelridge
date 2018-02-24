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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'chapel-ridge' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background:none !important;">
				<div class="mr-auto">
					<?php the_custom_logo(); ?>
				</div>

				<div id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="navbar-toggler-icon"></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?php
									wp_nav_menu( array(
										'menu' => 'Header Menu',
										'items_wrap' => '<ul id="%1$s" class="list-unstyled %2$s">%3$s</ul>',
										'before' => '<span class="dropdown-item">',
										'after' => '</span>',
									) );
								 ?>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link btn btn-blue">CONTACT</a></li>
						<li class="nav-item"><a class="nav-link btn btn-blue-grey">MEMBERS</a></li>
					</ul>
				</div>
			</nav>


		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
