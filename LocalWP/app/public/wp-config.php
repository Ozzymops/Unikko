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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '%JcevIZhc.?`o~+?yC~co:98z4(I6SJQF/fR;r1h4F,G$(}fsS!tyR?Fs]1*[if8' );
define( 'SECURE_AUTH_KEY',   '?<O1}4F^6ZSAaL_W<!sQ=N(f weV ? <W}eH-qwtKu[8xt]5)H?gKkNY#e:?xoJ4' );
define( 'LOGGED_IN_KEY',     'Tah1X/<r 84JQx[4*)V@HO={}^L:J=pg!n`-6zFrd+lQJ{HD9IgyEWAG/K$N+Zl5' );
define( 'NONCE_KEY',         'ejWQ,g*-$THderk#pT4D{X~>f}0ry+(F#Rh}5:)`Ij6f{IQzk}m]hcHg;[`j^7OA' );
define( 'AUTH_SALT',         'Q,UZG0QFV`33kb.>n*sFygB:{#FSc*~NTK.D+zvZ$JiJ8!k4r3GW1I*<k3j}:[@y' );
define( 'SECURE_AUTH_SALT',  '&xAs_^Ax[pA(?2@7!)wzX+]w{x<o-@2FLRs8-*HuQt_(5-c3EOScdEFj@M)2LMDk' );
define( 'LOGGED_IN_SALT',    'wgubn#O_oN!bSVJxLS*xO*^4,$7xSOK<x4[YT>(YwMeTp=7K>Ni1J|F:/.$acgtq' );
define( 'NONCE_SALT',        '4Pc:1L6`ZqQHPQ<FW>2.P@3vK}(gl$hh9cEv*UO47r$9zh;yS/;THD1>]%zy$3~M' );
define( 'WP_CACHE_KEY_SALT', 'X2?n% [UeX~e)B>~={Wnu 3gv;bP;&c^KjXwq^00pQ<0qGxq1}Zmwx/?;jgQWOk ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
