<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'pizzeria');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'rafita91&yvx');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'DqlA#.#hKlQH%`FseR]fP6PFJsAr2hyRhAPB]$Bv+Q[M2.R%)i0yRO<f)}HiQM<3');
define('SECURE_AUTH_KEY', '!0MoZ[R/:}_sz9J1GMY%^TS?~lS5l:*0l;;w/2)ORGfr&h~okSnRN}s}$up{/#T9');
define('LOGGED_IN_KEY', 'Lh0Wz2-TA[F7<vfI_pDa::>00=q9z/to[&[Z]#Ve$ocbU+v7G{4Dw.6Q] bH!aPI');
define('NONCE_KEY', 'c*7/aP_n+irslJhZ7n>o zt&>*mlv]|;=N>IW,$kO i.3[HG.yG@TZa`q?.FK-N-');
define('AUTH_SALT', 'O7WfvSM2!aNT<oXnI5e}$l1Fk1e!2eF&/260A|W*oiKzEwO$Vz)l2o;Cr4X+pqT9');
define('SECURE_AUTH_SALT', 'rpz|eU^< gzi+I&%y|VMa@e5cws$Wm+P}jM)n/S&;Y}XUF9ikl@M82DoLw7V*PRt');
define('LOGGED_IN_SALT', '=hUDmng~?:,YG,L8T`n&vb2caTaVjsA6u)HwSOY;9u:06oHgj]RgBZh/*$0 Ev04');
define('NONCE_SALT', '157IPq%wF860z#u6e(rrLky;jqF^OW!,,H$%r<I1KXb0gE#RGI=t|IPf?aKP%:<d');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

