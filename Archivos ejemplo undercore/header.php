<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aulageek_theme
 * 
 * 
 *
 */



?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aulageektheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$aulageektheme_description = get_bloginfo( 'description', 'display' );
			if ( $aulageektheme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $aulageektheme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu' => 'Primary',
                'menu_class' => 'hide-on-med-and-down',
                'walker' => new wp_materialize_navwalker()
			) );
			?>
		
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

<?php
 /*
 <?php
            wp_nav_menu( array(
                'menu' => 'Primary',
                'theme_location'=>'Primary',
                'menu_class' => 'hide-on-med-and-down',
                'walker' => new wp_materialize_navwalker()
            ));
        ?>




 
 <!-- Estructura menu Navbar  -->
 <nav>
 <div class="nav-wrapper">
   <a href="#!" class="brand-logo">Logo</a>
   <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
   <ul class="right hide-on-med-and-down">
	 <li><a href="sass.html">Sass</a></li>
	 <li><a href="badges.html">Components</a></li>
	 <li><a href="collapsible.html">Javascript</a></li>
	 <li><a href="mobile.html">Mobile</a></li>
	 <!-- Estructura de Trigger dropdown -->
	 <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
	 
   </ul>
 </div>
</nav>

<!-- Estructura submenu del Menu del Nav -->
<ul id="dropdown1" class="dropdown-content">
 <li><a href="#!">Uno</a></li>
 <li><a href="#!">Dos</a></li>
 <li class="divider"></li>
 <li><a href="#!">prueba</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
 <li><a href="#!">Uno............</a></li>
 <li><a href="#!">Dos.........</a></li>
 <li class="divider"></li>
 <li><a href="#!">prueba........</a></li>
</ul>


<!-- Estructura Menu para Moviles con SiteNav -->
<ul id="slide-out" class="sidenav">
 <li><a href="sass.html">Sass</a></li>
 <li><a href="badges.html">Components</a></li>
 <li><a href="collapsible.html">Javascript</a></li>
 <li><a href="mobile.html">Mobile</a></li>
 <!-- Estructura de Trigger dropdown -->
 <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
 <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
	 
</ul>

*/