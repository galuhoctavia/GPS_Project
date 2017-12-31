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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'D:\XAMPP\htdocs\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'ganesha2_gps');

define('PLL_CACHE_LANGUAGES', false);

/** MySQL database username */
define('DB_USER', 'ganesha2_gpAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'gpSejahtera2017');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


// define( 'WPCACHEHOME', 'D:\XAMPP\htdocs\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
// define('DB_NAME', 'anotherone1');

// define('PLL_CACHE_LANGUAGES', false);

// /** MySQL database username */
// define('DB_USER', 'root');

// * MySQL database password 
// define('DB_PASSWORD', '');

// /** MySQL hostname */
// define('DB_HOST', 'localhost');

// /** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8mb4');

// /** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S=/ZcBZ`F@/3;E*7BZ9TEL&ZBe{o9`+70%<{)*WJHAj:xkw;]GF[^bm0E*poowu6');
define('SECURE_AUTH_KEY',  'K?yvRS:*R8~aMDZRe(5s}TTt4Pd,6Ftb5z>kzZN&`~?A@#T=kt|/#{c>{v);f,2y');
define('LOGGED_IN_KEY',    '5%?U`55ZAu1_>>OpQf)~*xA,|FaNwSKX#zS3N(&HZI% wbsqy~a`8b)0u1bX||i2');
define('NONCE_KEY',        '-*Gh1MLjQeJP/v/l^qs)2*b%oQPS.seg`0anX.6s-Bn[qW_$3(kIDn,6@c!GMgV}');
define('AUTH_SALT',        '7x6lhV:^/^#_bucpm&_-:VZ>p4BFDh.0T!^Jm#nf+Kcx}70tYKA#vu?:8-4Nsin#');
define('SECURE_AUTH_SALT', '[b_hJUMv}CMGcO!D@yP1E^o^3{q<ZT8OImC9q%0AyGLGi[G6D5]}}nKy$W/d A[<');
define('LOGGED_IN_SALT',   'j~PSX`sJ#U0>Qz0]<>z};@8jP*adb7e,^G-3>d6rD4GU8K?-1LfH}C)4WzUHqEVw');
define('NONCE_SALT',       'Fs4s?7hY3ZV[#_&0:T0vjG(S8W<xLt@pn3zb~dyZAMB[ V/*ecPqL:FJ0#^ K%wy');

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

