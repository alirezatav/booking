<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'myDatabase');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Veo: e9E=_s*>Br&.xbqTA%>&(eWl!4W;2dhlRtew?6tv<>z8P(xyMEhR (D6gfS');
define('SECURE_AUTH_KEY',  'dU_RJwR }zwi^}X?Hd%zPg<4z5GNDm`-B.P]R3B]33$X8KCsZ:S27t/B{ ?96N1e');
define('LOGGED_IN_KEY',    'HHTJ76uPfH__LD?1OwV*[Y/m3xo.|u^W#,U%6m+!.[XN9r;*h2r}R$@F_b*n9 BA');
define('NONCE_KEY',        'O-s~pg<pvK?&9#XFcfbdbHf=+U`:bE2IA<QErU)|g~{*=/g#sR:3hiOqco#~ufeI');
define('AUTH_SALT',        'l55,fci<Z/4>RI-H4p$Ks|}?- +3eQOQCUv8CFNIc])`:nCR~pQ2c;;-SAI!pvP`');
define('SECURE_AUTH_SALT', 'VFk}+{u2w,-p|x3GT|1HE~4GW0i2^(r-35H%@9_t&Et!+ %/oF6RZe)M]=9`usev');
define('LOGGED_IN_SALT',   'd. q8l&34Um)GcWs)29]yxG=GbRt&$t/YSp>y?DvAn^^R7Ht)HXV5tyMMo]a0XWD');
define('NONCE_SALT',       '_AcRdJrTFQsHDNt24Yzr-[bK/Bvf`RwmxN]b(<J@kpMQrR9|a5Z>DTVS[!==1$vD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
