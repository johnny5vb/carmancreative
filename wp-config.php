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
if(file_exists($localConfig)) {
 require_once($localConfig);
 } else {
 	/* 
 	Default settings. 
 	To override these with your local DB settings, create a file in ./config/ named after your hostname ([HOSTNAME].inc) and include the following four definitions.
 */
define('DB_NAME', 'carmancreative_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');
 }
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


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
define('AUTH_KEY',         '+t7&ZpM:ZZl@t5wBj@I8A0G:{kj;9=dy;)*-2yChGLd-/uvrlvs3*llH3lWGzSj4');
define('SECURE_AUTH_KEY',  'z_|)k p=-thz=wI;#_D9x?I#0hyg>S%W&sN|cq1bE=0WFtA|pY~L*^q!NVo4OnSB');
define('LOGGED_IN_KEY',    'S.(w_o{V-`rg%C|v};l/kTKg@CCARFca>*+/r~uXsFSd~%0tguBt(iqf:>8IW7bx');
define('NONCE_KEY',        'oW1M|>tmXSrgK7-$EBl+F M?d0&vAH.i{c=/dCS~gJ=R.o@qvvBd[y7aw:JWK-o<');
define('AUTH_SALT',        'r~BJ/Hxc5j%zLwKerHcd$)QtJxGPcW<r`z:Eft>Qlps{d/sBk3a_3]K 22-.}L#x');
define('SECURE_AUTH_SALT', 'Rs0]$sHUR6J$O!4e4Y@#T3f77As`WT=eK+?*}Jx.Y/N5;k-C45TDxK3^@vAvDnS$');
define('LOGGED_IN_SALT',   'k~^`Bwq0C5BQXo3-4oof)oC`6pRdDa-3n_-,p8&Q)qnzi+jCDeFktB|&{Gz?]6cO');
define('NONCE_SALT',       '5o;!Tp/-&_L%s?X62,r+/iU|kd5TWM];Ei;fiqb*t~#z-an?+DFy}C)o]?ZuHm#g');

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
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

