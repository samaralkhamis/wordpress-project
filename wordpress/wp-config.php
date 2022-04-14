<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         'D^_Yg3L=Aja1G0=3/hP8bEDaI&yER06o)*5#&Wu+pYRXWF~/j(4;-CSwX^}`1`4:' );
define( 'SECURE_AUTH_KEY',  'Os1NPIa@%w,y}LX]V93?@AB@3nvNF|;SmM)l=~xrG.6EoO8V345^9V]UOzJ%y?2d' );
define( 'LOGGED_IN_KEY',    'oTQDIE0ir:>^@x-%=Ue,9D;s0F[13 XCp.C,<jE+y:GxSj/!S{iqw;piFD^uJU#s' );
define( 'NONCE_KEY',        'TlqdJjXO*e+WP ZP+1w_,I{,DI,U[K&dKI_XwV[,TFR0+Mew1CZLhX)lW{gpgS*A' );
define( 'AUTH_SALT',        'm[V;^f-5VnJ] *X0eirtE=BB1{d_L+l(0_QL#P2tj9DI{n6T0(URY@;aj)5f?~zF' );
define( 'SECURE_AUTH_SALT', 'eDVtHGi,Bb!S@M>o38$c5L]wJ!-^]1<LP;9z0<9TgM%aZ)INzpi5#pC#EwRhnOC1' );
define( 'LOGGED_IN_SALT',   '(*A#n!<k{[f`sY<X]+bPd<W$`*z`/tk?Ge1wbA@`eHaj?X.u28^|/`(A9#!tW_,x' );
define( 'NONCE_SALT',       '[&OT 5d{|iSYj7#w|L$4N&)b,usLi0c`{NP]RLO]$$ GbX9O~30hz9hR!]]~|/B,' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
