<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZU=^e;1#7;tH`z@BF^[?(,3!=[U^];qIdB 3+A`ueW@.HEmv.~)/?-XSV``3%!nl' );
define( 'SECURE_AUTH_KEY',  ';]-I-mQ3:YY-AbS..?O25D RA?mX9=Vo]Rcz_N?]YCjE:yun:c#jIhbW&[{Sa{7?' );
define( 'LOGGED_IN_KEY',    '8x4vzHuD-rSa1S56NPhT-B1[^]OC6:N|Mi*y5y$@t8caI&_+d3z</wtQW(E7c2PQ' );
define( 'NONCE_KEY',        '/CS4P!g>ImxRH=lVu#pc0pE0MNap-+;2Q^5GS]R[AWD&x4eAY,l3<}P$XNExc*B?' );
define( 'AUTH_SALT',        '%DAda *L>1}Pxfz7=PYhM2.b4D[+w_+CoTQMCs#ema.H*m<hA=X^h-<>{J>d))h/' );
define( 'SECURE_AUTH_SALT', ']s/VZVxPucBUTFI$mD@:s ]88}^2Y/PlJXu7:94rpt&IWWQF}ROmylX)F4l,f(4z' );
define( 'LOGGED_IN_SALT',   '^780>+-#|^m%z^eHPOMDE.N)OG9p^!SYbI7Fod?$~ ,9`@TcC:CXQ2[]$cnEh11^' );
define( 'NONCE_SALT',       '~Vj3XO54Q>D6xRC.iWD#(bN,W2R5GiwyTrM(xYXndA-A<jzs 70&n:UtTlOIc.*_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
