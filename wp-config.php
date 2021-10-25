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
define('DB_NAME', 'hectoriglesias');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'mypro8436');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'AEXtzMHC');

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
define('AUTH_KEY', '2$pP}FS#@YUK1^dU#$l3dw$0}hd;#8i8|Edp%VwuGOgXBkPN_1&}YbTI2u!vBZWv');
define('SECURE_AUTH_KEY', '_{tTv*r;Ex*Qkg|^ofC  Mb~`}P6p mK}ik568*Sj:m?}X{k@ca1E?jB{?,^}H$_');
define('LOGGED_IN_KEY', '_k>v?>F`<?3J&W)icgxUG?wX|<Sh4>GcN<=`o)8M%?&Lgw)2hms:`D[pyAhK7~8f');
define('NONCE_KEY', 'BF=wGeYz]|Jm6><)niOI!nB?;VBZ:e$VV$mU_M`*IKyRg+%c}[ys^M@qsJs[Nqiu');
define('AUTH_SALT', '|h ?z]FY&@ S-=ht-2OOcS)MW7J+THrHP^Wt-7Pbo_rGdNhu7cObF=>_&F#B (2`');
define('SECURE_AUTH_SALT', 'Q!#CUd3b#QxVeY!C9fs*5Ps[A{[t[Co`/H%&RI_?3@i{ADOU_#Q3 g(b~pFP@F@z');
define('LOGGED_IN_SALT', 'cvO</7SMpMxEj4b+iFgxi`c0#yHUjteW]C]By23rm8.~Q<p;-9C<e2gD3OMM-Hv~');
define('NONCE_SALT', '_ioLle`xNm=!dwGVyZ%aX5%!pV.;qu,X/s1i<1Y{>F;WjAd&(t)>E<O-mckua3;q');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'BD_';


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

