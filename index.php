<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aulageektheme
 */


 /* 
Las funciones principales para añadir CSS al sistema de dependencias de 
WordPress son wp_register_style() y wp_enqueue_style(). La primera 
registra el archivo de la hoja de estilos, la segunda lo pone en cola para ser añadido.

***********************************************************************************

Añadir JavaScript en un theme de WordPress es prácticamente igual que añadir CSS. 
Se utilizan funciones análogas, wp_register_script() y wp_enqueue_script(), y se 
utilizan en los mismos actions.
<head>
    <meta charset=%s>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href=%s/css/materialize.css  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href=%s  media="screen,projection"/>
    <title>%s</title>
    
</head>
*/
?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>
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
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>


  <!-- Estructura Menu para Moviles con SiteNav -->
  <ul id="slide-out" class="sidenav">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
    <!-- Estructura de Trigger dropdown -->
    <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
        
  </ul>
<!-- Estructura submenu Sitenav -->
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>

<!-- Slide -->

<div class="slider">
    <ul class="slides">
      <li>
        <img class="materialboxed" src="<?php echo get_template_directory_uri() . '/img/250.jpeg'; ?>"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>


<!-- Tarjeta -->

  <div class="row">
    <div class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri() . '/img/250.jpeg'; ?>">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri() . '/img/250.jpeg'; ?>">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri() . '/img/250.jpeg'; ?>">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri() . '/img/250.jpeg'; ?>">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>


<div class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri() . '/img/250.jpeg'; ?>">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri() . '/img/250.jpeg'; ?>">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri() . '/img/250.jpeg'; ?>">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri() . '/img/250.jpeg'; ?>">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

  </div>

  






<div>
  

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque dui quam, vel convallis ligula imperdiet et. Suspendisse ultrices iaculis posuere. Quisque gravida porta maximus. Vestibulum vel diam vitae arcu scelerisque fringilla. Aliquam scelerisque consectetur malesuada. Quisque posuere risus sed nibh imperdiet lacinia. Nam nunc lorem, hendrerit non metus et, hendrerit accumsan nibh. Phasellus feugiat turpis quis felis condimentum facilisis. Suspendisse facilisis justo vitae elit dictum porta pretium ut nisl. Sed viverra eros volutpat, tincidunt neque a, ultricies lorem. Aliquam arcu nisi, rutrum in faucibus at, euismod a eros. Nunc viverra consequat dictum. Vivamus eget nulla malesuada, interdum ipsum vel, pretium risus. Aliquam sit amet ex mi. Pellentesque scelerisque aliquet scelerisque.

Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam ultricies lectus elit, eget tincidunt nisl ornare aliquet. Vivamus vitae nisi imperdiet, euismod arcu non, ultricies ligula. Ut nec ligula ac ipsum feugiat vestibulum in et justo. Etiam non sodales libero. Sed consectetur sed nibh non varius. Cras sodales, nulla a ullamcorper porta, est ipsum pellentesque massa, at vestibulum metus nisl eu ante. Morbi sed mauris sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam elementum urna eget diam molestie tempor.

Sed in mollis nisl, vel convallis nulla. Suspendisse efficitur neque vel risus dignissim, pretium laoreet ante maximus. Nullam vulputate ipsum ex, eu faucibus ante placerat non. Sed vitae iaculis odio. Nunc at sapien et diam vehicula vulputate vel ac nibh. Quisque id ligula massa. Nunc at nibh in libero tincidunt tempor. Nunc risus justo, eleifend eget nisi in, pretium dignissim tellus.

Curabitur egestas dolor nec metus viverra, vitae aliquet neque pharetra. Etiam vulputate urna nec nunc hendrerit, sed convallis risus viverra. Nullam sed felis ex. Nulla eu suscipit mauris. Phasellus sapien ex, vulputate ac est quis, maximus tincidunt justo. Mauris mattis maximus sollicitudin. Nam bibendum est ex, ac lobortis sapien luctus sit amet. Mauris tincidunt vestibulum lacus, eget viverra justo luctus vulputate. In ac turpis rhoncus, ullamcorper eros sed, elementum nisi. Quisque ornare hendrerit vehicula. Cras condimentum, ligula quis iaculis luctus, risus lectus porttitor dui, id rhoncus velit purus quis est. Duis a scelerisque orci. Nam ac eleifend enim, in imperdiet ex. Aenean vel elementum elit. Ut ac ipsum et odio dictum luctus sed et elit. Donec condimentum eleifend metus, nec facilisis sem aliquet vel.

Ut auctor ante nec dolor pulvinar, a viverra massa viverra. Mauris tempor dolor augue, pretium euismod elit luctus vitae. Duis non diam vitae odio sodales sagittis. Fusce ut condimentum velit. Duis eu nibh turpis. Fusce vitae leo magna. Maecenas consectetur tortor mauris, eu consectetur mi semper non. Quisque pretium est orci, et convallis lectus posuere quis. Pellentesque rutrum vulputate rhoncus. Morbi feugiat malesuada vulputate. Aliquam erat volutpat. Vivamus vulputate, odio vel iaculis laoreet, nunc velit sagittis nulla, et consequat nisi sem et turpis. Etiam a orci sed lacus consequat iaculis feugiat sed urna. Duis et eros a nulla lacinia consectetur sit amet non tortor. 



Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque dui quam, vel convallis ligula imperdiet et. Suspendisse ultrices iaculis posuere. Quisque gravida porta maximus. Vestibulum vel diam vitae arcu scelerisque fringilla. Aliquam scelerisque consectetur malesuada. Quisque posuere risus sed nibh imperdiet lacinia. Nam nunc lorem, hendrerit non metus et, hendrerit accumsan nibh. Phasellus feugiat turpis quis felis condimentum facilisis. Suspendisse facilisis justo vitae elit dictum porta pretium ut nisl. Sed viverra eros volutpat, tincidunt neque a, ultricies lorem. Aliquam arcu nisi, rutrum in faucibus at, euismod a eros. Nunc viverra consequat dictum. Vivamus eget nulla malesuada, interdum ipsum vel, pretium risus. Aliquam sit amet ex mi. Pellentesque scelerisque aliquet scelerisque.

Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam ultricies lectus elit, eget tincidunt nisl ornare aliquet. Vivamus vitae nisi imperdiet, euismod arcu non, ultricies ligula. Ut nec ligula ac ipsum feugiat vestibulum in et justo. Etiam non sodales libero. Sed consectetur sed nibh non varius. Cras sodales, nulla a ullamcorper porta, est ipsum pellentesque massa, at vestibulum metus nisl eu ante. Morbi sed mauris sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam elementum urna eget diam molestie tempor.

Sed in mollis nisl, vel convallis nulla. Suspendisse efficitur neque vel risus dignissim, pretium laoreet ante maximus. Nullam vulputate ipsum ex, eu faucibus ante placerat non. Sed vitae iaculis odio. Nunc at sapien et diam vehicula vulputate vel ac nibh. Quisque id ligula massa. Nunc at nibh in libero tincidunt tempor. Nunc risus justo, eleifend eget nisi in, pretium dignissim tellus.

Curabitur egestas dolor nec metus viverra, vitae aliquet neque pharetra. Etiam vulputate urna nec nunc hendrerit, sed convallis risus viverra. Nullam sed felis ex. Nulla eu suscipit mauris. Phasellus sapien ex, vulputate ac est quis, maximus tincidunt justo. Mauris mattis maximus sollicitudin. Nam bibendum est ex, ac lobortis sapien luctus sit amet. Mauris tincidunt vestibulum lacus, eget viverra justo luctus vulputate. In ac turpis rhoncus, ullamcorper eros sed, elementum nisi. Quisque ornare hendrerit vehicula. Cras condimentum, ligula quis iaculis luctus, risus lectus porttitor dui, id rhoncus velit purus quis est. Duis a scelerisque orci. Nam ac eleifend enim, in imperdiet ex. Aenean vel elementum elit. Ut ac ipsum et odio dictum luctus sed et elit. Donec condimentum eleifend metus, nec facilisis sem aliquet vel.

Ut auctor ante nec dolor pulvinar, a viverra massa viverra. Mauris tempor dolor augue, pretium euismod elit luctus vitae. Duis non diam vitae odio sodales sagittis. Fusce ut condimentum velit. Duis eu nibh turpis. Fusce vitae leo magna. Maecenas consectetur tortor mauris, eu consectetur mi semper non. Quisque pretium est orci, et convallis lectus posuere quis. Pellentesque rutrum vulputate rhoncus. Morbi feugiat malesuada vulputate. Aliquam erat volutpat. Vivamus vulputate, odio vel iaculis laoreet, nunc velit sagittis nulla, et consequat nisi sem et turpis. Etiam a orci sed lacus consequat iaculis feugiat sed urna. Duis et eros a nulla lacinia consectetur sit amet non tortor.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque dui quam, vel convallis ligula imperdiet et. Suspendisse ultrices iaculis posuere. Quisque gravida porta maximus. Vestibulum vel diam vitae arcu scelerisque fringilla. Aliquam scelerisque consectetur malesuada. Quisque posuere risus sed nibh imperdiet lacinia. Nam nunc lorem, hendrerit non metus et, hendrerit accumsan nibh. Phasellus feugiat turpis quis felis condimentum facilisis. Suspendisse facilisis justo vitae elit dictum porta pretium ut nisl. Sed viverra eros volutpat, tincidunt neque a, ultricies lorem. Aliquam arcu nisi, rutrum in faucibus at, euismod a eros. Nunc viverra consequat dictum. Vivamus eget nulla malesuada, interdum ipsum vel, pretium risus. Aliquam sit amet ex mi. Pellentesque scelerisque aliquet scelerisque.

Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam ultricies lectus elit, eget tincidunt nisl ornare aliquet. Vivamus vitae nisi imperdiet, euismod arcu non, ultricies ligula. Ut nec ligula ac ipsum feugiat vestibulum in et justo. Etiam non sodales libero. Sed consectetur sed nibh non varius. Cras sodales, nulla a ullamcorper porta, est ipsum pellentesque massa, at vestibulum metus nisl eu ante. Morbi sed mauris sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam elementum urna eget diam molestie tempor.

Sed in mollis nisl, vel convallis nulla. Suspendisse efficitur neque vel risus dignissim, pretium laoreet ante maximus. Nullam vulputate ipsum ex, eu faucibus ante placerat non. Sed vitae iaculis odio. Nunc at sapien et diam vehicula vulputate vel ac nibh. Quisque id ligula massa. Nunc at nibh in libero tincidunt tempor. Nunc risus justo, eleifend eget nisi in, pretium dignissim tellus.

Curabitur egestas dolor nec metus viverra, vitae aliquet neque pharetra. Etiam vulputate urna nec nunc hendrerit, sed convallis risus viverra. Nullam sed felis ex. Nulla eu suscipit mauris. Phasellus sapien ex, vulputate ac est quis, maximus tincidunt justo. Mauris mattis maximus sollicitudin. Nam bibendum est ex, ac lobortis sapien luctus sit amet. Mauris tincidunt vestibulum lacus, eget viverra justo luctus vulputate. In ac turpis rhoncus, ullamcorper eros sed, elementum nisi. Quisque ornare hendrerit vehicula. Cras condimentum, ligula quis iaculis luctus, risus lectus porttitor dui, id rhoncus velit purus quis est. Duis a scelerisque orci. Nam ac eleifend enim, in imperdiet ex. Aenean vel elementum elit. Ut ac ipsum et odio dictum luctus sed et elit. Donec condimentum eleifend metus, nec facilisis sem aliquet vel.

Ut auctor ante nec dolor pulvinar, a viverra massa viverra. Mauris tempor dolor augue, pretium euismod elit luctus vitae. Duis non diam vitae odio sodales sagittis. Fusce ut condimentum velit. Duis eu nibh turpis. Fusce vitae leo magna. Maecenas consectetur tortor mauris, eu consectetur mi semper non. Quisque pretium est orci, et convallis lectus posuere quis. Pellentesque rutrum vulputate rhoncus. Morbi feugiat malesuada vulputate. Aliquam erat volutpat. Vivamus vulputate, odio vel iaculis laoreet, nunc velit sagittis nulla, et consequat nisi sem et turpis. Etiam a orci sed lacus consequat iaculis feugiat sed urna. Duis et eros a nulla lacinia consectetur sit amet non tortor. 

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque dui quam, vel convallis ligula imperdiet et. Suspendisse ultrices iaculis posuere. Quisque gravida porta maximus. Vestibulum vel diam vitae arcu scelerisque fringilla. Aliquam scelerisque consectetur malesuada. Quisque posuere risus sed nibh imperdiet lacinia. Nam nunc lorem, hendrerit non metus et, hendrerit accumsan nibh. Phasellus feugiat turpis quis felis condimentum facilisis. Suspendisse facilisis justo vitae elit dictum porta pretium ut nisl. Sed viverra eros volutpat, tincidunt neque a, ultricies lorem. Aliquam arcu nisi, rutrum in faucibus at, euismod a eros. Nunc viverra consequat dictum. Vivamus eget nulla malesuada, interdum ipsum vel, pretium risus. Aliquam sit amet ex mi. Pellentesque scelerisque aliquet scelerisque.

Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam ultricies lectus elit, eget tincidunt nisl ornare aliquet. Vivamus vitae nisi imperdiet, euismod arcu non, ultricies ligula. Ut nec ligula ac ipsum feugiat vestibulum in et justo. Etiam non sodales libero. Sed consectetur sed nibh non varius. Cras sodales, nulla a ullamcorper porta, est ipsum pellentesque massa, at vestibulum metus nisl eu ante. Morbi sed mauris sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam elementum urna eget diam molestie tempor.

Sed in mollis nisl, vel convallis nulla. Suspendisse efficitur neque vel risus dignissim, pretium laoreet ante maximus. Nullam vulputate ipsum ex, eu faucibus ante placerat non. Sed vitae iaculis odio. Nunc at sapien et diam vehicula vulputate vel ac nibh. Quisque id ligula massa. Nunc at nibh in libero tincidunt tempor. Nunc risus justo, eleifend eget nisi in, pretium dignissim tellus.

Curabitur egestas dolor nec metus viverra, vitae aliquet neque pharetra. Etiam vulputate urna nec nunc hendrerit, sed convallis risus viverra. Nullam sed felis ex. Nulla eu suscipit mauris. Phasellus sapien ex, vulputate ac est quis, maximus tincidunt justo. Mauris mattis maximus sollicitudin. Nam bibendum est ex, ac lobortis sapien luctus sit amet. Mauris tincidunt vestibulum lacus, eget viverra justo luctus vulputate. In ac turpis rhoncus, ullamcorper eros sed, elementum nisi. Quisque ornare hendrerit vehicula. Cras condimentum, ligula quis iaculis luctus, risus lectus porttitor dui, id rhoncus velit purus quis est. Duis a scelerisque orci. Nam ac eleifend enim, in imperdiet ex. Aenean vel elementum elit. Ut ac ipsum et odio dictum luctus sed et elit. Donec condimentum eleifend metus, nec facilisis sem aliquet vel.

Ut auctor ante nec dolor pulvinar, a viverra massa viverra. Mauris tempor dolor augue, pretium euismod elit luctus vitae. Duis non diam vitae odio sodales sagittis. Fusce ut condimentum velit. Duis eu nibh turpis. Fusce vitae leo magna. Maecenas consectetur tortor mauris, eu consectetur mi semper non. Quisque pretium est orci, et convallis lectus posuere quis. Pellentesque rutrum vulputate rhoncus. Morbi feugiat malesuada vulputate. Aliquam erat volutpat. Vivamus vulputate, odio vel iaculis laoreet, nunc velit sagittis nulla, et consequat nisi sem et turpis. Etiam a orci sed lacus consequat iaculis feugiat sed urna. Duis et eros a nulla lacinia consectetur sit amet non tortor.  
  </div> 



<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<?php wp_footer(); ?>

  </body>
</html> 
