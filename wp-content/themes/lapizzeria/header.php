<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class() ?> >
    <header class="encabezado-sitio">
      <div class="contenedor">
        <div class="logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logotipo">
          </a>
        </div><!--logo-->
        <div class="informacion-encabezado">
          <div class="redes-sociales">
          <?php 
          $args = array(
            'theme_location' => 'social-menu',
            'container' => 'nav',
            'container_class' => 'sociales',
            'container_id' => 'sociales',
            'link_before' => '<span class="sr-text">',
            'link_after' => '</span>',
          );

          wp_nav_menu( $args );
          ?>
          </div><!--menú de redes sociales-->
          <div class="direccion">
            <p><?php echo esc_html( get_option('lapizzeria_direccion') ); ?></p>
            <p>Teléfono: <?php echo esc_html( get_option('lapizzeria_telefono') ); ?> </p>
          </div><!--dirección-->
        </div><!--Información encabezado-->
      </div><!--contenedor-->
    </header>
    
    <div class="menu-principal">
      <div class="mobile-menu">
        <a  href="#" class="mobile"><i class="fa fa-bars" aria-hidden="true"></i></a>
      </div>

      <div class="contenedor navegacion">
        <?php
        $args = array(
          'theme-location' => 'header-menu',
          'container' => 'nav',
          'container_class' => 'menu-sitio'
        );
        
        wp_nav_menu( $args );
        ?>
      </div>
    </div>