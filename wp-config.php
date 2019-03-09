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
define( 'DB_NAME', 'instalacionesgabriel' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'H_aa4~JZQ4(aJmrC4qO.u3N(KZ_?)-QLoET?%93kT_jVKv5L]_-s1cj2iA67XG&6' );
define( 'SECURE_AUTH_KEY', '1QqIY$:)GdhUDb*NF^:p&I!8CftG-v$KdG`MB4z4r]sCn/!;4M0w8{9/!XD2x7-V' );
define( 'LOGGED_IN_KEY', 'u&4_,-EP,qX]5aslWx8O^%(Y)G$A-;WD=&rt7k4gOioc jW lY2mNCIIw?XrnNiD' );
define( 'NONCE_KEY', '~9[54i*^!VlpOK0Cy$ [-Le3`ga WbGQHh6/rN)lLz0uaOho0rx7.`t{w;EOYxgU' );
define( 'AUTH_SALT', ')Yv9?1L~b8jIFBB4%Tn.RRYgcS] d3FpM+Sy:vj?o51{Ea6Hg_,?0C}` S^:0x,z' );
define( 'SECURE_AUTH_SALT', '62JB+lc#i=81b{arVh~4Y7TJ}?__-U5X(uRK`3T6d{XJfpS]~ny:sw,]{GG#[B<$' );
define( 'LOGGED_IN_SALT', 'F0i<tAxh/X@5hK-7u2okjY4j={5(}~:JU0+1/w=RQ!C ]b8} M3V_:Jm8fe#?n^2' );
define( 'NONCE_SALT', '&;)AkCuCv:Vdou6l;jRXr&TzRA-v@^WLb)&0&j grM.ZNODYRRv%eg+2}Dwt-7qC' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

