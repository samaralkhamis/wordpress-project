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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'qq6`ghXUA08;xxnXf<dL=0N!cj4w<v3Ed:na qo:{o Hdh2jcZyUg$ceH&H>m-_.' );
define( 'SECURE_AUTH_KEY',  '{Z}(:8,(xr`]4Ad`Z-tftV~36p(6Y K/C%,2UqJrJ)SDv&wg<.qIe(.#,N9sNP=`' );
define( 'LOGGED_IN_KEY',    '15B`9Q5J6).0JrEcqNd0j/7Kt }Zx<?LMyW%f|![<+R $ps6xUUfA=]~^yN;LMVX' );
define( 'NONCE_KEY',        'Y1rO:nSwSc~l:-AOt_OU-H77rK~cVA0D!DPWm?7RB:sJaS%MT;pg+,zDF_.#LN/e' );
define( 'AUTH_SALT',        '5S}axar7*G)m=L5pgFG`uswi5X=7H{yXS4Wsm=`(w!a%4syB`N[+Z,~a.;<-WWO;' );
define( 'SECURE_AUTH_SALT', 'uK;mE7MfHm,g}YUyu=oH?m*Dl%N(vN$[Nt(a4YyH0fXxwx7yRjgtMJ2e;~i^578*' );
define( 'LOGGED_IN_SALT',   '3) SaPF[Ct5h Ekk<LH3,n-+4o=]ydkL}hu)fm3-yBx#pxOwYN1<ZI?nhEQbAzri' );
define( 'NONCE_SALT',       '?O1We|OOat_%nt;tl}#kZ74hF{R@zcWf=[@9M.MC!@!n}qh.^/1;|lv.c61MJC)!' );

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
