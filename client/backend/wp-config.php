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
define( 'DB_NAME', 'art_kdr' );

/** MySQL database username */
define( 'DB_USER', 'bdr_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'koentjeDeRoeckKunst' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '73F9$`URkEk8Mi0bvw4+k0/wlLRN!,z+-^iNdO+:#&B~X=/eAlo|PEcm!Y/H>%dE' );
define( 'SECURE_AUTH_KEY',  '>7TRDEbH%-1:d Aj<UhGq%@%ozUL*8z]H,:Mr#-:2vq>_Z,TrFCdy}es#FLB|35/' );
define( 'LOGGED_IN_KEY',    '.M>]B)**]HC)ZTDusj-If|-?h_vu3rhW(P^/bm]7n?9m[7$t205Uf*Ma?O0H<bhH' );
define( 'NONCE_KEY',        'C)4vmr_U,[Twn%BFCdW#Co$*s#G7]RhKHBWO!95|h%(7I=7$C$~<:oc|jPZB`y`@' );
define( 'AUTH_SALT',        'v*GWiOY-Pp,&`G)A>SM=y0w[C&BEozdY>:1-CuY/^qc;<3wn*G<5[P8h]68:L^g~' );
define( 'SECURE_AUTH_SALT', 'vlAv>9XTc|o4TrSD4Fr]}=`7*kwqbzN(jk3Pr]xQ]`:JUmZh7IMXBsEst?g0%f^,' );
define( 'LOGGED_IN_SALT',   '`ry%kUBhc]1<w)kP0!7/XwS$@]f5,w{RHAU ,N!S%1;bsK?`w`9MUfIX%Dxt!@Gm' );
define( 'NONCE_SALT',       '%{4K1X EjU[~2{!AAN$VO/>NqhQ-pAu!%QkFAKf[k#h1Vm(T^.B{-]#w,()a!.@Y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
